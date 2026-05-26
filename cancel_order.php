<?php

@include 'config.php';

if (isset($_POST['cancel_order'])) {
    $order_id = $_POST['order_id'];

    // Cancel the order by deleting it from the database
    $cancel_query = mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$order_id'") or die('Query failed');

    if ($cancel_query) {
        header('location:orders.php');
    } else {
        echo 'Failed to cancel the order!';
    }
}
?>
