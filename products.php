<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHAVYA FABRICS - Premium Saree, Garments & Woven Fabric</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- bread crumb -->
    <section class="breadcrumb-section">
        <div class="container text-center">
            <div class="breadcrumb-box d-inline-block">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Products
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Premium Products</h2>
                <p class="text-muted mt-3">Saree, Garments & Woven Fabric - Quality You Can Trust</p>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="./assets/img/saree_img.jpg" height="280px" width="100%" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-primary">Premium Sarees</h4>
                            <p class="card-text">Exquisite collection of traditional and contemporary sarees crafted
                                with finest materials and intricate designs.</p>
                            <a href="Premium_Sarees.php" class="text-decoration-none"><button class="btn btn-outline-primary">View Details</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="./assets/img/Quality_Garments.jpg" height="280px" width="100%" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-primary">Quality Garments</h4>
                            <p class="card-text">Wide range of garments designed for comfort and style, manufactured
                                with precision and attention to detail.</p>
                            <a href="Quality_Garments.php" class="text-decoration-none"><button class="btn btn-outline-primary">View Details</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card">
                        <div class="product-img">
                            <img src="./assets/img/woven-fabric.jpeg" height="280px" width="100%" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-primary">Woven Fabric</h4>
                            <p class="card-text">Premium woven fabrics in diverse textures and patterns, perfect for all
                                your textile requirements.</p>
                            <a href="Woven_Fabric.php" class="text-decoration-none"><button class="btn btn-outline-primary">View Details</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>