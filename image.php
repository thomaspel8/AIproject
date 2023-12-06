<?php
require 'function.php'; // Assurez-vous que le fichier function.php est correctement inclus

// Vérifie si le paramètre imageName est défini dans la requête POST
if(isset($_POST['imageName'])){
    $imageName = $_POST['imageName'];
    $imagePath = 'img/' . $imageName;

    if(file_exists($imagePath)) {
        // Supprime l'image du serveur
        unlink($imagePath);

        // Réponse réussie pour la requête AJAX
        echo "success";
    } else {
        // Réponse en cas d'erreur (l'image n'existe pas)
        echo "error";
    }

    exit; // Arrête l'exécution du script après la gestion de la requête AJAX
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Image Database</title>
</head>
<link rel="stylesheet" href="style.css">
<style media="screen">
    #delete {
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        background-color: #FF0000;
        color: #ffffff;
    }

    table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

    table, th, td {
            border: 1px solid #ddd;
        }

    th, td {
            padding: 15px;
            text-align: center;
        }

    th {
            background-color: rgb(9, 8, 8);
            color: #fff;
        }
</style>

<body>

    <header class="header">
        <div class="container d-flex">
            <div class="logo" id="logo">
                Gallery
            </div>
            <nav class="navbar ">
                    <ul class="menu list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">Webcam</a></li>
                        <li><a href="index.php#portfolio">Photos</a></li>
                        <li><a href="index.php#skills">About us</a></li>
                        <li><a href="image.php">Gallery</a></li>
                        <li><a href="album.php">Album</a></li>
                        <li><a href="dossier.php">Dossier</a></li>
                    </ul>
            </nav>
        </div>
    </header>

    <?php
    $table = []; // Initialisez le tableau avant de l'utiliser

    // Récupère les images du dossier img
    $images = glob('img/*.jpeg');

    // Parcours les images
    foreach ($images as $image) {
        // Récupère le nom de l'image
        $imageName = basename($image);

        // Récupère la date et l'heure de l'image
        $imageDate = date('Y-m-d H:i:s', filemtime($image));

        // Ajoute l'image au tableau
        $table[] = [
            'id' => count($table) + 1,
            'imageName' => $imageName,
            'imageDate' => $imageDate,
        ];
    }

    // Affiche le tableau
    echo '<table border = 1 cellspacing=0 cellpadding=10>';
    // Ajout de la ligne de titres
    echo '<tr>';
    echo '<th>#</th>';
    echo '<th>Data & Time</th>';
    echo '<th>Image</th>';
    echo '<th>Action</th>'; // Nouvelle colonne pour le bouton Delete
    echo '</tr>';
    foreach ($table as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['imageDate'] . '</td>';
        echo '<td><img src="img/' . $row['imageName'] . '" alt="Image" max-width: "100%" height: "auto" display: "block" margin: "0 auto"></td>';
        echo '<td><button type="button" onclick="deleteImage(\'' . $row['imageName'] . '\');" id="delete">Delete</button></td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

<!--footer-->
<footer>

<div class="container">
  <div class="grid">
    <div class="grid__item">
      <p>Project AI</p>
    </div>

    <div class="grid__item">
      <p>Copyright © Project AI. All Rights Reserved. Designed by Thomas Pelletier in 2023</p>
    </div>
  </div>
</div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function deleteImage(imageName) {
        if (confirm('Do you want to delete the image ?')) {
            // Utilisation de jQuery pour la requête AJAX
            $.ajax({
                url: 'image.php',
                type: 'post',
                data: {
                    imageName: imageName,
                },
                success: function (data) {
                    // Vérifie la réponse du serveur
                    if (data === "success") {
                        // Actualise la page si la suppression est réussie
                        location.reload();
                    } else {
                        alert('Erreur lors de la suppression de l\'image.');
                    }
                },
                error: function () {
                    alert('Erreur lors de la requête AJAX.');
                },
            });
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function(){
        // Gestion du clic sur le logo
        $("#logo").click(function() {
            // Faire défiler la page vers le haut avec un effet glissant
            $('html, body').animate({
                scrollTop: 0
            }, 800); // 800 est la durée de l'animation en millisecondes
        });
    });
</script>

</html>