<?php

include '../../config/traitement/authentification_db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // global $connection;
    deleteAuthentification($id);
    $successMessage = "Authentification supprimée avec succès!";
    header("Location: ../../views/tables-auth.php?message=".$successMessage);
    exit();
}