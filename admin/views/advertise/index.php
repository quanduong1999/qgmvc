<style>
.containerAdvertise {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerAdvertise {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyAdvertise {
    margin: 0;
    padding: 0;
}

.tableAdvertise,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableAdvertise {
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
    <a href="admin.php?controller=advertise&amp;action=edit" class="addNew">Thêm mới</a>
    <div class="containerAdvertise">
        <div class="headerAdvertise">
            <b>Danh sách Advertise quảng cáo</b>
        </div>
        <div class="bodyAdvertise">
            <div>
                <table class="tableAdvertise">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Advertise</th>
                            <th>Image</th>
                            <th>Vị trí</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ads as $ad) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $ad['Id'] ?></h4>
                            </td>
                            <td><a
                                    href="admin.php?controller=advertise&amp;action=edit&amp;aid=<?php echo $ad['Id']; ?>"><?php echo $ad['Name']; ?></a>
                            </td>
                            <td>
                                <?php echo '<image src="public/upload/images/' . $ad['Image'] . '?time=' . time() . '" style="max-width:100px;" />'; ?>
                            </td>
                            <td><?php echo $ad['Visible']; ?></a></td>
                            <td><?php echo $status[$ad['IsActive']]; ?></td>
                            <td><?php echo $ad['Description'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=advertise&amp;action=edit&amp;aid=<?php echo $ad['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=advertise&amp;action=delete&amp;aid=<?php echo $ad['Id']; ?>">remove</a>
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
        $('#dataTables-advertise').DataTable({
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