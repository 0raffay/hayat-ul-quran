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
        <div class="container-fluid p-0">
            <div class="banner-video-wrap">
                <video autoplay muted loop width="100%">
                    <source src="assets/video/makkah-2.mp4" type="video/mp4">
                    <!-- <source src="assets/video/makkah-2.mp4" type="video/mp4"> -->
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="banner-text">
                <div class="text-center">
                    <div class="img-wrap" data-aos="fade-down" data-aos-duration="700" data-aos-delay="300">
                        <img src="assets/images/bismillah-text.png" alt="Bismillah Text">
                    </div>
                    <h1 class="fc-gold" data-aos="fade-down" data-aos-duration="700" data-aos-delay="900">Hayat Ul Quran</h1>
                    <h2 class="fc-white text-shadow-white" data-aos="fade-down" data-aos-duration="700" data-aos-delay="1400">Online Academy</h2>
                    <i class="fc-white text-italic d-block lh-1-5" data-aos="fade-down" data-aos-duration="700" data-aos-delay="1400">"The example of a believer who recites the Quran is like that of <br> a citron, its taste is delicious and its fragrance spreads."</i>
                    <div class="button-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
                        <button class="btn btn-primary">Register Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== HOME BANNER END ====-->

    <!--==== STEPS SECTION START ====-->
    <section class="stepSection p-0">
        <div class="stepWrapper">
            <div class="container">
                <div class="stepTextContent mb-md-4 text-center mb-40">
                    <h6 class="section__label fc-gold">Learning Quran</h6>
                    <h4 class="section__heading mb-20">Begin learning <span class="fc-blue">Quran in three easy steps</span></h4>
                    <p class="fs-16 fw-500">Getting yourself or your loved ones familiarized with the teachings of the holy Quran doesn’t have to be a hassle. This is the reason why Quran Learn Academy has developed an extremely easy to understand online registration process you can go through to get yourself or your children registered. Just follow these steps to get things on the way.
                    </p>
                </div>
                <div class="row align-items">
                    <div class="stepMainContent col-xl-8 mx-lg-auto col-xxl-6 mw-100">
                        <div class="stepCard">
                            <div class="stepCardMainImg">
                                <img src="assets/images/step-1.svg" alt="Reload Page">
                            </div>
                            <div class="stepCardMainContent">
                                <h4 class="fs-40 fw-700"><span>click</span> on Register Now
                                </h4>
                                <p class="fs-18 fw-400">Simply click on “Register Online” and a tab for online registration will open. There, enter your basic details such as name, residential address, and contact information. Once you are done with providing us theses basic credentials, your process for registration will be complete.
                                </p>
                            </div>
                        </div>
                        <div class="stepCard">
                            <div class="stepCardMainImg">
                                <img src="assets/images/step-2.svg" alt="Reload Page">
                            </div>
                            <div class="stepCardMainContent">
                                <h4 class="fs-40 fw-700"><span>Pick a Time</span> for free Trial:
                                </h4>
                                <p class="fs-18 fw-400">Upon receiving your request for registration, we will get in touch with you to set a time as to when can you take your free trial class. In addition, we will guide you about our Quran teaching process and tell you a little bit about our organization.
                                </p>
                            </div>
                        </div>
                        <div class="stepCard">
                            <div class="stepCardMainImg fs-60 fc-gold">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div class="stepCardMainContent">
                                <h4 class="fs-40 fw-700"><span>Embark On this Holy</span> Journey with your 1st Class:
                                </h4>
                                <p class="fs-18 fw-400">Initiate your Quran learning process by logging in with the credentials we provide you and start taking your first class with our Quran teachers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="stepMainImg text-center text-xxl-end col-xl-8 mx-lg-auto col-xxl-6 mw-100">
                        <img src="./assets/images/setep-section-image.png" alt="Reload Page">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== STEPS SECTION END ====-->

    <!--==== FREE TRIAL CTA START ====-->
    <section class="free-trial-cta">
        <div class="container py-3 border-radius-4 bg-gold side-prop position-relative">
            <div class="row align-items-center py-3 px-2  px-md-5 py-md-5">
                <div class="col-12 mb-md-3 col-lg-7">
                    <h4 class="section__heading fc-white">Register for 3 Days Free Trial</h4>
                    <p class="fc-white fs-14 lh-1-5">Hayat-ul-Quran Online Academy is pleased to offer a comprehensive 3-day trial, providing you with an exclusive opportunity to experience all our premium services. During this trial period, you'll have access to lesson videos, a detailed syllabus, and the expertise of a qualified Quran teacher—all at your chosen time. It's the perfect chance to explore the richness of our offerings and discover the transformative journey that awaits you with Hayat-ul-Quran.</p>
                </div>
                <div class="col-12 col-lg-5">
                    <a href="#" class="btn bg-gold-700 text-white d-block w-50 m-auto mt-3 mt-md-0 ms-md-auto">Try Now.</a>
                </div>
            </div>
        </div>
    </section>
    <!--==== FREE TRIAL CTA END ====-->

    <!--==== ROUND SECTION START ====-->
    <section class="roundSection p-0">
        <div class="roundWrapper pt-5">
            <div class="mb-40 text-center">
                <h6 class="section__label fc-gold">Features</h6>
                <h4 class="section__heading fc-white">Our <span class="fc-gold">Features</span></h4>
            </div>
            <div class="container-fluid">
                <div class="round-about-main">
                    <ul class="round-list list-unstyled d-flex justify-content-center">
                        <li class="text-center round-1 last" data-index="1">
                            <span class="fc-gold"><i class="ri-time-fill"></i></span>
                            <h6>Flexible Timings</h6>
                        </li>
                        <li class="text-center round-2 s-last" data-index="2">
                            <span class="fc-gold"><i class="ri-women-fill"></i></span>
                            <h6>Female Tutors</h6>
                        </li>
                        <li class="text-center active round-3 middle" data-index="3">
                            <span class="fc-gold"><i class="ri-user-fill"></i></span>
                            <h6>One to One Class</h6>
                        </li>
                        <li class="text-center round-4 s-last" data-index="4">
                            <span class="fc-gold"><i class="ri-brain-fill"></i></span>
                            <h6>Interactive Learning</h6>
                        </li>
                        <li class="text-center round-5 last" data-index="5">
                            <span class="fc-gold"><i class="ri-computer-fill"></i></span>
                            <h6>Multi Platform </h6>
                        </li>
                    </ul>
                    <div class="about-rounded-card text-center">
                        <div class="flexibleTimings">
                            <span class="fc-gold fs-24"><i class="ri-time-fill"></i></span>
                            <h6 class="fs-24 fw-700 mb-3">Flexible Timings</h6>
                            <p class="lh-1-5 mb-3">Embrace the freedom to learn at your own pace! Our flexible class timings empower you to tailor your Quranic journey according to your schedule. Whether you're a busy professional or a dedicated parent, we're here to accommodate your learning needs.</p>
                        </div>
                        <div class="femaleTutors">
                            <span class="fc-gold fs-24"><i class="ri-women-fill"></i></span>
                            <h6 class="fs-24 fw-700 mb-3">Female Tutors</h6>
                            <p class="lh-1-5 mb-3">Experience personalized guidance from our proficient female tutors. Our team of dedicated instructors is committed to nurturing a supportive and empowering learning environment, ensuring a comfortable and enriching Quranic education for all.</p>
                        </div>
                        <div class="oneToOne active">
                            <span class="fc-gold fs-24"><i class="ri-user-fill"></i></span>
                            <h6 class="fs-24 fw-700 mb-3">One-to-One Class</h6>
                            <p class="lh-1-5 mb-3">Elevate your learning with exclusive one-on-one classes! Benefit from undivided attention, personalized instruction, and a tailored curriculum designed to meet your individual goals. Your Quranic progress is our priority.</p>
                        </div>
                        <div class="interactiveLearning">
                            <span class="fc-gold fs-24"><i class="ri-brain-fill"></i></span>
                            <h6 class="fs-24 fw-700 mb-3">Interactive Learning</h6>
                            <p class="lh-1-5 mb-3">Immerse yourself in a dynamic learning experience! Our interactive platform offers engaging Quranic games, quizzes, and multimedia resources to complement your one-on-one classes. Unleash the power of interactive learning and make your Quranic journey truly enjoyable.</p>
                        </div>
                        <div class="multiplatform">
                            <span class="fc-gold fs-24"><i class="ri-computer-fill"></i></span>
                            <h6 class="fs-24 fw-700 mb-3">Multi Platform Accessibility</h6>
                            <p class="lh-1-5 mb-3">Immerse yourself in a dynamic learning experience! Our interactive platform offers engaging Quranic games, quizzes, and multimedia resources to complement your one-on-one classes. Unleash the power of interactive learning and make your Quranic journey truly enjoyable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== ROUND SECTION END ====-->

    <!--==== COUNTER SECTION START ====-->
    <section class="counterSection">
        <div class="container">
            <div class="counterWrapper px-5 py-4 py-md-5 px-md-3 border-radius-4 bg-gold">
                <div class="row py-md-4 px-md-5 align-items justify-content-center">
                    <div class="counterCard col-md-6 col-lg-3">
                        <h4 class="fs-45 fw-800">+<span class="count">384</span></h4>
                        <p class="fs-16 fw-400">Completed Quranic Initiatives</p>
                    </div>
                    <div class="counterCard col-md-6 col-lg-3">
                        <h4 class="fs-45 fw-800">+<span class="count">21</span></h4>
                        <p class="fs-18 fw-400">Dedicated Quranic Tutors</p>
                    </div>

                    <div class="counterCard col-md-6 col-lg-3">
                        <h4 class="fs-45 fw-800">+<span class="count">180</span></h4>
                        <p class="fs-18 fw-400">Enthusiastic Quranic Students</p>
                    </div>
                    <div class="counterCard col-md-6 col-lg-3">
                        <h4 class="fs-45 fw-800">+<span class="count">20,000</span></h4>
                        <p class="fs-18 fw-400">Verses of the Quran Shared</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--==== COUNTER SECTION END ====-->


    <!--==== TESTIMONIALS SECTION START ====-->
    <section class="testimonailSection p-0 bg-cream">
        <div class="testimonialWrapper">
            <div class="container">
                <div class="sliderText mb-5 mb-lg-5">
                    <div class="text-center">
                        <h6 class="section__label fc-gold">Testimonials</h6>
                        <h4 class="section__heading fc-black">What Our Students Say <span class="fc-gold">About Us</span>
                        </h4>
                    </div>
                </div>
                <div class="slider">
                    <div class="item">
                        <div class="testimonialCard">
                            <div class="testimonialCardMainImg">
                                <img src="./assets/images/testimonial-comma.svg" alt="Reload Page">
                            </div>
                            <div class="testimonialCardMainContent">
                                <p class="fs-16 fw-400">I am so grateful to have found this incredible online Quran Academy! The Tajweed lessons are exceptional, and the experienced instructors make learning the Quran an absolute joy. The interactive sessions have greatly improved my recitation skills. I highly recommend this academy to anyone seeking to learn the Quran with Tajweed. JazakAllah Khair!</p>
                            </div>
                        </div>
                        <div class="testimonialPerson">
                            <div class="testimonailPersonMainImg">
                                <img src="./assets/images/testi-2.png" alt="Reload Page">
                            </div>
                            <div class="tesimonialPersonMainContent">
                                <h5 class="fs-22 fw-800">Ayesha Ahmed</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonialCard">
                            <div class="testimonialCardMainImg">
                                <img src="./assets/images/testimonial-comma.svg" alt="Reload Page">
                            </div>
                            <div class="testimonialCardMainContent">
                                <p class="fs-16 fw-400">Being a busy professional, I struggled to find time for traditional Quran classes. Thankfully, I discovered this online Quran Academy, and it has been a game-changer for me. The flexibility of the classes and the personalized attention from the teachers have allowed me to learn Tajweed at my own pace. The experience is top-notch, and I can feel the positive impact on my Quranic recitation. Shukriya!</p>
                            </div>
                        </div>
                        <div class="testimonialPerson">
                            <div class="testimonailPersonMainImg">
                                <img src="./assets/images/testi-1.png" alt="Reload Page">
                            </div>
                            <div class="tesimonialPersonMainContent">
                                <h5 class="fs-22 fw-800">Bilal Khan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonialCard">
                            <div class="testimonialCardMainImg">
                                <img src="./assets/images/testimonial-comma.svg" alt="Reload Page">
                            </div>
                            <div class="testimonialCardMainContent">
                                <p class="fs-16 fw-400">As a mother of three, finding the right Quran learning platform was crucial for me. This online Quran Academy exceeded my expectations. The instructors are not only knowledgeable but also patient and understanding. The emphasis on Tajweed has significantly improved the way I recite the Quran. I am confident that my children will benefit from this academy as well.</p>
                            </div>
                        </div>
                        <div class="testimonialPerson">
                            <div class="testimonailPersonMainImg">
                                <img src="./assets/images/testi-3.png" alt="Reload Page">
                            </div>
                            <div class="tesimonialPersonMainContent">
                                <h5 class="fs-22 fw-800">Fatima Abbasi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sliderButton">
                <button id="prevBtn"><img src="assets/images/arrow-left.svg" alt="Reload Page"></button>
                <button id="nextBtn"><img src="assets/images/arrow-right.svg" alt="Reload Page"></button>
            </div>
        </div>
    </section>
    <!--==== TESTIMONIALS SECTION END ====-->


    <!--==== FAQ SECTION START ====-->
    <section class="faq-section">
        <div class="container">
            <div class="mb-40 text-center">
                <h6 class="section__label fc-gold">FAQ</h6>
                <h4 class="section__heading">Frequently Asked<span class="fc-blue">Questions</span></h4>
            </div>

            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="accordion">
                        <div class="accordion__container">
                            <div class="accordion__button active">
                                <h6 class="accordion__title">How Online Quran Classes Work?</h6>
                                <span class="accordion__symbol">
                                    <i class="fa-solid fa-caret-down"></i>
                                </span>
                            </div>
                            <div class="accordion__panel active">
                                <p class="accordion__text">The classes will be online. You will require a stable internet connection. Moreover, you will also need an ID on Zoom, Skype, or Oovoo. You can use any device that supports these software. Our teachers are going to be online on your selected timings. The first three classes will be a free trial. After these classes, you can choose to stay or leave a course. Above all, there is no need for webcams. We only use the screen sharing option to teach you. It enables you to see the same screen which is being used by the teacher. We will also assess your performance through the monthly tests. In January every year, we hold a competition. However, you will have to register at the desired course first. Besides, you can ask for our help to find the right course.

                                </p>
                            </div>
                        </div>
                        <div class="accordion__container">
                            <div class="accordion__button">
                                <h6 class="accordion__title">Why Choose us?</h6>
                                <span class="accordion__symbol">
                                    <i class="fa-solid fa-caret-down"></i>
                                </span>
                            </div>
                            <div class="accordion__panel">
                                <p class="accordion__text"><?php echo $siteName; ?> has been enlightening Muslims about the teachings of the holy Quran and making their lives according to the principles of Islam. We take pride in what we do and we take it upon ourselves to make our brothers and sisters good Muslims. With a step by step process designed by keeping in mind the objective of teaching our students correctly, we aim to make you learn Quran with tajweed comprehensively.</p>
                            </div>
                        </div>
                        <div class="accordion__container">
                            <div class="accordion__button">
                                <h6 class="accordion__title">Our Mission</h6>
                                <span class="accordion__symbol">
                                    <i class="fa-solid fa-caret-down"></i>
                                </span>
                            </div>
                            <div class="accordion__panel">
                                <p class="accordion__text">We aim to provide quality Quranic and Islamic education online. The main focus is on reciting the Holy Quran with the rules of Tajweed. Tajweed is necessary for reverence and submission in Salah (Namaz). Moreover, Tajweed is one of the etiquettes to read the holy Quran. Online Quran academy considers that the basic knowledge of Islam should reach every Muslim. The “online” aspect of the academy is an extension of that goal.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--==== FAQ SECTION END ====-->

    <!--==== CTA SECTION START ====-->
    <section class="ctaSection no-padding">
        <div class="ctaWrapper">
            <div class="container">
                <div class="ctaCard mx-auto">
                    <h6 class="section__label fs-24 fc-gold">Register Now To</h6>
                    <h5 class="fs-35 fw-800">Become a Student</h5>
                    <p class="fs-18 fw-400">"Unlock the beauty of the Quran with us! 🌟 Join our Online Quran Academy to master the art of recitation with Tajweed. Our expert instructors provide personalized guidance, flexible schedules, and an immersive learning experience. Register now and embark on a transformative journey with the Quran. Let's learn, grow, and connect with the divine words together! 📖✨ #QuranLearning #TajweedMastery #RegisterNow"
                    </p>
                    <div class="ctaCardButton">
                        <a href="" class="btn btn-primary">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==== CTA SECTION END ====-->





    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->

    <!--==== SCRIPTS START ====-->
    <?php include('includes/footer-scripts.php') ?>
    <!--==== SCRIPTS END ====-->
    <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=923052156938&text=" target="_blank"> <i class="ri-whatsapp-line"></i></a>
    </div>

    <!-- slick slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slick slider cdn -->
</body>

</html>