<?//php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Users extends Controller_Welcome {
 
    public function action_login()
    {
        // Login Form View
        $this->template->content = View::factory('login');
    }
 
    public function action_test()
    {
        echo "bibka";
        
        /*$content = View::factory('login');
        $this->template->content = $content;*/
    }
}