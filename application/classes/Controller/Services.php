<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Services extends Controller_Public {
    public $template="ajax";
    public $user_id;
    public $output=array();
    public function before() {
    if (Auth::instance()->logged_in() == false){
             exit();
         }else{ 
             $user=Auth::instance()->get_user();
             $this->user_id=$user->id;
         }
         parent::before();
     }
    public function action_index()
    {
        $this->template->subTitle="About Page";
        $pageTitle="<span>Ensofobi</span> Services";
        $this->template->mainContent=View::factory("content/generic")->bind("loremIpsum",$this->loremIpsum)->bind("pageTitle",$pageTitle);
    }
    public function action_delete(){
        $id=$this->request->query("id");
        DB::delete("service")->where("id","=",$id)->execute();
        $out=$this->listServices();
        $this->template->content=json_encode($out);
    }
    public function action_save(){
        $service=ORM::factory("service");
        $sphotos=array();
        $id=$this->request->query("service_id");
        if($id>0){
             $service->where("id","=",$id)->find();
        }
        
        $service->user_id=$this->user_id;
        
        $service_photo=$this->request->query("service_photo");
        if($service_photo!=""){
            $photos=explode(",",$service_photo);
            foreach($photos as $id){
                if(trim($id)!="")
                    $sphotos[]=$id;
            }
        }
        $service_photos=implode(",",$sphotos);
        $service->service_name=$this->request->query("service_name");
        $service->service_description=$this->request->query("service_description");
        $service->service_photo=$service_photos;
        $service->service_keyword=$this->request->query("service_keyword");

        $service->save();
        $out=$this->listServices();
        $this->template->content=json_encode($out);
    }
    public function action_list(){
        $out=$this->listServices();
        $this->template->content=json_encode($out);
    }
    public function action_detail(){
        $id=$this->request->param("id");
        $record=DB::select()->from("service")->where("id","=",$id)->Execute()->current();
        $photolist=$record["service_photo"];
        $keywordlist=$record["service_keyword"];
        if($photolist!=""){
            $photos=DB::select()->from("graphic_index")->where("id","IN",DB::expr("(".$photolist.")"))->Execute();
            foreach($photos as $p){
                $record["photos"][]=array(
                    "id"=>$p["id"],
                    "name"=>$p["photo_name"]
                        );
            }
        }
        if($keywordlist!=""){
            $keywords=DB::select()->from("keywords")->where("id","IN",DB::expr("(".$keywordlist.")"))->Execute();
            foreach($keywords as $k){
               $record["keywords"][]=array("id"=>$k["id"],"text"=>$k["keyword"]);
            }
        }
        
        
        
        
        $this->template->content=json_encode($record);
    }
    public function listServices(){
        $out=array();
        
        $services=DB::select()->from("service")->where("user_id","=",$this->user_id)->Execute();
        foreach($services as $s){
            $photoout=array();
        $keywordout=array();
            $photolist=$s["service_photo"];
            $keywordlist=$s["service_keyword"];
            if(trim($photolist)!=""){
                $photos=DB::select()->from("graphic_index")->where("id","IN",DB::expr("(".$photolist.")"))->Execute();
                foreach($photos as $p){
                    $photoout[]=$p["photo_name"];
                }
            }
            if(trim($keywordlist)!=""){
                $keywords=DB::select()->from("keywords")->where("id","IN",DB::expr("(".$keywordlist.")"))->Execute();
            
                foreach($keywords as $k){
                    $keywordout[]=$k["keyword"];
                }
            
            }
            $out[]=array(
                "id"=>$s["id"],
                "user_id"=>$s["user_id"],
                "service_name"=>$s["service_name"],
                "service_description"=>$s["service_description"],
                "photos"=>$photoout,
                "keywords"=>$keywordout,
            );
            unset($photoout);
            unset($keywordout);
        }
        return $out;
    }

}