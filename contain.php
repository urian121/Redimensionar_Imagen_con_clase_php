<?php

// Lib: https://github.com/benmajor/PHP-Image-Resize

use BenMajor\ImageResize\Image;

require "vendor/autoload.php";

$status = 'false';

try {
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
    $mimeType = $_FILES['image']['type'];

    # Generate a new image resize object using a upload image:
    $image = new Image($_FILES['image']['tmp_name']);

    if ($mimeType == "image/png" || $mimeType == "image/gif" || $mimeType == "image/svg+xml" || $mimeType == "image/svg") {
        $image->setTransparency(true); // agregar transparencia si el formato de imagen acepta transparencia
    } else {
        $image->setTransparency(false); // no agregar transparencia si el formato de la imagen no acepta transparencia
    }

    # Set the background to white:
    $image->setBackgroundColor('#ffffff');

    # Contain the image:
    $image->contain(300);

    $image->output("output"); // Asegurate que la carpeta donde lo vas a guardar permita lectura y escritura, tambien verifica sus carpetas padres

    # Renombrar la imagen genereda por el metodo output
    $timestamp = str_replace(array('.', ' '), '', microtime());
    rename($image->getOutputFilename(), 'output/'.$name.'-'.$timestamp.'.'.$extension);

    $status = 'true';
} catch (\Throwable $th) {
    $status = 'false';
}

header("Location: index.php?contain=".$status);
