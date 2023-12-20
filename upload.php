<?php
$uploadFolder = 'img/';

if ($_FILES['file']) {
    $filename = $_FILES['file']['name'];

    // Générer un nom d'image basé sur la date et l'heure actuelles
    $imageName = date("Y.m.d") . "-" . date("h.i.sa") . '.jpeg';
    $targetPath = $uploadFolder . $imageName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
        echo 'Image uploaded successfully.';
    } else {
        echo 'Error uploading image.';
    }
} else {
    echo 'No file received.';
}
?>
