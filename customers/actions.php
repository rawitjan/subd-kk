<?php 
require("../includes/conn.php");

if ($_POST['action'] == 'create') {
    $query = "INSERT INTO customers (name, phone, email, driver_license) VALUES ('".$_POST['name']."', '+7".$_POST['phone']."', '".$_POST['email']."', '".$_POST['driver_license']."')";
    $conn->query($query);
    header("Location: /");
} elseif ($_POST['action'] == 'delete') {
    # code...
}
?>