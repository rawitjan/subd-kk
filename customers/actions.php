<?php 
require("../includes/conn.php");

if ($_POST['action'] == 'create') {
    $query = "INSERT INTO customers (name, phone, email, driver_license) VALUES ('".$_POST['name']."', '+7".$_POST['phone']."', '".$_POST['email']."', '".$_POST['driver_license']."')";
    $conn->query($query);
    header("Location: /customers/");
} elseif ($_POST['action'] == 'delete') {
    $query = "DELETE from customers WHERE id =".$_POST['id']." LIMIT 1";
    $conn->query($query);
    header("Location: /customers/");
} elseif ($_POST['action'] == 'update') {
    $query = "UPDATE customers SET name = '".$_POST['name']."', phone = '".$_POST['phone']."', email = '".$_POST['email']."', driver_license = '".$_POST['driver_license']."' WHERE id = ".$_POST['id'];
    $conn->query($query);
    header("Location: /customers/");
}
?>