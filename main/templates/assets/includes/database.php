<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'u669930098_users');
    define('USER', 'u669930098_Antoine');
    define('PASS', '7;ga$iBO7[Wf');
    
    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }
    