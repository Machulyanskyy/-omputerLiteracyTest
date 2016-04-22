<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Dashboard extends Model
{
    //protected $_tableArticles = 'articles';
 
    /*public function get_()
    {
        $sql = "SELECT * FROM ". $this->_tableArticles;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }*/
    public function get_questions()
    {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        return $connection->query(' select  LEVEL, t.*  from QUESTANS t
                                        start with t.qa_id < 1000
                                        connect by  prior t.qa_id = t.qa_question_id 
                                        ORDER SIBLINGS BY QA_ID;')->as_array();
       // print_r($results);
    }
    
    public function get_users()
    {
        $builder = DB_SQL::select('default')
            ->from('USER_QA')
            ->column('U_NAME')
            ->column('U_EMAIL')
            ->column('U_ROLE')
            ->column('U_ID');
        $builder->statement();
        return $builder->query()->as_array();    
    }
    
    public function save_qa($qa_id, $quest, $weight, $quest_id, $answ_true)
    {
        $builder = DB_SQL::insert('default')
            ->into('QUESTANS')
            ->column('QA_ID', $qa_id)
            ->column('QA_TEXT', $quest)
            ->column('QA_WEIGHT', $weight)
            ->column('QA_QUESTION_ID', $quest_id)
            ->column('QA_ANSWER_TRUE', $answ_true);
        $builder->statement();
        $builder->execute();
    }
    
    public function remove_question($id_qa)
    {
        $builder = DB_SQL::delete('default')
            ->from('QUESTANS')
            ->where('QA_QUESTION_ID', '=', $id_qa)
            ->where('QA_ID', '=', $id_qa, 'OR');
        $builder->statement();
        $builder->execute();
        /*$connection = DB_Connection_Pool::instance()->get_connection('default');
        $connection->query('DELETE FROM QUESTANS WHERE QA_ANSWER_ID = '. $id_qa .' OR QA_ID = '. $id_qa .';');*/
        //$query = DB::delete('QUESTANS')->or_where('QA_QUESTION_ID', '=', $id_qa)->or_where('QA__ID', '=', $id_qa);
        /*$query = DB::query(Database::DELETE, 'DELETE FROM QUESTANS WHERE QA_ANSWER_ID = '. $id_qa .' OR QA_ID = '. $id_qa .';')
                   ->execute();*/
        //print_r($builder);
        //print_r($builder->execute());
    }
    
    public function remove_answer($id_qa)
    {
        $builder = DB_SQL::delete('default')
            ->from('QUESTANS')
            ->where('QA_ID', '=', $id_qa);
        $builder->statement();
        $builder->execute();
    }
    
    public function update_question($id, $text, $arg)
    {
        $builder = DB_SQL::update('default')
            ->table('QUESTANS')
            ->set('QA_TEXT', $text)
            ->set('QA_WEIGHT', $arg)
            ->where('QA_ID', '=', $id);
        $builder->statement();
        $builder->execute();
    }
    
    public function update_answer($id, $text, $arg)
    {
        $builder = DB_SQL::update('default')
            ->table('QUESTANS')
            ->set('QA_TEXT', $text)
            ->set('QA_ANSWER_TRUE', $arg)
            ->where('QA_ID', '=', $id);
        $builder->statement();
        $builder->execute();
    }
    
    public function get_question($id)
    {
        $builder = DB_SQL::select('default')
            ->from('QUESTANS')
            ->column('QA_TEXT')
            ->column('QA_WEIGHT')
            ->where('QA_ID', '=', $id);
        $builder->statement();
        return $builder->query()->as_array();    
    }
    
    public function get_answer($id)
    {
        $builder = DB_SQL::select('default')
            ->from('QUESTANS')
            ->column('QA_TEXT')
            ->column('QA_ANSWER_TRUE')
            ->where('QA_ID', '=', $id);
        $builder->statement();
        return $builder->query()->as_array();    
    }
    
    public function update_user($id, $name, $email, $role)
    {
        $builder = DB_SQL::update('default')
            ->table('USER_QA')
            ->set('U_NAME', $name)
            ->set('U_EMAIL', $email)
            ->set('U_ROLE', $role)
            ->where('U_ID', '=', $id);
        $builder->statement();
        $builder->execute();
    }   
    
    public function get_user($id)
    {
        $builder = DB_SQL::select('default')
            ->from('USER_QA')
            ->column('U_NAME')
            ->column('U_EMAIL')
            ->column('U_ROLE')
            ->where('U_ID', '=', $id);
        $builder->statement();
        return $builder->query()->as_array();  
    }
    
    public function del_user($id) 
    {
        $builder = DB_SQL::delete('default')
            ->from('USER_QA')
            ->where('U_ID', '=', $id);
        $builder->statement();
        $builder->execute();  
    }
}
