<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Public {
	public function action_index()
	{
        $this->template->subTitle="About Page";
        $pageTitle="About <span>Ensofobi</span>";
        $this->template->mainContent=View::factory("content/generic")->bind("loremIpsum",$this->loremIpsum)->bind("pageTitle",$pageTitle);
	}

} // End Home