<style>
.containerOrder {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerOrder {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;

    justify-content: center;
    align-items: center;
    width: 100%;

}

.bodyOrder {
    margin: 0;
    padding: 0;
}

.tableOrder,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableOrder {
    width: 100%;
}

.addNew {
    margin-top: 20px;
    display: inherit;
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    border-radius: 4px;
}

.TroVe {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.capNhat {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

#chung {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    border-radius: 4px;
}
</style>
<?php require('admin/views/shared/header.php'); ?>
<div style="padding-left: 250px;">
    <div class="containerOrder">

        <div class="headerOrder">
            <h3>Thông tin đơn hàng</h3>

            <table class="tableOrder">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Giá KM</th>
                        <th>SL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt = 0;
                    $order_total = 0;
                    foreach ($order_detail as $product) :
                        $stt++;
                        if ($product["TypeId"] == 3) {
                            $order_total += $product['Price'] - (($product['Price']) * ($product['Percent_off']) / 100);
                        } else
                            $order_total += $product['Price'] * $product['Quantity'];
                    ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td>
                            <?php
                                $image = 'public/upload/product/' . $product['Image1'];
                                if (is_file($image)) {
                                    echo '<image src="' . $image . '" style="max-width:50px; max-height:50px;" />';
                                }
                                ?>
                        </td>
                        <td>
                            <a
                                href="index.php?p=detail&idProduct=<?php echo $product['Id']; ?>"><?php echo $product['Name']; ?></a>
                        </td>
                        <td>
                            <?php echo number_format($product['Price'], 0, ',', '.'); ?>
                        </td>
                        <td>
                            <?php echo number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.'); ?>
                        </td>
                        <td width="5%">
                            <?php echo $product['Quantity']; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <h4>Thành tiền : <?php echo number_format($order_total, 0, ',', '.'); ?> VNĐ</h4>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="headerOrder">
            <h3>Thông tin khách hàng</h3>

            <table class="tableOrder">
                <tr>
                    <td>Họ và tên</td>
                    <td><?php echo $order['Customer']; ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><?php echo $order['Address']; ?></td>
                </tr>
                <tr>
                    <td>Di động</td>
                    <td><?php echo $order['Phone']; ?></td>
                </tr>
                <tr>
                    <td>Thời gian</td>
                    <td><?php echo $order['Createtime']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $order['Email']; ?></td>
                </tr>
            </table>

            <form id="order_form" method="post" action="admin.php?controller=order&amp;action=complete" role="form">
                <div class="formGroup">
                    <input name="oid" type="hidden" value="<?php echo $order['Id']; ?>" />
                    <button type="submit" class="capNhat" id="chung"> Xử lý
                        xong</button>
                    <a href="admin.php?controller=order" class="troVe" id="chung">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>