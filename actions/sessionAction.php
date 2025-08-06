<?php

session_start();
define('temps_expiration', 10);

$limite_de_temps = 600;

if(isset($_SESSION['Dernier_activite'])){
    $temps_d_inactivite = time() - $_SESSION['Dernier_activite'];
    if($temps_d_inactivite > $limite_de_temps){
        session_unset();
        session_destroy();
        header('location: ../../views/login.php');
        $errorMessage = "Votre session a expire.";
        exit();
    }
}

