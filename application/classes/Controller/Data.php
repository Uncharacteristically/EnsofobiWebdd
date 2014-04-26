<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Data extends Controller_Template{
        public $template="ajax";
        public function action_previewprofiles(){
            $profiles=DB::select("users.*","first_name_1","last_name_1","photo_name")
                    ->from("users")
                    ->join("profiles","left")->on("users.id","=","profiles.user_id")
                    ->join("graphic_index","left")->on("profile_photo_id","=","graphic_index.id")
                    ->execute();
            foreach($profiles as $profile){
                $profilesOut[]=array(
                    "id"=>$profile["id"],
                    "first_name_1"=>$profile["first_name_1"],
                    "last_name_1"=>$profile["last_name_1"],
                    "photo"=>$profile["photo_name"]!=""? "<img width='100' src='/uploads/{$profile["id"]}/{$profile["photo_name"]}'/>":"",
                );
            }
            $this->template->content=json_encode($profilesOut);
        }
	public function action_profile(){
            $specials=array("profileFormUserId","password","password_confirm","username","email");
            foreach($_GET as $field=>$value){
                if(!in_array($field, $specials)){
                    $fields[$field]=$value;
                }
                if($field=="password" && $value!=""){
                    $fields[$field]=$value;
                }
            }
            $user_id=$_GET["profileFormUserId"];
            $query=DB::update("profiles")->set($fields)->where("user_id","=",$user_id);
            $query->execute();
            $this->template->content=$fields["first_name_1"];
	}
        public function action_loadposts(){
            $userId=$_GET["userId"];
            $this->template->content=$this->createFeedJSON($userId);
        }
        public function action_feedpost(){
            $data["post_content"]=$_GET["post_content"];
            $data["post_author_id"]=$_GET["post_author_id"];
            $data["parent_id"]=$_GET["parent_id"];

            if($data["parent_id"]>0){
                $reply_post=DB::select("post_author_id")->from("feed_post")->where("id","=",$data["parent_id"])->execute ()->current();
                $post_recipient_id=$reply_post["post_author_id"];
            }
            else{
                $post_recipient_id=0;
            }
            $exec=DB::insert("feed_post",array("post_author_id","post_content","post_datetime","parent_id","post_recipient_id"))
                    ->values(array($data["post_author_id"],$data["post_content"],DB::expr("NOW()"),$data["parent_id"],$post_recipient_id))->execute();
            $this->template->content=$this->createFeedJSON($data["post_author_id"]);
        }
        public function createFeedJSON($userId){
            $posts=DB::select("feed_post.*","first_name_1","photo_name","profiles.user_id")
                        ->from("feed_post")
                                ->join("profiles","left")->on("post_author_id","=","profiles.id")
                                ->join("graphic_index","left")->on("profiles.profile_photo_id","=","graphic_index.id")
                                ->where("post_author_id","=", $userId)
                                ->or_where("post_recipient_id", "=",  $userId)->order_by("post_datetime","DESC")->execute();
           
            $postsFlat=array();
            foreach($posts as $post){
                $photo=$post["photo_name"]!="" ? "<img src='/uploads/{$post["user_id"]}/{$post["photo_name"]}'/>":"";
                $postsFlat[]=array(
                    "id"=>$post["id"],
                    "first_name_1"=>$post["first_name_1"],
                    "post_datetime"=>$post["post_datetime"],
                    "post_content"=>$post["post_content"],
                    "parent_id"=>$post["parent_id"],
                    "photo"=>$photo,
                    );
            }
            return json_encode($this->makeRecursive($postsFlat,0));        
        }
        public function makeRecursive($d, $r = 0, $pk = 'parent_id', $k = 'id', $c = 'children') {
            $m = array();
            foreach ($d as $e) {
              isset($m[$e[$pk]]) ?: $m[$e[$pk]] = array();
              isset($m[$e[$k]]) ?: $m[$e[$k]] = array();
              $m[$e[$pk]][] = array_merge($e, array($c => &$m[$e[$k]]));
            }
            return $m[$r]; // remove [0] if there could be more than one root nodes
        }


} // End Home