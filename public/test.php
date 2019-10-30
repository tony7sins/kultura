<?php

use app\Models\Gallery as Gallery;
require_once "../app/Models/gallery/Gallery.php";

$pics_array = require_once "../app/Models/gallery/galleryPics.php";

$gallery = new Gallery($pics_array);

// $gallery->printCarousel();
$gallery->printCarouselList();

?>
