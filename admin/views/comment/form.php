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

<div class="commentEditHeading">Bình luận</div>
<div class="commentEditBody">
    <form method="post" action="admin.php?controller=comment&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $comment ? $comment['Id'] : '0'; ?>" />

        <div class="formGroup">
            <label for="category_id" class="controlLabel">Sản phẩm</label>

            <div class="inputNameLabel" id="styleInput">
                <select name="productId" class="formControl" id="select">
                    <?php foreach ($products as $product) {
                        $selected = '';
                        if ($comment && ($comment['ProductId'] == $product['Id'])) $selected = 'selected=""';
                        echo '<option  value="' . $product['Id'] . '" ' . $selected . '>' . $product['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <?php if ($comment['ParentId'] != 0) : ?>
        <div class="formGroup">
            <label for="ParentId" class="controlLabel">Reply for</label>

            <div class="inputNameLabel" id="styleInput">
                <?php foreach ($replyfor as $reply) {
                        if ($comment && ($comment['ParentId'] == $reply['Id'])) {
                            echo '<input name="parentId" type="text" value="' . $reply['Content'] . '"" class="formControl" disabled/>';
                        }
                    } ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="formGroup">
            <label for="content" class="controlLabel">Nội dung</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="content" type="text" value="<?php echo $comment ? $comment['Content'] : ''; ?>"
                    class="formControl" id="name" placeholder="Nội dung" required="" />
            </div>
        </div>
        <div class="formGroup">
            <label for="createDate" class="controlLabel">Ngày tạo</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="createDate" type="date" value="<?php echo $comment ? $comment['CreateDate'] : ''; ?>"
                    class="formControl" id="createDate" min="2000-01-02" max="2016-12-31" />
            </div>
        </div>
        <div class="formGroup">
            <label for="author" class="controlLabel">Tác giả</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="author" type="text" value="<?php echo $comment ? $comment['Author'] : ''; ?>"
                    class="formControl" />
            </div>
        </div>


        <div class="formGroup">
            <label for="Email" class="controlLabel">Email</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="email" type="text" value="<?php echo $comment ? $comment['Email'] : ''; ?>"
                    class="formControl" />
            </div>
        </div>
        <div class="formGroup">
            <label for="phone" class="controlLabel">Phone</label>

            <div class="inputNameLabel" id="styleInput">
                <input name="phone" type="text" value="<?php echo $comment ? $comment['Phone'] : ''; ?>"
                    class="formControl" />
            </div>
        </div>
        <div class="formGroup">
            <div class="inputNameLabel" id="styleInput">
                <button type="submit" class="capNhat"
                    id="chung"><?php echo $comment ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="troVe" id="chung" href="admin.php?controller=comment">Trở về</a>
            </div>
        </div>
    </form>
</div>
<script>
$(document).ready(function() {
    $('#select').prop('disabled', true);
});
</script>