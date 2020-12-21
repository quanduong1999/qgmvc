<style>
.containerEditAdvertise {
    padding-left: 250px;
}

.advertiseDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.advertiseEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.advertiseEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditAdvertise">
    <div class="advertiseDefault">
        <div class="advertiseEditHeading">
            <?php echo $title ?>
        </div>
        <div class="advertiseEditBody">
            <div>
                <?php require('admin/views/advertise/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>