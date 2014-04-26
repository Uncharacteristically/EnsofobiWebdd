<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
//$upload_handler = new UploadHandler();

class CustomUploadHandler extends UploadHandler {
    protected function get_user_id() {
        @session_start();
        if(isset($_REQUEST["photo_user_id"])){
            return($_REQUEST["photo_user_id"]);
        }
        else{
            return "346";
        }
        
    }
}

$upload_handler = new CustomUploadHandler(array(
    'user_dirs' => true
));
