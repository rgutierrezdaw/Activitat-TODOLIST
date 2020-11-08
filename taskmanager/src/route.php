<?php

function getRoute():string{
    if(isset($_REQUEST['url'])){
        $url=$_REQUEST['url'];
    }else{
        $url='home';
    }
    switch($url){
        case 'login':
            return 'login';
        case 'home':
            return 'homecontroller';
        case 'userpage':
            return 'userpagecontroller';
        case 'adminpage':
            return 'admincontroller';
        case 'logoutcontroller':
            return 'home';
        case 'newtask':
            return 'newtaskcontroller';    
                        default:
        return 'home';
        //incluir todas las pàginas con las que vamos a tratar en nuestra app taskmamanger.
    }
}