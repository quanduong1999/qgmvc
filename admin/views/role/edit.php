<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .containerEditBanner {
        padding-left: 250px;
    }
    </style>
</head>

<body>
    <?php require('admin/views/shared/header.php'); ?>
    <div class="containerEditBanner">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $title ?>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <?php require('admin/views/role/form.php'); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require('admin/views/shared/footer.php'); ?>


</body>

</html>