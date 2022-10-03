<?php
include 'login-access.php';
$id = $_SESSION['id'];
?>    

<?php require 'includes/database.php'; ?>

<?php

$sql = "SELECT * FROM product ";

if ($result = mysqli_query($conn, $sql)) {
    $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>    
<header>
    <?php include("includes/navbar.php")?>
</header>

<a style="margin: 5px" href="user-add.php" class="btn btn-success">add new user</a>
<table style="margin: 5px" class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>cost price</th>
            <th>selling price</th>
            <th>category</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $product) : ?>
            <tr>
                <td><?php echo $product["id"] ?></td>
                <td><?php echo $product["name"] ?></td> 
                <td><?php echo $product["cost_price"] ?></td>
                <td><?php echo $product["selling_price"] ?></td>
                <td><?php echo $product["category"] ?></td>
                <td><a href="user-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="user-update.php?id=<?php echo $user["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

