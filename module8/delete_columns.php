<?php
try{
 $pdo = new PDO("my:host=localhost;dbname=ernes", "root", "");

 $sql = "ALTER TABLE users DROP COLUMN email";

 $pdo -> exec($sql);
 echo "Column deleted succesfully";
 }catch(PDOException $e){
     echo "error creating column: ". $e->getmessage();
 }
?>