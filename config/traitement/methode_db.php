<?php

include '../database/database_connection.php';

function addMethode($method){
    global $connection;
    $query = "INSERT INTO methode (methode_name) values (?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$method]);
    $stmt -> closeCursor();
}

function getMethode(){
    global $connection;
    $query = "SELECT * FROM methode";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteMethode($id){
    global $connection;
    $query = "DELETE FROM methode where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editMethode($method){
    global $connection;
    $query = "UPDATE methode SET methode_name? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$method]);
    $stmt -> closeCursor();
}