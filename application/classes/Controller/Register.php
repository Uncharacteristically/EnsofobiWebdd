<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Public {
    public $title_options=array(
        ""=>"",
        "CEO"=>"CEO",
        "Owner"=>"Owner",
        "Founder"=>"Founder",
        "CFO"=>"CFO",
        "Partner"=>"Partner"
    );
    public $network_options=array(
        "facebook"=>"Facebook",
        "twitter"=>"Twitter",
        "bebo"=>"Bebo",
        "myspace"=>"MySpace",
        "friendster"=>"Friendster",
    );
	public function action_index()
	{
        $this->template->subTitle="About Page";
	}
    public function action_business()
    {
        $this->template->subTitle="Register for a Fobi Business Account";
        $network_options=array(
            "facebook"=>"Facebook",
            "twitter"=>"Twitter",
            "bebo"=>"Bebo",
            "myspace"=>"MySpace",
            "friendster"=>"Friendster",
        );
        $formDef=array(
            array("title"=>"","fields"=>array(
                "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                "user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
            )),
            array("title"=>"Company Contact 1","fields"=>array(
               "first_name_contact_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
               "last_name_contact_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                "title_contact_1"=>array("title"=>"Choose a Title","type"=>"select","options"=>$this->title_options,"info"=>"","req"=>1),
                "email_contact_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                "phone_contact_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
            )),
            array("title"=>"Company Contact 2","fields"=>array(
                "first_name_contact_2"=>array("title"=>"First Name","type"=>"text","req"=>0,"info"=>""),
                "last_name_contact_2"=>array("title"=>"Last Name","type"=>"text","req"=>0,"info"=>""),
                "title_contact_2"=>array("title"=>"Choose a Title","type"=>"select","options"=>$this->title_options,"info"=>"","req"=>0),
                "email_contact_2"=>array("title"=>"Email","type"=>"text","req"=>0,"info"=>""),
                "phone_contact_2"=>array("title"=>"Phone","type"=>"text","req"=>0,"info"=>""),
            )),
            array("title"=>"Company Info","fields"=>array(
                "company_name"=>array("title"=>"Company Name","type"=>"text","req"=>1,"info"=>""),
                "company_logo"=>array("title"=>"Company Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                "company_age"=>array("title"=>"Years in Business","type"=>"text","req"=>1,"info"=>""),
                "company_description"=>array("title"=>"Description of the Company","type"=>"textarea","info"=>"","req"=>1),
                "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>$this->network_options,"info"=>"(choose all that apply)","req"=>0),
            )),
            /*
            array("title"=>"","fields"=>array(

            )),*/

        );
        $form=$this->generate_form($formDef);
        $this->template->mainContent=$form;
    }
    public function action_organization()
    {
        $org_title_options=array(
            ""=>"",
            "Organization"=>"Organization",
            "Institution"=>"Institution",
            "Community"=>"Community",
            "Sports"=>"Sports"
        );
        $this->template->subTitle="Register for Fobi Organizational Account";
        $formDef=array(
            array("title"=>"","fields"=>array(
                "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                "user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
            )),
            array("title"=>"Info","fields"=>array(
                "first_name_contact_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                "last_name_contact_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                "title_contact_1"=>array("title"=>"Choose Org. Type","type"=>"select","options"=>$org_title_options,"info"=>"","req"=>1),
                "email_contact_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                "phone_contact_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
            )),
            array("title"=>"Organization Info","fields"=>array(
                "company_name"=>array("title"=>"Organization Name","type"=>"text","req"=>1,"info"=>""),
                "company_logo"=>array("title"=>"Organization Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                "company_age"=>array("title"=>"Years Active","type"=>"text","req"=>1,"info"=>""),
                "company_description"=>array("title"=>"Organization Goals / Activities","type"=>"textarea","info"=>"","req"=>1),
                "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>$this->network_options,"info"=>"(choose all that apply)","req"=>0),
            )),

        );
        $form=$this->generate_form($formDef);
        $this->template->mainContent=$form;

    }
    public function action_fobiart()
    {
        $artist_title=array(
            ""=>"",
            "Artist"=>"Artist",
            "Group"=>"Group",
            "Public Figure"=>"Public Figure",
            "Entertainer"=>"Entertainer",
        );

        $this->template->subTitle="Register an Arts Business or Organization";
        $formDef=array(
            array("title"=>"","fields"=>array(
                "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                "user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
            )),
            array("title"=>"Profile Info","fields"=>array(
                "first_name_contact_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                "last_name_contact_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                "title_contact_1"=>array("title"=>"Choose a Title","type"=>"select","options"=>$artist_title,"req"=>1,"info"=>""),
                "email_contact_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                "phone_contact_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
                "company_logo"=>array("title"=>"Your Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                "showcased_work"=>array("title"=>"Showcased Work","type"=>"file","info"=>"(more uploads possible with valid registration)","req"=>1),
                "company_description"=>array("title"=>"Description / About You","type"=>"textarea","info"=>"","req"=>1),
                "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>$this->network_options,"info"=>"(choose all that apply)","req"=>0),
            )),


        );

        $form=$this->generate_form($formDef);
        $this->template->mainContent=$form;
    }
    private function generate_form($formDefLocal){
        $formLocal="<form id='RegisterForm' method='post' action='/user/register'><h3>{$this->template->subTitle} (Fields labeled <span class='req'>*</span> are required.)</h3>";
        foreach($formDefLocal as $idx=>$group){
            $formLocal.="<fieldset><legend>{$group["title"]} </legend>";
            foreach($group["fields"] as $field=>$attributes){

                if($attributes["req"]==1)
                    $reqLabel="<span class='req'>*</span>";
                else
                    $reqLabel="";

                $formLocal.="<label for='{$field}'>{$attributes["title"]} $reqLabel: </label>";
                switch($attributes["type"]){
                    case "text":
                    case "password":
                    case "file":
                        $formLocal.="<input type='{$attributes["type"]}' name='$field' id='$field'/>";
                        break;
                    case "textarea":
                        $formLocal.="<textarea name='$field' id='$field'></textarea>";
                        break;
                    case "select":
                        $formLocal.="<select name='$field' id='$field'>";

                        foreach($attributes["options"] as $key=>$val){
                            $formLocal.="<option value='$key'>$val</option>";
                        }
                        $formLocal.="</select>";
                        break;
                    case "checkbox":
                        $formLocal.="<div class='optContainer'>";
                        foreach($attributes["options"] as $key=>$val){
                            $formLocal.="<input type='checkbox' name='{$field}[] id='{$field}_{$key}'/>$val<br/>";
                        }
                        $formLocal.="</div>";
                        break;
                }

                $formLocal.="<div class='info'>{$attributes["info"]}</div>";
            }

            $formLocal.="</fieldset>";

        }
        $formLocal.="<label>&nbsp;</label>".Form::button('save', 'Register Profile', array('type' => 'submit'))."</form>";
        return $formLocal;
    }

} // End Home