<?php
include 'dao/pdo.php';
include 'dao/danhmuc.php';
include 'dao/sanpham.php';

$danhmuc=danhmuc_select_all();


include 'view/header.php';

if (!isset($_GET['pg'])) {
    include 'view/home.php';
}else {
    switch ($_GET['pg']) {
        case 'sanpham':

            // $kyw="";
            $titlepage="";
            $page=1; 
            //lọc sản phẩm theo dmuc
            if (!isset($_GET['iddm'])) {
                $iddm=0;
            }else {
                $iddm=$_GET['iddm'];
                $titlepage=get_name_dm($iddm);
                $soluongsp=count_sanpham($iddm)['soluong'];
                $sotrang= ceil($soluongsp/12);
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                    }
            }

            //kiểm tra có form search kh
            if (isset($_POST["timkiem"])&&($_POST["timkiem"])) {
                $kyw=$_POST["kyw"];
                $titlepage="Kết quả tìm kiếm với từ khoá: ".$kyw;
            }
            //phân trang
            //page 1 --- start 0
            // page 2 -- start 12
            // page i --- (i-1)*12
            
            $dssp=get_dssp($iddm,($page-1)*12,12);

                // $dssp=get_dssp($iddm,12,12);

            include 'view/sanpham.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
}
include 'view/footer.php';
?>