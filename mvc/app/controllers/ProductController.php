<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
class ProductController extends BaseController
{

  function chitiet()
  {
    echo "Chi tiết sản phẩm";
  }

  public function delete(){
    // lấy tham số id từ trên đường dẫn xuống
    $id = isset($_GET['id']) ? $_GET['id'] : -1;
    // thực hiện xóa product dựa vào id
    Product::destroy($id);
    // điều hướng website về trang danh sách sản phẩm
    header("location: " . BASE_URL);
  }
  public function addForm(){

    $cates = Category::all();

    include_once './app/views/products/add-form.php';
  }
  public function editForm(){
    $id = isset($_GET['id']) ? $_GET['id'] : -1;
    $cates = Category::all();
    $model = Product::find($id);
    if($model == null){
      header("location: " . BASE_URL);
    }

    include_once './app/views/products/edit-form.php';
  }
  public function saveAdd(){

    $data = $_POST;
    $model = new Product();
    $model->image = uploadImage($_FILES['image'],
                      "public/uploads/products");
    $model->fill($data);
    $model->save();

    header("location: " . BASE_URL);
  }
  public function saveEdit(){
    $id = isset($_GET['id']) ? $_GET['id'] : -1;
    $model = Product::find($id);
    if($model == null){
      header("location: " . BASE_URL);
    }
    $newImage = uploadImage($_FILES['image'],
                      "public/uploads/products");
    if($newImage != null){
      $model->image = $newImage;
    }

    $data = $_POST;
    $model->fill($data);
    $model->save();

    header("location: " . BASE_URL);
  }
}

 ?>
