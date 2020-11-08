<?php
//require '/home/linux/projectes/taskmanager/src/render.php';

require APP.'/src/render.php';
include APP. '/src/controllers/loadtaskcontroller.php';





echo render('userpage', ['tasks'=>$tasks]);


