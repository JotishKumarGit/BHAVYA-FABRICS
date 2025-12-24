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
                            contact Us
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact Us</h2>
                <p class="text-muted mt-3">Get In Touch With BHAVYA FABRICS</p>
            </div>

            <div class="row">
                <div class="col-lg-4 h-100 mb-4">
                    <div class="contact-info text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Phone</h5>
                        <p>7567127123<br>9099118988</p>
                    </div>
                </div>

                <div class="col-lg-4 h-100 mb-4">
                    <div class="contact-info text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email</h5>
                        <p>jagdishchevli@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-4 h-100 mb-4">
                    <div class="contact-info text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Address</h5>
                        <p> HDFC Bank, PLOT NO 59 TO 63 BLOCK 106, SHREE SWAMINARAYAN INDUSTRY, KADODARA-BARDOLI ROAD,
                            Palsana, Surat, Gujarat, 394315</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h4 class="text-center mb-4">Send Us a Message</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-quote w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>
    