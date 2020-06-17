<?php

/**
 *
 */
namespace Controllers;
use Models\Product;
class HomeController
{

  function __construct()
  {
    $x = new ProductController();
    echo "HomeController";
  }
}


 ?>
