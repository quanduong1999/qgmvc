<style>
.containerFeedback {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerFeedback {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyFeedback {
    margin: 0;
    padding: 0;
}

.tableFeedback,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableFeedback {
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
    <a href="admin.php?controller=feedback&amp;action=edit" class="addNew">Thêm mới</a>
    <div class="containerFeedback">
        <div class="headerFeedback">
            <b>Danh sách phản hồi của khách hàng</b>
        </div>
        <div class="bodyFeedback">
            <div>
                <table class="tableFeedback">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Họ tên</th>
                            <th>Điện thoại </th>
                            <th>Email</th>
                            <th>Thông tin</th>
                            <th>Thời gian</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($feedbacks as $feedback) : ?>
                        <tr>
                            <td><?php echo $feedback['Id'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=feedback&amp;action=edit&amp;fid=<?php echo $feedback['Id']; ?>"><?php echo $feedback['Name']; ?></a>
                            </td>
                            <td><?php echo $feedback['Mobile'] ?></td>
                            <td><?php echo $feedback['Email'] ?></td>
                            <td><?php echo substring($feedback['Subject'], 50); ?></td>
                            <td><?php echo $feedback['Createtime'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=feedback&amp;action=edit&amp;fid=<?php echo $feedback['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=feedback&amp;action=delete&amp;fid=<?php echo $feedback['Id']; ?>">remove</a>
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
        $('#dataTables-feedback').DataTable({
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