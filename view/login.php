<?php
if(isset($_SESSION['username'])&& ($_SESSION['username']!=''))
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title></title>
    <!-- Meta tag Keywords -->
<style>
h2 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
margin-bottom: 10px;
font-weight: 600;
line-height: 30px;
font-size: larger;
}

input[type="text"],
input[type="password"] {
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

input[type="submit"] {
  padding: 10px;
  background-color: black;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
.error{
  padding: 10px;
  width: 95%;
  border-radius: 5px;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <!-- <link rel="stylesheet" href="web/css/bootstrap.css"> -->
    <!-- Bootstrap-Core-CSS -->
    <!-- <link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" /> -->
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <!-- <link href="web/css/font-awesome.css" rel="stylesheet"> -->
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>
<body>
  <section>
  <?php
                    if (isset($_SESSION['user'])) {
                        echo 'Hello, ' . $_SESSION['user']['full_name'];
                        echo ' | <a href="index.php?act=logout">Logout</a>';
                    } else {
                    ?>
                    <div class="error">
                        <?php 
                            if (isset($_SESSION['loginError']) && count($_SESSION['loginError']) > 0) {
                                echo '<ul>';
                                foreach ($_SESSION['loginError'] as $error) {
                                    echo '<li>'.$error.'</li>';
                                }
                                echo '</ul>';
                                unset($_SESSION['loginError']);
                            }
            
                        ?>
    <h2>Đăng nhập</h2>
    <form action="index.php?pg=login" method="POST">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Đăng nhập" name="login">         
    </form>
                    <?php
                    }
                        ?>
    </section>
 <!-- footer -->
 
    <!-- //footer -->

</body>
</html>
