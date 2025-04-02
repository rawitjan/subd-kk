<?php 
include('../includes/header.php'); 
?>

<div class="container">
    <form action="/customers/actions.php" method="post">
        <input type="hidden" name="action" value="create">
        <div class="mb-2">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" max="9999999999" placeholder="7780001122">
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Driver license</label>
            <input type="text" name="driver_license" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>