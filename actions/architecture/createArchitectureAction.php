<?php
include '../config/database/database_connection.php';
include '../config/traitement/architecture_db.php';

if (isset($_POST['send'])) {
    if(!empty($_POST['archi']) && !empty($_POST['format']) && !empty($_POST['hed'])){
        $archi = $_POST['archi'];
        $format = $_POST['format'];
        $header = $_POST['hed'];

        addArchitecture($archi, $format, $header);
        $successMessage = "Architecture créée avec succès!";
        header("Location: ../views/tables-architecture.php?message=".$successMessage);
        exit();
    }else $errorMessage = "Veuillez remplir tous les champs.";


}