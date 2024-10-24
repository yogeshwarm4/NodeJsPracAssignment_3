<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            position: relative; 
        }
        .carousel-caption {
            position: absolute; 
            top: 40%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            color: white; 
            text-align: center; 
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Shopping Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="./s3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Welcome to Our Shopping Cart</h1>
        <p>Find the best deals and offers!</p>
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./s4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Exclusive Products</h1>
        <p>Shop the latest trends and styles.</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="./s5.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Special Discounts</h1>
        <p>Get amazing discounts on your favorite items!</p>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
