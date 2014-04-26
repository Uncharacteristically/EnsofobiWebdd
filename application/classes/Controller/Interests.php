<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Interests extends Controller_Template {

    public $template="ajax";
    public $out=array();
    public $user_id;
    public function before() {
        $user = Auth::instance()->get_user();
        $this->user_id= $user->id;
        parent::before();
    }
    public function action_index(){

    }
    public function action_accept(){
        $id=$this->request->query("id");
        //$exists=DB::select()->from("keyword_user")->where("user_id","=",$this->user_id)->and_where("keyword_id","=", $id)->execute();
        //if(!$exists){
            DB::insert("keyword_user",array("user_id","keyword_id"))->values(array($this->user_id,$id))->execute();
        //}
        $this->out=$this->listInterests();
        $this->template->content=json_encode($this->out);
    }
     public function action_accept_i(){
        $id=$this->request->param("id");
        //$exists=DB::select()->from("keyword_user")->where("user_id","=",$this->user_id)->and_where("keyword_id","=", $id)->execute();
        //if(!$exists){
            DB::insert("interest_user",array("user_id","keyword_id"))->values(array($this->user_id,$id))->execute();
        //}
        $this->out=$this->listInterestsI();
        $this->template->content=json_encode($this->out);
    }
    public function action_delete_i(){
        $id=$this->request->param("id");
        DB::delete("interest_user")->where("id","=",$id)->execute();
        $this->out=$this->listInterestsI();
        $this->template->content=json_encode($this->out);
    }
    public function action_list_i(){
        $this->out=$this->listInterestsI();
        $this->template->content=json_encode($this->out);
    }
    public function action_discard(){
        $id=$this->request->param("id");
        DB::delete("keyword_user")->where("id","=",$id)->execute();
        $this->out=$this->listInterests();
        $this->template->content=json_encode($this->out);
    }
     public function action_list(){
        $this->out=$this->listInterests();
        $this->template->content=json_encode($this->out);
    }
    public function listInterests(){
        $interests=array();
        $request=DB::select("keyword","keyword_user.id")->from("keyword_user")->join("keywords","left")->on("keyword_id","=","keywords.id")
                ->where("user_id","=",$this->user_id)->execute();
        foreach($request as $r){
            $interests[]=$r;
        }
        return $interests;
    }
    public function listInterestsI(){
        $interests=array();
        $request=DB::select("keyword","interest_user.id")->from("interest_user")->join("keywords","left")->on("keyword_id","=","keywords.id")
                ->where("user_id","=",$this->user_id)->execute();
        foreach($request as $r){
            $interests[]=$r;
        }
        return $interests;
    }
} 