<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Image Database</title>
</head>
<link rel="stylesheet" href="style.css">
<style media="screen">
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    /* Style des cellules du tableau */
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    /* Style des images à l'intérieur des cellules */
    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>

<body>

    <header class="header">
        <div class="container d-flex">
            <div class="logo" id="logo">
                Album
            </div>
            <nav class="navbar ">
                    <ul class="menu list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">Webcam</a></li>
                        <li><a href="index.php#portfolio">Photos</a></li>
                        <li><a href="index.php#skills">About us</a></li>
                        <li><a href="image.php">Gallery</a></li>
                        <li><a href="album.php">Album</a></li>
                    </ul>
            </nav>
        </div>
    </header>

    <?php
        $output = shell_exec('/opt/homebrew/bin/python3 rec_fac_ep2.py');
        $images = json_decode($output);

        echo '<table>';
        $rowCount = 0;

        foreach ($images as $image) {
            // Ouverture d'une nouvelle ligne du tableau après chaque troisième image
            if ($rowCount % 3 == 0) {
                echo '<tr>';
            }

            echo '<td>';
            echo '<img src="' . $image . '" alt="Visage reconnu">';
            echo '</td>';

            // Fermeture de la ligne du tableau après chaque troisième image
            if ($rowCount % 3 == 2) {
                echo '</tr>';
            }

            $rowCount++;
        }

        // Fermeture de la dernière ligne du tableau si le nombre d'images n'est pas un multiple de 3
        if ($rowCount % 3 != 0) {
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