<?php

require 'register.php';
include 'connect.php';
include '../../config.php';

$data=[];
$newuser=filter_input(INPUT_POST,'newuser');
$newpwd=filter_input(INPUT_POST,'newpwd');

if($newuser != null && $newpwd != null){
    $pwd=password_hash($newpwd, PASSWORD_BCRYPT, ["cost"=>4]);
    $data=["username"=>$newuser, "password"=>$pwd];
    $db=connectMysql($dbname, $dbuser, $dbpass);
    if($db){     
        $register=register($db,$data);
        if($register == true){
            header('location:/?url=home');
        } else {echo "error";}
    }
}