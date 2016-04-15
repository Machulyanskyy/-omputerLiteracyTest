<?//php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Dashboard extends Controller {

    public function action_index()
    {
        // Login Form View
        $this->response->body(View::factory('dashboard'));
    }
    
    public function action_save()
    {
        $data = $this->request->post();
        print_r($data);
    }
}