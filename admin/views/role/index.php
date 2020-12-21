<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @media only screen and (min-width: 768px) {
        .containerPW {
            position: inherit;
            margin: 0 0 0 250px;
            padding: 0 30px;
            border-left: 1px solid #e7e7e7;
        }
    }

    #pageWrapper {
        min-height: 527px;
        background-color: #fff;
    }

    .newAdd {
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        user-select: none;
        background-image: none;
        border: 1px solid #ddd;
        border-radius: 4px;
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
        float: right !important;
    }

    .panelHeading {
        margin-top: 20px;
        padding: 10px 15px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .panelBody {
        padding: 0;
        margin: 0;
    }

    .tableRole {
        width: 100%;
    }

    .tableRole,
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <?php require('admin/views/shared/header.php'); ?>
    <div class="containerPW" id="pageWrapper">
        <a href="admin.php?controller=role&amp;action=edit" class="newAdd"><i class="glyphicon glyphicon-plus"></i> Thêm
            mới</a>
        <div class="panelDefault">
            <div class="panelHeading">
                <b>Danh sách quyền truy cập</b>
            </div>
            <div class="panelBody">
                <div>
                    <table class="tableRole">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên gọi</th>
                                <th>Mô tả</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($roles as $role) : ?>
                            <tr class="odd gradeX">
                                <td>
                                    <h4 class="item_name"><?php echo $role['Id'] ?></h4>
                                </td>
                                <td>
                                    <a
                                        href="admin.php?controller=role&amp;action=edit&amp;rid=<?php echo $role['Id']; ?>"><?php echo $role['Name']; ?></a>
                                </td>
                                <td>
                                    <h4 class="item_name"><?php echo $role['Description'] ?></h4>
                                </td>

                                <td>
                                    <a
                                        href="admin.php?controller=role&amp;action=edit&amp;rid=<?php echo $role['Id']; ?>"><span>edit</span></i></a>
                                    <a
                                        href="admin.php?controller=role&amp;action=delete&amp;rid=<?php echo $role['Id']; ?>"><span>remove</span></i></a>
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
            $('#dataTables-role').DataTable({
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
</body>

</html>