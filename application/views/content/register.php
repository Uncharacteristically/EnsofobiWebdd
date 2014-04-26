<?php defined('SYSPATH') or die('No direct script access.');
    $form=new Helper_Form();
    $profileTypes=array(
        "business"=>1,
        "organization"=>2,
        "art"=>3,
    );
    $fields=array();
    $form->profileType=$profileTypes[$profileType];
    $formLocal=$form->renderForm($fields,"Register Profile");
    echo "<form class='mvcform' method='post'>";
    echo $formLocal;
    echo "<label>&nbsp;</label>".Form::button('save', "Register", array('type' => 'submit'))."</form>";
?>