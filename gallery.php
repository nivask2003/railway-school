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
    <section class="gallery-page-banner">
        <h2 class="page-title text-white">Gallery</h2>
    </section>
    <section class="gallery py-5" data-aos="fade-right">
        <div class="container">
            <h2 class="section-title text-center">Vande Mataram Ceremony</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-1.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-1.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-2.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-2.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-3.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-3.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4" >
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-4.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-4.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-5.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-5.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-6.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-6.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery py-5" data-aos="fade-left">
        <div class="container">
            <h2 class="section-title text-center">Fire Safety Alert Seminar</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-7.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-7.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-8.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-8.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-9.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-9.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-10.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-10.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-11.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-11.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-12.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-12.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery py-5" data-aos="fade-right">
        <div class="container">
            <h2 class="section-title text-center">Field Trips</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-13.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-13.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-14.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-14.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-15.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-15.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-16.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-16.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-17.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-17.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-18.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-18.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery py-5" data-aos="fade-left">
        <div class="container">
            <h2 class="section-title text-center">Career Guidance Program</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-19.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-19.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-20.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-20.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-21.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-21.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-22.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-22.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-23.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-23.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-24.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-24.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery py-5" data-aos="fade-right">
        <div class="container">
            <h2 class="section-title text-center">Amrit Bharat Express Flag-Off Celebration</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-25.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-25.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-26.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-26.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-27.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-27.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-28.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-28.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-29.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-29.webp')">
                            <i class="bi bi-plus"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 gallery-img">
                    <img src="Assets/Images/gallery-30.webp" alt="" class="img-fluid">
                    <div class="overlay">
                        <div class="icon-circle" data-bs-toggle = "modal" data-bs-target = "#galleryModal" onclick = "showImage('Assets/Images/gallery-30.webp')">
                            <i class="bi bi-plus"></i>
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
</div>
</body>
</html>