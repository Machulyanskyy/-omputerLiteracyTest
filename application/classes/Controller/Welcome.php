<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
    
    public $template = 'main';
    
    public function action_index()
    {
        $connection = DB_Connection_Driver::factory('default');
        $connection->open();
        //$connection = DB_Connection_Pool::instance()->get_connection('default');
        $results = $connection->query('SELECT * FROM USER_QA;');
        print_r($results);
        
        $content = View::factory('login');
        $this->template->content = $content;
    }
    
    
       
	public function action_test()
	{
            $db = Database::instance();
            $query = $this->db->query('select * from USER_QA');
            $query->result(false);
            print_r($query);
	}

 
} // End Welcome
