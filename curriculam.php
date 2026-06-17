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
    <section class="academics-page-banner">
        <div class="banner-content">
            <h2 class="page-title">Curriculum</h2>
        </div>
    </section>
    <section class="curriculam-1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <span class="badge">Curriculum</span>
                    <h2 class="section-title">A Curriculum for Future Success</h2>
                    <p class="section-desc">Railway Higher Secondary School, Madurai, follows a well-structured CBSE curriculum designed to provide students with a strong academic foundation while promoting intellectual, emotional, and social development. The curriculum emphasizes conceptual understanding, critical thinking, problem-solving abilities, and practical application of knowledge, enabling students to excel in both academics and real-life situations. By integrating modern teaching methodologies with learner-centered approaches, the school creates an engaging educational experience that encourages curiosity, creativity, and independent thinking.</p>
                    <p class="section-desc">The curriculum is carefully planned to ensure balanced development across scholastic and co-scholastic areas. In addition to core academic subjects, students are encouraged to participate in sports, arts, cultural activities, and value-based programs that contribute to their overall personality development. Regular assessments, project-based learning, interactive classroom activities, and continuous feedback help monitor progress and enhance learning outcomes. Through this comprehensive educational framework, the school prepares students to become confident learners, responsible citizens, and future leaders capable of meeting the challenges of a rapidly changing world.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="Assets/Images/curriculam.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        
    </section>
    <section class="curriculam-2 py-5">
        <div class="container">
            <div class="row g-4 align-items-start justify-content-center">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="box">
                        <p class="box-desc">Railway Higher Secondary School offers a comprehensive academic journey from Primary to Higher Secondary levels, fostering knowledge, creativity, discipline, and critical thinking. Through quality CBSE education and holistic development, students are prepared for academic excellence, lifelong learning, and future success.</p>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="accordion-group">
                        <details class="acc-item">
                            <summary>
                            <span>Primary Education</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p class="content-desc">The Primary Section lays a strong foundation for lifelong learning through engaging, activity-based educational experiences. Students develop essential communication, literacy, numeracy, creativity, and social skills in a supportive environment. The curriculum emphasizes moral values, discipline, confidence, and personality development, helping young learners grow into responsible and enthusiastic students.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Middle School Education</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p class="content-desc">The Middle School programme builds academic strength and essential life skills through a balanced learning approach. Students develop analytical thinking, communication abilities, leadership qualities, and teamwork through interactive classroom experiences. The curriculum encourages independent learning, confidence, and active participation while maintaining a strong focus on conceptual understanding and overall development.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Secondary Education</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p class="content-desc">The Secondary Section emphasizes academic excellence, subject mastery, and effective Board examination preparation. Through concept-based learning, regular assessments, practical activities, and project work, students strengthen analytical and problem-solving skills. Continuous mentoring and subject-specific guidance help learners build confidence, achieve academic goals, and prepare successfully for higher education and future opportunities.</p>
                            </div>
                            </div>
                        </details>
                        <details class="acc-item">
                            <summary>
                            <span>Higher Secondary Education</span>
                            <span class="acc-icon">+</span>
                            </summary>
                            <div class="content-wrapper">
                            <div class="content-body">
                                <p class="content-desc">The Higher Secondary Section equips students with advanced academic knowledge and essential skills for higher education, professional studies, and future careers. Through focused learning, career guidance, competitive exam support, and personalized mentoring, students develop confidence, leadership qualities, communication skills, and responsible decision-making abilities. The programme encourages academic excellence while preparing learners to meet future challenges and opportunities with competence and determination.</p>
                            </div>
                            </div>
                        </details>
                        
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
</body>
</html>