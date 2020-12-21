<style>
.containerEditLive {
    padding-left: 250px;
}

.liveDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.liveEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.liveEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditLive">
    <div class="liveDefault">
        <div class="liveEditHeading">
            <?php echo $title ?>
        </div>
        <div class="liveEditBody">
            <div>
                <?php require('admin/views/livesport/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>