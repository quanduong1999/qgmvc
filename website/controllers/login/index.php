<?php
if (!empty($_POST)) {

    $connect = mysqli_connect('localhost', 'root', '', 'ecommerce');
    mysqli_set_charset($connect, 'utf8') or die;
    $usename = $_POST["username"];
    $password = md5($_POST["password"]);
    $sql = "SELECT user_name, pass_word FROM register WHERE user_name= '$usename' AND pass_word= '$password'";
    $res = mysqli_query($connect, $sql) or die;
    if ($res) header("Location: http://localhost/ShopOnline/home");
}
$title = 'Đăng nhập tài khoản';
require('website/views/login/index.php');