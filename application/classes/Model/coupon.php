<?php
Class Model_coupon extends ORM{
    protected $_table_name="coupon";
    protected $_belongs_to=array( 
      "user"=>array("model"=>"users"),  
      "photo"=>array("model"=>"photos"),  
    );
}
