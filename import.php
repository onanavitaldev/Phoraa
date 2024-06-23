<?php
    // Include the config file of Database
    include('config/config.php');

    // Vérifie si le formulaire a été soumis
    if (isset($_POST["save"])) {
        // Data
        $title = htmlspecialchars($_POST['title']);
        $category = htmlspecialchars($_POST['category']);
        $path_img = htmlspecialchars($_POST['img_path']);

        // Dossier de destination pour les vidéos uploadées
        $targetDir = "Phoraa/";
        $targetFile = $targetDir . basename($_FILES["path_img"]["name"]);
        $uploadOk = 1;
        $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérifie si le fichier existe déjà
    if (file_exists($targetFile)) {
        echo "Désolé, le fichier existe déjà.";
        $uploadOk = 0;
    }

    // Vérifie la taille de la vidéo
    if ($_FILES["path_img"]["size"] > 5550000) {
        echo "Désolé, votre fichier est trop volumineux.";
        $uploadOk = 0;
    }

    // Autorise certains formats de fichiers
    if ($imgFileType != "jpeg" && $imgFileType != "jpg" && $imgFileType != "png") {
        echo "Désolé, seuls les fichiers MP4, AVI, MKV et MOV sont autorisés.";
        $uploadOk = 0;
    }

    // Vérifie si $uploadOk est à 0 pour une raison quelconque
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.";
    // Si tout est correct, télécharge le fichier
    } else {
        if (move_uploaded_file($_FILES["path_img"]["tmp_name"], $targetFile)) {

        // Insérer le chemin de la vidéo dans la base de données MySQL
        $path_img = mysqli_real_escape_string($mysqli, $targetFile);
        $sql = "INSERT INTO all_img (title, category, img_path) VALUES ('$title', '$category', '$path_img')";

        if ($mysqli->query($sql) === TRUE) {
            header("Location:success.php"); 
        } else {
            echo "Erreur lors de l'insertion dans la base de données : " . $mysqli->error;
        }
        } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
        }
    }

    // Ferme la connexion à la base de données
    $mysqli->close();
    }
?>