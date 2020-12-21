<style>
.containerCategory {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerCategory {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyCategory {
    margin: 0;
    padding: 0;
}

.tableCategory,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableCategory {
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
    <a href="admin.php?controller=category&amp;action=edit" class="addNew">Thêm mới</a>

    <div class="containerCategory">
        <div class="headerCategory">
            <b>Danh mục sản phẩm</b>
        </div>
        <div class="bodyCategory">
            <div>
                <table class="tableCategory">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên danh mục</th>
                            <th>Vị trí</th>
                            <th>Dường dẫn</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $cate) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $cate['Id'] ?></h4>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=category&amp;action=edit&amp;cid=<?php echo $cate['Id']; ?>"><?php echo $cate['Name']; ?></a>
                            <td><?php echo $cate['Position'] ?></td>
                            <td><?php echo $cate['alias'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=category&amp;action=edit&amp;cid=<?php echo $cate['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=category&amp;action=delete&amp;cid=<?php echo $cate['Id']; ?>">remove</a>
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
        $('#dataTables-cate').DataTable({
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