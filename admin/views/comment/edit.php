<style>
.containerEditComment {
    padding-left: 250px;
}

.commentDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.commentEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.commentEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditComment">
    <div class="commentDefault">
        <div class="commentEditHeading">
            <?php echo $title ?>
        </div>
        <div class="commentEditBody">
            <div>
                <?php require('admin/views/comment/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>