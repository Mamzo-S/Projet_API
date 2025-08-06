<?php

include_once __DIR__ . '/../database/database_connection.php';

function addLien($lien){
    global $connection;
    $query = "INSERT INTO lien (base_url) values (?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien]);
    $stmt -> closeCursor();
}

function getAllLien(){
    global $connection;
    $query = "SELECT * FROM lien";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function deleteLien($id){
    global $connection;
    $query = "DELETE FROM lien where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editLien($lien){
    global $connection;
    $query = "UPDATE lien SET base_url=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien]);
    $stmt -> closeCursor();
}