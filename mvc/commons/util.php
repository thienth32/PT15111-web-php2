<?php
define('BASE_URL', 'http://localhost/pt15111-web/mvc/');
function dd($var){
  echo "<pre>";
  var_dump($var);
  die;
}

function getPaginateSize(){
  return [
    'default' => 20,
    'list' => [20, 50, 80, 120]
  ];
}

function getClientUrl($urlPath, $params = []){
  // tạo biến url = http://localhost/pt15111-web/mvc/ + string đc truyền vào qua tham số urlPath
  $url = BASE_URL . $urlPath;

  // nếu mảng $params có giá trị => có tham số đường dẫn
  if(count($params) > 0){
    // thêm dấu ? vào đường dẫn để đánh dấu bắt đầu thêm tham số đường dẫn
    $url .= "?";
    foreach ($params as $key => $value) {
      // thêm các tham số đường dẫn vào url
      $url .= "$key=$value&";
    }
    // cắt dấu & cuối cùng trong chuỗi đi
    $url = rtrim($url, "&");
  }
  return $url;
}

function getAssetUrl($assetUrl){
  return BASE_URL . "public/" . $assetUrl;
}

function uploadImage($file, $fileLocation){
  if($file['size'] > 0){
    $filename = $fileLocation . '/'
                . uniqid() . '-' . $file['name'];
    if(move_uploaded_file($file['tmp_name'],
                              './' . $filename)){
      return $filename;
    }
  }
  return null;
}



 ?>
