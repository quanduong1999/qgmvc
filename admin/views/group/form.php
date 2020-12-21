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

<div class="groupEditHeading">Danh mục nhóm sản phẩm</div>
<div class="groupEditBody">
    <form method="post" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $group ? $group['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="name" class="controlLabel">Tên nhóm danh mục</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="name" type="text" value="<?php echo $group ? $group['Name'] : ''; ?>" class="formControl"
                    id="name" placeholder="Tên danh mục" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="category_id" class="controlLabel">Danh mục</label>

            <div class="inputNameLabel" id="styleInput">
                <select name="category_id" class="formControl" id="category_id">
                    <?php foreach ($categories as $category) {
                        $selected = '';
                        if ($product && ($product['CategoryId'] == $category['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="formGroup">
            <label for="link" class="controlLabel">Đường dẫn</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="link" type="text" value="<?php echo $group ? $group['Link'] : ''; ?>" class="formControl"
                    id="name" placeholder="Dường dẫn" />
            </div>
        </div>
        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $group ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=group">Trở về</a>
            </div>
        </div>
    </form>
</div>