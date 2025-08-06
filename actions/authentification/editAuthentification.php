<?php
include '../config/database/database_connection.php';
include '../config/traitement/authentification_db.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['send'])) {
    if(!empty($_POST['meth']) && !empty($_POST['lien']) && !empty($_POST['bod'])){
        $methode = $_POST['meth'];
        $lien = $_POST['lien'];
        $body = $_POST['bod'];

        editAuthentification($methode, $lien, $body, $id);
        $successMessage = "Authentification modifiée avec succès!";
        header("Location: ../views/tables-auth.php?message=".$successMessage);
        exit();
    }else $errorMessage = "Veuillez remplir tous les champs.";


}