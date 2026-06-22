<?php include 'function.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Higher Secondary School</title>
    <link rel="shortcut icon" href="Assets/Images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- All required font families in one request -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="Assets/Images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="Assets/Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="Assets/Images/favicon-16x16.png">
<link rel="manifest" href="Assets/Images/site.webmanifest">
</head>
<body>
    <?=template_header()?>
    <!-- Page Banner -->
    <div class="academics-page-banner">
        <h2 class="page-title text-white">Mandatory Public Disclosure</h2>
    </div>
    <section class="mand-1 py-5">
        <div class="container">
            <div class="heading-center">
                <span class="badge">Affiliation certificate</span>
                <h2 class="section-title">Official CBSE Affiliation Record</h2>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <img src="Assets/Images/doc-1.webp" alt="" class="img-fluid" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-1.webp')">
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <img src="Assets/Images/doc-2.webp" alt="" class="img-fluid" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-2.webp')">
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay=150>
                    <img src="Assets/Images/doc-3.webp" alt="" class="img-fluid" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-3.webp')">
                    <img src="Assets/Images/doc-4.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-4.webp')">
                </div>
            </div>
        </div>
    </section>
    <section class="mand-1 py-5">
        <div class="container">
            <div class="heading-center">
                <span class="badge">School Certifications</span>
                <h2 class="section-title">Official School Certifications</h2>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="heading-center">
                        <h3>Recognition Certificate</h3>
                        <img src="Assets/Images/doc-5.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-5.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>No Objection Certificate</h3>
                        <img src="Assets/Images/doc-6.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-6.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>Fire Safety Certificate</h3>
                        <img src="Assets/Images/doc-7.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-7.webp')">
                    </div>
                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="heading-center">
                        <h3>Sanitation Certificate</h3>
                        <img src="Assets/Images/doc-8.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-8.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>Fee Structure</h3>
                        <img src="Assets/Images/doc-9.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-9.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>Building Safety</h3>
                        <img src="Assets/Images/doc-10.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-10.webp')">
                    </div>
                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="heading-center">
                        <h3>Land Certificate</h3>
                        <img src="Assets/Images/doc-11.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-11.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>Staff Details</h3>
                        <img src="Assets/Images/doc-12.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-12.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay=100>
                    <div class="heading-center">
                        <h3>Strength Details</h3>
                        <img src="Assets/Images/doc-13.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-13.webp')">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="mand-1 py-5">
        <div class="container">
            <div class="heading-center">
            <span class="badge">Annual plan</span>
            <h2 class="section-title">Planned Activities for the Year</h2>
            
        </div>
        <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="heading-center">
                        <img src="Assets/Images/doc-14.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-14.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <div class="heading-center">
                        <img src="Assets/Images/doc-15.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-15.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay=100>
                    <div class="heading-center">
                        <img src="Assets/Images/doc-16.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-16.webp')">
                    </div>
                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <div class="heading-center"> 
                        <img src="Assets/Images/doc-17.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-17.webp')">
                    </div>
                    
                </div>
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-down" data-aos-delay=100>
                    <div class="heading-center">
                        <img src="Assets/Images/doc-18.webp" alt="" class="img-fluid mt-3" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/doc-18.webp')">
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        
        
    </section>
   

    <?=template_footer()?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="Assets/JS/script.js"></script>
    <div class="modal fade" id="galleryModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content railway-gallery-modal">

            <button type="button"
                    class="btn-close railway-close-btn"
                    data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></button>

            <div class="modal-body p-0">
                <img id="popupGalleryImage"
                     src=""
                     class="img-fluid w-100"
                     alt="">
            </div>

        </div>
    </div>
</body>
</html>