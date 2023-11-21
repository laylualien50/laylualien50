<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'dao/pdo.php';
include 'dao/danhmuc.php';
include 'dao/sanpham.php';
include 'dao/user.php';

$danhmuc=danhmuc_select_all();


include 'view/header.php';

if (!isset($_GET['pg'])) {
    include 'view/home.php';
}else {
    switch ($_GET['pg']) {
        case 'login':
            if (isset($_POST['login'])) {
                
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            
                if (empty($username))   $_SESSION['loginError'][] = 'Username không được phép trống';
                if (empty($password))   $_SESSION['loginError'][] = 'Password không được phép trống';

                if (empty($_SESSION['loginError'])) {
                    if ($user = login($username, $password)) {
                        header("Location: index.php");
                        $_SESSION['user']['full_name'] = $user['full_name'];
                        $_SESSION['user']['is_admin'] = $user['is_admin'];
                        if ($_SESSION['user']['is_admin'] == 1) {
                            header("Location: ../admin/index.php");
                        }
                    }else {
                        $_SESSION['loginError'][] = 'User name hoặc mật khẩu không đúng!';
                        // header("Location: index.php?act=login");
                    }
                } else {
                    $_SESSION['loginError'];
                    // header("Location: index.php");
                }
            }
            include 'view/login.php';
            break;
        case 'register':
            if (isset($_POST['register'])) {
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                $full_name = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
                $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
                $shipping_address = isset($_POST['shipping_address']) ? trim($_POST['shipping_address']) : '';
                $shipping_city = isset($_POST['shipping_city']) ? trim($_POST['shipping_city']) : '';
                $billing_address = isset($_POST['billing_address']) ? trim($_POST['billing_address']) : '';
                $billing_city = isset($_POST['billing_city']) ? trim($_POST['billing_city']) : '';
                
                if (empty($username))   $errors[] = 'Username không được phép trống';
                if (empty($password))   $errors[] = 'Password không được phép trống';
                if (empty($email))      $errors[] = 'Email không được phép trống';
                if (empty($full_name))   $errors[] = 'Tên không được phép trống';
                if (empty($phone))   $errors[] = 'Số điện thoại không được phép trống';
                if (empty($shipping_address))   $errors[] = 'Shipping address không được phép trống';
                if (empty($shipping_city))   $errors[] = 'Shipping city không được phép trống';

                if (empty($errors)) {
                    if (checkUser($username)) {
                        $errors[] = 'User name '.$username.' đã tồn tại!';
                    } else {
                        $data = [
                            'email' => $email,
                            'username' => $username,
                            'password' => md5($password),
                            'full_name' => $full_name,
                            'phone' => $phone,
                            'shipping_address' => $shipping_address,
                            'shipping_city' => $shipping_city,
                            'billing_address' => $billing_address,
                            'billing_city' => $billing_city,
                        ];
                        $userID = createUser($data);
                        if ($userID) {
                            $succes = 'Bạn đã đăng ký thành công!';
                        }
                    }
                }
            }
            include 'view/register.php';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("Location: index.php?act=login");
            break;    
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
            case 'logout':
                logout();
                break;
        default:
            include 'view/home.php';
            break;
    }
}
include 'view/footer.php';
?>