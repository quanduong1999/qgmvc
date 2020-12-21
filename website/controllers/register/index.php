<?php
if (!empty($_POST)) {

    $connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
    mysqli_set_charset($connect, 'utf8') or die;
    $usename = $_POST["username"];
    $password = md5($_POST["password"]);
    $sql = "INSERT INTO register(user_name, pass_word) VALUES ('$usename', '$password')";

    $res = mysqli_query($connect, $sql) or die;
    if ($res) header("Location: http://localhost/ShopOnline/login");
}
$title = 'Đăng ký tài khoản';
require('website/views/register/index.php');