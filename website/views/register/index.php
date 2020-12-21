<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/ShopOnline/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        width: 100%;
        height: 100%;
    }

    .container {
        width: 100%;
        height: 100%;
        background: url(https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-blue-tech-geometric-graphic-party-sign-in-background-material-backgroundgeometryevening-sign-image_73734.jpg);
    }

    .register {
        height: 60%;
        width: 35%;
        margin: auto;
        /* border: solid 1px #777777; */
        padding-top: 10%;
    }

    span {
        font-size: 18px;
    }

    .content {
        width: 100%;
        height: 100%;
        padding-left: 10px;
    }

    #name {
        margin-bottom: 10px;
        padding-left: 8px;
        margin-right: 20px;
        height: 30px;
        width: 42%;
        border-radius: 5px;
        border: solid 0.7px #777;
        box-shadow: 10px;
    }

    #textInput {
        margin-bottom: 10px;
        padding-left: 8px;
        margin-right: 20px;
        height: 30px;
        border-radius: 5px;
        border: solid 0.7px #777;
        box-shadow: 10px;
        width: 91% !important;
    }

    hr {
        border: solid 0.1px #ddd;
        margin-top: 10px;
        margin-bottom: 20px;
        width: 94%;
        color: #ddd;
    }

    #header {
        text-align: center;
        margin-top: 20px;
    }

    #date {
        width: 30%;
    }

    input {
        margin-right: 10px;
    }

    #submit {
        margin-left: 13%;
        color: white;
        border-radius: 10px;
        background-color: rgb(48, 48, 202);
        border: solid 1px rgb(102, 102, 182);
        margin-top: 20px;
        height: 30px;
        width: 70%;
    }

    .register_content {
    height: 100vh;
}

span{
    color: white;
}
    </style>
</head>

<body>
<div class="register_content">
    <div class="container">
        <div class="register">
            <div class="content">
                <div id="header">
                    <span>Đăng kí tài khoản</span>
                </div>
                <hr>
                <form action="register/index.php" method="POST" enctype="multipart/form-data" role="form">
                    <input type="text" placeholder="Họ" id="name">
                    <input type="text" placeholder="Tên" id="name">
                    <input type="text" placeholder="Email" id="textInput" name="username">
                    <input type="text" placeholder="Mật khẩu" id="textInput" name="password">
                    <input type="text" placeholder="Nhập lại mật khẩu" id="textInput">
                    <b>Ngày sinh</b>
                    <input type="date" id="date">
                    <input type="radio" name="sex"> <span>Nam</span>
                    <input type="radio" name="sex"> <span>Nữ</span><br>
                    <input type="submit" value="Đăng ký" id="submit">
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>