<?php
function showTasks($db, $userId, &$dataTask):array{
    $stmt=$db->prepare("SELECT code, taskName, description, uploadDate FROM tasks WHERE userId = :userId");
    $stmt->execute([':userId'=>$userId]);
    $count=$stmt->rowCount();
    $dataTask=$stmt->fetchAll(PDO::FETCH_ASSOC);     
        if($count){          
            return $dataTask;
        }else{
            $data=["notask"];
            return $dataTask;
        }    
}

