<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="public/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="public/fontawesome/css/fontawesome.min.css" rel="stylesheet"> -->
    <style>
    @media only screen and (min-width: 768px) {
        .navbar_controller {
            z-index: 1;
            position: absolute;
            width: 250px;
            margin-top: 51px;
        }
    }

    @media only screen and (min-width: 768px) {
        .navbarCollapse {
            width: auto;
            border-top: 0;
            box-shadow: none;
            padding-right: 0;
            padding-left: 0;
            display: block !important;
        }
    }

    #chenCollapse {
        padding-right: 0;
        padding-left: 0;
        display: none;
    }

    .navCollapse {
        padding-bottom: 0;
        padding-left: 0;
        margin-top: 0;
    }

    .navCollapse>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }

    .sidebarSearch {
        padding: 15px;
    }

    .inputGroup {
        position: relative;
        display: table;
    }

    .inputSearch {
        position: relative;
        font-size: 0;
        display: table-cell;
        vertical-align: middle;
    }

    .iconSearch {
        color: #333;
        background-color: #fff;
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .navDropdown {
        display: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .navDropdown>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }

    .navbarContainer {
        margin-bottom: 0;
        background-color: #f8f8f8;
        border-color: #e7e7e7;
        z-index: 1000;
        border-width: 0 0 1px;
        position: relative;
        min-height: 50px;
        border: 1px solid #ddd;
        display: block;
    }

    @media only screen and (min-width: 768px) {
        .navbarHeader {
            float: left;
        }
    }

    @media only screen and (min-width: 768px) {
        .navbarRight {
            float: right !important;
        }
    }

    #navbarTopLinks {
        margin-right: 0;
        padding-left: 0;
        margin-bottom: 0;
        display: flex;
        flex-direction: row;
    }

    .navbarRight>li>a {
        position: relative;
        display: block;
    }

    ul {
        margin-top: 0;
        list-style: none;
    }

    li {
        padding: 5px;
        display: list-item;
    }

    .navbarBrand {
        float: left;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px;
        color: #777;
    }

    .dropDown {
        position: relative;
    }

    .dropdownToggle {
        padding: 15px;
    }

    a {
        color: #337ab7;
        text-decoration: none;
        padding: 15px;
    }

    .open>#dropdownMenu {
        display: block !important;
    }

    #dropdownMenu {
        position: absolute;
        top: 100%;
        z-index: 1000;
        display: none;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        border-radius: 4px;
    }

    @media only screen and (min-width: 768px) {
        .dropdownMess {
            margin-left: auto;
            width: 310px;
            min-width: 0;
            right: 0;
            left: auto;
        }
    }

    .divid {
        border-bottom: 1px solid #e7e7e7;
    }

    .textMuted {
        float: right !important;
        color: #777;
    }

    .formControl {
        height: 27px;
    }
    </style>
</head>

<body>
    <nav class="navbarContainer" role="navigation" style="margin-bottom: 0">
        <div class="navbarHeader" style="margin: 0px; padding: 0px;">

            <a class="navbarBrand" href="admin.php">Trang Quản Trị</a>

        </div>
        <ul class="navbarRight" id="navbarTopLinks">
            <li class="dropDown">
                <a class="dropdownToggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <li class="dropDown">
                <a class="dropdownToggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <li class="dropDown">
                <a class="dropdownToggle" data-toggle="dropdown" href="#" onclick="ShowSetting()">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdownMess" id="dropdownMenu">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                    <?php if ($user['RoleId'] == 2) : ?>
                    <li><a href="admin.php?controller=user&amp;action=list"><i class="fa fa-gear fa-fw"></i>List quản
                            trị</a></li>
                    <li><a href="admin.php?controller=user&amp;action=add"><i class="fa fa-gear fa-fw"></i>Thêm quản
                            trị</a>
                    </li>
                    <?php endif; ?>
                    <li class="divid"></li>
                    <li> <a href="admin.php?controller=home&amp;action=logout"><i class="fa fa-sign-out fa-fw"></i>
                            Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar_controller" style="background-color: #f8f8f8;
        border-color: #e7e7e7;" role="navigation">
            <div class="navbarCollapse" id="chenCollapse">
                <ul class="navCollapse">
                    <li class="sidebarSearch">
                        <form id="product_form" method="post" action="admin.php?controller=product" role="form">
                            <div class="inputGroup">
                                <input id="search" name="search" type="text" class="formControl"
                                    placeholder="Tìm kiếm" />
                                <span class="inputSearch">
                                    <button class="iconSearch" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>

                    <li>
                        <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <?php if ($user['RoleId'] == 1) : ?>
                    <li>
                        <a href="admin.php?controller=role"><i class="fa fa-cog fa-fw"></i> Quyền truy cập</a>
                    </li>
                    <li>
                        <a href="#" onclick="ShowWeb()"><i class="fa fa-wrench fa-fw"></i> Cấu
                            hình
                            website<span class="fa arrow"></span></a>
                        <ul class="navDropdown">
                            <li>
                                <a href="admin.php?controller=banner">Quản lý Banner</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=slideshow">Quản lý Slideshow chính</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=contactinfo">Quản lý Thông tin liên hệ</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=intro">Trang giới thiệu</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=advertise">Banner quảng cáo</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="#" onclick="ShowDonHang()"><i class="fa fa-shopping-cart fa-fw"></i>
                            Quản lý đơn hàng<span class="fa arrow"></span></a>
                        <ul class="navDropdown">
                            <li>
                                <a href="admin.php?controller=order&amp;action=order_inprocess"><i
                                        class="fa fa-table fa-fw"></i>Danh sách chưa xử lý</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=order&amp;action=order_complete"><i
                                        class="fa fa-table fa-fw"></i>Danh sách đã xử lý</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=order"><i class="fa fa-table fa-fw"></i>Danh sách đơn
                                    hàng</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" onclick="ShowSanPham()"><i class="fa fa-folder-open fa-fw"></i>Quản lý sản phẩm
                            <span class="fa arrow"></span></a>
                        <ul class="navDropdown">
                            <li>
                                <a href="admin.php?controller=product&amp;action=newproduct">Sản phẩm mới</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=product&amp;action=orderproduct">Sản phẩm order</a>
                            </li>
                            <li>
                                <a href="admin.php?controller=product&amp;action=saleproduct">Sản phẩm khuyến mại</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="admin.php?controller=category"><i class="fa fa-folder-open fa-fw"></i>Quản lý danh mục
                            sản
                            phẩm</a>
                    </li>

                    <li>
                        <a href="admin.php?controller=group"><i class="fa fa-folder-open fa-fw"></i>Quản lý nhóm danh
                            mục</a>
                    </li>

                    <li>
                        <a href="admin.php?controller=livesport"><i class="fa fa-youtube-play fa-fw"></i> Quản lý phát
                            video</a>
                    </li>

                    <li>
                        <a href="admin.php?controller=comment"><i class="fa fa-comments-o fa-fw"></i>Quản lý bình
                            luận</a>
                    </li>

                    <li>
                        <a href="admin.php?controller=feedback"><i class="fa fa-envelope-o fa-fw"></i>Phản hồi của khách
                            hàng</a>
                    </li>

                    <li>
                        <a href="index.php" target="_blank"><i class="fa fa-home fa-fw"></i>Trang chủ<span
                                class="fa arrow"></span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
<script>
var x0 = false;
var x1 = false;
var x2 = false;
var y = false;

function ShowWeb() {
    x0 = !x0;
    let an = document.getElementsByClassName("navDropdown");
    if (x0) an[0].style.display = "block";
    else an[0].style.display = "none";
}

function ShowDonHang() {
    x1 = !x1;
    let an = document.getElementsByClassName("navDropdown");
    if (x1) an[1].style.display = "block";
    else an[1].style.display = "none";
}

function ShowSanPham() {
    x2 = !x2;
    let an = document.getElementsByClassName("navDropdown");
    if (x2) an[2].style.display = "block";
    else an[2].style.display = "none";
}

function ShowSetting() {
    y = !y;
    let setting = document.getElementsByClassName("dropdownMess");
    if (y) setting[0].style.display = "block";
    else setting[0].style.display = "none";
}
</script>
<!-- <script src="public/fontawesome/js/fontawesome.min.js"></script>
<script src="public/fontawesome/js/all.min.js"></script> -->

</html>