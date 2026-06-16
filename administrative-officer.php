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
    <div class="principal-page-banner">
        <h2 class="page-title text-white">Administrative Officer's Message</h2>
    </div>

    <section class="principal-1 py-5">
        <div class="container">
            <div class="row">
                <!-- Photo + name -->
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <img src="Assets/Images/admin.webp" alt="Mr. S. Kumar – Administrative Officer" class="img-fluid">
                    <div class="heading-center">
                        <h4 class="section-title">Mr. S. Kumar</h4>
                        <span class="badge">Administrative Officer</span>
                    </div>
                </div>

                <!-- Message text -->
                <div class="col-12 col-md-8 col-lg-8" data-aos="fade-left">
                    <h2 class="section-title">Administrative Officer Message</h2>
                    <p class="section-desc">The administrative leadership of Railway Higher Secondary School, Madurai, plays a vital role in maintaining the institution’s long-standing tradition of educational excellence, discipline, and holistic student development. With a strong commitment to creating a well-organized, student-friendly, and progressive learning environment, the administration works diligently to ensure that every aspect of the school functions efficiently and effectively. From academic planning and infrastructure management to student welfare and parent engagement, the administrative team provides the foundation that supports the school’s mission of delivering quality education and nurturing responsible future citizens.</p>
                    <p class="section-desc">The administration believes that a positive educational environment is built through careful planning, transparency, teamwork, and continuous improvement. By implementing structured systems and effective management practices, the institution ensures the smooth conduct of academic activities, co-curricular programmes, examinations, and campus operations throughout the academic year. Every effort is made to provide students with a safe, disciplined, and supportive atmosphere that encourages learning, personal growth, and character development.</p>
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
</body>
</html>