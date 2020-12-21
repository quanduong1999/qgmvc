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

<div class="slideShowHeading">SlideShow</div>
<div class="slideShowBody">
    <form method="post" action="admin.php?controller=slideshow&amp;action=edit" enctype="multipart/form-data"
        role="form">
        <input name="id" type="hidden" value="<?php echo $slideshow ? $slideshow['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="name" class="controlLabel">Tên Slide</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="name" type="text" value="<?php echo $slideshow ? $slideshow['Name'] : ''; ?>"
                    class="formControl" id="name" placeholder="Tên Slide" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="status" class="controlLabel">Status</label>
            <div class="inputNameLabel" id="styleInput">
                <input type="radio" name="status"
                    <?php if (isset($slideshow) && $slideshow['status'] == "1") echo "checked"; ?> value="1">Active
                <input type="radio" name="status"
                    <?php if (isset($slideshow) && $slideshow['status'] == "0") echo "checked"; ?> value="0">Inacctive
            </div>
        </div>

        <?php for ($i = 1; $i < 6; $i++) : ?>
        <div class="formGroup">
            <label for="text<?php echo $i ?>" class="controlLabel">Text <?php echo $i ?></label>

            <div class="inputNameLabel" id="styleInput">
                <input name="text<?php echo $i ?>" type="text"
                    value="<?php echo $slideshow ? $slideshow['text' . $i] : ''; ?>" class="formControl" id="text" />
            </div>
        </div>
        <div class="formGroup">
            <label for="image<?php echo $i ?>" class="controlLabel">Ảnh <?php echo $i ?></label>

            <div class="inputNameLabel" id="styleInput">
                <input name="image<?php echo $i ?>" type="file" class="formControl" id="image<?php echo $i ?>"
                    accept="image/*" />
                <?php if ($slideshow && is_file('public/upload/images/' . $slideshow['img' . $i])) {
                        echo '<image src="public/upload/images/' . $slideshow['img' . $i] . '?time=' . time() . '" style="max-width:200px;" />';
                    }
                    ?>
            </div>
        </div>
        <?php endfor; ?>

        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $slideshow ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=slideshow">Trở về</a>
            </div>
        </div>
    </form>