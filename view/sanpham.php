<?php
$html_dssp=show_sp($dssp);

if ($titlepage!="") {
    $title=$titlepage;
}else {
    $title="Tất cả sản phẩm";
}

$var=(int)$page;
?>

    <br>
    <section class="containerfull"> 
    <div class="container ">
        <div class="return">
            <a href="index.php"><img src="layout/img/home-outline.svg" width="20px" alt="">/</a>
            <h1><?=$title?></h1>
        </div>
    </div> <br>
    <div class="container">
            <div class="box">
                <?=$html_dssp;?>
            </div>
            <br>

            <!-- phân trang -->
            <div class="page">
                            
                    <a href="index.php?pg=sanpham&iddm=<?=$iddm?>&page=(<?=$var?>-1)">  &laquo; </a>
                <?php
                for ($i=1; $i<=$sotrang; $i++) { 
                ?>    
                <a class="ative"href="index.php?pg=sanpham&iddm=<?=$iddm?>&page=<?=$i?>"><?=$i?></a>
                <?php 
                }
                ?>
                    <a href="index.php?sanpham&page=.($page+1).">  &raquo; </a>

            </div>
            
    </div>
    </section>