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

<div class="liveEditHeading">Trực tiếp thể thao</div>
<div class="liveEditBody">
    <form method="post" action="admin.php?controller=livesport&amp;action=edit" enctype="multipart/form-data"
        role="form">
        <input name="id" type="hidden" value="<?php echo $livesport ? $livesport['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="title" class="formControl">Tiêu đề</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="title" type="text" value="<?php echo $livesport ? $livesport['Title'] : ''; ?>"
                    class="formControl" id="title" placeholder="Tiêu đề" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="content" class="formControl">Nội dung</label>

            <div class="inputNameLabel" id="styleInput">
                <textarea name="content" class="formControl"
                    id="content" /><?php echo $livesport ? $livesport['Description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="formGroup">
            <label for="link" class="formControl">Link Youtube</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="linkyoutube" type="text" value="<?php echo $livesport ? $livesport['Link'] : ''; ?>"
                    class="formControl" id="link" placeholder="Link youtube" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="link1" class="formControl">Link 1</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="url1" type="text" value="<?php echo $livesport ? $livesport['Url1'] : ''; ?>"
                    class="formControl" id="link1" placeholder="Link 1" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="link2" class="formControl">Link 2</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="url2" type="text" value="<?php echo $livesport ? $livesport['Url2'] : ''; ?>"
                    class="formControl" id="link2" placeholder="Link 2" required="" />
            </div>
        </div>

        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $livesport ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=livesport">Trở về</a>
            </div>
        </div>
    </form>
</div>

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
CKEDITOR.replace('content', {
    height: '300px'
});
</script>