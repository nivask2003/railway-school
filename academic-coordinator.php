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
        <h2 class="page-title text-white">Academic Co-ordinator's Message</h2>
    </div>

    <section class="principal-1 py-5">
        <div class="container">
            <div class="row">
                <!-- Photo + name -->
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <img src="Assets/Images/academic-co-ordinator.webp" alt="Mrs. P. Meenakshi – Academic Co-ordinator" class="img-fluid">
                    <div class="heading-center">
                        <h4 class="section-title">Mrs. P. Meenakshi</h4>
                        <span class="badge">Academic Co-ordinator</span>
                    </div>
                </div>

                <!-- Message text -->
                <div class="col-12 col-md-8 col-lg-8" data-aos="fade-left">
                    <h2 class="section-title">Academic Co-ordinator's Message</h2>
                    <p class="section-desc">The academic leadership team of Railway Higher Secondary School, Madurai, plays a pivotal role in maintaining the institution’s commitment to educational excellence and continuous academic improvement. With a clear focus on providing quality CBSE education, the team works diligently to create a dynamic and engaging learning environment that encourages intellectual growth, innovation, and academic achievement. Through effective planning, curriculum implementation, and regular academic monitoring, the leadership ensures that students receive a strong educational foundation that prepares them for future success.</p>
                    <p class="section-desc">The institution believes that meaningful education extends beyond the completion of syllabi and examination performance. Academic leaders actively promote conceptual understanding, critical thinking, creativity, communication skills, and analytical abilities among students. By encouraging inquiry-based learning and active classroom participation, the school helps students develop confidence, curiosity, and a lifelong passion for learning. Special attention is given to identifying individual strengths and supporting students in reaching their full potential through personalized guidance and continuous encouragement.</p>                    
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