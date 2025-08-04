<?php

include '../database/database_connection.php';

function addAuthentification($methode, $lien, $body){
    global $connection;
    $query = "INSERT INTO authentification (methode_auth, lien_auth, body) values (?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$methode, $lien, $body]);
    $stmt -> closeCursor();
}

function getAllAuthentification(){
    global $connection;
    $query = "SELECT authentification.id,  ";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteAuthentification($id){
    global $connection;
    $query = "DELETE FROM authentification where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editAuthentification($id, $methode, $lien, $body){
    global $connection;
    $query = "UPDATE authentification SET methode_auth=? lien_auth=? body=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$methode, $lien, $body, $id]);
    $stmt -> closeCursor();
}