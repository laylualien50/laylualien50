<style>   
h2{
    color: black;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 2px;
}
input[type="text"],
input[type="password"],
input[type="email"]{
    font-size: 16px;
    display:block;
    box-sizing: border-box;
    padding: 12px 20px;
    border: none;
    background: #ffffff1a;
    border-radius: 12px;
    border-top: 1px solid #ffffff33;
    box-shadow: 0 13px 21px #0000000d;
    flex-direction: column;
}
input[type="submit"]{
    text-align: center;
}
button {
  padding: 10px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
input:focus {
    outline:none;
}
input::placeholder{
    color:black;
}
</style> 
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Đăng kí</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
                        <li class="breadcrumb-item active"><a href="index.php?pg=login">Đăng Nhập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row new-account-login" style="display: flex; justify-content: center;">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Tạo Tài Khoản Mới</h3>
                    </div>
                    <div class="success">
                    <?php 
                        if (isset($succes)) {
                            echo $succes;
                        }
                    ?>
                    </div>
                    
                    <div class="error">
                        <?php
                            if(isset($errors) && count($errors) > 0) {
                                echo '<ul>';
                                foreach ($errors as $error){
                                    echo '<li>'.$error.'</li>';
                                }
                                echo '</ul>';
                            }
                        ?>
                    </div>
                    <div class="auth-col">
                <h2>Đăng ký</h2>
                <form action="index.php?pg=register"method="POST" class="register">
                    <p>
                    <label for="InputName" class="mb-0">Email</label>
                    <input required type="email" class="form-control" id="InputName" name="email"> </div>
                    </p>
                    <p>
                    <label for="InputLastname" class="mb-0">Username</label>
                    <input required type="text" class="form-control" id="InputLastname" name="username">
                    </p>
                    <p>
                    <label for="InputEmail1" class="mb-0">Mật khẩu</label>
                    <input required type="password" class="form-control" id="InputEmail1" name="password">
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Họ tên</label>
                    <input required type="text" class="form-control" id="InputPassword1" name="full_name">
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Điện thoại</label>
                    <input required type="text" class="form-control" id="InputPassword1" name="phone"> 
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Địa chỉ giao hàng</label>
                    <input type="text" class="form-control" id="InputPassword1" name="shipping_address">
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Thành Phố giao hàng</label>
                    <input type="text" class="form-control" id="InputPassword1" name="shipping_city">
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Địa chỉ thanh toán</label>
                    <input type="text" class="form-control" id="InputPassword1" name="billing_address">
                    </p>
                    <p>
                    <label for="InputPassword1" class="mb-0">Thành Phố thanh toán</label>
                    <input type="text" class="form-control" id="InputPassword1" name="billing_city">
                    </p>
                    <p class="auth-submit">
                    <button type="submit" class="btn hvr-hover" name="register">Đăng Ký</button>
                    </p>
                </form>
            </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
<img src="../asset_user/images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../asset_user/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>