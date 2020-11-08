<?php

function newTask($db, $taskName, $taskDescription, $taskDate, $userId): bool{
    $stmt=$db->prepare("INSERT INTO tasks (taskName, description, uploadDate, userId) VALUES (?, ?, ?, ? )");
    $stmt->bindParam(1, $taskName);
    $stmt->bindParam(2, $taskDescription);
    $stmt->bindParam(3, $taskDate);
    $stmt->bindParam(4, $userId);
    if($stmt->execute()){
       return true; 
    }else {
        return false;
    }
}

