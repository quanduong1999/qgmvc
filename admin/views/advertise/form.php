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
<div class="advertiseEditHeading">Banner Quảng cáo</div>
<div class="advertiseEditBody">
    <form method="post" action="admin.php?controller=advertise&amp;action=edit" enctype="multipart/form-data"
        role="form">
        <input name="id" type="hidden" value="<?php echo $advertise ? $advertise['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="name" class="controlLabel">Tên Banner</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="name" type="text" value="<?php echo $advertise ? $advertise['Name'] : ''; ?>"
                    class="formControl" id="name" placeholder="Tên Banner" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="status" class="controlLabel">Trạng thái</label>

            <div class="inputNameLabel" id="styleInput">
                <input type="radio" name="status"
                    <?php if (isset($advertise) && $advertise['IsActive'] == "1") echo "checked"; ?> value="1">Hoạt động
                <input type="radio" name="status"
                    <?php if (isset($advertise) && $advertise['IsActive'] == "0") echo "checked"; ?> value="0">Tắt
            </div>
        </div>

        <div class="formGroup">
            <label for="visible" class="controlLabel">Vị trí </label>

            <div class="inputNameLabel" id="styleInput">
                <input name="visible" type="text" value="<?php echo $advertise ? $advertise['Visible'] : ''; ?>"
                    class="formControl" id="text" />
            </div>
        </div>

        <div class="formGroup">
            <label for="description" class="controlLabel">Mô tả </label>

            <div class="inputNameLabel" id="styleInput">
                <input name="description" type="text" value="<?php echo $advertise ? $advertise['Description'] : ''; ?>"
                    class="formControl" id="text" />
            </div>
        </div>

        <div class="formGroup">
            <label for="image" class="controlLabel">Ảnh Banner</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="image" type="file" class="formControl" id="image" accept="image/*" />
                <?php if ($advertise && is_file('public/upload/images/' . $advertise['Image'])) {
                    echo '<image src="public/upload/images/' . $advertise['Image'] . '?time=' . time() . '" style="max-width:200px;" />';
                }
                ?>
            </div>
        </div>

        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $advertise ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=advertise">Trở về</a>
            </div>
        </div>
    </form>