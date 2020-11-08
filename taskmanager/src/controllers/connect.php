<?php

function connectMysql(string $dbname, string $userdb, string $passdb){ 
    try{ 
        $db = new PDO('mysql:host=127.0.0.1;dbname='.$dbname .';charset=utf8mb4', $userdb, $passdb); 
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); 
    }catch(PDOException $e){ 
        echo $e->getMessage(); 
        die; 
    } 
    return $db; 
} 