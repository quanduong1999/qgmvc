<style>
.containerEditFeedback {
    padding-left: 250px;
}

.feedbackDefault {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
}

.feedbackEditHeading {
    padding: 10px 15px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.feedbackEditBody {
    padding: 15px;
}
</style>

<?php require('admin/views/shared/header.php'); ?>
<div class="containerEditBanner">
    <div class="feedbackDefault">
        <div class="feedbackEditHeading">
            <?php echo $title ?>
        </div>
        <div class="feedbackBody">
            <div>
                <?php require('admin/views/feedback/form.php'); ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>