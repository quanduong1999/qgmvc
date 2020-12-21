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
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
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
</style>

<?php require('admin/views/shared/header.php'); ?>
<div style="padding-left: 250px;">
    <div class="containerOrder">
        <div class="headerOrder">
            Danh sách các đơn hàng
        </div>
        <div class="bodyOrder">
            <div>
                <table class="tableOrder">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Khách hàng</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td><?php echo $order['Id']; ?></td>
                            <td><a
                                    href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>"><?php echo $order['Customer']; ?></a>
                            </td>
                            <td><?php echo $order['Createtime']; ?></td>
                            <td><?php echo $status[$order['Status']]; ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=order&amp;action=edit&amp;oid=<?php echo $order['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=order&amp;action=delete&amp;oid=<?php echo $order['Id']; ?>">remove</i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <script>
    $(document).ready(function() {
        $('#dataTables-order').DataTable({
            responsive: true,
            "order": [
                [0, 'desc']
            ]
        });
    });
    </script> -->
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>