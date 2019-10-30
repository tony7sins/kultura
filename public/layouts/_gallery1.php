<?php
  use app\Models\Gallery as Gallery;
  require_once "../app/Models/gallery/Gallery.php";

  $pics_array = require_once "../app/Models/gallery/galleryPics.php";

              $gallery = new Gallery($pics_array);

  ?>

<section id="gallery" class="gallery">
  <div class="gallery_wrapper wrapper">
    <div class="header1">
      <span class="header1_name gallery_header">Галерея</span>
      <hr class="header_hr gallery_header-hr">
    </div>

      <div class="carousel_global services_carousel">

        <div id="CaroselGallery" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#CaroselGallery" data-slide-to="0" class="active"></li>
            <li data-target="#CaroselGallery" data-slide-to="1"></li>
            <li data-target="#CaroselGallery" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner w-100 container d-block">

            <?php

            $gallery->printCarousel();

            ?>


          </div>

          <a class="carousel-control-prev" href="#CaroselGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#CaroselGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>

    </div>


  </section>
