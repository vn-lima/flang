<?php

try{
    $db_connection = new PDO("mysql:host=localhost;dbname=pac2;charset=utf8", "root", "");
}
catch(PDOexception $e){
    die("Erro ao conectar com o banco de dados ".$e->getMessage());
}
?>