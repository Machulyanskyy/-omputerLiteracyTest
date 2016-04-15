<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_QUESTANS extends Model
{
    protected $_QUESTANS = 'questions';
 
    /**
     * Get all questions
     * @return array
     */
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_QUESTANS;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
}