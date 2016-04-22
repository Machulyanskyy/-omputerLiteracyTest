<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Welcome extends Controller_Template {
    
    public $template = 'main';
   
    public function action_index()
    {
        $content = Request::factory('users')->execute();
        $this->template->content = $content;
    }
    
} // End Welcome
