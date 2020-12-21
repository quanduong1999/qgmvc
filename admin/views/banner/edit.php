<style>
.containerEditBanner {
    padding-left: 250px;
}

.bannerDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.bannerEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.bannerEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditBanner">
    <div class="bannerDefault">
        <div class="bannerEditHeading">
            <?php echo $title ?>
        </div>
        <div class="bannerEditBody">
            <div>
                <?php require('admin/views/banner/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>