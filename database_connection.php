<?php
    $host = 'localhost';
    $dbname = 'test';
    $user = 'root';
    $pass = '';

    try{
        $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
    }catch(PDOException $e){
        print 'Database connection failed: <br>' . $e->getMessage();
        die();
    }
?>
