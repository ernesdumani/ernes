<?php
try{
    $pdo = new PDO("my:host=localhost;dbname=ernes", "root", "");

    $sql = "DROP TABLE users";

    $pdo -> exec($sql);
    echo "table dropped succesfully";
    }catch(PDOException $e){
        echo $e->getmessage();
    }
?>