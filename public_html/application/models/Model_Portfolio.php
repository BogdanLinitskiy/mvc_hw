<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 20.12.2017
 * Time: 17:41
 */

class Model_Portfolio extends Model
{

    public function getData()
    {
        $result = $this->db->query('SELECT * FROM portfolio');
        $result_object = $result->fetchAll();
        return $result_object;
    }
    public function getId($id)
    {
        $sql = 'SELECT * FROM portfolio WHERE id=:id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}