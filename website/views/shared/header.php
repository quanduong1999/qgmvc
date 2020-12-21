<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories', $options_parent_menu);

?>

<!--  -->

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <base href="http://localhost/ShopOnline/" />
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'eCommerce - QGSHOP'; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop thời trang nam">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shop thời trang nam" />
    <link href="admin/themes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- <script src="public/content/jquery.min.js"></script> -->
    <!-- <script src="public/js/bootstrap.min.js"></script> -->
    <!-- <script src="public/js/slideshow.js"></script> -->
    <!-- <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- <link href="public/css/header.css" rel="stylesheet" type="text/css" media="all" /> -->
    <!-- <link href="public/css/livechat.css" rel="stylesheet" type="text/css" media="all" /> -->


    <link href="public/css/styleheader.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/styleslideshow.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="public/css/stylefooter.css">
    <link rel="stylesheet" href="public/css/stylebody.css">
    <link rel="stylesheet" href="public/css/stylenavbar.css">
    <link rel="stylesheet" href="public/css/styleproduct.css">
    <link rel="stylesheet" href="public/css/stylecart.css">
    <link rel="stylesheet" href="public/css/stylecontact.css">

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <div class="header" id="header">
        <div class="header-logo">
            <img class="header-logo-img" src="website/views/shared/images/logo.png" alt="">
        </div>
        <div class="header-menu">
            <div class="header-menu-top">
                <div class="header-menu-top-center" style="width:12%;">
                    <!-- multi language -->
                    <div align="center">
                        <?php require "lib/config.php"; ?>
                        <select name="ln" id="ln" onChange="window.location='index.php?ln='+this.value">
                            <option value="en" <?php if ($ln == 'en') {
                                                    echo "selected";
                                                } ?>>En</option>
                            <option value="vn" <?php if ($ln == 'vn') {
                                                    echo "selected";
                                                } ?>>Vn</option>
                        </select>
                        <?php
                        if ($ln == 'en') {
                            require 'en.php';
                        } else if ($ln == 'vn') {
                            require 'vn.php';
                        }

                        ?>
                    </div>
                </div>
                <div class="header-menu-top-left" style="width:78%;">
                    <ul class="header-menu-top-left-ul">
                        <li class="header-menu-top-left-ul-li"><a class="header-menu-top-left-ul-li-a" href="intro"><?= $content2??'Hướng dẫn order' ?> </a></li>
                        <li class="header-menu-top-left-ul-li"><a class="header-menu-top-left-ul-li-a" href="contact"><?= $content1??'Liên Hệ' ?></a></li>
                    </ul>
                </div>



                <div class="header-menu-top-right">
                    <ul class="header-menu-top-left-ul">
                        <li><a class="header-menu-top-left-ul-li-a dangky" href="register"><?= $content3??'Đăng ký' ?>  </a></li>
                        <li><a class="header-menu-top-left-ul-li-a dangnhap" href="login" style="margin-left: 30px;"><?= $content4??'Đăng nhập' ?></a></li>
                    </ul>
                </div>


            </div>
            <div class="header-menu-bottom">
                <div class="header-menu-bottom-left">
                    <ul class="memenu_skyblue">
                        <li class="memenu_skyblue_li"><a class="header-menu-top-left-ul-li-a" href="home"><?= $content5??'Trang chủ' ?></a></li>
                        <?php foreach ($parent_menus as $parent_menu) : $parentId = $parent_menu['Id']; ?>
                            <?php if ($parent_menu['Id'] != 3) : ?>
                                <li class="memenu_skyblue_li"><a class="header-menu-top-left-ul-li-a" href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html"><?php echo $parent_menu['Name'] ?></a>
                                </li>
                            <?php elseif ($parent_menu['Id'] == 3) : ?>
                                <li class="memenu_skyblue_li"><a class="header-menu-top-left-ul-li-a" href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html"><?php echo $parent_menu['Name'] ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="memenu_skyblue_li"><a class="header-menu-top-left-ul-li-a" href="livesport"><?= $content9??'LIVE SPORT' ?></a></li>
                    </ul>
                </div>
                <div class="header-menu-bottom-right">
                    <div class="search">
                        <form style="margin-bottom:0em " action="http://localhost/ShopOnline/search/" method="get" onsubmit="return false;">
                            <input style="width: 222px !important;
    height: 35px !important;
    background: white !important;
    color: black !important;" class="inputsearch" type=search name='q' id='q' value="Tìm kiếm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm...';}">
                            <input type="submit" value="Tìm kiếm" onclick="window.location.href=this.form.action + this.form.q.value;" class="input-search" />
                        </form>
                    </div>

                    <div class="cart_box_1">
                        <a href="cart"><i class="glyphicon glyphicon-shopping-cart"></i> <?= $content10??'Giỏ hàng' ?> :
                            <?php
                            require_once "./website/models/cart.php";
                            echo cart_number(); ?> sp</a>
                        <div class="clearfix_cart"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>