<style>
.containerEditContactinfo {
    padding-left: 250px;
}

.contactinfoDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.contactinfoEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.contactinfoEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditContactinfo">
    <div class="contactinfoDefault">
        <div class="contactinfoEditHeading">
            <?php echo $title ?>
        </div>
        <div class="contactinfoEditBody">
            <div>
                <?php require('admin/views/contactinfo/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>