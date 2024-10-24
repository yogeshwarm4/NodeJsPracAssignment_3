<?php
include 'db.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $product = $pdo->prepare("SELECT image_path FROM products WHERE product_id = ?");
    $product->execute([$product_id]);
    $product = $product->fetch();
    
    if ($product['image_path'] && file_exists($product['image_path'])) {
        unlink($product['image_path']);
    }

    $stmt = $pdo->prepare("DELETE FROM products WHERE product_id = ?");
    $stmt->execute([$product_id]);

    echo "Product deleted successfully!";
}
?>
