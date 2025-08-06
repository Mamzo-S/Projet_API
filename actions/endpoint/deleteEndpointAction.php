<?php

include '../../config/traitement/endpoints_db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    global $connection;
    deleteEndpoints($connection, $id);
    $successMessage = "Endpoint supprimé avec succès!";
    header("Location: ../../views/tables-endpoints.php?message=".$successMessage);
    exit();
}