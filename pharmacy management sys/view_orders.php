<?php
include 'db_config.php';

$sql = "SELECT orders.id, medicines.name AS medicine_name, orders.quantity, orders.order_date, orders.delivered_date
        FROM orders
        JOIN medicines ON orders.medicine_id = medicines.id";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
</head>
<body>
    <h2>Orders</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Order Date</th>
            <th>Delivered Date</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['medicine_name'] ?></td>
                <td><?= $order['quantity'] ?></td>
                <td><?= $order['order_date'] ?></td>
                <td><?= $order['delivered_date'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
