<style>
.containerEditProduct {
    padding-left: 250px;
}

.productDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.productEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.productEditBody {
    padding: 15px;
}
</style>

<?php
$options = array(
    'order_by' => 'Createdate'
);
$products = get_all('product', $options);
?>
<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditProduct">
    <div class="productDefault">
        <div class="producEdittHeading">
            <?php echo $title ?>
        </div>
        <div class="productEditBody">
            <div>
                <?php require('admin/views/product/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>