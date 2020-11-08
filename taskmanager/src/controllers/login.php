<?php

function auth($db,$uname,$pass):bool{
        try{   
            //preparem sentència
            $stmt=$db->prepare('SELECT * FROM users WHERE name=:uname LIMIT 1');
            $stmt->execute([':uname'=>$uname]);
            $count=$stmt->rowCount();
            $row=$stmt->fetchAll(PDO::FETCH_ASSOC);  
            if($count==1){       
                $user=$row[0];
                $res=password_verify($pass,$user['password']);                             
                if ($res){
                    $id=$user['id'];
                    setcookie("userId", $id, time()+36000,"/");
                    /*if(!isset($_COOKIE['userId'])){
                        setcookie("userId", $id, time()+36000);
                    } else {setcookie("userId", $id, time()+36000);}*/                    
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }catch(PDOException $e){
                return false;
            }
    }