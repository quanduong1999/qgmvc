<style>
input[type=checkbox],
input[type=radio] {
    margin: 10px 5px;
}

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

<div class="feedbackEditHeading">Thông tin phản hồi của khách hàng</div>
<div class="feedbackEditBody">
    <form method="post" action="admin.php?controller=feedback&amp;action=edit" enctype="multipart/form-data"
        role="form">
        <input name="id" type="hidden" value="<?php echo $feedback ? $feedback['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="name" class="controlLabel">Họ tên</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="name" type="text" value="<?php echo $feedback ? $feedback['Name'] : ''; ?>"
                    class="formControl" id="name" placeholder="Họ tên" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="mobile" class="controlLabel">Điện thoại</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="mobile" type="text" value="<?php echo $feedback ? $feedback['Mobile'] : ''; ?>"
                    class="formControl" id="mobile" placeholder="Điện thoại" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="email" class="controlLabel">Email</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="email" type="text" value="<?php echo $feedback ? $feedback['Email'] : ''; ?>"
                    class="formControl" id="email" placeholder="Email" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="subject" class="controlLabel">Thông tin</label>

            <div class="inputNameLabel" id="styleInput">
                <textarea name="subject" rows=5 class="formControl" id="subject"
                    placeholder="" /><?php echo $feedback ? $feedback['Subject'] : ''; ?></textarea>
            </div>

        </div>

        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $feedback ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=feedback">Trở về</a>
            </div>
        </div>
    </form>
</div>
<script src="admin/themes/CKeditor/ckeditor/ckeditor.js">