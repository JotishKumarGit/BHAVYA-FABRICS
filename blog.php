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
                            Blog
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Latest Updates</h2>
                <p class="text-muted mt-3">Stay Updated with Textile Industry Trends</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="blog-img">
                            <img src="assets/img/SAREE.jpg" height="200px" width="100%" alt="">
                        </div>
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Sarees</span>
                            <h5 class="card-title">Latest Saree Trends 2024</h5>
                            <p class="card-text text-muted">Discover the newest trends in saree designs and what's
                                making waves in the fashion industry...</p>
                            <a href="contact.php" class="text-primary fw-bold">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="blog-img">
                            <img src="assets/img/Quality_Garments.jpg" height="200px" width="100%" alt="">
                        </div>
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Quality Garments</span>
                            <h5 class="card-title">Premium Quality Garments</h5>
                            <p class="card-text text-muted">
                                Discover our high-quality garments , comfort, and durability to
                                meet the highest standards...
                            </p>
                            <a href="contact.php" class="text-primary fw-bold">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card blog-card">
                        <div class="blog-img">
                            <img src="assets/img/woven-fabric_new.jpg" height="200px" width="100%" alt="">
                        </div>
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Industry</span>
                            <h5 class="card-title">Sustainable Fabric Production</h5>
                            <p class="card-text text-muted">Our commitment to sustainable practices and eco-friendly
                                manufacturing processes...</p>
                            <a href="contact.php" class="text-primary fw-bold">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>