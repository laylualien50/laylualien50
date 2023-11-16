<?php
//sau khi đăng nhập 
// if (isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)) {
//     extract($_SESSION['s_user']);
//     $html_account='<a href="index.php?pg=myaccount">'.$username.'</a>
//     <a href="index.php?pg=logout">Thoát</a>';
// }else {
//     $html_account='<a href="index.php?pg=dangky">ĐĂNG KÝ</a>
//     <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a>';
// }

$html_dm='';
foreach ($danhmuc as $value){
    extract($value);
    $link='index.php?pg=sanpham&iddm='.$madm;
    $html_dm.='<a href="'.$link.'">'.$tendm.'</a>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alibu Shop</title>
    <link rel="stylesheet" href="layout/style.css">

</head>

<body>
    <div class="containerfull">
        <div class="header">
            <p>Tưng mừng khai trương <span>sale up to 40% </span></p>
        </div>
    </div>
    <div class="containerfull">
        <div class="header2">
            <div class="right">
                <input type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm">
                <a href=""><img src="layout/img/search-outline.svg" width="25px" alt=""></a>
                <a href=""><img src="layout/img/person-outline.svg" width="25px" alt=""></a>
                <a href=""><img src="layout/img/cart-outline.svg" width="25px" alt=""></a>
            </div>
        </div>
    </div>
    <div class="containerfull">
        <div class="container">
            <div class="menu ">
                <div class="col7">
                    <a href="index.php">TRANG CHỦ</a>
                    <a href="">CHÍNH SÁCH ĐỔI TRẢ</a>
                    <img src="layout/img/alibushop.png" width="250px" alt="">              
                    <a href="index.php">BẢNG SIZE</a>
                    <a href="">HỆ THỐNG CỬA HÀNG</a>    
                </div>
                <div class="dm">
                <hr>
                    <?=$html_dm;?>
                </div>
            </div>
        </div>
    </div>