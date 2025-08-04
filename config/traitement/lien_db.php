<?php

include '../database/database_connection.php';

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
    $query = "UPDATE lien SET format? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien]);
    $stmt -> closeCursor();
}