<?php
include '../config/database/database_connection.php';
include '../config/traitement/format_db.php';

if (isset($_POST['send'])) {
    if(!empty($_POST['format'])){
        $format = $_POST['format'];

        addFormat($format);
        $successMessage = "Format créé avec succès!";
        header("Location: ../views/tables-format-donnee.php?message=".$successMessage);
        exit();
    }else $errorMessage = "Veuillez remplir tous les champs.";


}