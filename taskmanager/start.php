<?php

include 'config.php';
require 'src/controllers/connect.php';

$db=connectMysql($dbname, $dbuser, $dbpass);
$sql=file_get_contents('taskmanager.sql');

try{
    $db->exec($sql);
}
catch(PDOException $e){
    die($e->getMessage());
}