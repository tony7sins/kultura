<?php
namespace app\Models;

/**
 *
 */
class GalleryNew
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
    $result = $this->carousel;
    echo $result;
  }

  public function printCarouselList()
  {
    $result1 = $this->$cList;
    echo $result;
  }

  public function printSlides($array)
  {

    $slide_num = 1;
    $block_num;

    $slides_quantity = $this->slide_quantity;

    for($i = 1; $i <= $slides_quantity; $i++) {

      if($i == 1){
        echo "<div class=\"active carousel-item w-100 container\">";
      } else {
        echo "<div class=\"carousel-item w-100 container\">";
      };
      echo $this->printBlockL1($i);
      echo "</div>";

    }

  }

  private function calcSides($array = [])
  {
    $params = [];
    $quantity = 0;

    foreach ($array as $key) {
      $quantity++;
    }
    // $this->slide_quantity = 2;

    $this->slide_quantity = floor($quantity / 8);
  }

  private function printBlockL1($blockNum)
  {
    $number = ($blockNum * 8) - 8;

    // echo "BlockL1 start {$blockNum}<br> ";
    echo "<div class=\"row block_l-1 block_l-1-{$blockNum}\">";
    for ($i = 0; $i < 4; $i++)
    {

      $number = $this->printBlockL2($number);
      // echo '<br>'. $number .'<br>';
    }
    echo "</div>";
  }


  private function printBlockL2($number)
  {
    // echo "--BlockL2 start<br>";
    echo "<div class=\"col-md-6 col-12 row block_l-2\" alt=\"block_#{$number}\">";
    for($i = 0; $i <= 1; $i++)
    {
      $this->printBlockL3($number);
      $number++;
    }
    echo "</div>";
    return $number;
  }

  private function printBlockL3($number)
  {

    $type = $this->array[$number]['type'];
    $content = $this->array[$number]['content'];
    echo "<div class=\"col-6 block_l-3\">";
    // echo '----BlockL3 starts<br>';
    if($type == 'image')
    {
      // echo '----image<br>';
      echo "<a class=\"gallery_img gallery_img-1\" href=\"./build/gallery/{$content['main_link']}\" data-lightbox=\"{$content['ligthbox']}\" data-title=\"{$content['ligthbox-title']}\">
        <img class=\"galley_img-small\" src=\"./build/gallery/{$content['mini_link']}\" alt=\"image-{$number}\"/>
      </a>";
    } else {
      echo "<div class=\"galley_title\"><h2>{$content['title']}</h2><p>{$content['paragraph']}</p></div>";
      // echo '----block<br>';
    }
    echo "</div>";

  }

  private function checkBlockType($number)
  {

    echo '----BlockL3 ends<br>';
    // $this->checkBlockType($number);
    $type = $this->array[$number]['type'];
    // echo '----BlockL3 starts<br>';
    if($type == 'image')
    {
      echo '----image<br>';
    } else {
      echo '----block<br>';
    }
  }



}
