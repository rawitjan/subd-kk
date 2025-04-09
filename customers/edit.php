<?php 
include('../includes/conn.php');
$query = "SELECT * FROM customers WHERE id=".$_GET['id']." LIMIT 1";

$c = $conn->query($query)->fetch_assoc();
var_dump($c);
include('../includes/header.php'); 


?>

<div class="container">

    <form action="/customers/actions.php" method="post">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo $c['id'] ?>">
        <div class="mb-2">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required value="<?php echo $c['name'] ?>">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" required value="<?php echo $c['email'] ?>">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $c['phone'] ?>" placeholder="7780001122" required>
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Driver license</label>
            <input type="text" name="driver_license" class="form-control" required value="<?php echo $c['driver_license'] ?>">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>