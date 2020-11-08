<?php

include 'connect.php';
include APP.'/config.php';
include 'loadtask.php';

$dataTask=[];
$tasks="";
$db=connectMysql($dbname, $dbuser, $dbpass);
    if(showTasks($db, (int)$_COOKIE['userId'], $dataTask)){
      if($dataTask != 0){
          foreach ($dataTask as $task){
            $tasks.="<div class='d-flex flex-column border tasca'>
                      <h3>".$task['taskName']."</h3>
                      <p>".$task['description']."</p>
                      <p>Data d'entrega: ".$task['uploadDate']."</p>
                    </div>";
          }
      } else {
        $tasks.="<div class='d-flex flex-column'>
                  <h3>Encara no tens cap tasca.</h3>
                </div>";
      }
        
  }
