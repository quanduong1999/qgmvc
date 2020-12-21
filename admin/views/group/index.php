<style>
.containerGroup {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerGroup {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyGroup {
    margin: 0;
    padding: 0;
}

.tableGroup,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableGroup {
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
    <a href="admin.php?controller=group&amp;action=edit" class="addNew">Thêm mới</a>

    <div class="containerGroup">
        <div class="headerGroup">
            <b> Danh mục nhóm sản phẩm</b>
        </div>
        <div class="bodyGroup">
            <div>
                <table class="tableGroup">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên nhóm</th>
                            <th>Tên danh mục</th>
                            <th>Dường dẫn</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($groups as $group) : ?>
                        <tr class="odd gradeX">
                            <td>
                                <h4><?php echo $group['Id'] ?></h4>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=group&amp;action=edit&amp;gid=<?php echo $group['Id']; ?>"><?php echo $group['Name']; ?></a>
                            </td>
                            <td>
                                <?php $category = get_a_record('Categories', $group['CategoryId']);
                                    if ($category['Id'] != 0) {
                                        echo $category['Name'];
                                    }
                                    ?>

                            </td>
                            <td><?php echo $group['Link'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=group&amp;action=edit&amp;gid=<?php echo $group['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=group&amp;action=delete&amp;gid=<?php echo $group['Id']; ?>">remove</a>
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
        $('#dataTables-group').DataTable({
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