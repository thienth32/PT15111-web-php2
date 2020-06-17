<?php

// tạo lớp ConNguoi
// gồm các thuộc tính 
// tên, ngày sinh, giới tính, chiều cao, cân nặng
// tạo ra 1 thực thể thuộc lớp con người với đầy đủ các
// giá trị cho các thuộc tính ở trên

// tạo phương thức tính BMI của cơ thể
// công thức tính BMI = ( cân nặng/(bình phương chiều cao - đơn vị mét) )

class ConNguoi{

    function getBMI(){
        $quyDoiChieuCao = $this->chieuCao/100;
        $bmi = $this->canNang/(pow(($quyDoiChieuCao), 2));
        return $bmi;
    }

    function getAge(){
        // lấy tuổi của thực thể
    }

}
$loantt = new ConNguoi();
$loantt->name = "Tran Thi Loan";
$loantt->ngaySinh = "1978-11-20";
$loantt->gioiTinh = "Nu";
$loantt->chieuCao = 173;
$loantt->canNang = 71;

echo "<pre>";
// var_dump($loantt);
echo $loantt->getBMI();



?>