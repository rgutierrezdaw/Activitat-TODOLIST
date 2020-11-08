<?php
ini_set('display_errors', 'On');

session_start();

define('APP', __DIR__);

require APP.'/src/route.php';
//enrutamiento query string http://taskmanager?url=login
$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';
//redirigir a ruta capturada
require APP.'/start.php';

?>
