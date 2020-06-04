<?php

// Lib: https://github.com/benmajor/PHP-Image-Resize

use BenMajor\ImageResize\Image;

require "vendor/autoload.php";

# Generate a new image resize object using a remote image:
$image = new Image($_FILES['image']['tmp_name']);

# Set transparency to false (because we're using JPEG),
# and setting to tru would force a black background:
$image->setTransparency(false);

# Set the background to white:
$image->setBackgroundColor('#ffffff');

# Contain the image:
$image->contain(300, 300);

# Output it to the browser:
$image->downloadJPEG("contain.jpeg");

