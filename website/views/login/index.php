<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .body {
        background-image: linear-gradient(rgba(2, 7, 15, 0.8), rgba(2, 7, 29, 0.7)),
            url('https://chanbanvanphong.com.vn/images/companies/1/G%C3%B3c%20%C3%9D%20T%C6%B0%E1%BB%9Fng/B%E1%BB%91%20tr%C3%AD%20b%C3%A0n%20l%C3%A0m%20vi%E1%BB%87c/bo-tri-ban-lam-viec-don-gian-ma-hieu-qua.jpg?1537517971488');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
    }

    .formLogin {
        height: 60%;
        width: 30%;
        border: solid 1px white;
        margin: auto;
        text-align: center;
        position: relative;
    }

    .header {
        color: white;
        margin: 5%;
        font-size: 1vh 1vw;
    }

    .header h1 {
        font-size: 3vw;
    }

    i {
        color: white;
        font-size: 20px;
        margin-right: 10px;
    }

    .usename input {
        height: 30px;
        width: 60%;
        padding-left: 2%;
        border-radius: 10px;
        outline: none;
    }

    .password input {
        position: relative;
        left: 1%;
        height: 30px;
        width: 60%;
        padding-left: 2%;
        border-radius: 10px;
        margin-top: 3%;
        margin-right: 1%;
        outline: none;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .submit input {
        background-color: green !important;
        color: white;
        margin-top: 12%;
        height: 15%;
        width: 60%;
        font-size: 170%;
        border-radius: 13px;
        border: 0;
    }

    .forgotPassword a {
        color: white;
        text-decoration: none !important;
    }

    .forgotPassword a span:hover,
    .forgotPassword a span:active {
        border-bottom: 2px solid white;
    }

    .usename {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-top: 10%;
    }

    .password {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    span {
        font-size: 1.5vw;
    }
    </style>

</head>

<body>
    <div class="body">
        <form class="formLogin" action="http://localhost/ShopOnline/login/index.php" method="POST">
            <div class="header">
                <h1>Đăng nhập để vào mua giày nào baby</h1>
            </div>
            <div class="usename">
                <input placeholder="username" style="border: 0px;" name="username">
            </div>
            <div class="password">
                <input placeholder="password" style="border: 0px;" name="password">
            </div>
            <div class="clearfix"></div>
            <div class="submit">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>