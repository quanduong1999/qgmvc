<?php require('website/views/shared/header.php'); ?>

    
    <?php
    require "slideshow.php";
    ?>
    <div class="body_product">
        <?php
        require "order_product.php";
        ?>
        <?php
        require "newproduct.php";
        ?>
        <?php
        require "saleoffproduct.php";
    ?>
    </div>
<?php require('website/views/shared/footer.php'); ?>