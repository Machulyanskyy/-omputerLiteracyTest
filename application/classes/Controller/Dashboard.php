<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Dashboard extends Controller {

    public function action_index()
    {  
        // Login Form View
       
        $role = Session::instance()->get('u_role');
        if($role == '0' || $role == null) return $this->action_redirect();
        
        $data['list'] = Model::factory('Dashboard')->get_questions();
        $data['users'] = Model::factory('Dashboard')->get_users();
        //print_r($data['users']);
        //print_r(unserialize($data['users']));
        /*$array['answer'] = array();
        $data['quest_coun'] = 0;
        foreach($data['users'] as $users) 
        {
            if($users['U_ANSW'] !== NULL && $data['quest_coun']  == 0) $data['quest_coun']  = sizeof(unserialize($users['U_ANSW']));
            array_push($array['answer'], unserialize($users['U_ANSW']));
        }
        $data['wrong_answer'] = Model::factory('Dashboard')->wrong_answer($array['answer']);
        print_r($data['wrong_answer']);*/
        //$quest_count = end($array['answer']);
        //$quest_count += 1;
        //print_r(($data['list']));
        //$data['stat'] = Model::factory('Dashboard')->get_wrong_answers();
        $end = end($data['list']);
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
        print_r($id);
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
        //echo $a_id . "  " . $text . "  " . $id . "  " . $check;
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
    
    public function action_user_test()
    {
        $id = $this->request->post('id');
        $data = Model::factory('Dashboard')->get_user_test($id);
        $res['count_all_questions'] = count(unserialize($data[0]['U_ANSW']));
        $res['result'] = $data[0]['U_RES'];
        //print_r(($data));
        /*$data['quest_coun'] = 0;*/
        /*$answer = array();
        foreach($data['users'] as $users) 
        {
           
            array_push($answer, unserialize($users['U_ANSW']));
        }*/
        //print_r(unserialize($data['users'][0]['U_ANSW']));
        $res['wrong_answers'] = Model::factory('Dashboard')->wrong_answers(unserialize($data[0]['U_ANSW']));
        $res['count_wrong_answers'] = count($res['wrong_answers']);
        //print_r($data['wrong_answers']);
        echo json_encode($res); 
    }
    
    public function action_generate_pdf()
    {
        /*$data = $this->request->post();
        print_r($data);*/
        $html = '<p>bibka</p>';
        $mpdf = Kohana_MPDF::factory('pdf/example');

    }
    
    public function action_open_test() 
    {
        $id = $this->request->post();
        Model::factory('Dashboard')->open_test($id);
        echo json_encode('success'); 
    }
}