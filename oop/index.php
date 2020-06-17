<?php

// tạo ra 1 cái khuôn - Đối tượng
class SinhVien{
    // định nghĩa các thuộc tính
    var $mssv;
    var $name;

    // định nghĩa ra các phương thức
    function getname(){
        return $this->name . "-" . $this->mssv;
    }

    function setname($inName){
        $this->name = $inName;
    }
}
class Animal{

}

// tạo ra các thực thể thuộc lớp Sinh Viên
$viet = new SinhVien(); // $viet - instance
// gán giá trị cho thực thể
$viet->mssv = "PH01123";
$viet->name = "Le Hong Viet";

$hoang = new SinhVien();
$hoang->mssv = "PH05623";
$hoang->name = "Hoang dep trai";

// thực thi 1 hành động của thực thể
var_dump($hoang->getname());
echo "<br>";
$hoang->setname("Le Huy Hoang");
echo "<br>";
var_dump($hoang->getname());



?>