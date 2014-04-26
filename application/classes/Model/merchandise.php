<?php
Class Model_merchandise extends ORM{
    protected $_table_name="merchandise";
    protected $_belongs_to=array( 
      "user"=>array("model"=>"users"),  
      "photo"=>array("model"=>"photos"),  
      "merchadise_category"=>array("model"=>"merchandise_category"),  
    );
}
