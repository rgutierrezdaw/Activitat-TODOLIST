<?php
include 'createtask.php';
include 'connect.php';
include '../../config.php';

$db=connectMysql($dbname, $dbuser, $dbpass);
$task=filter_input(INPUT_POST,'task');
$description=filter_input(INPUT_POST,'description');
$date=filter_input(INPUT_POST,'date');
$time=filter_input(INPUT_POST,'time');

$userId=(int)$_COOKIE['userId'];


if(newTask($db, $task, $description, $date, $userId)== true){
    header('location:/?url=userpage');
}