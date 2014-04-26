<?php

/*
  Copyright Jan 23, 2014  Ensofobi Inc.
  Author greg,
 */
class Helper_Form{
    public $profileType;
    public $forms;
    public $formDef;
    public $output;
    
    function loadConfig(){
        $this->forms=Kohana::$config->load("forms");
        $this->network_options=$this->forms->get("network_options");
        $profileTypes=array(
            "1"=>"business",
            "2"=>"organization",
            "3"=>"arts",
        );
        $this->formDef=$this->forms["formDefs"][$profileTypes[$this->profileType]];
    }
    public function renderForm($fields,$submitButtonText,$showFiles=false){
        
        $this->loadConfig();
        
        $this->output="<input type='hidden' name='profile_type_id' id='profile_type_id' value='".$this->profileType."'/>";
        foreach($this->formDef["groups"] as $group){
        $this->output.="<fieldset><legend>{$group["title"]} </legend>";
        foreach($group["fields"] as $field=>$attributes){          
            if(isset($fields[$field])){
                $default[$field]=$fields[$field];
            }
            else{
                $default[$field]="";
            }
            switch($attributes["type"]){
                case "text":
                    $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                    $this->output.="<input type='{$attributes["type"]}' name='$field' id='$field' value='{$default[$field]}'/>";
                    if(isset($errors[$field]))$this->output.=$errors[$field];
                    $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    break;
                case "password":
                    $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                    $this->output.="<input type='{$attributes["type"]}' name='$field' id='$field' />";
                    $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    break;
                case "file":
                    if($showFiles){
                        $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                        $this->output.="<input type='{$attributes["type"]}' name='$field' id='$field' />";
                        $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    }
                    break;
                case "textarea":
                    $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                    $this->output.="<textarea name='$field' id='$field'>{$default[$field]}</textarea>";
                    $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    break;               
                case "select":
                    $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                    $this->output.=$this->buildSelect($field,$fields,$this->forms->get($attributes["options"]));
                    $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    break;
                case "checkbox":
                    $this->output.=$this->renderLabel($field,$attributes["title"],$attributes["req"]);
                    $this->output.=$this->buildCheck($field,$fields,$this->forms->get($attributes["options"])); 
                    $this->output.="<div class='info'>{$attributes["info"]}</div>";
                    break;  
            }
            
        }
        $this->output.="</fieldset>";
    }
    
    return $this->output;
    }
    function buildSelect($field,$fields,$options){
        $output="<select name='$field' id='$field'>";
        foreach($options as $key=>$val){
            if(isset($fields[$field]) && $fields[$field]=="$key"){
                $output.="<option value='$key' selected='selected'>$val</option>";
            }else{
                $output.="<option value='$key'>$val</option>";
            }
        }
        $output.="</select>";
        return $output;
    }
    function buildCheck($field,$fields,$options){
        $output="<div class='optContainer'>";
        foreach($options as $key=>$val){
            if(isset($fields[$field][$key])){
                $output.="<input type='checkbox' name='{$field}[{$key}] id='{$field}_{$key}' checked='checked'/>$val<br/>";
            }else{
                $output.="<input type='checkbox' name='{$field}[{$key}] id='{$field}_{$key}'/>$val<br/>";
            }
        }
        $output.="</div>";
        return $output;
    }
    function renderLabel($field,$title,$req){
        if($req===1){
            $reqLabel="<span class='req'>*</span>";
        }else{
            $reqLabel="";
        }
        $output="<label for='$field'>$title $reqLabel: </label>";
        return $output;
    }
}


