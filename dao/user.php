<?php
function createUser($data) {
    $conn=pdo_get_connection();
    $sql = "INSERT INTO `users` (`email`, `username`, `password`, `full_name`, `phone`, `shipping_address`, `shipping_city`, `billing_address`, `billing_city`, `is_admin`) 
    VALUES ('".$data['email']."', '".$data['username']."', '".$data['password']."', '".$data['full_name']."', '".$data['phone']."', '".$data['shipping_address']."', '".$data['shipping_city']."', '".$data['billing_address']."', '".$data['billing_city']."', '0')";
    $conn->exec($sql);
    return $conn->lastInsertId();
}

function checkUser($username) {
    $conn=pdo_get_connection();
    $sql = "SELECT * FROM `users` WHERE username = '".$username."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch(); // lấy 1 dòng
    return $kq;
}

function login($username, $password) {
    $conn=pdo_get_connection();
    $sql = "SELECT * FROM `users` WHERE username = '".$username."' AND password = '" . md5($password) . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch(); // lấy 1 dòng
    return $kq;
}
function logout() {
    unset($_SESSION['objuser']);
    header("Location: index.php");
}
function addUser($email, $username, $password, $fullName, $phone, $billingAddress, $billingCity) {
    $conn=pdo_get_connection();
    $sql = "INSERT INTO `users` (`email`, `username`, `password`, `full_name`, `phone`, `billing_address`, `billing_city`, `is_admin`) 
    VALUES ('".$email."', '".$username."', '".$password."', '".$fullName."', '".$phone."', '".$billingAddress."', '".$billingCity."', '0')";
    $conn->exec($sql);
    return $conn->lastInsertId();
}