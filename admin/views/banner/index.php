<style>
.containerBanner {
    height: auto;
    width: 100%;
    border: 1px solid rgb(232, 232, 232);
    position: relative;
    margin-bottom: 50px;
}

.headerBanner {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodyBanner {
    margin: 0;
    padding: 0;
}

.tableBanner,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

.tableBanner {
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
    <a href="admin.php?controller=banner&amp;action=edit" class="addNew"><i class="glyphicon glyphicon-plus"></i> Thêm
        mới</a>
    <div class="containerBanner">
        <div class="headerBanner">
            <b>Danh sách banner</b>
        </div>
        <div class="bodyBanner">
            <div>
                <table class="tableBanner">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Banner</th>
                            <th>Image</th>
                            <th>Vị trí</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($banners as $banner) : ?>
                        <tr>
                            <td>
                                <h4><?php echo $banner['Id'] ?></h4>
                            </td>
                            <td><a
                                    href="admin.php?controller=banner&amp;action=edit&amp;bid=<?php echo $banner['Id']; ?>"><?php echo $banner['Name']; ?></a>
                            </td>
                            <td>
                                <?php echo '<image src="public/upload/images/' . $banner['Image'] . '?time=' . time() . '" style="max-width:100px;" />'; ?>
                            </td>
                            <td><?php echo $banner['Visible']; ?></a></td>
                            <td><?php echo $status[$banner['IsActive']]; ?></td>
                            <td><?php echo $banner['Description'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=banner&amp;action=edit&amp;bid=<?php echo $banner['Id']; ?>"><span>edit</span></i></i></a>
                                <a
                                    href="admin.php?controller=banner&amp;action=delete&amp;bid=<?php echo $banner['Id']; ?>"><span>remove</span></i></a>
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
        $('#dataTables-banner').DataTable({
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