<?php
include '../config/database/database_connection.php';
include '../config/traitement/endpoints_db.php';

if (isset($_POST['send'])) {
    if(!empty($_POST['lien']) && !empty($_POST['param']) && !empty($_POST['methode']) && !empty($_POST['rep'])){
        $lien = $_POST['lien'];
        $param = $_POST['param'];
        $methode = $_POST['methode'];
        $rep = $_POST['rep'];

        addEndpoints($lien, $param, $methode, $rep);
        $successMessage = "Endpoint créé avec succès!";
        header("Location: ../views/tables-endpoints.php?message=".$successMessage);
        exit();
    }else $errorMessage = "Veuillez remplir tous les champs.";


}