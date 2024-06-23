<?php
    $mysqli = new mysqli('localhost', 'root', '', 'phoraa');

    if ($mysqli->connect_errno) {
        echo "Échec de la connexion à la base de données : " . $mysqli->connect_error;
        exit();
    }
?>