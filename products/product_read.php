<?php
include 'db.php';


$products = $pdo->query("SELECT products.*, categories.name AS category_name FROM products 
                         JOIN categories ON products.id = categories.id");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<br><br>
<h2 class="text-center">Products List</h2>

<div class="container mt-5">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Product Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['product_name']) ?></td>
                    <td><?= htmlspecialchars($product['category_name']) ?></td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td>$<?= htmlspecialchars($product['price']) ?></td>
                    <td>
                        <?php if ($product['image_path']): ?>
                            <img src="<?= htmlspecialchars($product['image_path']) ?>" width="100">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="product_edit.php?id=<?= $product['product_id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="product_delete.php?id=<?= $product['product_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
