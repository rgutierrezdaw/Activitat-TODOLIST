<?php
session_start();
include 'login.php';
include 'connect.php';
include '../../config.php';


$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$db=connectMysql($dbname, $dbuser, $dbpass);
$message="";
    if(auth($db, $username, $password) == true){
        if(!isset($_SESSION['user'])){
             $_SESSION['user']=ucfirst($username);
        } else {$_SESSION['user']=ucfirst($username);}       
        header('location:/?url=userpage');   
    }else {  
        $message="Usuari o contrasenya incorrectes";    
        header('location:/?url=home');
    }

