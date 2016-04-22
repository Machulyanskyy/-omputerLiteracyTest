<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Questions extends Model
{
    
    public function get_quest()
    {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        return $connection->query(' select  LEVEL, t.QA_TEXT,t.QA_ID, t.QA_QUESTION_ID from QUESTANS t
                                        start with t.qa_id < 1000
                                        connect by  prior t.qa_id = t.qa_question_id 
                                        ORDER SIBLINGS BY QA_ID;')->as_array();
        //print_arr($results);
    }
 /*   public function check_answer() {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        return $connection->query(' select QA_ID, QA_QUESTION_ID,QA_ANSWER_TRUE from QUESTANS t
                                        start with t.qa_id < 1000
                                        connect by  prior t.qa_id = t.qa_question_id 
                                        ORDER SIBLINGS BY QA_ID;')->as_array();
        
    }*/
    
    //Функция Влада, трогать опасно
    function print_arr($arr){
	echo '<pre>'  . print_r($arr, true) . '</pre>';
    }
    
    public function get_all_weight()
    {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        return $connection->query(' select  SUM(qa_weight) as WEIGHT
                                    FROM QUESTANS 
                                    WHERE qa_id < 10000;')->as_array();
    }        
    
    public function get_weight($id_array)
    {
        $list = implode(',', $id_array);
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        return $connection->query(" Select SUM(q1.qa_weight) as WEIGHT
                                    from questans q1
                                    join questans q2 
                                    on q1.qa_id = q2.qa_question_id 
                                    WHERE q2.qa_id IN ($list) AND q2.qa_answer_true = 1;")->as_array();
    }
    
    public function save_answers($id_array,$result,$u_id)
    {
        $builder = DB_SQL::update('default')
            ->table('USER_QA')
            ->set('U_ANSW', $id_array)
            ->set('U_RES', $result)
            ->where('U_ID', '=', $u_id);
        $builder->statement();
        $builder->execute();
    }
}