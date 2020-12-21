<style>
.containerLive {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerLive {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyLive {
    margin: 0;
    padding: 0;
}

.tableLive,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableLive {
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
    <a href="admin.php?controller=livesport&amp;action=edit" class="addNew">Thêm mới</a>
    <div class="containerLive">
        <div class="headerLive">
            <b>Danh sách phát</b>
        </div>
        <div class="bodyLive">
            <div>
                <table class="tableLive">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Youtube</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($livesports as $livesport) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $livesport['Id'] ?></h4>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>"><?php echo $livesport['Title']; ?></a>
                            </td>
                            <td>
                                <h4><?php echo $livesport['Description'] ?></h4>
                            </td>
                            <td class="center"><a
                                    href="<?php echo $livesport['Link'] ?>"><?php echo $livesport['Link'] ?></a></td>
                            <td>
                                <a
                                    href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>">edit</a>
                                <a
                                    href="admin.php?controller=livesport&amp;action=delete&amp;id=<?php echo $livesport['Id']; ?>">remove</a>
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
        $('#dataTables-livesport').DataTable({
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