<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Default auth role
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2009 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Model_Profile extends ORM {

	// Relationships
    protected $_belongs_to = array(
        'user' => array(
            'model'       => 'User',
            'foreign_key' => 'id',
        ),
    );

	public function rules()
	{
		return array(
			'first_name_1' => array(
				array('not_empty'),
			),
			'last_name_1' => array(
                array('not_empty'),
			)
		);
	}

} // End Auth Role Model
