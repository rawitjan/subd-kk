<?php 
include('includes/conn.php'); 

$query = "SELECT * FROM cars";

$cars = $conn->query($query);

include('includes/header.php'); 
?>

<div class="container">
    <h4>Cars</h4>
    <table class="table">
        <thead>
            <tr class="text-bg-primary">
                <th>#</th>
                <th>Car brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>License plate</th>
                <th>Price per day</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($r = $cars->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $r['id'] ?? 'null' ?></td>
                <td><?php echo $r['brand'] ?? 'null' ?></td>
                <td><?php echo $r['model'] ?? 'null' ?></td>
                <td><?php echo $r['year'] ?? 'null' ?></td>
                <td><?php echo $r['license_plate'] ?? 'null' ?></td>
                <td><?php echo $r['price_per_day'] ?? 'null' ?></td>
                <td><?php echo $r['status'] ?? 'null' ?></td>
                <td></td>
            </tr>
        <?php }; ?>
        </tbody>
    </table>

    
</div>

<?php
include('includes/footer.php');
?>