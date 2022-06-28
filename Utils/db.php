<?php

    function db_connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=projetexamen', 'root', '');
        return $pdo;
    }