<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Communication extends Controller_Template {
    public $template="ajax";
    public $out=array();
    public $treeId=array();
    public $user_id;
    public function before() {
        $user = Auth::instance()->get_user();
        $this->user_id= $user->id;
        parent::before();
    }
    public function action_index(){

    }
    public function action_usersearch(){
        $q=$this->request->query("q");
        $users=DB::select()->from("users")->where("username","LIKE",DB::expr("'%$q%'"))->execute();
        foreach($users as $u){
            $this->out[]=array("id"=>$u["id"],"text"=>$u["username"]);
        }
        $this->template->content=json_encode($this->out);
    }
    public function action_keywordsearch(){
        $q=$this->request->query("q");
        $keys=DB::select("keyword","id")->from("keywords")->where("status","=","1")->and_Where("keyword","like",DB::expr("'%$q%'"))->order_by("keyword")->execute();
        foreach($keys as $k){
            $this->out[]=array("id"=>$k["id"],"text"=>$k["keyword"]);
        }
        $this->template->content=json_encode($this->out);
    }
    
    public function action_savemessage(){
        $recipientlist=$this->request->query("recipients");
        $recipients=explode(",",$recipientlist);
        $subject=$this->request->query("subject");
        $body=$this->request->query("body");
        $message=DB::insert("message",array("sender_id","subject","body","sent_datetime","sender_sub_category"))
                ->values(array($this->user_id,$subject,$body,DB::expr("NOW()"),2))
                ->execute();
        foreach($recipients as $r){
            $recipient=DB::insert("message_recipient",array("message_id","recipient_id","recipient_sub_category"))
                    ->values(array($message[0],$r,1));
            $recipient->execute();
        }
        $this->out["messages"]=$this->listMessages(); 
        $this->out["detail"]=$this->messageDetail($message[0]);
        $this->template->content=json_encode($this->out);
    }
    public function action_reply(){
        $replyid=$this->request->query("replyid");
        $replyall=$this->request->query("replyall");
        $replybody=trim(urldecode($this->request->query("replybody")));
        $replyto=DB::select()->from("message")->where("id","=",$replyid)->execute()->current();
        if($replyto["thread_parent"]==""){
            $thread_parent=$replyid;
        }else{
            $thread_parent=$replyto["thread_parent"];
        }
        
        
        $originalsubject=$replyto["subject"];
        $sender_id=$replyto["sender_id"];
        $subject="RE: $originalsubject";
        $message=DB::insert("message",array("sender_id","subject","body","sent_datetime","sender_sub_category","response_to","thread_parent"))
                ->values(array($this->user_id,$subject,$replybody,DB::expr("NOW()"),2,$replyid,$thread_parent))
                ->execute();
        $recipient=DB::insert("message_recipient",array("message_id","recipient_id","recipient_sub_category"))
                    ->values(array($message[0],$sender_id,1));
        $recipient->execute();
        if($replyall==1){
            $recipientrecords=DB::select("recipient_id")->from("message_recipient")->where("message_id","=",$replyid)->execute();
            foreach($recipientrecords as $r){
                $recipient=DB::insert("message_recipient",array("message_id","recipient_id","recipient_sub_category"))
                    ->values(array($message[0],$r["recipient_id"],1));
                $recipient->execute();
            }
        }

        $this->out["messages"]=$this->listMessages(); 
        $this->out["detail"]=$this->messageDetail($replyid);
        $this->template->content=json_encode($this->out);
    }
    public function action_saverequest(){
        $recipientlist=$this->request->query("recipients");
        $recipients=explode(",",$recipientlist);
        $keywordlist=$this->request->query("keywords");
        $keywords=explode(",",$keywordlist);
        $subject=$this->request->query("subject");
        $price_range_id=$this->request->query("price_range_id");
        $body=$this->request->query("body");
        $message=DB::insert("message",array("sender_id","subject","body","sent_datetime","sender_sub_category","price_range_id","keyword","request"))
                ->values(array($this->user_id,$subject,$body,DB::expr("NOW()"),3,$price_range_id,$keywordlist,1))
                ->execute();
        foreach($recipients as $r){
            $recipient=DB::insert("message_recipient",array("message_id","recipient_id","recipient_sub_category"))
                    ->values(array($message[0],$r,4));
            $recipient->execute();
        }
        $keywordreq=DB::select()->from("keywords")->where("id","in",$keywordlist);
        foreach($keywordreq as $k){
            $this->out["keywords"][]=$k;
        }
        $this->out["messages"]=$this->listMessages(); 
        $this->out["detail"]=$this->messageDetail($message[0]);
        $this->template->content=json_encode($this->out);
    }
    public function action_listmessage(){
        $this->out=$this->listMessages();    
        $this->template->content=json_encode($this->out);
    }
    public function action_showmessage(){
        $id=$this->request->query("id");
        $this->out=$this->messageDetail($id);
        $this->template->content=json_encode($this->out);
    }
     public function action_radiussearch(){
         $keywords=$this->request->query("keywords");
         $radius=$this->request->query("radius");
         $plural="";
         $keywordrecs=DB::select("keyword")->from("keywords")->where("id","IN",DB::expr("($keywords)"))->execute();
         $keys=array();        
         $count=0;
         foreach($keywordrecs as $k){
             $keys[]=$k["keyword"];
             $count++;
         }
         if($count>1){
             $plural="s";
         }
         $keylist=implode(", ", $keys);
         $number=rand($radius*3,$radius*8);
         $this->out["response"]="Your request for keyword$plural $keylist in a $radius mile radius will go to $number recipients";
         $this->template->content=json_encode($this->out);
     }
    public function messageDetail($id){
        $detail=array();
        $detailthread=array();
        $participants=array();
        $message=DB::select("message.id","subject","body","first_name_1","last_name_1","sender_id","price_range","keyword","request","thread_parent","photo_name")->from("message")
                ->join("profiles","left")
                ->on("sender_id", "=", "user_id")
                ->join("graphic_index","left")
                ->on("profile_photo_id","=","graphic_index.id")
                ->join("price_range","left")
                ->on("price_range_id", "=", "price_range.id")
                ->where("message.id","=",$id)->execute()->current();
        if($message["thread_parent"]==""){
            $thread_parent=$id;
        }else{
            $thread_parent=$message["thread_parent"];
        }
        
        $thread=DB::select()->from("message")->where("thread_parent","=",$thread_parent)->or_where("id", "=",$thread_parent)->order_by("sent_datetime","DESC")->execute();
        foreach($thread as $t){
             $detailthread[$t["sender_id"]][]=array(
                 "sender_id"=>$t["sender_id"],
                 "message_id"=>$t["id"],
                 "subject"=>$t["subject"],
                 "body"=>$t["body"],
                 "sent_datetime"=>date("m/d/Y h:i a",strtotime($t["sent_datetime"])),
             );
        }

        $recipients=DB::select("recipient_id","first_name_1","last_name_1","photo_name")->from("message_recipient")
                ->join("profiles","left")
                ->on("recipient_id", "=", "user_id")
                 ->join("graphic_index","left")
                ->on("profile_photo_id","=","graphic_index.id")
                ->where("message_id", "=",$id)->execute();
        foreach($recipients as $r){
            $rflat[$r["recipient_id"]]=$r;
        }
        foreach($rflat as $id=>$r){
            $participants[]=array(
            "user"=>$r["recipient_id"],
            "name"=>trim($r["first_name_1"]." ".$r["last_name_1"]),
             "thread"=>isset($detailthread[$r["recipient_id"]])?$detailthread[$r["recipient_id"]]:array(),
                "photo_name"=>"/uploads/{$r["recipient_id"]}/{$r["photo_name"]}"
            );
        }
        $participants[]=array(
            "user"=>$message["sender_id"],
            "name"=>trim($message["first_name_1"]." ".$message["last_name_1"]),
            "thread"=>$detailthread[$message["sender_id"]],
            "photo_name"=>"/uploads/{$message["sender_id"]}/{$message["photo_name"]}"
            );
        if($message["keyword"]!=""){
             $keywordreq=DB::select()->from("keywords")->where("id","in",DB::expr("(".$message["keyword"].")"))->execute();
              foreach($keywordreq as $k){
                $detail["keywords"][]=$k;
              }
              
        }
        
        $detail["message"]=$message;
        $detail["message"]["direction"]=$message["sender_id"]==$this->user_id?"out":"in";
        $detail["message"]["myid"]=$this->user_id;
        $detail["participants"]=$participants;
        return $detail;
    }
    public function listMessages(){
        $messages=array();
        $pre=array();
        $filter=array();
        $recipients=array();
        $cats=DB::select()->from("message_category")->execute();
        $subs=DB::select()->from("message_sub_category")->execute();
        foreach($cats as $c){
            $counts["cat"][$c["id"]]=0;
        }
        foreach($subs as $s){
            $counts["sub"][$s["id"]]=0;
        }
        $sent=DB::select("message.id","subject","body","recipient_id","first_name_1","last_name_1","sent_datetime","sender_sub_category","category_id")
                ->from("message")
                ->join("message_recipient","left")->on("message.id","=","message_id")
                ->join("profiles","left")->on("recipient_id","=","user_id")
                ->join("message_sub_category","left")->on("sender_sub_category","=","message_sub_category.id")
                ->order_by("sent_datetime","DESC")
                ->where("sender_id","=",$this->user_id)->execute();
        
        $received=DB::select("message.id","subject","body","first_name_1","last_name_1","sent_datetime","recipient_sub_category","category_id")
                ->from("message")
                ->join("profiles","left")->on("sender_id","=","user_id")
                ->join("message_recipient","left")->on("message.id","=","message_id")
                ->join("message_sub_category","left")->on("recipient_sub_category","=","message_sub_category.id")
                ->order_by("sent_datetime","DESC")
                ->where("recipient_id","=",$this->user_id)->execute();
                
        foreach($sent as $s){
            $recipients[$s["id"]][]=array(
                "recipient_id"=>$s["recipient_id"],
                "name"=>trim($s["first_name_1"]." ".$s["last_name_1"])
                );
            $filter[$s["id"]]=$s;
        }
        foreach($filter as $id=>$s){
            $messages["sent"][]=array(
                "id"=>$id,
                "subject"=>$s["subject"],
                "body"=>$s["body"],
                "sent_datetime"=>$s["sent_datetime"],
                "sender_sub_category"=>$s["sender_sub_category"],
                "recipients"=>$recipients[$s["id"]]  
            );
            $counts["sub"][$s["sender_sub_category"]]++;
            $counts["cat"][$s["category_id"]]++;
        }
        foreach($received as $r){
            $messages["received"][]=$r;
            $counts["sub"][$r["recipient_sub_category"]]++;
            $counts["cat"][$r["category_id"]]++;
        }
        foreach($counts["sub"] as $id=>$total){
            $subcounts[]=array("id"=>$id,"total"=>$total);
        }
        foreach($counts["cat"] as $id=>$total){
            $catcounts[]=array("id"=>$id,"total"=>$total);
        }
        $messages["counts"]=array("cats"=>$catcounts,"subs"=>$subcounts);
        
        return $messages;
    }

} 