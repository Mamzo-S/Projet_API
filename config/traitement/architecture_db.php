<?php

include '../database/database_connection.php';

function addArchitecture($archi, $format, $header){
    global $connection;
    $query = "INSERT INTO architecture (architecture_name, format_donnee, header) values (?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$archi, $format, $header]);
    $stmt -> closeCursor();
}

function getAllArchitecture(){
    global $connection;
    $query = "SELECT architecture.id, architecture_name, format.format as format_donnees, 
    header FROM architecture INNER JOIN format ON architecture.format_donnee = format.id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteArchitecture($id){
    global $connection;
    $query = "DELETE FROM architecture where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editArchitecture($id, $archi, $format, $header){
    global $connection;
    $query = "UPDATE architecture SET architecture_name=? format_donnee=? header=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$archi, $format, $header, $id]);
    $stmt -> closeCursor();
}