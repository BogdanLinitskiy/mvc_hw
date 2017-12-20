<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 20.12.2017
 * Time: 18:36
 */

class Model_Article extends Model
{

    public function getArticle(){

        $result = $this->db->query('SELECT * FROM articles');
        $result_object = $result->fetchAll();
        return $result_object;
    }
}