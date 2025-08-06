<?php

// include '../database/database_connection.php';

function addUser($nom, $prenom, $email, $pwd){
    global $connection;
    $query = "INSERT INTO user (nom, prenom, email, motdepasse, username) values (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$nom, $prenom, $email, $pwd]);
    $stmt -> closeCursor();
}

function getUserByUsername($connection, $username, $mdp){
    $query = "SELECT * FROM user WHERE username = ? AND motdepasse = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute([$username, $mdp]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    return $user;
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

function editUser($id, $nom, $prenom, $email, $pwd, $username){
    global $connection;
    $query = "UPDATE user SET nom=?, prenom=?, email=?, motdepasse=?, username=? where id = ?";
    $stmt = $connection->prepare($query);
    $stmt -> execute([$nom, $prenom, $email, $pwd, $username, $id]);
    $stmt -> closeCursor();
}