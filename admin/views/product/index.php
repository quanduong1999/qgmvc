<style>
.containerProduct {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerProduct {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyProduct {
    margin: 0;
    padding: 0;
}

.tableProduct,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableProduct {
    width: 100%;
}

.addNew {
    margin-top: 20px;
    display: inherit;
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    border-radius: 4px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div style="padding-left: 250px;">
    <a href="admin.php?controller=product&amp;action=edit" class="addNew">Thêm mới</a>
    <?php require('tableNewproduct.php'); ?>
    <?php require('tableOrderproduct.php'); ?>
    <?php require('tableSaleproduct.php'); ?>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>