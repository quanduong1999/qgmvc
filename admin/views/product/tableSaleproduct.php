<style>
.containerProduct {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerProduct {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyProduct {
    margin: 0;
    padding: 0;
}

.tableProduct,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableProduct {
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
</style>

<?php
$options = array(
    'where' => 'TypeId = 3',
    'order_by' => 'Id DESC'
);
$product_saleoff = get_all('product', $options);
?>
<div class="containerProduct">
    <div class="headerProduct">
        <b>Sản phẩm khuyến mại</b>
    </div>
    <div class="bodyProduct">
        <div>
            <table class="tableProduct">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên SP</th>
                        <th>Giá bán</th>
                        <th>Giá KM</th>
                        <th>Ngày tạo</th>
                        <th>Img</th>
                        <th>View</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product_saleoff as $product) : ?>
                    <tr>
                        <td>
                            <h4><?php echo $product['Id'] ?></h4>
                        </td>
                        <td>
                            <a
                                href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>"><?php echo $product['Name']; ?></a>
                        </td>
                        <td><?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?></td>
                        <td><?php echo number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.'); ?>
                        </td>
                        <td><?php echo $product['Createdate'] ?></td>
                        <td><?php echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></a>
                        </td>
                        <td><?php echo $product['TotalView'] ?></td>
                        <td>
                            <a
                                href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>">edit</a>
                            <a
                                href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['Id']; ?>">remove</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#dataTables-saleoff').DataTable({
        responsive: true,
        "order": [
            [0, 'desc']
        ]
    });
});
</script>