<?php 
include('../includes/conn.php'); 

$query = "SELECT * from customers";

$customers = $conn->query($query);

include('../includes/header.php'); 
?>

<div class="container">
    <a href="/customers/create.php" class="btn btn-primary w-100">Зарегистрировать клиента</a>
    <table class="table">
        <thead>
            <tr class="text-bg-primary">
                <th>#</th>
                <th>Customer name</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>Driver license</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($c = $customers->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $c['id'] ?? 'null' ?></td>
                <td><?php echo $c['name'] ?? 'null' ?></td>
                <td><?php echo $c['phone'] ?? 'null' ?></td>
                <td><?php echo $c['email'] ?? 'null' ?></td>
                <td><?php echo $c['driver_license'] ?? 'null' ?></td>
                <td>
                    <a href="/customers/edit.php?id=<?php echo $c['id'] ?>" class="btn btn-primary">Edit</a>
                    <form action="/customers/actions.php" method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo $c['id'] ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php }; ?>
        </tbody>
    </table>

    
</div>

<?php
include('../includes/footer.php');
?>