<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    body,
    html {
        height: 100%;
        width: 100%;
        margin: 0px;
    }

    .containerOrder {
        height: auto;
        width: 100%;
        border: 1px solid rgb(232, 232, 232);
        position: relative;
    }

    .header {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 7%;
        width: 100%;
        background-color: rgb(232, 232, 232);
    }

    .tableOrderComplete {
        padding-left: 0px;
        padding-right: 0px;
    }

    .tableComplete,
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        border-collapse: collapse;
    }

    .tableComplete {
        width: 100%;
    }

    tr:hover {
        background-color: #dddddd;
    }
    </style>
</head>

<body>
    <div class="containerOrder">
        <div class="header">
            <b>Danh sách các đơn hàng đã xử lý</b>
        </div>
        <div class="tableOrderComplete">
            <div class="dataTable_wrapper">
                <table class="tableComplete">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Khách hàng</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order_complete as $order) : ?>
                        <tr>
                            <td><?php echo $order['Id']; ?></td>
                            <td><a
                                    href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>"><?php echo $order['Customer']; ?></a>
                            </td>
                            <td><?php echo $order['Createtime']; ?></td>
                            <td><?php echo $status[$order['Status']]; ?></td>
                            <td>
                                <a
                                    href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>">edit</a>
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
        $('#dataTables-order_complete').DataTable({
            responsive: true,
            "order": [
                [0, 'desc']
            ]
        });
    });
    </script> -->
</body>

</html>