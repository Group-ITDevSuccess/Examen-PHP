<?php

    function db_connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=examen_php', 'root', '');
        return $pdo;
    }