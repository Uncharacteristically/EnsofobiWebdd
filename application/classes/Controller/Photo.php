<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Photo extends Controller_Template {
    public $template="ajax";
    public function action_video(){
        $id=$this->request->query("video_id");
        $title=$this->request->query("video_title");
        $description=$this->request->query("video_description");
        $code=$this->request->query("video_code");
        $beginSource=strpos($code,"src=\"");
        $endSource=strpos($code,"\"",$beginSource+5);
        $source=substr($code,$beginSource,$endSource-$beginSource);
        if(substr($source,strlen($source)-14)!="?wmode=opaque"){
            $newSource=$source."?wmode=opaque";
        }else{
            $newSource=$source;
        }
        $code=str_replace($source,$newSource,$code);
        $user = Auth::instance()->get_user();
	$user_id = $user->id;
        if($id==0){
            DB::insert("graphic_index",array("user_id","absolute_path","title","description","category"))->values(array($user_id,$code,$title,$description,"videophoto"))->execute();
        }else{
            DB::update("graphic_index")->set(array("absolute_path"=>$code,"title"=>$title,"description"=>$description))->where("id","=",$id)->execute();
        }
        $out=$this->getPhotos();
        $this->template->content=json_encode($out);
        //$this->template->content="X";
    }
    public function action_save(){
        $id=$this->request->query("photo_id");
        $title=$this->request->query("photo_title");
        $description=$this->request->query("photo_description");
        $user = Auth::instance()->get_user();
	$user_id = $user->id;
        if($this->request->query("photo_profile")=="on"){
            DB::update("profiles")->set(array("profile_photo_id"=>$id))->where("user_id","=",$user_id)->execute();
        }
        if($this->request->query("photo_logo")=="on"){
             DB::update("profiles")->set(array("logo_photo_id"=>$id))->where("user_id","=",$user_id)->execute();
        }
        $query=DB::update("graphic_index")->set(array("description"=>$description,"title"=>$title))->where("id","=",$id);
        $query->execute();
        $out=$this->getPhotos();
        $this->template->content=json_encode($out);
    }
    public function getPhotos(){
        $out=array();
        $counts=array();
        $user = Auth::instance()->get_user();
	$user_id = $user->id;
        $user_row=DB::select("logo_photo_id","profile_photo_id")->from("profiles")->where("user_id","=",$user_id)->execute()->current();
        $logo_photo_id=$user_row["logo_photo_id"];
        $profile_photo_id=$user_row["profile_photo_id"];
        $showphotos["logo"]="";
        $showphotos["profile"]="";
        
        $photos=DB::select()->from("graphic_index")->where("user_id","=",$user_id)->and_where("category","<>","trashphoto")->order_by("photo_name")->execute();
        foreach($photos as $photo){
            if($photo["id"]==$logo_photo_id){
                $showphotos["logo"]="/uploads/$user_id/{$photo["photo_name"]}";
            }
            if($photo["id"]==$profile_photo_id){
                $showphotos["profile"]="/uploads/$user_id/{$photo["photo_name"]}";
            }
            $out[]=array("id"=>$photo["id"],"url"=>"/uploads/$user_id/{$photo["photo_name"]}",
                    "category"=>$photo["category"],"title"=>$photo["title"],"description"=>$photo["description"],"absolute_path"=>$photo["absolute_path"],
                        ); 
            if(!isset($counts[$photo["category"]])){
                $counts[$photo["category"]]=0;
            }
            $counts[$photo["category"]]++;
        }
        $countout=array();
        foreach($counts as $category=>$total){
                $countout[]=array("category"=>$category,"total"=>$total);
        }
        return array("photos"=>$out,"counts"=>$countout,"showphotos"=>$showphotos);
    }
    public function action_detail(){
        $id=$this->request->query("photoId");
        $photo=DB::select()->from("graphic_index")->where("id","=",$id)->execute()->current();
        $this->template->content=json_encode($photo);
    }
    public function action_list(){

        $out=$this->getPhotos();  
        $this->template->content=json_encode($out);
    }
    public function action_categorize(){
        $user = Auth::instance()->get_user();
	$user_id = $user->id;
        $photo=$this->request->query("photo");
        $folder=$this->request->query("folder");
        $category=str_replace("-nav","",$folder);
        $query=DB::update("graphic_index")->set(array("category"=>$category))->where("id","=",$photo);
        $query->execute();
        $out=$this->getPhotos();
        $this->template->content=json_encode($out);
    }
    public function action_upload(){
        define ("MAX_SIZE","2000"); // 2MB MAX file size
        $user = Auth::instance()->get_user();
	$user_id = $user->id;
        
        $upload_abs_path=DOCROOT."uploads/$user_id";
        $upload_http_path="/uploads/$user_id";
        // Check for user directory - Create if needed
        if(!is_dir("$upload_abs_path")){
            if(mkdir("$upload_abs_path")){
                $out["userDirStatus"]="User Directory Created Successfully";
            }else{
                $out["userDirStatus"] = "Error Creating User Directory";
            }
        }else{
            $out["userDirStatus"] = "User Directory Exists";
        }
        $out["preview"]="";
        $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
        if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
            foreach ($_FILES['photos']['name'] as $name => $value){
                $filename = stripslashes($_FILES['photos']['name'][$name]);
                $size=filesize($_FILES['photos']['tmp_name'][$name]);
                $ext = $this->getExtension($filename);
                $ext = strtolower($ext);
                
                if(in_array($ext,$valid_formats)){
                    
                    if ($size < (MAX_SIZE*1024)){ 
                        $image_name=time().$filename; 
                        $out["preview"].="<img src='$upload_http_path/$image_name' class='imgList'>"; 
                        $upload_move_to="$upload_abs_path/$image_name"; 

                        if (move_uploaded_file($_FILES['photos']['tmp_name'][$name],  $upload_move_to)) 
                        { 
                            DB::insert("graphic_index",array("user_id","photo_name","category","absolute_path","title","description"))->values(array($user_id,$image_name,"uncategorizedphoto",$upload_move_to,"title","description"))->execute();
                            $out["status"]= "upload successful";
                        }
                        else 
                        { 
                            $out["status"]="file move unsuccsessful"; 

                        } 
                    }
                    else 
                    { 
                       $out["status"]="You have exceeded the size limit!"; 
                  
                    } 
                
                } 
                else 
                { 
                    $out["status"]="Invalid extension";
                } 
         
          }
        } 
        $this->template->content=$out["preview"].$out["status"];
    }
    function action_gallery(){
        $user_id=$this->request->param("id");    
        $out=array();
        $counts=array();
        $user_row=DB::select("logo_photo_id","profile_photo_id")->from("profiles")->where("user_id","=",$user_id)->execute()->current();
        $logo_photo_id=$user_row["logo_photo_id"];
        $profile_photo_id=$user_row["profile_photo_id"];
        $showphotos["logo"]="";
        $showphotos["profile"]="";
        
        $photos=DB::select()->from("graphic_index")->where("user_id","=",$user_id)->and_where("category","<>","trashphoto")->order_by("photo_name")->execute();
        foreach($photos as $photo){
            if($photo["id"]==$logo_photo_id){
                $showphotos["logo"]="/uploads/$user_id/{$photo["photo_name"]}";
            }
            if($photo["id"]==$profile_photo_id){
                $showphotos["profile"]="/uploads/$user_id/{$photo["photo_name"]}";
            }
            $out[]=array("id"=>$photo["id"],"url"=>"/uploads/$user_id/{$photo["photo_name"]}",
                    "category"=>$photo["category"],"title"=>$photo["title"],"description"=>$photo["description"],"absolute_path"=>$photo["absolute_path"],
                        ); 
            if(!isset($counts[$photo["category"]])){
                $counts[$photo["category"]]=0;
            }
            $counts[$photo["category"]]++;
        }
        foreach($counts as $category=>$total){
                $countout[]=array("category"=>$category,"total"=>$total);
        }
        $this->template->content=json_encode(array("photos"=>$out,"counts"=>$countout,"showphotos"=>$showphotos));
    }
    function getExtension($str)
    {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
    
}
