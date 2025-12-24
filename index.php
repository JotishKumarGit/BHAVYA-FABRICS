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

    <!-- Banner -->
    <section id="home" class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Premium Saree, Garments & Woven Fabric</h1>
                    <p class="lead mb-4">Manufacturing Excellence Since 2000 - Your Trusted Partner in Quality Textiles
                    </p>
                    <a href="#products"><button class="btn btn-light btn-lg me-3 mb-2"><i class="fas fa-shopping-bag me-2"></i>Explore
                            Products</button></a>
                    <button class="btn btn-outline-light btn-lg mb-2" data-bs-toggle="modal"
                        data-bs-target="#quoteModal"><i class="fas fa-phone me-2"></i>Contact Us</button>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fas fa-tshirt" style="font-size: 300px; opacity: 0.2;"></i>
                    <img src="./assets/img/SAREE.jpg" height="auto" width="100%"
                        style="border-radius: 20px; border: 5px solid rgb(255, 255, 255);" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">About BHAVYA FABRICS</h2>
                <p class="text-muted mt-3">Leading Manufacturer & Exporter of Premium Textiles</p>
            </div>

            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="about-card">
                        <h3 class="text-primary mb-4">Our Legacy of Excellence</h3>
                        <p class="lead">BHAVYA FABRICS has been a pioneer in the textile industry since 2000,
                            specializing in premium sarees, garments, and woven fabrics. Under the visionary leadership
                            of <strong>BOSKIBEN JAGDISHKUMAR CHEVLI</strong>, we have built a reputation for
                            uncompromising quality and innovation.</p>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <h3>25+</h3>
                                    <p class="mb-0">Years Experience</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <h3>₹5 Cr</h3>
                                    <p class="mb-0">Annual Turnover</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <h3>10+</h3>
                                    <p class="mb-0">Expert Team</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="text-primary">Our Services:</h5>
                            <div class="row mt-3">
                                <div class="col-md-6 mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i> Manufacturing
                                </div>
                                <div class="col-md-6 mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i> Export Services
                                </div>
                                <div class="col-md-6 mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i> Supply Chain
                                </div>
                                <div class="col-md-6 mb-3">
                                    <i class="fas fa-check-circle text-success me-2"></i> Garment Services
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 p-3 bg-light rounded">
                            <p class="mb-0"><i class="fas fa-map-marker-alt text-danger me-2"></i>
                                <strong>Location:</strong> HDFC Bank, PLOT NO 59 TO 63 BLOCK 106, SHREE SWAMINARAYAN
                                INDUSTRY, KADODARA-BARDOLI ROAD, Palsana, Surat, Gujarat, 394315
                            </p>
                        </div>
                    </div>
                </div>
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

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Gallery</h2>
                <p class="text-muted mt-3">Explore Our Finest Creations</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/SAREE.jpg" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Premium Sarees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/Quality_Garments.jpg" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Designer Garments</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/woven-fabric.jpeg" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Woven Fabrics</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/saree_img.jpg" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Quality Sarees</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/Quality_Garments_2.avif" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Garments</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="assets/img/woven-fabric_new.jpg" height="300px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h4 class="text-white">Fabric Designs</h4>
                        </div>
                    </div>
                </div>
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

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-3"><i class="fas fa-envelope-open-text me-3"></i>Subscribe to Our Newsletter</h2>
                    <p>Stay updated with latest products, trends and exclusive offers from BHAVYA FABRICS</p>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="email" class="form-control newsletter-input"
                            placeholder="Enter your email address">
                        <button class="newsletter-btn" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>