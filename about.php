<?php include("includes/site-info.php") ?>

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

    <title>About Us | <?php echo $siteName; ?></title>
</head>

<body>
    <?php include("includes/header.php") ?>


    <!-- Inner page banner -->
    <section class="innerBanner d-grid align-items-center justify-content-center" style="min-height: 400px; background: url(assets/images/register-bg.png) center/cover no-repeat fixed">
        <div class="container">
            <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center">About Us</h1>
        </div>
    </section>
    <!-- Inner page banner -->

    <!-- About us section -->
    <section class="aboutUsSection ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pe-md-5 mb-md-4">
                        <h6 class="section__label">About Us</h6>
                        <h4 class="section__heading">Welcome to <?php echo $siteName; ?></h4>
                        <p class="mb-3">Welcome to Hayat Ul Quran Academy, where our commitment is to deliver expert and personalized Quranic instruction to Muslims worldwide. Our dedicated team, comprised of qualified Islamic scholars and experienced Quran tutors, is available around the clock to offer classes tailored to each student's unique needs and schedule.

                        </p>
                        <p class="mb-3">At <?php echo $siteName; ?>, we prioritize customer satisfaction. To ensure your confidence in our teaching abilities, we provide a complimentary 3-day trial, allowing you to assess our methods before making a commitment. Our classes are conducted in Arabic with phonetics, and our Quran tutors are proficient in English, Urdu, Arabic, and various other languages.

                        </p>
                        <p class="mb-3">Committed to providing a secure and inclusive learning environment in alignment with Sharia teachings, we have separate instructors for male and female students. Upon successful completion of our online Quran courses, students receive certificates as a testament to their accomplishments.

                        </p>
                        <p class="mb-3">For your convenience, we maintain a flexible refund policy. For more details, feel free to reach out to our support team via <a href="mailto:<?php echo $siteEmail; ?>" class="fw-700 fc-gold">email</a> or <a href="tel:<?php echo $sitePhone; ?>" class="fw-700 fc-gold">phone</a>; we are always ready to assist you.
                        </p>
                        <p class="mb-3">Our ultimate goal is to make the Quran accessible to everyone, irrespective of location or background. Join us on this journey to deepen your understanding and appreciation of the Quran.</p>
                        <p class="mb-3">Thank you for choosing <?php echo $siteName;?> we eagerly anticipate assisting you in achieving your Quran learning goals.</p>
                        <a href="fees.php" class="btn btn-primary">View Pricing</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_wrap text-center">
                        <img src="assets/images/setep-section-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section -->

    <!-- ABOUT US TEXT SECTION -->
    <section class="aboutTextSection pt-0">
        <div class="container text-center">
            <h6 class="section__label ">Our Mission</h6>
            <h4 class="section__heading">Quran For Everyone</h4>
            <p class="mb-3">At <span class="fc-gold fw-700 "><?php echo $siteName; ?></span>, we believe that the Quran is a timeless guide for humanity, and we are dedicated to providing a platform for individuals to deepen their understanding and connection with this divine scripture. Our courses are structured to accommodate the diverse needs of our students, ensuring a meaningful and personalized learning experience.
            </p>
            <p>Join us at <span class="fc-gold fw-700"><?php echo $siteName; ?></span> and discover the transformative power of the Quran. With 'Quran For Everyone,' we invite you to explore, learn, and grow on your path to spiritual enlightenment. <a class="fc-gold fw-700" href="register.php">Let the journey begin</a>."
            </p>
        </div>
    </section>
    <!-- ABOUT US TEXT SECTION -->


    <!--==== FREE TRIAL CTA START ====-->
    <div class="border-top">
        <?php include("sections/free-trial-section.php"); ?>
    </div>
    <!--==== FREE TRIAL CTA END ====-->



    <!--==== TESTIMONIALS SECTION START ====-->
    <?php include("sections/testimonial-section.php"); ?>
    <!--==== TESTIMONIALS SECTION END ====-->

    <!--==== COUNTER SECTION START ====-->
    <?php include("sections/counter-section.php") ?>
    <!--==== COUNTER SECTION END ====-->


    <!--==== CTA SECTION START ====-->
    <?php include("sections/cta-section.php") ?>
    <!--==== CTA SECTION END ====-->


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->

    <!--==== SCRIPTS START ====-->
    <?php include('includes/footer-scripts.php') ?>
    <!--==== SCRIPTS END ====-->
</body>

</html>