<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 20.12.2017
 * Time: 18:36
 */

class Model_Article extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM articles');
        $result_object = $result->fetchAll();
        return $result_object;
    }

    public function getId($id)
    {
        $sql = 'SELECT * FROM articles WHERE id=:id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}