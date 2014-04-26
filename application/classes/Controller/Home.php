<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {
    public $template="site";
	public function action_index()
	{
            $this->template->mainContent=View::factory("content/home");
    }

} // End Home