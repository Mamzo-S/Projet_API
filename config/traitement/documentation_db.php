<?php

include '../database/database_connection.php';

function addDocumentation($libelle, $desc){
    global $connection;
    $query = "INSERT INTO documentation (libelle, descriptions) values (?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$libelle, $desc]);
    $stmt -> closeCursor();
}

function getAllDocumentation(){
    global $connection;
    $query = "SELECT * FROM documentation";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteDocumentation($id){
    global $connection;
    $query = "DELETE FROM documentation where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editDocumentation($id, $libelle, $desc){
    global $connection;
    $query = "UPDATE documentation SET libelle=? descriptions=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$libelle, $desc, $id]);
    $stmt -> closeCursor();
}