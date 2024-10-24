<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = basename($_FILES['image']['name']);
        $image_path = "uploads/" . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    $stmt = $pdo->prepare("INSERT INTO products (product_name, id, description, price, image_path) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$product_name, $category_id, $description, $price, $image_path]);

    echo "Product added successfully!";
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<br><br>
<h2 class="text-center">Create a New Product</h2>
<div class="container">
<form method="post" enctype="multipart/form-data">
    <label for="product_name">Product Name:-</label>
    <input type="text" name="product_name" class="form-control" placeholder="Product Name" required><br>
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control">
        <?php
        $categories = $pdo->query("SELECT id, name FROM categories");
        foreach ($categories as $category) {
            echo "<option value='{$category['id']}'>{$category['name']}</option>";
        }
        ?>
    </select><br>
    <label for="description">Description:-</label>
    <textarea name="description" class="form-control" placeholder="Description"></textarea><br>
    <label for="price">Price:-</label>
    <input type="number" name="price" class="form-control" placeholder="Price" required><br>
    <label for="image">Product Image</label>
    <input type="file" class="form-control" name="image"><br>
    <button class="btn btn-primary" type="submit">Add Product</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
