<?php

require_once '../application/core/Model.php';

$pdo = new Model();
try{
    $sqlQuery ='CREATE TABLE portfolio(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    year DATE,
    url VARCHAR (255),
    description VARCHAR(255)
) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
';
    $pdo->db->exec($sqlQuery);
}
catch(PDOException $e){
    die('Can\'t create table portfolio!<br>'.$e->getMessage());
}

try{
    $sqlQuery ='CREATE TABLE articles(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			title VARCHAR (255),
			text VARCHAR (255)
	) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
	';
    $pdo->db->exec($sqlQuery);
}catch(PDOException $e){
    die('Can\'t create table articles!<br>'.$e->getMessage());
}