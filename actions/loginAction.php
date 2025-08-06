<?php
include '../config/database/database_connection.php';
include '../config/traitement/user_db.php';

session_start();

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['mdp'])) {
        $username = $_POST['username'];
        $mdp = $_POST['mdp'];

        $user = getUserByUsername($connection, $username, $mdp);

        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['Dernier_activite'] = time();
            header('Location: ../index.php');
            exit();
        } else {
            $errorMessage = "Username ou mot de passe incorrect.";
        }
    } else {
        $errorMessage = "Veuillez remplir tous les champs.";
    }
}
