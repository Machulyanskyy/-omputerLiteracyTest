<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Questions extends Controller {
        

    public function action_index()
    {
        //print_r('1' . Session::instance()->get('test-compelte'));
        if(Session::instance()->get('test-compelte') == true ) {
            print_r('In redirect function');
            //$this->redirect('Users');       
        }
        $role = Session::instance()->get('u_role'); 
        if($role == null) return $this->action_redirect();
        $data['list'] = Model::factory('Questions')->get_quest();
        $user_data = Model::factory('Questions')->get_user_data(Session::instance()->get('u_id'));
        $data['user_result'] = $user_data[0]['U_TOKEN'];
        if ($data['user_result'] == 1)
            $this->action_result(true);
        else
            $this->response->body(View::factory('quest', $data));
    }
    
    public function action_redirect()
    {
        $data['error'] = 'У вас недостатньо прав';
        $this->response->body(View::factory('redirect', $data));
    }
    
    public function action_result($flag = false)
    {   
        
        $array['answer'] = array();
        if($flag == false)
        {
            $data = $this->request->post();
            //print_r($data);
            foreach($data as $answ) array_push($array['answer'], $answ[0]);
            Session::instance()->set('test-compelte', true);
            print_r('2' . Session::instance()->get('test-compelte'));
        }
        else
        {
            $data = Model::factory('Dashboard')->get_user_test(Session::instance()->get('u_id'));
            $array['answer'] = unserialize($data[0]['U_ANSW']);
        }
        $weight = Model::factory('Questions')->get_all_weight();
        $arr = Model::factory('Questions')->get_weight(array_values($array['answer']));
        $wrong_answers = Model::factory('Questions')->get_wrong_answers($array['answer']);
        $user_data = Model::factory('Questions')->get_user_data(Session::instance()->get('u_id'));
        //данные результата для передачи на форму 
        $data['result'] = round($arr[0]['WEIGHT'] / $weight[0]['WEIGHT'],2) * 100;
        $data['count'] = $weight[0]['COUNT'];
        $data['wrong_answers_count'] = count($wrong_answers);
        $data['text_question'] = $wrong_answers;
        $data['user_data'] = $user_data[0];
        
        $u_id = Session::instance()->get('u_id');
        if($flag == false) Model::factory('Questions')->save_answers(serialize(array_values($array['answer'])), $data['result'], $u_id, date("Y-m-d"));
        $this->response->body(View::factory('result', $data));
    }

} 