<style>
.containerComment {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerComment {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyComment {
    margin: 0;
    padding: 0;
}

.tableComment,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableComment {
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
    <a href="admin.php?controller=comment&amp;action=edit" class="addNew">Thêm mới</a>
    <div class="containerComment">
        <div class="headerComment">
            Danh sách comment
        </div>
        <div class="bodyComment">
            <div>
                <table class="tableComment">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th>Tác giả</th>
                            <th>Trả lời</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comments as $comment) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $comment['Id'] ?></h4>
                            </td>

                            <td>
                                <h4 style="text-align: center;">
                                    <?php $img_product = get_a_record('product', $comment['ProductId']);
                                        $image = 'public/upload/product/' . $img_product['Image1'];
                                        if (is_file($image)) {
                                            echo '<a href="index.php?p=detail&idProduct=' . $img_product['Id'] . '"><image src="' . $image . '" style="max-width:50px; max-height:50px;" /></a>';
                                        }
                                        ?>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=comment&amp;action=edit&amp;comid=<?php echo $comment['Id']; ?>"><?php echo $comment['Content']; ?></a>
                            </td>
                            <td>
                                <h5><?php echo $comment['CreateDate'] ?></h5>
                            </td>
                            <td>
                                <h5><?php echo $comment['Author'] ?></h5>
                            </td>

                            <td>
                                <h5>
                                    <?php $comment_parent = get_a_record('comment', $comment['ParentId']);
                                        if ($comment['ParentId'] != 0) {
                                            echo $comment_parent['Content'];
                                        }
                                        ?>
                                </h5>
                            </td>
                            <td>
                                <h4><?php echo $comment['Email'] ?></h4>
                            </td>
                            <td><?php echo $comment['Phone'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=comment&amp;action=edit&amp;comid=<?php echo $comment['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=comment&amp;action=delete&amp;comid=<?php echo $comment['Id']; ?>">remove</a>
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
            $('#dataTables-comment').DataTable({
                responsive: true
            });
        });
    </script> -->
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>