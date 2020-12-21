<style>
.containerEditIntro {
    padding-left: 250px;
}

.introDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.introEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.introEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditIntro">
    <div class="introDefault">
        <div class=".introEditHeading">
            <?php echo $title ?>
        </div>
        <div class="introEditBody">
            <div>
                <?php require('admin/views/intro/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>