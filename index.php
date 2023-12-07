<?php
include("includes/site-info.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include("includes/compatibility.php"); ?>
    <?php include("includes/og.php"); ?>

    <!-- META TITLE AND DESCRIPTION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- META TITLE AND DESCRIPTION -->


    <!--==== HEADER STYLES START ====-->
    <?php include('includes/header-styles.php') ?>
    <!--==== HEADER STYLES END ====-->
    <title>Home | <?php echo $siteName; ?></title>
</head>

<body>

    <!--==== HEADER START ====-->
    <?php include('includes/header.php') ?>
    <!--==== HEADER END ====-->


    <!--==== HOME BANNER START ====-->
    <section class="home-banner p-0">
        <div class="container-fluid p-md-0">
            <div class="banner-video-wrap">
                <video muted loop width="100%">
                    <source src="assets/video/makkah-2.mp4" type="video/mp4">
                    <!-- <source src="assets/video/makkah-2.mp4" type="video/mp4"> -->
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="banner-text">
                <div class="text-center">
                    <div class="img-wrap">
                        <img src="assets/images/bismillah-text.png" alt="Bismillah Text">
                    </div>
                    <h1 class="fc-gold fs-60">Hayat Ul Quran</h1>
                    <h2 class="fc-white fs-35 mb-15 text-shadow-white">Online Quran Academy</h2>
                    <i class="fc-white text-italic mb-15 d-block lh-1-5">"The example of a believer who recites the Quran is like that of <br> a citron, its taste is delicious and its fragrance spreads."</i>
                    <div class="button-wrap">
                        <button class="btn btn-primary">Register Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== HOME BANNER END ====-->

    <!--==== ABOUT SECTION START ====-->
    <section class="about-section">
        <div class="container">
            <div class="mb-4 text-center">
                <h6 class="section__label fc-gold">About Us</h6>
                <h4 class="section__heading ">Welcome To <span class="fc-blue">Hayat Ul Quran</span></h4>
            </div>
            <div class="about-section-text text-center ">
                <p class="lh-1-5 mb-3">Quran-Edu is an Online Quran academy. The lack of Islamic educational institutes in online space has created a vacuum. It needs to be filled so that everyone can learn Islam and the Quran. We are bringing the light of the Holy Quran to online spaces.
                    Our team of online Quran instructors is committed, qualified, diligent, and seasoned. We prioritize the individual needs of our students, ensuring a tailored learning experience. Our Quran academy provides flexibility in scheduling, allowing students to select the most convenient time that fits into their busy routines. Additionally, we have curated instructional videos for each lesson, serving as a valuable resource to aid students in their homework assignments.</p>
                <a href="#" class="btn btn-primary mb-3">Learn More</a>
                <div class="img-wrap">
                    <img src="assets/images/about-section-1.jpg" class="rounded" alt="about-img-1">
                </div>
            </div>
        </div>
    </section>
    <!--==== ABOUT SECTION END ====-->

    <!--==== FREE TRIAL CTA START ====-->
    <section class="free-trial-cta py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h4 class="section__heading fc-white">Register for 3 Days Free Trial</h4>
                    <p class="fc-white fs-14 lh-1-5">Hayat-ul-Quran Online Academy is pleased to offer a comprehensive 3-day trial, providing you with an exclusive opportunity to experience all our premium services. During this trial period, you'll have access to lesson videos, a detailed syllabus, and the expertise of a qualified Quran teacher—all at your chosen time. It's the perfect chance to explore the richness of our offerings and discover the transformative journey that awaits you with Hayat-ul-Quran.</p>
                </div>
                <div class="col-md-5">
                    <a href="#" class="btn btn-primary d-block w-50 ms-auto">Try Now.</a>
                </div>
            </div>
        </div>
    </section>
    <!--==== FREE TRIAL CTA END ====-->


    <!--==== FEATURE SECTION START ====-->
    <section class="feature-section bg-cream">
        <div class="container">
            <div class="mb-40 text-center">
                <h6 class="section__label fc-gold">Features</h6>
                <h4 class="section__heading">Why Choose <span class="fc-blue">Hayat Ul Quran</span></h4>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card bg-white text-center rounded-3 px-3 w-100">
                        <div class="img-wrap">
                            <i class="ri-user-fill"></i>
                        </div>
                        <h6 class="feature-card-title fs-24 fc-blue mb-2 fw-600">Female Tutors</h6>
                        <p class="fs-14">Friendly and expert female Quran tutors are here to teach children and female students with care and enthusiasm.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card bg-white text-center rounded-3 px-3 w-100">
                        <div class="img-wrap">
                            <i class="ri-history-fill"></i>
                        </div>
                        <h6 class="feature-card-title fs-24 fc-blue mb-2 fw-600">3 Days Free Trial</h6>
                        <p class="fs-14">With extensive online Quran teaching experience, we prioritize customer satisfaction. Try our free 3-day trial to assess our teaching before committing.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card bg-white text-center rounded-3 px-3 w-100">
                        <div class="img-wrap">
                            <i class="ri-time-fill"></i>
                        </div>
                        <h6 class="feature-card-title fs-24 fc-blue mb-2 fw-600">Flexible Timings</h6>
                        <p class="fs-14">Our online Quran classes are accessible 24/7, enabling Muslims worldwide to select a class time that aligns with their schedule and availability.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card bg-white text-center rounded-3 px-3 w-100">
                        <div class="img-wrap">
                            <i class="ri-wallet-3-fill"></i>
                        </div>
                        <h6 class="feature-card-title fs-24 fc-blue mb-2 fw-600">Affordable</h6>
                        <p class="fs-14">Very affordable and pocket friendly plans. Family discounts are available for siblings.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==== FEATURE SECTION END ====-->


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->

    <!--==== SCRIPTS START ====-->
    <?php include('includes/footer-scripts.php') ?>
    <!--==== SCRIPTS END ====-->
    <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=923052156938&text=" target="_blank"> <i class="ri-whatsapp-line"></i></a>
    </div>

</body>

</html>