<style>
.containerSlideShow {
    height: auto;
    width: 100%;
    position: relative;
    margin-bottom: 50px;
}

.headerSlideShow {
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background-color: rgb(232, 232, 232);
}

.bodeSlideShow {
    margin: 0;
    padding: 0;
}

.tableSlideShow,
td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
}

tr,
th {
    text-align: left;
    padding: 8px;
}

.tableSlideShow {
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
    <a href="admin.php?controller=slideshow&amp;action=edit" class="addNew"><i class="glyphicon glyphicon-plus"></i>
        Thêm mới</a>
    <div class="containerSlideShow">
        <div class="headerSlideShow">
            <b>Danh sách Slideshow</b>
        </div>
        <div class="bodySlideShow">
            <div>
                <table class="tableSlideShow">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Slide</th>
                            <th>Image1</th>
                            <th>Image2</th>
                            <th>Image3</th>
                            <th>Image4</th>
                            <th>Image5</th>
                            <th>Status</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($slideshow as $slide) : ?>
                        <tr class="odd gradeX">
                            <td>
                                <h4 class="item_name"><?php echo $slide['Id'] ?></h4>
                            </td>
                            <td>
                                <a
                                    href="admin.php?controller=slideshow&amp;action=edit&amp;sid=<?php echo $slide['Id']; ?>"><?php echo $slide['Name']; ?></a>
                            </td>
                            <?php for ($i = 1; $i < 6; $i++) : ?>
                            <?php if (empty($slide['img' . $i])) { ?>
                            <td>
                                <h4 class="item_name">Chưa có hình</h4>
                            </td>
                            <?php
                                    } else { ?>
                            <td class="center">
                                <?php echo '<image src="public/upload/images/' . $slide['img' . $i] . '?time=' . time() . '" style="max-width:50px; margin: 20px" />'; ?>
                            </td>
                            <?php
                                    }
                                    ?>
                            <?php endfor; ?>
                            <td class="center"><?php echo $slide['status'] ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=slideshow&amp;action=edit&amp;sid=<?php echo $slide['Id']; ?>"><span>edit</span></a>
                                <a
                                    href="admin.php?controller=slideshow&amp;action=delete&amp;sid=<?php echo $slide['Id']; ?>"><span>remove</span></a>
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
        $('#dataTables-slideshow').DataTable({
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