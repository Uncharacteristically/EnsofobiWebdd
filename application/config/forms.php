<?php
defined('SYSPATH') or die('No direct script access.');
/*
  Copyright Jan 23, 2014  Ensofobi Inc.
  Author greg,
 */
return array(
    "title_options"=>array(
        ""=>"",
        "CEO"=>"CEO",
        "Owner"=>"Owner",
        "Founder"=>"Founder",
        "CFO"=>"CFO",
        "Partner"=>"Partner"
    ),
    "network_options"=>array(
        "facebook"=>"Facebook",
        "twitter"=>"Twitter",
        "bebo"=>"Bebo",
        "myspace"=>"MySpace",
        "friendster"=>"Friendster",
    ),
    "organization_title_options"=>array(
        ""=>"",
            "Organization"=>"Organization",
            "Institution"=>"Institution",
            "Community"=>"Community",
            "Sports"=>"Sports"
        
    ),
    "artist_title_options"=>array(
         ""=>"",
            "Artist"=>"Artist",
            "Group"=>"Group",
            "Public Figure"=>"Public Figure",
            "Entertainer"=>"Entertainer",
    ),
    "user_options"=>array(
        
    ),
    "formDefs"=>array(
        "business"=>array(
            "groups"=>array(
                array("title"=>"","fields"=>array(
                    "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                    "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                    "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                    "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                    //"user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
                )),
                array("title"=>"Company Contact 1","fields"=>array(
                    "first_name_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                    "last_name_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                    "title_1"=>array("title"=>"Choose a Title","type"=>"select","options"=>"title_options","info"=>"","req"=>1),
                    "email_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                    "phone_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
                )),
                array("title"=>"Company Contact 2","fields"=>array(
                    "first_name_2"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                    "last_name_2"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                    "title_2"=>array("title"=>"Choose a Title","type"=>"select","options"=>"title_options","info"=>"","req"=>1),
                    "email_2"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                    "phone_2"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
                )),
                array("title"=>"Company Info","fields"=>array(
                    "company_name"=>array("title"=>"Company Name","type"=>"text","req"=>1,"info"=>""),
                    //"company_logo"=>array("title"=>"Company Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                    "company_age"=>array("title"=>"Years in Business","type"=>"text","req"=>1,"info"=>""),
                    "company_description"=>array("title"=>"Description of the Company","type"=>"textarea","info"=>"","req"=>1),
                    "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                    "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>"network_options","info"=>"(choose all that apply)","req"=>0),
                )),
                )
            ),
            "organization"=>array(
                "groups"=>array(
                    array("title"=>"","fields"=>array(
                        "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                        "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                        "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                        "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                        //"user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
                    )),
                    array("title"=>"Info","fields"=>array(
                        "first_name_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                        "last_name_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                        "title_1"=>array("title"=>"Choose Org. Type","type"=>"select","options"=>"organization_title_options","info"=>"","req"=>1),
                        "email_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                        "phone_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
                    )),
                    array("title"=>"Organization Info","fields"=>array(
                        "company_name"=>array("title"=>"Organization Name","type"=>"text","req"=>1,"info"=>""),
                        //"company_logo"=>array("title"=>"Organization Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                        "company_age"=>array("title"=>"Years Active","type"=>"text","req"=>1,"info"=>""),
                        "company_description"=>array("title"=>"Organization Goals / Activities","type"=>"textarea","info"=>"","req"=>1),
                        "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                        "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>"network_options","info"=>"(choose all that apply)","req"=>0),
                    )),
                )
            ),
            "arts"=>array(
                "groups"=>array(
                    array("title"=>"","fields"=>array(
                        "username"=>array("title"=>"User Name","type"=>"text","req"=>1,"info"=>""),
                        "email"=>array("title"=>"User Email","type"=>"text","req"=>1,"info"=>""),
                        "password"=>array("title"=>"Password","type"=>"password","req"=>1,"info"=>""),
                        "password_confirm"=>array("title"=>"Confirm Password","type"=>"password","req"=>1,"info"=>""),
                        "user_avatar"=>array("title"=>"User Avatar","type"=>"file","info"=>"Upload an Avatar (Must be Square)","req"=>0),
                    )),
                    array("title"=>"Profile Info","fields"=>array(
                        "first_name_1"=>array("title"=>"First Name","type"=>"text","req"=>1,"info"=>""),
                        "last_name_1"=>array("title"=>"Last Name","type"=>"text","req"=>1,"info"=>""),
                        "title_1"=>array("title"=>"Choose a Title","type"=>"select","options"=>"artist_title_options","req"=>1,"info"=>""),
                        "email_1"=>array("title"=>"Email","type"=>"text","req"=>1,"info"=>""),
                        "phone_1"=>array("title"=>"Phone","type"=>"text","req"=>1,"info"=>""),
                        //"company_logo"=>array("title"=>"Your Logo","type"=>"file","info"=>"Upload a Company Logo (220px x 120px)","req"=>1),
                        //"showcased_work"=>array("title"=>"Showcased Work","type"=>"file","info"=>"(more uploads possible with valid registration)","req"=>1),
                        "company_description"=>array("title"=>"Description / About You","type"=>"textarea","info"=>"","req"=>1),
                        "company_skills"=>array("title"=>"Skills/Interests","type"=>"text","req"=>1,"info"=>""),
                        "company_networks"=>array("title"=>"Networks you use ","type"=>"checkbox","options"=>"network_options","info"=>"(choose all that apply)","req"=>0),
                    )),
                )
            )
        )
);
?>


