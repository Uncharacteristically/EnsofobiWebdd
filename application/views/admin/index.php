<!DOCTYPE html>
<html lang="en">
    <head>
    <?php echo View::factory("admin/layout/htmlhead"); ?>
    </head>
    <body>
        <div class="height-wrapper">
            <?php echo View::factory("admin/body/header");?>
            <div id="main" role="main" class="container-fluid">
                <div class="contained">
                    <?php echo View::factory("admin/body/leftaside")->bind("profile",$profile);?>
                    <?php
                        $admin_scripts=array(
                            "index"=>array("feed","photo"),
                            "photo"=>array("photo"),
                            "keywords"=>array("keyword","photo"),
                            "communication"=>array("communication","photo"),
                            "interests"=>array("interests","photo"),
                            "fobiwords"=>array("skills","photo","keyword"),
                            "coupons"=>array("coupons","photo"),
                            "services"=>array("services","photo"),
                            "merchandise"=>array("merchandise","photo"),
                            "campaign"=>array("campaign","photo"),
                        );
                        switch($mode){
                            case "index":
                                echo View::factory("admin/body/maincontent")->bind("profile",$profile);
                                break;
                            case "photo":
                                echo View::factory("admin/body/photo")->bind("profile",$profile);
                                break;
                            case "keywords":
                                 echo View::factory("admin/body/keywords")->bind("profile", $profile);
                            break;
                            case "communication":
                                 echo View::factory("admin/body/communication")->bind("profile", $profile);
                            break;
                            case "interests":
                                echo View::factory("admin/body/interests")->bind("profile", $profile);
                            break;
                            case "fobiwords":
                                echo View::factory("admin/body/fobiwords")->bind("profile", $profile);
                            break;
                            case "coupons":
                                echo View::factory("admin/body/coupons")->bind("profile", $profile)->bind("content",$content);
                            break;
                            case "services":
                                echo View::factory("admin/body/services")->bind("profile", $profile)->bind("content",$content);
                            break;
                            case "merchandise":
                                echo View::factory("admin/body/merchandise")->bind("profile", $profile)->bind("content",$content);
                            break;
                            case "campaign":
                                echo View::factory("admin/body/campaign")->bind("profile", $profile)->bind("content",$content);
                            break;
                        }
                        $script_ref="";
                        foreach($admin_scripts[$mode] as $script){
                            $script_ref.="<script type='text/javascript' src='/js/admin/$script.js'></script>";
                        }
                    ?>			
                    <?php echo View::factory("admin/body/rightaside");?>
                </div>
            </div>
            <div class="push"></div>
        </div>
        <?php echo View::factory("admin/layout/htmlfoot")->bind("admin_scripts",$script_ref); ?>
    </body>
</html>
  