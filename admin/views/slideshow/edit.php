<style>
.containerEditSlideShow {
    padding-left: 250px;
}

.slideShowDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.slideShowEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.slideShowEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditSlideShow">
    <div class="slideShowDefault">
        <div class="slideShowEditHeading">
            <?php echo $title ?>
        </div>
        <div class="slideShowEditBody">
            <div>
                <?php require('admin/views/slideshow/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>