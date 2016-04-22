<?php defined('SYSPATH') or die('No direct script access.');

class Model_Autorisation extends Model
{

    public function search_role($U_EMAIL, $U_PASS) 
    {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        $results = $connection->query("select U_ROLE from USER_QA where (U_EMAIL = '{$U_EMAIL}' and U_PASS = '{$U_PASS}')");
        return $results[0]['U_ROLE'];
    }
    
    public function search_email($U_EMAIL)
    {
        $connection = DB_Connection_Pool::instance()->get_connection('default');
        $results = $connection->query("select U_EMAIL from USER_QA where (U_EMAIL = '{$U_EMAIL}')");
        return $results[0]['U_EMAIL'];
    }

    public function create_user($U_NAME, $U_EMAIL, $U_PASS)
    {
        $builder = DB_SQL::insert('default')
            ->into('USER_QA')
            ->column('U_NAME', $U_NAME)
            ->column('U_EMAIL', $U_EMAIL)
            ->column('U_PASS', $U_PASS)
            ->column('U_ROLE', 0);
        $sql = $builder->statement();
        $id = $builder->execute();
    }
}
