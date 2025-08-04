<?php

include '../database/database_connection.php';

function addFormat($format){
    global $connection;
    $query = "INSERT INTO format (format) values (?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$format]);
    $stmt -> closeCursor();
}

function getAllFormat(){
    global $connection;
    $query = "SELECT * FROM format";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteFormat($id){
    global $connection;
    $query = "DELETE FROM format where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editFormat($format){
    global $connection;
    $query = "UPDATE format SET format? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$format]);
    $stmt -> closeCursor();
}