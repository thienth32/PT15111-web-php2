<?php
$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './commons/util.php';
require_once './vendor/autoload.php';
require_once './commons/database.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
switch ($url) {
  case '/':
    $ctr = new HomeController();
    $ctr->index();
    break;
  case 'remove-product':
    $ctr = new ProductController();
    $ctr->delete();
    break;
  case 'add-product':
    $ctr = new ProductController();
    $ctr->addForm();
    break;
  case 'edit-product':
    $ctr = new ProductController();
    $ctr->editForm();
    break;
  case 'save-add-product':
    $ctr = new ProductController();
    $ctr->saveAdd();
    break;
  case 'save-edit-product':
    $ctr = new ProductController();
    $ctr->saveEdit();
    break;
  // case 'them-gio-hang':
  //   $ctr = new ProductController();
  //   $ctr->giohang();
  //   break;

  default:
    echo "Đường dẫn không tồn tại!!!!!";
    break;
}

 ?>
