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
                            Premium Sarees
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- products details -->
    <div class="container my-5">
        <div class="row align-items-center">

            <!-- Left Side: Image -->
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="./assets/img/saree_img.jpg" alt="Premium Saree" class="img-fluid rounded shadow">
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h2 class="text-danger mb-3">Premium Saree </h2>
                <p><strong>Fabric:</strong> Silk Blend</p>
                <p><strong>Color:</strong> Red & Gold</p>
                <p><strong>Description:</strong> This elegant premium saree is perfect for weddings and festive occasions. Crafted with intricate designs and luxurious fabric for unmatched comfort and style.</p>
                <a href="" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-danger mt-3">Enquiry Now</a>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>