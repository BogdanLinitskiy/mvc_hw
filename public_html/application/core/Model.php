<?php


class Model
{
    public $db;

    public function __construct()
    {
        try{
        $db = new PDO('mysql:host=localhost;dbname=portfolios', 'jokes_member', '123');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'utf8' ");
        }catch (PDOException $e){
            die('Can\'t connect to Data Base!<br>'.$e->getMessage());
        }
        $this->db=$db;
    }

//        try{
//            $sqlQuery ='CREATE TABLE portfolio(
//			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//			year DATE,
//			url VARCHAR (255),
//			description VARCHAR(255)
//	) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
//	';
//            $db->exec($sqlQuery);
//        }
//        catch(PDOException $e){
//            die('Can\'t create table products!<br>'.$e->getMessage());
//        }
//    }
    public function getData(){
    }
    public function getId($id){

    }
}