<?php

include '../database/database_connection.php';

function addEndpoints($lien, $param, $methode, $rep){
    global $connection;
    $query = "INSERT INTO endpoints (lien_end, parametre, methode_end, reponse) values (?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$lien, $param, $methode, $rep]);
    $stmt -> closeCursor();
}

function getAllEndpoints(){
    global $connection;
    $query = "SELECT * FROM endpoints";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteEndpoints($id){
    global $connection;
    $query = "DELETE FROM endpoints where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editEndpoints($id, $libelle, $desc){
    global $connection;
    $query = "UPDATE endpoints SET lien_end=?, parametre=?, methode_end=?, reponse=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$libelle, $desc, $id]);
    $stmt -> closeCursor();
}