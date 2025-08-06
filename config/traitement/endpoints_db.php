<?php

include_once __DIR__ . '/../database/database_connection.php';


function addEndpoints($lien, $param, $methode, $rep){
    global $connection;
    $query = "INSERT INTO endpoints (lien_end, parametre, methode_end, reponse) values (?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien, $param, $methode, $rep]);
    $stmt -> closeCursor();
}

function getAllEndpoints(){
    global $connection;
    $query = "SELECT endpoints.id, lien.base_url AS liens, parametre, methode.methode_name AS methode, reponse
         FROM endpoints INNER JOIN lien ON endpoints.lien_end=lien.id INNER JOIN methode ON
         endpoints.methode_end=methode.id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function deleteEndpoints($connection, $id) {
    $query = "DELETE FROM endpoints WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$id]);
    $stmt->closeCursor();
}

function editEndpoints($lien, $param, $methode, $rep, $id){
    global $connection;
    $query = "UPDATE endpoints SET lien_end=?, parametre=?, methode_end=?, reponse=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien, $param, $methode, $rep, $id]);
    $stmt -> closeCursor();
}

function getEndById($id) {
    global $connection;
    $query = "SELECT * FROM endpoints WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$id]);
    return $stmt;
}