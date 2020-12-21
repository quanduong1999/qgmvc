<style>
.containerIntro {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerIntro {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyIntro {
    margin: 0;
    padding: 0;
}

.tableIntro,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableIntro {
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
    <a href="admin.php?controller=intro&amp;action=edit" class="addNew">Thêm mới</a>
    <div class="containerIntro">
        <div class="headerIntro">
            <b>Danh sách phần giới thiệu</b>
        </div>
        <div class="bodyIntro">
            <div>
                <table class="tableIntro">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($introduction as $intro) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $intro['Id'] ?></h4>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=intro&amp;action=edit&amp;iid=<?php echo $intro['Id']; ?>"><?php echo $intro['Title']; ?></a>
                            </td>
                            <td>
                                <h4><?php echo $intro['Content'] ?></h4>
                            </td>
                            <td><?php echo $intro['IsActive'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=intro&amp;action=edit&amp;iid=<?php echo $intro['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=intro&amp;action=delete&amp;iid=<?php echo $intro['Id']; ?>">remove</a>
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
        $('#dataTables-intro').DataTable({
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