<?php
namespace app\Models;

/**
 *
 */
class Gallery
{
  private $array;
  private $slide_quantity;
  private $active_slide;
  private $carousel;
  private $cList;

  function __construct($array = [], $active = 1)
  {
    $this->array = $array;
    $this->active_slide = $active;
    $this->calcSides($array);
    $this->printSlides($this->array);
  }

  public function printCarousel()
  {
    // $this->carousel = "result3";
    echo $this->carousel;
  }

  public function printCarouselList()
  {
    $this->$cList = "result1";
    echo $this->$cList;
  }

  public function printSlides($array)
  {

    $slide_num = 1;
    $block_num;

    $slides_quantity = $this->slide_quantity;

    for($i = 1; $i <= $slides_quantity; $i++) {

      if($i == 1){
        $this->carousel .= "<div class=\"active carousel-item w-100 container\">";
      } else {
        $this->carousel .= "<div class=\"carousel-item w-100 container\">";
      };
      $this->carousel .= $this->printBlockL1($i);
      $this->carousel .= "</div>";

    }

  }

  private function calcSides($array = [])
  {
    $params = [];
    $quantity = 0;

    foreach ($array as $key) {
      $quantity++;
    }

    $this->slide_quantity = floor($quantity / 8);
  }

  private function printBlockL1($blockNum)
  {
    $number = ($blockNum * 8) - 8;

    // echo "BlockL1 start {$blockNum}<br> ";
    $this->carousel .= "<div class=\"row block_l-1 block_l-1-{$blockNum}\">";
    for ($i = 0; $i < 4; $i++)
    {
      $number = $this->printBlockL2($number);
    }
    $this->carousel .= "</div>";
  }


  private function printBlockL2($number)
  {
    $this->carousel .= "<div class=\"col-md-6 col-12 row block_l-2\" alt=\"block_#{$number}\">";
    for($i = 0; $i <= 1; $i++)
    {
      $this->printBlockL3($number);
      $number++;
    }
    $this->carousel .= "</div>";
    return $number;
  }

  private function printBlockL3($number)
  {
    $type = $this->array[$number]['type'];
    $content = $this->array[$number]['content'];
    $this->carousel .= "<div class=\"col-6 block_l-3\">";
    if($type == 'image')
    {
      $this->carousel .= "<a class=\"gallery_img gallery_img-1\" href=\"./build/gallery/{$content['main_link']}\" data-lightbox=\"{$content['ligthbox']}\" data-title=\"{$content['ligthbox-title']}\">
        <img class=\"galley_img-small\" src=\"./build/gallery/{$content['mini_link']}\" alt=\"image-{$number}\"/>
      </a>";
    } else {
      $this->carousel .= "<div class=\"galley_title\"><h2>{$content['title']}</h2><p>{$content['paragraph']}</p></div>";
    }
    $this->carousel .= "</div>";

  }
}
