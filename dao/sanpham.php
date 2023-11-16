<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

// function sanpham($limi){
//     $sql = "SELECT * FROM da1  order by id desc limit ".$limi;
//     return pdo_query($sql);
// }
function get_dssp($iddm,$start=0,$limi){
    $sql = " SELECT * FROM sanpham where 1";
    // lọc sp theo dmuc
    if ($iddm>1){
        $sql .= " AND madm=".$iddm;
    }
    //lọc sp theo tìm kiếm
    // if ($kyw!="") {
    //     $sql .= " AND name like '%".$kyw."%'";
    // }

    $sql .= " ORDER BY masp DESC limit ".$start.",".$limi;
    return pdo_query($sql);
}
// đếm sản phẩm
function count_sanpham($iddm){
    $sql = "SELECT count(*) AS soluong  FROM sanpham where 1 ";
    if ($iddm>1){
        $sql .= " AND madm=".$iddm;
    }
    return pdo_query_one($sql);
}
function show_sp($dssp){
    $html_dssp='';
foreach ($dssp as $sp) {
    extract($sp); 
    $format_number = number_format($giasp);
    $link='index.php?pg=sanphamchitiet&idpro='.$masp;
    $html_dssp.='<div class="box25 mr15 ml15">
                        <a href="'.$link.'">
                            <img src="layout/img/'.$anhsp.'" width="300px" alt="">
                        </a>
                        <div class="name mt15">'.$tensp.'</div>
                        
                        <div class="price mt15"> <span>'.$format_number.' đ</span> </div>
                        
                        <form action="index.php?pg=addcart" method="post">
                            <input type="hidden" name="name" value="'.$tensp.'">
                            <input type="hidden" name="img" value="'.$anhsp.'">
                            <input type="hidden" name="price" value="'.$giasp.'">
                            <input type="hidden" name="soluong" value="1" >
                            <button type="submit" id="mt15" name="addcart">Đặt hàng</button>
                        </form>
                    </div>';
}
return  $html_dssp;
}
// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }