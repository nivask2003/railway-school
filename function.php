<?php

function template_header(){
    echo <<< EOT
        <header>

        <!-- =====================================================
             DESKTOP: full banner logo (≥992px only)
        ===================================================== -->
        <div class="top-header d-none d-lg-block">
            <div class="container">
                <img src="Assets/Images/logo.webp" alt="Railway Higher Secondary School Logo" class="img-fluid">
            </div>
        </div>

        <!-- =====================================================
             MAIN NAV — contains the Bootstrap collapse target.
             On mobile (<992px): logo LEFT + toggler RIGHT.
             On desktop (≥992px): toggler hidden, links centred.
        ===================================================== -->
        <div class="main-header" id="main-header">
            <div class="container-fluid">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <!-- MOBILE LOGO (left) — hidden on desktop -->
                        <a class="navbar-brand d-lg-none" href="index.php">
                            <img src="Assets/Images/logo.webp"
                                 alt="Railway Higher Secondary School"
                                 class="mobile-nav-logo">
                        </a>

                        <!-- HAMBURGER (right) — Bootstrap default toggler -->
                        <button class="navbar-toggler ms-auto" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="bi bi-list"></i>
                        </button>

                        <!-- NAV LINKS -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                        <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                        <li><a class="dropdown-item" href="trust-management.php">Trust &amp; Management</a></li>
                                        <li><a class="dropdown-item" href="principal-message.php">Principal Message</a></li>
                                        <li><a class="dropdown-item" href="administrative-officer.php">Administrative Officer Message</a></li>
                                        <li><a class="dropdown-item" href="academic-coordinator.php">Academic Coordinator Message</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="academics.php">Academics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="facilities.php">Facilities</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="admissionDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Admission</a>
                                    <ul class="dropdown-menu" aria-labelledby="admissionDropdown">
                                        <li><a class="dropdown-item" href="admission.php">Admission Procedure</a></li>
                                        <li><a class="dropdown-item" href="admission-form.php">Admission Form</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="career.php">Career</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </header>
    EOT;
}

function template_footer(){
    echo <<< EOT
       <footer>
        <section class="home-8">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-md-3 col-lg-3 gallery-img" data-aos="fade-up">
                        <img src="Assets/Images/gallery-home-1.webp" alt="Gallery Image 1" class="img-fluid">
                        <div class="overlay">
                            <a href="gallery.php"><i class="bi bi-search"></i></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 gallery-img" data-aos="fade-up" data-aos-delay="100">
                        <img src="Assets/Images/gallery-home-2.webp" alt="Gallery Image 2" class="img-fluid">
                        <div class="overlay">
                            <a href="gallery.php"><i class="bi bi-search"></i></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 gallery-img" data-aos="fade-up" data-aos-delay="150">
                        <img src="Assets/Images/gallery-home-3.webp" alt="Gallery Image 3" class="img-fluid">
                        <div class="overlay">
                            <a href="gallery.php"><i class="bi bi-search"></i></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 gallery-img" data-aos="fade-up" data-aos-delay="200">
                        <img src="Assets/Images/gallery-home-4.webp" alt="Gallery Image 4" class="img-fluid">
                        <div class="overlay">
                            <a href="gallery.php"><i class="bi bi-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <div class="container">
                <div class="row top-footer">
                    <div class="col-12 col-md-4 col-lg-4">
                        <img src="Assets/Images/logo.webp" alt="Logo" class="img-fluid logo">
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="icon">
                            <i class="bi bi-telephone-fill"></i>
                            <a>0452 - 2900174</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="icon">
                            <i class="bi bi-envelope-fill"></i>
                            <a>rmhssmdu@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="row middle-footer">
                    <div class="col-12 col-md-4 col-lg-4">
                        <h2 class="footer-headings">Quick Links</h2>
                        <div class="row">
                            <div class="col-6 menu">
                                <ul class="icon-list">
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="index.php">Home</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="about.php">About</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="academics.php">Academics</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="facilities.php">Facilities</a></li>
                                </ul>
                            </div>
                            <div class="col-6 menu">
                                <ul class="icon-list">
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="admission.php">Admission</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="gallery.php">Gallery</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="career.php">Career</a></li>
                                    <li class="list"><i class="bi bi-arrow-up-right-circle-fill"></i><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 address">
                        <div class="icon-circle mb-4">
                            <i class="bi bi-geo-fill"></i>
                        </div>
                        <h2 class="footer-headings">Address</h2>
                        <p class="address-desc text-center">Railway Higher Secondary School (CBSE), Madurai, Tamil Nadu India</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62881.04771547929!2d78.0525172616815!3d9.928504684231331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf7d19c3d23f%3A0x28ff3cbe5b3c5dd6!2sRailway%20Higher%20Secondary%20School%20(CBSE)!5e0!3m2!1sen!2sin!4v1780928581079!5m2!1sen!2sin" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="bottom-footer">
                    <p class="copyrights">&copy; 2026, Railway Higher Secondary School (CBSE), All rights reserved.</p>
                </div>
            </div>
    </footer>
    EOT;
}
?>