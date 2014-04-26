<?php
Class Model_service extends ORM{
    protected $_table_name="service";
    protected $_belongs_to=array( 
      "user"=>array("model"=>"users"),   
    );
}
