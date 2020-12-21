<style>
.containerEditCategory {
    padding-left: 250px;
}

.categoryDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.categoryEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.categoryEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditCategory">
    <div class="categoryDefault">
        <div class="categoryEditHeading">
            <?php echo $title ?>
        </div>
        <div class="categoryEditBody">
            <div>
                <?php require('admin/views/category/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>