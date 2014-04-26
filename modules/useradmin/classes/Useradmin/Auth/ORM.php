<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * ORM Auth driver extended for Useradmin module support.
 *
 * @package    Useradmin/Auth
 * @author     Gabriel R. Giannattasio
 */
class Useradmin_Auth_ORM extends Kohana_Auth_ORM implements Useradmin_Driver_iAuth {

	/**
	 * Extends the Kohana Auth ORM driver to give useradmin module extras
	 * @see Kohana_Auth_ORM::_login()
	 */
	protected function _login($user, $password, $remember) 
	{
		if ( ! is_object($user))
		{
			$username = $user;

			// Load the user
			$user = ORM::factory('User');
			$user->where($user->unique_key($username), '=', $username)->find();
		}
		
		// if there are too many recent failed logins, fail now
		if (($this->_config["useradmin"]["max_failed_logins"] > 0) && ($user->failed_login_count >= $this->_config["useradmin"]["max_failed_logins"] ) && (strtotime($user->last_failed_login) > strtotime("-".$this->_config["useradmin"]["login_jail_time"] ) )) 
		{
			// do nothing, and fail (too many failed logins within {login_jail_time} minutes).
			return FALSE;
		}
		// Loads default driver before extend the results
		$status = parent::_login($user, $password, $remember);

		if($status) 
		{
			// Successful login
			// Reset the login failed count
			$user->failed_login_count = 0;
			$user->save();
		} 
		else 
		{
			// Failed login
			$user->failed_login_count = $user->failed_login_count+1;
			$user->last_failed_login = date("Y-m-d H:i:s");
			// Verify if the user id if valid before save it
			if(is_numeric( $user->id ) && $user->id != 0)
			{
				$user->save();
			}
		}
		
		return $status;
	}
	
	/**
	 * Register a single user
	 * Method to register new user by Useradmin Auth module, when you set the
	 * fields, be sure they must respect the driver rules
	 * 
	 * @param array $fields An array witch contains the fields to be populate
	 * @returnboolean Operation final status
	 * @see Useradmin_Driver_iAuth::register()
	 */
	public function register($fields) 
	{
		if( ! is_object($fields) ) 
		{
			// Load the user
			$user = ORM::factory('User');
		} 
		else 
		{
			// Check for instanced model
			if( $fields instanceof Model_User ) 
			{
				$user = $fields;
			} 
			else 
			{ 
				throw new Kohana_Exception('Invalid user fields.');
			}
		}
		try 
		{
			$user->create_user($fields, array(
				'username',
				'password',
				'email',
			));
            $user_id=$user->get("id");
            DB::insert("profiles",
                array(
                    "user_id",
                    "first_name_1",
                    "last_name_1",
                    "title_1",
                    "email_1",
                    "phone_1",
                    "first_name_2",
                    "last_name_2",
                    "title_2",
                    "email_2",
                    "phone_2",
                    "company_name",
                    "company_logo",
                    "company_age",
                    "company_description",
                    "company_skills",
                    "showcased_work",
                    "profile_type_id"
                ))->values(
                    array(
                        $user_id,
                        $fields["first_name_1"],
                        $fields["last_name_1"],
                        $fields["title_1"],
                        $fields["email_1"],
                        $fields["phone_1"],
                        isset($fields["first_name_2"])?$fields["first_name_2"]:"",
                        isset($fields["last_name_2"])? $fields["last_name_2"]:"",
                        isset($fields["title_2"])?$fields["title_2"]:"",
                        isset($fields["email_2"])?$fields["email_2"]:"",
                        isset($fields["phone_2"])?$fields["phone_2"]:"",
                        isset($fields["company_name"])?$fields["company_name"]:"",
                        isset($fields["company_logo"])?$fields["company_logo"]:"",
                        isset($fields["company_age"])?$fields["company_age"]:"",
                        isset($fields["company_description"])?$fields["company_description"]:"",
                        isset($fields["company_skills"])?$fields["company_skills"]:"",
                        isset($fields["showcased_work"])?$fields["showcased_work"]:"",
                        $fields["profile_type_id"],
                    ))
                ->execute();

			// Add the login role to the user (add a row to the db)
			$login_role = new Model_Role(array('name' =>'login'));
            $user->add('roles', $login_role);
		} 
		catch (ORM_Validation_Exception $e) 
		{
			throw $e;
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Unegister multiple users
	 * Method to unregister existing user by Useradmin Auth module, when you set the
	 * Model_User reference for removing a user.
	 * 
	 * @param mixed $users An array witch contains the Model_User or a array of Model_User
	 * @return void
	 * @see Useradmin_Driver_iAuth::unregister()
	 */
	public function unregister ($users)
	{
		if( ! is_array($users))
			$users = array($users);
		
		foreach ($users as $user)
		{
			if($user instanceof Model_User) 
			{
				try 
				{
					$user->delete();
				} 
				catch (ORM_Validation_Exception $e) 
				{
					throw $e;
				}
			}
			elseif( ! is_null($user) )
			{
				throw new Kohana_Exception("Invalid argument, must be instance of Model_User or array() containing Model_User's");
			}
		}
	}
}
