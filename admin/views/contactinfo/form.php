<style>
form {
    display: block;
    margin-top: 0;
}

label {
    display: inline-block;
    position: relative;
    padding-right: 15px;
    padding-left: 15px;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}

@media only screen and (min-width: 768px) {
    .controlLabel {
        padding-top: 7px;
        margin-bottom: 0;
        text-align: right;
        width: 25%;
        float: left;
    }

    .inputNameLabel {
        width: 75%;
        float: left;
    }
}

#styleInput {
    margin-bottom: 15px;
    position: relative;
    padding-right: 15px;
    padding-left: 15px;
}

.formControl {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.TroVe {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.capNhat {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

#chung {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    border-radius: 4px;
}
</style>

<div class="contactinfoHeading"> Thông tin liên hệ</div>
<div class="contactinfoBody">
    <form method="post" action="admin.php?controller=contactinfo&amp;action=edit" enctype="multipart/form-data"
        role="form">
        <input name="id" type="hidden" value="<?php echo $info ? $info['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="address" class="controlLabel">Địa chỉ</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="address" type="text" value="<?php echo $info ? $info['Address'] : ''; ?>"
                    class="formControl" id="address" placeholder="Địa chỉ" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="country" class="controlLabel">Quận - huyện</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="country" type="text" value="<?php echo $info ? $info['Country'] : ''; ?>"
                    class="formControl" id="country" placeholder="Quận - huyện" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="mobile" class="controlLabel">Điện thoại 1</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="mobile" type="text" value="<?php echo $info ? $info['Mobile'] : ''; ?>" class="formControl"
                    id="mobile" placeholder="Điện thoại 1" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="phone" class="controlCabel">Điện thoại 2</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="phone" type="text" value="<?php echo $info ? $info['Phone'] : ''; ?>" class="formControl"
                    id="phone" placeholder="Điện thoại 2" required="" />
            </div>
        </div>


        <div class="formGroup">
            <label for="email" class="controlLabel">Email</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="email" type="text" value="<?php echo $info ? $info['Email'] : ''; ?>" class="formControl"
                    id="email" placeholder="Email" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="address" class="controlLabel">Facebook</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="facebook" type="text" value="<?php echo $info ? $info['Facebook'] : ''; ?>"
                    class="formControl" id="facebook" placeholder="Link Facebook" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="zalo" class="controlLabel">Zalo</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="zalo" type="text" value="<?php echo $info ? $info['Zalo'] : ''; ?>" class="formControl"
                    id="zalo" placeholder="Zalo" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="skype" class="controlLabel">Skype</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="skype" type="text" value="<?php echo $info ? $info['Skype'] : ''; ?>" class="formControl"
                    id="skype" placeholder="Skype" required="" />
            </div>
        </div>


        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat" id="chung"><?php echo $info ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=contactinfo">Trở về</a>
            </div>
        </div>
    </form>
</div>