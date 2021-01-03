<?php 


function conn() {
    try{
        $arr = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ];

        $pdo = new PDO('mysql:host=localhost;dbname=ec', 'root', '', $arr);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch( PDOException $e) {
        //when any error happend
        echo 'u have not internet' . $e->getMessage();
    }
}

