<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 20.12.2017
 * Time: 17:41
 */

class Model_Portfolio extends Model
{

    public function getPortfolio(){

        $result = $this->db->query('SELECT * FROM portfolio');
        $result_object = $result->fetchAll();
        return $result_object;
    }
}