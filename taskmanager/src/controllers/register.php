<?php

function register($db, $data): bool{
    if($data){
        $newuser=$data["username"];
        $newpwd=$data["password"];
        $stmt=$db->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
        if($stmt->execute([':name'=> $newuser, ':password'=> $newpwd])){
            return true;
        }else{
            return false;
        }
    } else {
        return false;
    }
}