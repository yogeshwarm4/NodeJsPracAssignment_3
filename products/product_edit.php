<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    $image_path = $_POST['current_image'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = basename($_FILES['image']['name']);
        $image_path = "uploads/" . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    }

    $stmt = $pdo->prepare("UPDATE products SET product_name = ?, id = ?, description = ?, price = ?, image_path = ? WHERE product_id = ?");
    $stmt->execute([$product_name, $category_id, $description, $price, $image_path, $product_id]);

    echo "Product updated successfully!";
}

$product_id = $_GET['id'];
$product = $pdo->prepare("SELECT * FROM products WHERE product_id = ?");
$product->execute([$product_id]);
$product = $product->fetch();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<br><br>
<h2 class="text-center">Update Products</h2>
<div class="container">
<form method="post" enctype="multipart/form-data">
    <label for="product_id">Product Id:-</label>
    <input type="hidden" class="form-control" name="product_id" value="<?php echo $product['product_id']; ?>">
    <label for="product_name">Product Name:-</label>
    <input type="text" class="form-control" placeholder="Enter Your Product Name" name="product_name" value="<?php echo $product['product_name']; ?>" required><br>
    <label for="category_id">Category:-</label>
    <select class="form-control" name="category_id">
        <?php
        $categories = $pdo->query("SELECT id, name FROM categories");
        foreach ($categories as $category) {
            $selected = $category['id'] == $product['id'] ? 'selected' : '';
            echo "<option value='{$category['id']}' {$selected}>{$category['name']}</option>";
        }
        ?>
    </select><br>
    <label for="description">Description</label>
    <textarea class="form-control" placeholder="Enter Description" name="description"><?php echo $product['description']; ?></textarea><br>
    <label for="price">Price:-</label>
    <input class="form-control" placeholder="Enter Your Price" type="text" name="price" value="<?php echo $product['price']; ?>" required><br>
    <label for="image">Product Image</label>
    <input type="file" class="form-control" name="image"><br>
    <input type="hidden" name="current_image" value="<?php echo $product['image_path']; ?>">
    <button class="btn btn-primary" type="submit">Update Product</button>
    <a class="btn btn-primary" href="product_add.php">Back</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
