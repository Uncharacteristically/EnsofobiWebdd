<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Public {
    public function action_index()
    {
        $this->template->subTitle="Our Blog";
        $pageTitle="<span>Ensofobi</span> Blog";
        $this->template->mainContent=View::factory("content/generic")->bind("loremIpsum",$this->loremIpsum)->bind("pageTitle",$pageTitle);
    }

} // End Home