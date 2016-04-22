<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Dashboard extends Controller {

    public function action_index()
    {  
        // Login Form View
        $role = Session::instance()->get('u_role');
        //if($role == '0') return $this->action_redirect();
        
        $data['list'] = Model::factory('Dashboard')->get_questions();
        $data['users'] = Model::factory('Dashboard')->get_users();
        //print_r($users);
        $end = end($data['list']);
        //print_r($end);
        Session::instance()->set('last_quest', $end['QA_QUESTION_ID']);
        Session::instance()->set('last_answ', $end['QA_ID']);
        
        //print_r($data);
        $this->response->body(View::factory('dashboard', $data));
        
    }
    
    public function action_redirect()
    {
        $data['error'] = 'У вас недостатньо прав';
        $this->response->body(View::factory('redirect', $data));
    }

    
    public function action_save()
    {
        $data = $this->request->post();
        //print_r($data);
        $q_id = Session::instance()->get('last_quest');
        $q_id += 10;
        Model::factory('Dashboard')->save_qa($q_id, $data['quest'], '4', '0', null);
        Session::instance()->set('last_quest', $q_id);
        $index = 0;
        $a_id = Session::instance()->get('last_answ');
        foreach($data['answer'] as $answer)
        {
            $a_id += 10;
            //print_r($data['check-answ'][$index]);
            echo $a_id . '  ' . $q_id . '</br>';
            Model::factory('Dashboard')->save_qa($a_id, $answer, null, $q_id, $data['check-answ'][$index]);
            $index += 1;  
        }
        Session::instance()->set('last_answ', $a_id);
        echo json_encode('success');
    }
    
    public function action_remove_question()
    {
        $id = $this->request->post('id');
        Model::factory('Dashboard')->remove_question($id);
    }
    
    public function action_remove_answer()
    {
        $id = $this->request->post('id');
        Model::factory('Dashboard')->remove_answer($id);
    }
    
    public function action_change_qa() 
    {
        $id = $this->request->post('id');
        $text = $this->request->post('text');
        $arg = $this->request->post('arg');
        $type = $this->request->post('type');
        
        if      ($type == 'question')   Model::factory('Dashboard')->update_question($id, $text, $arg);
        elseif  ($type == 'answer')     Model::factory('Dashboard')->update_answer($id, $text, $arg);
    }
    
    public function action_get_qa()
    {
        $id = $this->request->post('id');
        $type = $this->request->post('type');
        if      ($type == 'question')   $data = Model::factory('Dashboard')->get_question($id);
        elseif  ($type == 'answer')     $data = Model::factory('Dashboard')->get_answer($id);
        //print_r(array('text' => $data[0]['QA_TEXT'], 'weight' => $data[0]['QA_WEIGHT']));
        //return array('text' => $data[0]['QA_TEXT'], 'weight' => $data[0]['QA_WEIGHT']);
        //return $data[0]['QA_TEXT'];
        echo json_encode($data[0]);
        //return $data;
    }
    
    public function action_save_answer() 
    {
        $id = $this->request->post('id');
        $text = $this->request->post('text');
        $check = $this->request->post('check');
        
        $a_id = Session::instance()->get('last_answ');
        $a_id += 10;
        Session::instance()->set('last_answ', $a_id);
        Model::factory('Dashboard')->save_qa($a_id, $text, null, $id, $check);
        echo json_encode($a_id); 
    }
    
    public function action_update_user()
    {
        $data = $this->request->post();
        Model::factory('Dashboard')->update_user($data['id'],$data['name'], $data['email'], $data['role']);
        echo json_encode('success'); 
    }
    
    public function action_get_user()
    {
        $id = $this->request->post('id');
        $u_data = Model::factory('Dashboard')->get_user($id);
        echo json_encode($u_data[0]); 
    }
    
    public function action_del_user() 
    {
        $id = $this->request->post('id');
        $u_data = Model::factory('Dashboard')->del_user($id);
        echo json_encode('success'); 
    }
}