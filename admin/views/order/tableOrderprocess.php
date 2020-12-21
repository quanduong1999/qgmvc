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
        margin-bottom: 50px;
    }

    .header {
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        background-color: rgb(232, 232, 232);
    }

    .tableOrderProcess {
        margin: 0;
        padding: 0;
    }

    .tableProcess,
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        border-collapse: collapse;
    }

    .tableProcess {
        width: 100%;
    }
    </style>
</head>

<body>
    <?php
    $options = array(
        'where' => 'Status = 0',
        'order_by' => 'Createtime DESC'
    );
    $order_inprocess = get_all('orders', $options);
    $status = array(
        0 => 'Chưa xử lý',
        1 => 'Đã xử lý'
    );
    ?>
    <div class="containerOrder">
        <div class="header">
            <b>Danh sách các đơn hàng chưa xử lý</b>
        </div>
        <div class="tableOrderProcess">
            <div>
                <table class="tableProcess">
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
                        <?php foreach ($order_inprocess as $order) : ?>
                        <tr>
                            <td><?php echo $order['Id']; ?></td>
                            <td><a
                                    href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>"><?php echo $order['Customer']; ?></a>
                            </td>
                            <td><?php echo $order['Createtime']; ?></td>
                            <td><?php echo $status[$order['Status']]; ?></td>
                            <td>
                                <a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>"
                                    class="text-danger"><span>edit</span></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>