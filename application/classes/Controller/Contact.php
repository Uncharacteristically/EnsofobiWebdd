<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Template {
    public $template="site";
	public function action_index()
	{
        $this->template->subTitle="Contact Pages";
        $this->template->mainContent=View::factory("content/contact");
	}

} // End Home