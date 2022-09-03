<?php
    $host = 'localhost';
    $dbname = 'test2';
    $user = 'root';
    $pass = '';

    try{
        $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
        print 'OK';
    }catch(PDOException $e){
        print 'NO';
        die();
    }
?>