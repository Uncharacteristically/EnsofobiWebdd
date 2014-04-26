<?php
class Controller_Coupon extends Controller_Template {
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

     public function action_save(){    
         $coupon=ORM::factory("coupon");
         $id=$this->request->query("coupon_id");
         if($id>0){
             $coupon->where("id","=",$id)->find();
         }
         $coupon->coupon_name=$this->request->query("coupon_name");
         $coupon->user_id=$this->user_id;
         $coupon->coupon_description=$this->request->query("coupon_description");
         $coupon->coupon_photo=$this->request->query("coupon_photo");
         $coupon->coupon_start=date("y-m-d",strtotime($this->request->query("coupon_start")));
         $coupon->coupon_end=date("y-m-d",strtotime($this->request->query("coupon_end")));
         $coupon->save();
         $out=$this->listCoupons();
         $this->template->content=json_encode($out);
     }
     public function action_list(){
         $out=$this->listCoupons();
         $this->template->content=json_encode($out);
     }
     public function action_detail(){
         $id=$this->request->param("id");
         $coupon=DB::select("coupon.id","coupon_name","coupon_description","coupon.user_id","coupon_start","coupon_end","company_name","photo_name","coupon_photo")
                 ->from("coupon")->join("profiles","left")->on("coupon.user_id","=","profiles.user_id")->
                 join("graphic_index","left")->on("coupon_photo","=","graphic_index.id")
                 ->where("coupon.id","=",$id)->execute()->current();
         
         $coupon["coupon_start"]=date("m/d/Y",strtotime($coupon["coupon_start"]));
         $coupon["coupon_end"]=date("m/d/Y",strtotime($coupon["coupon_end"]));
         
         $this->template->content=json_encode($coupon);
     }
     public function listCoupons(){
         $out=array();
         
         $coupons=DB::select("coupon.id","coupon_name","coupon_description","coupon.user_id","company_name","photo_name","coupon_start","coupon_end")->from("coupon")->join("profiles","left")->on("coupon.user_id","=","profiles.user_id")->
                 join("graphic_index","left")->on("coupon_photo","=","graphic_index.id")->where("coupon.user_id","=",$this->user_id)->execute();

         
         foreach($coupons as $c){
             $out[]=array(
                 "id"=>$c["id"],
                 "coupon_name"=>$c["coupon_name"],
                 "coupon_description"=>$c["coupon_description"],
                 "company_name"=>$c["company_name"],
                 "photo_name"=>$c["photo_name"],
                 "coupon_start"=>date("m/d/Y",strtotime($c["coupon_start"])),
                 "coupon_end"=>date("m/d/Y",strtotime($c["coupon_end"])),
             );
         }
         return $out;
     }
}