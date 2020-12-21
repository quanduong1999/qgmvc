<style>
.containerEditGroup {
    padding-left: 250px;
}

.groupDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.groupEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.groupEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditGroup">
    <div class="groupDefault">
        <div class="groupEditeading">
            <?php echo $title ?>
        </div>
        <div class="groupEditBody">
            <div>
                <?php require('admin/views/group/form.php'); ?>
            </div>

        </div>

    </div>
</div>
</div>

<?php require('admin/views/shared/footer.php'); ?>