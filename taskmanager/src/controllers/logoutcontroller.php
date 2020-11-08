<?php


$logout=filter_input(INPUT_POST, 'logout');
if($logout){
  unset ($_SESSION['username']);
  setcookie('userId',null, time()-6000); //controlar esto en caso de querer recordar usuario
  header('location:/?url=home');  
}
