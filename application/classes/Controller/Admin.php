<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin extends Controller_Template {
        public $template="admin/index";
        public $profile=array();
        
        public function before() {
            if (Auth::instance()->logged_in() == false){
                $this->redirect('/');
            }else{ 
                $user=Auth::instance()->get_user();
                $query=DB::select("users.id","username","email","profiles.*")->from("users")->join("profiles")->on("users.id","=","user_id")->where("user_id","=",$user->id)->execute()->as_array();
                $this->profile=$query[0];
            }
            parent::before();
        }
	public function action_index()
	{
            $action=$this->request->action();
            $this->template->bind("profile",$this->profile);
            $this->template->bind("mode",$action);
	}
        public function action_photo(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_campaign(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_communication(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_keywords(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_interests(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_fobiwords(){
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_coupons(){
            $id=$this->request->param("id");
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_services(){
            $id=$this->request->param("id");
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
        public function action_merchandise(){
            $id=$this->request->param("id");
            $action=$this->request->action();
            $this->template->bind("mode",$action);
            $this->template->bind("profile",$this->profile);
        }
} 