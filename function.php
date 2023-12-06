<?php
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d") . "-" . date("h.i.sa") . '.jpeg';
    move_uploaded_file($tmpName, 'img/' . $imageName);
?>