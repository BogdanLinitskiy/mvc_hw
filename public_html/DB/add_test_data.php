<?php
require_once '../application/core/Model.php';
$pdo = new Model();

try{
$sql = 'INSERT INTO portfolio SET
year = "2017-12-13",
url = "https://github.com/BogdanLinitskiy",
description = "this is my repository"
';
$pdo->db->exec($sql);
}catch(PDOExeption $e){
echo "can\'t add test data to table portfolio" . $e;
}

try{
    $sql = 'INSERT INTO portfolio SET
year = "2017-12-22",
url = "https://bitbucket.org/unitsp",
description = "this is reposetory of Alexandr"
';
    $pdo->db->exec($sql);
}catch(PDOExeption $e){
    echo "can\'t add test data to table portfolio" . $e;
}

try{
    $sql = 'INSERT INTO articles SET
title = "Is ERP Software Worth the Cost?",
text = "Enterprise resource planning (ERP) software can be used for a variety of applications, across multiple departments."
';
    $pdo->db->exec($sql);
}catch(PDOExeption $e){
    echo "can\'t add test data to table articles" . $e;
}

try{
    $sql = 'INSERT INTO articles SET
title = "some test article",
text = "some test article text"
';
    $pdo->db->exec($sql);
}catch(PDOExeption $e){
    echo "can\'t add test data to table articles" . $e;
}