<?php

include '../../config/traitement/architecture_db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // global $connection;
    deleteArchitecture($id);
    $successMessage = "Architecture supprimée avec succès!";
    header("Location: ../../views/tables-architecture.php?message=".$successMessage);
    exit();
}