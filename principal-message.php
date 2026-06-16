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
    <section class="principal-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4" data-aos="fade-right">
                    <img src="Assets/Images/principal.webp" alt="" class="img-fluid">
                    <div class="heading-center">
                        <h4 class="section-title">Dr. R. Rajalakshmi</h4>
                        <span class="badge">Principal</span>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8" data-aos="fade-left">
                    <h2 class="section-title">Principal Message</h2>
                    <p class="section-desc">At Railway Higher Secondary School, Madurai, we believe that education is the most powerful tool for shaping the future of individuals and society. Established in 1889, our institution has a rich heritage of academic excellence and a long-standing commitment to providing quality education that empowers students with knowledge, confidence, discipline, and strong moral values. Over the years, the school has earned a reputation for nurturing young minds and guiding them toward personal and academic success through a balanced and student-centered approach to learning.</p>
                    <p class="section-desc">Our educational philosophy extends beyond classroom instruction and examination results. We focus on the holistic development of every student by fostering intellectual growth, critical thinking, creativity, leadership skills, and social responsibility. The school provides a supportive and inclusive learning environment where students are encouraged to explore their talents, develop self-confidence, and cultivate a lifelong passion for learning. Through a blend of traditional values and modern teaching methodologies, we ensure that students receive a well-rounded education that prepares them for future challenges and opportunities</p>
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