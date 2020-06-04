<?php

// Lib: https://github.com/benmajor/PHP-Image-Resize

use BenMajor\ImageResize\Image;

require "vendor/autoload.php";

# Generate a new image resize object using a remote image:
$image = new Image($_FILES['image']['tmp_name']);

# Resize it (will produce a 300x300 thumb):
$image->resizeCrop(300);

# Output it to the browser:
$image->downloadJPEG("resize_crop.jpeg");

