<?php
include '../config/database/database_connection.php';
include '../config/traitement/lien_db.php';

if (isset($_POST['send'])) {
    if(!empty($_POST['lien'])){
        $lien = $_POST['lien'];

        addLien($lien);
        $successMessage = "Lien créé avec succès!";
        header("Location: ../views/tables-base-url.php?message=".$successMessage);
        exit();
    }else $errorMessage = "Veuillez remplir tous les champs.";


}