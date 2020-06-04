<?php

// Lib: https://github.com/benmajor/PHP-Image-Resize

use BenMajor\ImageResize\Image;

require "vendor/autoload.php";

$status = 'true';

try {
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $name = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
    $mimeType = $_FILES['image']['type'];

    # Generate a new image resize object using a remote image:
    $image = new Image($_FILES['image']['tmp_name']);

    # Resize it (will produce a 300x300 thumb):
    $image->resizeCrop(300);

    $image->output("output"); // Asegurate que la carpeta donde lo vas a guardar permita lectura y escritura, tambien verifica sus carpetas padres

    # Renombrar la imagen genereda por el metodo output
    $timestamp = str_replace(array('.', ' '), '', microtime());
    rename($image->getOutputFilename(), 'output/'.$name.'-'.$timestamp.'.'.$extension);

} catch (\Throwable $th) {
    $status = 'false';
}

header("Location: index.php?crop=".$status);
