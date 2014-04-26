<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Fobiwords extends Controller_Template {

    public $template="ajax";
    public $out=array();

    public function action_index(){

    }
    public function action_upload(){
        $file=DOCROOT."/bin/Black.txt";
        $array=file($file);
        echo "<pre>";        
        $keys=array();
        foreach($array as $a){
            $trim=trim($a);
            $firstparenthesis=strpos($trim,"(");
            if($firstparenthesis>0){
                $prekey=substr($trim,0,$firstparenthesis);
            }else{
                $prekey=$trim;
            }
            $firstbracket=strpos($prekey,"[");
            if($firstbracket>0){
                $key=substr($prekey,0,$firstbracket);
            }else{
                $key=$prekey;
            }

            $explode=explode(",",$key);
            if(sizeof($explode)>1){
                foreach($explode as $e){
                    $keys[]=ucwords(str_replace("'","''",trim($e)));
                }
            }else{
                if($key!="")
                    $keys[]=ucwords(str_replace("'","''",trim($key)));
            }
            foreach($keys as $keyword){
                $exists=DB::select()->from("keywords")->where("keyword","=",$keyword)->execute()->current();
                if(!$exists){
                    DB::insert("keywords",array("keyword","status","date_created"))->values(array($keyword,"-1",DB::expr("NOW()")))->execute();
                }
            }
            
           
            
        }
        print_r($keys);
        echo "</pre>";
        $this->template->content="COMPLETE";
    }
    public function action_move(){
        $id=$this->request->query("id");
        $status=$this->request->query("status");
        $statusIdx=array(
            "good"=>"1",
            "bad"=>"-1",
            "new"=>"0"
        );
        $exec=DB::update("keywords")->set(array("status"=>$statusIdx[$status]))->where("id","=",$id)->execute();
        $this->out=$this->listKeywords();
        $this->template->content=json_encode($this->out);
    }
    public function action_search(){
        $query=$this->request->query("query");
        $this->out=$this->queryKeywords($query);
        $this->template->content=json_encode($this->out);
    }
    public function action_create(){
        $keyword=$this->request->query("keyword-create");
        $id=$this->request->query("keyword-id");
        if($id==0){
            $exec=DB::insert("keywords",array("keyword","date_created"))->values(array($keyword,DB::expr("NOW()")))->execute();
        }
        $this->out=$this->listKeywords();
        $this->template->content=json_encode($this->out);
    }
    public function action_list(){
        $this->out=$this->listKeywords();
        $this->template->content=json_encode($this->out);
    }
    public function action_merge() {
        $selected=$this->request->query("selected");
        $target=$this->request->query("target");
        $searchQuery=$this->request->query("searchQuery");
        $mergeQuery=$this->request->query("mergeQuery");
        $exec=DB::delete("keywords")->where("id", "=", $selected)->execute();
        $exec=DB::update("user_keyword")->set(array("keyword_id"=>$target))->where("keyword_id","=", $selected)->execute();
        $out["search"]=$this->queryKeywords($searchQuery);
        $out["merge"]=$this->queryKeywords($mergeQuery);
        $out["list"]=  $this->listKeywords();
        $this->template->content=json_encode($out);     
    }
    function listKeywords(){
        $keywords=array();
        $resultsn=DB::select("keyword","id")->from("keywords")->where("status","=","0")->order_by("keyword")->execute();
        foreach($resultsn as $r){
            $keywords["new"][]=array("keyword"=>str_replace(" ","&nbsp;",$r["keyword"]),"id"=>$r["id"]);
        }
        $resultsg=DB::select("keyword","id")->from("keywords")->where("status","=","1")->order_by("keyword")->execute();
        foreach($resultsg as $r){
            $keywords["good"][]=array("keyword"=>str_replace(" ","&nbsp;",$r["keyword"]),"id"=>$r["id"]);
        }
        $resultsb=DB::select("keyword","id")->from("keywords")->where("status","=",DB::expr("'-1'"))->order_by("keyword")->execute();
        foreach($resultsb as $r){
            $keywords["bad"][]=array("keyword"=>str_replace(" ","&nbsp;",$r["keyword"]),"id"=>$r["id"]);
        }
        return $keywords;
    }
    function queryKeywords($query){
        $keywords=array();
        $results=DB::select()->from("keywords")->where("keyword","like","%".$query."%")->order_by("keyword")->execute();
        foreach($results as $result){
            $keywords[]=$result;
        }
        return $keywords;
    }
} 