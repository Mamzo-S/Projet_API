<?php

include '../database/database_connection.php';

function addUser($nom, $prenom, $email, $pwd){
    global $connection;
    $query = "INSERT INTO user (nom, prenom, email, motdepasse) values (?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$nom, $prenom, $email, $pwd]);
    $stmt -> closeCursor();
}

function getAllUser(){
    global $connection;
    $query = "SELECT * FROM user";
    $stmt = $connection->prepare($query);
    $stmt->execute();
}

function deleteUser($id){
    global $connection;
    $query = "DELETE FROM user where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute($id);
    $stmt -> closeCursor();
}

function editUser($id, $nom, $prenom, $email, $pwd){
    global $connection;
    $query = "UPDATE user SET nom=?, prenom=?, email=?, motdepasse=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$nom, $prenom, $email, $pwd, $id]);
    $stmt -> closeCursor();
}