<?php

include_once __DIR__ . '/../database/database_connection.php';


function addAuthentification($methode, $lien, $body){
    global $connection;
    $query = "INSERT INTO authentification (methode_auth, lien_auth, body) values (?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$methode, $lien, $body]);
    $stmt -> closeCursor();
}

function getAllAuthentification(){
    global $connection;
    $query = "SELECT authentification.id, lien.base_url AS liens, methode.methode_name AS methode, 
        authentification.body FROM authentification INNER JOIN lien ON 
        authentification.lien_auth = lien.id INNER JOIN methode ON authentification.methode_auth = methode.id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function deleteAuthentification($id){
    global $connection;
    $query = "DELETE FROM authentification where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$id]);
    $stmt -> closeCursor();
}

function editAuthentification($methode, $lien, $body, $id){
    global $connection;
    $query = "UPDATE authentification SET methode_auth=?, lien_auth=?, body=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$methode, $lien, $body, $id]);
    $stmt -> closeCursor();
}

function getAuthById($id){
    global $connection;
    $query = "SELECT * FROM authentification where id=?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$id]);
    return $stmt;
}