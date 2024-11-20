<?php
try{
    $pdo = new PDO("my:host=localhost;dbname=ernes", "root", "");

    $sql = "ALTER TABLE users ADD email VARCHAR(250)";

    $pdo -> exec($sql);
    echo "Column created succesfully";
    }catch(PDOException $e){
        echo "error creating column: ". $e->getmessage();
    }
?>