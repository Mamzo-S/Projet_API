<?php

include '../database/database_connection.php';

function addAuthorization($lib){
    global $connection;
    $query = "INSERT INTO type_authorization (libelle) values (?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lib]);
    $stmt -> closeCursor();
}

function getAuthorization(){
    global $connection;
    $query = "SELECT * FROM type_authorization";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteAuthorization($id){
    global $connection;
    $query = "DELETE FROM type_authorization where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editAuthorization($lib){
    global $connection;
    $query = "UPDATE type_authorization SET libelle? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lib]);
    $stmt -> closeCursor();
}