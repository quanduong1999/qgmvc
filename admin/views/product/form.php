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

<div class="productEditHeading">Sản phẩm</div>
<div class="productEditBody">
    <form method="post" action="admin.php?controller=product&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $product ? $product['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="type_id" class="controlLabel">Phân lại</label>

            <div class="inputNameLabel" id="styleInput">
                <select name="type_id" class="formControl">
                    <?php foreach ($types as $type) {
                        $selected = '';
                        if ($product && ($product['TypeId'] == $type['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $type['Id'] . '" ' . $selected . '>' . $type['Name'] . '</option>';
                    } ?>
                </select>
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
            <label for="subcategory_id" class="controlLabel">Danh mục con</label>

            <div class="inputNameLabel" id="styleInput">
                <select name="subcategory_id" class="formControl">
                    <?php foreach ($subcategories as $subcategory) {
                        $selected = '';
                        if ($product && ($product['SubCategoryId'] == $subcategory['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="formGroup">
            <label for="name" class="controlLabel">Tên sản phẩm</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="name" type="text" value="<?php echo $product ? $product['Name'] : ''; ?>"
                    class="formControl" id="name" placeholder="Tên sản phẩm" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="price" class="controlLabel">Giá sản phẩm</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="price" type="text"
                    value="<?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>"
                    class="formControl" id="price" placeholder="0" pattern="[0-9\.]+" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="color" class="controlLabel">Mầu sắc</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="color" type="text" value="<?php echo $product ? $product['Color'] : ''; ?>"
                    class="formControl" id="color" placeholder="Mầu sắc" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="material" class="controlLabel">Chất liệu</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="material" type="text" value="<?php echo $product ? $product['Material'] : ''; ?>"
                    class="formControl" id="material" placeholder="Chất liệu" required="" />
            </div>
        </div>

        <div class="formGroup">
            <label for="size" class="controlLabel">Size</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="size" type="text" value="<?php echo $product ? $product['Size'] : ''; ?>"
                    class="formControl" id="size" placeholder="Size" />
            </div>
        </div>

        <div class="formGroup">
            <label for="createdate" class="controlLabel">Ngày tạo</label>

            <div class="inputNameLabel" id="styleInput">

                <input name="createdate" type="date" value="<?php echo $product ? $product['Createdate'] : ''; ?>"
                    class="formControl" id="createdate" min="2019-01-02" max="2029-12-31" />
            </div>
        </div>

        <div class="formGroup">
            <label for="isSaleOff" class="controlLabel">Sale off</label>

            <div class="inputNameLabel" id="styleInput">
                <input type="radio" name="status"
                    <?php if (isset($product) && $product['isSaleOff'] == "1") echo "checked"; ?> value="1">Bật
                <input type="radio" name="status"
                    <?php if (isset($product) && $product['isSaleOff'] == "0") echo "checked"; ?> value="0">Tắt
            </div>
        </div>

        <div class="formGroup">
            <label for="percent_off" class="controlLabel">Phần trăm giảm giá</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="percent_off" type="text" value="<?php echo $product ? $product['Percent_off'] : ''; ?>"
                    class="formControl" id="Percent_off" placeholder="Phần trăm giảm giá" />
            </div>
        </div>

        <div class="formGroup">
            <label for="description" class="controlLabel">Thông tin chi tiết</label>

            <div class="inputNameLabel" id="styleInput">
                <textarea name="description" class="formControl" id="description"
                    placeholder="Thông tin sản phẩm" /><?php echo $product ? $product['Description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="formGroup">
            <label for="totalview" class="controlLabel">Lượt View</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="totalview" type="text" value="<?php echo $product ? $product['TotalView'] : ''; ?>"
                    class="formControl" id="totalview" placeholder="Lượt view" />
            </div>
        </div>

        <div class="formGroup">

            <div id="styleInput" style="float: left;">
                <label for="image1">Ảnh 1</label>
                <input name="Image1" type="file" class="formControl" id="image1" accept="image/*" />
                <?php if ($product && is_file('public/upload/product/' . $product['Image1'])) {
                    echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div id="styleInput" style="float: left;">
                <label for="image2">Ảnh 2</label>
                <input name="Image2" type="file" class="formControl" id="image2" accept="image/*" />
                <?php if ($product && is_file('public/upload/product/' . $product['Image2'])) {
                    echo '<image src="public/upload/product/' . $product['Image2'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div id="styleInput" style="float: left;">
                <label for="image3">Ảnh 3</label>
                <input name="Image3" type="file" class="formControl" id="image3" accept="image/*" />
                <?php if ($product && is_file('public/upload/product/' . $product['Image3'])) {
                    echo '<image src="public/upload/product/' . $product['Image3'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div id="styleInput" style="float: left;">
                <label for="image4">Ảnh 4</label>
                <input name="Image4" type="file" class="formControl" id="image4" accept="image/*" />
                <?php if ($product && is_file('public/upload/product/' . $product['Image4'])) {
                    echo '<image src="public/upload/product/' . $product['Image4'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
        </div>
        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $product ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=product">Trở về</a>
            </div>
        </div>
    </form>
</div>

<!-- <script>
$(document).ready(function() {
    $("#category_id").change(function() {
        var cid = $(this).val();
        $.get("admin/views/product/getcategory.php", {
            cid: cid
        }, function(data) {
            $("#subcategory_id").html(data);
        });
    });
});
</script> -->

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
CKEDITOR.replace('description', {
    height: '800px'
});
</script>