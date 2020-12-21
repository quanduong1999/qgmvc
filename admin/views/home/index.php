<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ShopOnline/public/fontawesome/js/fontawesome.min.js" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }

    #container {
        margin: 0 0 0 250px;
        padding: 0 30px;
        border-left: 1px solid #e7e7e7;
    }

    .rowHeader {
        width: 100%;
        height: 70px;
        margin-right: -15px;
        margin-left: -15px;
    }

    .rowChart {
        display: flex;
        width: 100%;
        /* height: 150px; */
        margin-right: -15px;
        margin-left: -15px;
    }

    .rowOrder {
        width: 100%;
        margin-right: -15px;
        margin-left: -15px;
        display: flex;
        flex-direction: row;
    }

    .page_header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee;
    }

    .headerTitle {
        margin-left: -15px;
    }

    .tableOrder {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .labarContainer {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .contentLabar {
        /* border-color: #ddd; */
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);

    }

    .headerLabar {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .bodyLabar {
        padding: 15px;
    }

    .list_group {
        margin-bottom: 20px;
    }

    a.list_group_item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
        text-decoration: none;
    }

    .textTime {
        float: right ! important;
        color: #777;
        font-size: 85%;
    }

    .feedbackLabar {
        position: relative;
        /* display: inline-block; */
        vertical-align: middle;
        float: right !important;
    }

    .dropdown_menu {
        position: absolute;
        top: 100%;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .Vach {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5;
    }

    .open>.dropdown_menu {
        display: block;
    }

    ul {
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .chatLabar {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .Clearfix {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #999;
    }

    .headerChat {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 7%;
        width: 100%;
        background-color: rgb(232, 232, 232);
    }

    b,
    strong {
        font-weight: 700;
    }

    .timeChat {
        float: right !important;
        color: #777;
        font-size: 85%;
    }

    #chartContainer {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .chartPanel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #337ab7;
    }

    .panelHeading {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .chartContent {
        width: 25%;
        float: left;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
    }

    .rowContent {
        /* width: 100%; */
        height: 150px;
        margin-right: -15px;
        margin-left: -15px;
    }

    .chartContent1 {
        width: 75%;
        float: left;
        position: relative;
        padding-right: 15px;
        padding-left: 15px;
        text-align: right;
    }

    .huge {
        font-size: 40px;
    }

    .panelFooter {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .pullLeft {
        float: left !important;
    }

    .pullRight {
        float: right !important;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    @media only screen and (min-width: 1200px) {
        .containerChart {
            width: 25%;
            float: left;
        }
    }
    </style>
</head>

<body>
    <?php require('admin/views/shared/header.php'); ?>
    <div id="container">

        <div class="rowHeader">
            <div class="headerTitle">
                <h1 class="page_header">Dashboard</h1>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="rowChart">
            <div id="chartContainer" class="containerChart">
                <div class="chartPanel">
                    <div class="panelHeading">
                        <div class="rowContent">
                            <div class="chartContent">
                                <i class="far fa-comment"></i>
                            </div>
                            <div class="chartContent1">
                                <div class="huge"> <?php echo $total_rows_comment; ?></div>
                                <div>New Comments !</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=comment">
                        <div class="panelFooter">
                            <span class="pullLeft">Xem chi tiết</span>
                            <span class="pullRight"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="chartContainer" class="containerChart">
                <div class="chartPanel" style="background-color: #5cb85c;">
                    <div class="panelHeading">
                        <div class="rowContent">
                            <div class="chartContent">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="chartContent1">
                                <div class="huge"><?php echo $total_rows_online; ?></div>
                                <div>New Visiter</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=counter">
                        <div class="panelFooter">
                            <span class="pullLeft">Xem chi tiết</span>
                            <span class="pullRight"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="chartContainer" class="containerChart">
                <div class="chartPanel" style="background-color: #f0ad4e;">
                    <div class="panelHeading">
                        <div class="rowContent">
                            <div class="chartContent">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="chartContent1">
                                <div class="huge"><?php echo $total_order; ?></div>
                                <div>New Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=order">
                        <div class="panelFooter">
                            <span class="pullLeft">Xem chi tiết </span>
                            <span class="pullRight"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="chartContainer" class="containerChart">
                <div class="chartPanel" style="background-color: red;">
                    <div class="panelHeading">
                        <div class="rowContent">
                            <div class="chartContent">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="chartContent1">
                                <div class="huge"><?php echo $total_feedback; ?></div>
                                <div>New Feedback !</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=feedback">
                        <div class="panelFooter">
                            <span class="pullLeft">Xem chi tiết</span>
                            <span class="pullRight"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="rowOrder">
            <div class="tableOrder">
                <?php require "admin/views/order/tableOrderprocess.php"; ?>
                <?php require "admin/views/product/tableNewproduct.php"; ?>
            </div>
            <div class="labarContainer">
                <div class="contentLabar">
                    <div class="headerLabar">
                        <i class="fa fa-bell fa-fw"></i> Notifications Panel
                    </div>
                    <div class="bodyLabar">
                        <div class="list_group">

                            <a href="admin.php?controller=order&action=view&oid=<?php echo  $order_new['Id']; ?>"
                                class="list_group_item">
                                <i class="fa fa-upload fa-fw"></i> Đơn hàng mới
                                <span
                                    class="textTime"><em><?php echo get_time($order_new['Createtime'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></em>
                                </span>
                            </a>

                            <a href="admin.php?controller=order" class="list_group_item">
                                <i class="fa fa-shopping-cart fa-fw"></i> Đơn hàng chưa xử lý
                                <span class="textTime"><em><?php echo $total_order_inprosess; ?></em>
                                </span>
                            </a>

                            <a href="#" class="list_group_item">
                                <i class="fa fa-money fa-fw"></i> Đơn hàng đã xử lý
                                <span class="textTime"><em><?php echo $total_order_prosess; ?></em>
                                </span>
                            </a>

                            <a href="admin.php?controller=comment&action=edit&comid=<?php echo  $comment_new['Id']; ?>"
                                class="list_group_item">
                                <i class="fa fa-comment fa-fw"></i>Bình luận mới
                                <span
                                    class="textTime"><em><?php echo get_time($comment_new['CreateDate'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></em>
                                </span>
                            </a>

                            <a href="admin.php?controller=feedback&action=edit&fid=<?php echo  $feedback_new['Id']; ?>"
                                class="list_group_item">
                                <i class="fa fa-envelope fa-fw"></i>Tin nhắn mới
                                <span
                                    class="textTime"><em><?php echo get_time($feedback_new['Createtime'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></em>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contentLabar">
                    <div class="headerLabar">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Đơn hàng đã xử lý
                    </div>
                    <div class="bodyLabar">
                        <div class="list_group">
                            <?php foreach ($order_completes as $order_complete) : ?>
                            <a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order_complete['Id']; ?>"
                                class="list_group_item">
                                <i class="fa fa-shopping-cart fa-fw"></i> <?php echo $order_complete['Customer']; ?>
                                <span
                                    class="textTime"><em><?php echo get_time($feedback_new['Createtime'], gmdate('Y:m:d H:i:s', time() + 7 * 3600)) ?></em>
                                </span>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="contentLabar">
                    <div class="headerLabar">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê online
                    </div>
                    <div class="bodyLabar">
                        <div class="list_group">
                            <a href="admin.php?controller=counter" class="list_group_item">
                                <i class="fa fa-upload fa-fw"></i> Đang truy cập
                                <span class="textTime"><em><?php echo $total_rows_online; ?></em>
                                </span>
                            </a>
                            <a href="admin.php?controller=counter" class="list_group_item">
                                <i class="fa fa-upload fa-fw"></i> Lượt truy cập
                                <span class="textTime"><em><?php echo $total_rows_access; ?></em>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contentLabar">
                    <div class="headerLabar">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Trình phát youtube
                    </div>
                    <div class="bodyLabar">
                        <div class="list_group">
                            <?php foreach ($livesports as $livesport) : ?>
                            <a href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>"
                                class="list_group_item">
                                <i class="fa fa-youtube-play fa-fw"></i> <?php echo $livesport['Title']; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>



                <div class="contentLabar">
                    <div class="headerLabar">
                        <i class="fa fa-comments fa-fw"></i>
                        Phản hồi của khách hàng
                        <div class="feedbackLabar">
                            <button type="button" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown_menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-refresh fa-fw"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle fa-fw"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-times fa-fw"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-clock-o fa-fw"></i> Away
                                    </a>
                                </li>
                                <li class="Vach"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bodyLabar">
                        <ul class="chatLabar">
                            <?php foreach ($feedbacks as $feedback) : ?>
                            <li class="Clearfix">
                                <div class="chat_body ">
                                    <div class="headerChat">
                                        <strong class="primary_font"><?php echo $feedback['Mobile'] ?></strong>
                                        <small class="timeChat">
                                            <i class="fa fa-clock-o fa-fw"></i> <?php echo $feedback['Createtime'] ?>
                                        </small>
                                    </div>
                                    <p>
                                        <?php echo substring($feedback['Subject'], 50); ?>
                                    </p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /#wrapper -->
    <?php require('admin/views/shared/footer.php'); ?>
    <script src="ShopOnline/public/fontawesome/js/fontawesome.min.js"></script>
</body>

</html>