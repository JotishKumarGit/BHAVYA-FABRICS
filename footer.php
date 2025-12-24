<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-white mb-4">BHAVYA FABRICS</h5>
                <div class="footer-links">
                    <a href="">BHAVYA FABRICS has been a pioneer in the textile industry since 2000, specializing in
                        premium sarees, garments, and woven fabrics. Under the visionary leadership of BOSKIBEN
                        JAGDISHKUMAR CHEVLI, we have built a reputation for uncompromising quality and
                        innovation.</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-white mb-4">Our Products</h5>
                <div class="footer-links">
                    <a href="Premium_Sarees.php">Premium Sarees</a>
                    <a href="Quality_Garments.php">Quality Garments</a>
                    <a href="Woven_Fabric.php">Woven Fabrics</a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="text-white mb-4">Quick Links</h5>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="products.php">Products</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="blog.php">Blog</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-white mb-4">Contact Info</h5>
                <div class="footer-links">
                    <a href="tel:7567127123"><i class="fas fa-phone me-2"></i> 7567127123</a>
                    <a href="tel:9099118988"><i class="fas fa-mobile-alt me-2"></i> 9099118988</a>
                    <a href="mailto:jagdishchevli@gmail.com"><i class="fas fa-envelope me-2"></i>
                        jagdishchevli@gmail.com</a>
                    <a href="#"><i class="fas fa-map-marker-alt me-2"></i> HDFC Bank, PLOT NO 59 TO 63 BLOCK 106,
                        SHREE SWAMINARAYAN INDUSTRY, KADODARA-BARDOLI ROAD, Palsana, Surat, Gujarat, 394315</a>
                </div>
            </div>
        </div>

        <hr class="bg-light my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center  text-md-start mb-3 mb-md-0">
                <p class="mb-0">&copy; 2024 BHAVYA FABRICS. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center  text-md-end">
                <a href="https://trade4export.com ">
                    <p class="mb-0 text-white">Designed By Trade4Export</p>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">Get a Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" required>
                            <option value="">Select Product Type</option>
                            <option value="saree">Premium Sarees</option>
                            <option value="garments">Quality Garments</option>
                            <option value="fabric">Woven Fabric</option>
                            <option value="custom">Custom Order</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Your Requirements" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-quote w-100">Submit Quote Request</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- script for modal -->
<script>
    document.querySelector("#quoteModal form").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent normal form submission

        // Get form values
        const name = this.querySelector('input[type="text"]').value.trim();
        const email = this.querySelector('input[type="email"]').value.trim();
        const phone = this.querySelector('input[type="tel"]').value.trim();
        const product = this.querySelector('select').value;
        const requirements = this.querySelector('textarea').value.trim();

        if (!name || !email || !phone || !product || !requirements) {
            alert("Please fill all the fields!");
            return;
        }
        const message = `Hello,%0A%0AI would like to get a quote.%0A%0AName: ${name}%0AEmail: ${email}%0APhone: ${phone}%0AProduct: ${product}%0ARequirements: ${requirements}`;
        const whatsappNumber = "7567127123";
        window.open(`https://wa.me/${whatsappNumber}?text=${message}`, "_blank");
    });
</script>


<!-- goes on whatsapp -->
<script>
    document.querySelector("form").addEventListener("submit", function(e) {
        e.preventDefault();

        // Get form values
        const name = this.querySelector('input[type="text"]').value.trim();
        const email = this.querySelector('input[type="email"]').value.trim();
        const subject = this.querySelector('input[placeholder="Subject"]').value.trim();
        const message = this.querySelector('textarea').value.trim();

        if (!name || !email || !subject || !message) {
            alert("Please fill all the fields!");
            return;
        }
        const whatsappMessage = `Hello,%0A%0AI have a message from your website.%0A%0AName: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        const whatsappNumber = "7567127123";

        window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMessage}`, "_blank");
    });
</script>

<!-- Scroll to Top Button -->
<button class="btn btn-quote position-fixed bottom-0 end-0 m-4"
    style="z-index: 999; border-radius: 100%; width: 70px; height: 70px;"
    onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    <i class="fas fa-arrow-up"></i>
</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

<script>
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                }
            }
        });
    });

    // Active nav link on scroll
    window.addEventListener('scroll', () => {
        let current = '';
        const sections = document.querySelectorAll('section[id]');

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
</script>

</body>

</html>