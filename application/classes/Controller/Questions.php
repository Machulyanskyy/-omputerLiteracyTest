<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Questions extends Controller {
        

    public function action_index()
    {
       $data['list'] = Model::factory('Questions')->get_quest();
       // array_unshift($data, "list");
       // print_r($data);
        $this->response->body(View::factory('quest', $data));
    }
    
    public function action_result()
    {
        $data = $this->request->post();
        //print_r($data);
        $array['answer'] = array();
        foreach($data as $answ) array_push($array['answer'], $answ[0]);
        
        $weight = Model::factory('Questions')->get_all_weight();
        $arr = Model::factory('Questions')->get_weight(array_values($array['answer']));
        $result = round($arr[0]['WEIGHT'] / $weight[0]['WEIGHT'],2) * 100;
        $u_id = Session::instance()->get('u_id');
        Model::factory('Questions')->save_answers(serialize(array_values($array['answer'])), $result, $u_id);
    }

} 