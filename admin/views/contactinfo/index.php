<style>
.containerContactinfo {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerContactinfo {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyContactinfo {
    margin: 0;
    padding: 0;
}

.tableContactinfo,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableContactinfo {
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
    <a href=" admin.php?controller=contactinfo&amp;action=edit" class="addNew"> Thêm mới</a>
    <div class="containerContactinfo">
        <div class="headerContactinfo">
            <b>Danh sách phần giới thiệu</b>
        </div>
        <div class="bodyContactinfo">
            <div>
                <table class="tableContactinfo">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại 1</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Zalo</th>
                            <th>Skype</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contactinfor as $info) : ?>
                        <tr>
                            <td><?php echo $info['Id'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=contactinfo&amp;action=edit&amp;iid=<?php echo $info['Id']; ?>"><?php echo $info['Address']; ?></a>
                            </td>
                            <td><?php echo $info['Mobile'] ?></td>
                            <td><?php echo $info['Email'] ?></td>
                            <td><?php echo $info['Facebook'] ?></td>
                            <td><?php echo $info['Zalo'] ?></td>
                            <td><?php echo $info['Skype'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=contactinfo&amp;action=edit&amp;iid=<?php echo $info['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=contactinfo&amp;action=delete&amp;iid=<?php echo $info['Id']; ?>">remove</a>
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
        $('#dataTables-info').DataTable({
            responsive: true,
            "order": [
                [0, 'desc']
            ]
        });
    });
    </script>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>