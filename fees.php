<?php
include("includes/site-info.php");
include("functions.php");
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
    <title>Pricing | <?php echo $siteName; ?></title>
</head>

<body>

    <?php include("includes/header.php") ?>

    <!-- Inner page banner -->
    <section class="innerBanner d-grid align-items-center justify-content-center" style="min-height: 400px; background: url(assets/images/register-bg.png) center/cover no-repeat fixed">
        <div class="container">
            <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center">Our Fees</h1>
        </div>
    </section>
    <!-- Inner page banner -->

    <!--==== PRICING START ====-->
    <section class="pricingSection" id="">
        <div class="container-xxl">

            <div class="row">
                <div class="col-lg-6 mb-4 pe-md-5">
                    <h4 class="section__heading fs-30 fw-700 ">Important <span class="fc-gold">information:</span></h4>
                    <ul class="list-unstyled">
                        <li class="fs-18 lh-1-5 mb-2">Proper time for every individual Student.</li>
                        <li class="fs-18 lh-1-5 mb-2">Up to 20 minutes for every Class (Up to 45 minutes for The Holy Quran Memorize).</li>
                        <li class="fs-18 lh-1-5 mb-2">On the end of every month Test will be conducted.</li>
                        <li class="fs-18 lh-1-5 mb-2">Parents meeting with admin.</li>
                        <li class="fs-18 lh-1-5 mb-2">Classes will be conducted on Student’s desired timing and days.</li>
                        <li class="fs-18 lh-1-5 mb-2">Facility available for group Classes.</li>
                        <li class="fs-18 lh-1-5 mb-2">Video of every lesson after the Class (We are sending link of videos to our Students and this is another extra effort that is making us different from other Online Quran Institutes).</li>
                        <li class="fs-18 lh-1-5 mb-2">3 Days Free Trial Classes.</li>
                        <li class="fs-18 lh-1-5 mb-2">Availability of Teacher Whenever Student has any question about lesson or any other Islamic Studies.</li>
                        <li class="fs-18 lh-1-5 mb-2">We are offering special discount for more than four students from the same family/household.</li>
                        <li class="fs-18 lh-1-5 mb-2">Online Quran Academy is providing highly excellent academic facilities at very low and cheap Hadya/Fee.</li>
                        <li class="fs-18 lh-1-5 mb-2">Multi Payment Options.</li>
                        <li class="fs-18 lh-1-5 mb-2">Quran-Edu is providing Free Quran Classes for those who can’t afford to pay for our premium classes.</li>
                        <li class="fs-18 lh-1-5 mb-2">With our Free Quran Classes you can access our all futures that are available for premium members so, feel free to register yourself for Free Quran Classes.</li>
                    </ul>
                </div>
                <div class="col-lg-6 mb-4 ps-md-5">
                    <h4 class="section__heading fs-30 fw-700 ">Unlocking Knowledge at Affordable Prices:</h4>

                    <ul class="list-unstyled">
                        <li class="mb-2 fs-18 lh-1-5"><strong class="fc-gold-700">Transparent Pricing, No Hidden Costs:</strong> We value your trust, and our pricing reflects the dedication we have to delivering exceptional online Quranic instruction.</li>

                        <li class="mb-2 fs-18 lh-1-5"><strong class="fc-gold-700">Flexible Plans for Every Learner:</strong> Choose a plan that suits your learning needs and schedule. We offer flexible pricing plans, whether you are a beginner seeking foundational knowledge or an advanced learner looking to deepen your understanding.</li>

                        <li class="mb-2 fs-18 lh-1-5"><strong class="fc-gold-700">Complimentary Trial Period:</strong> Not sure which plan is right for you? Take advantage of our complimentary trial period. Experience our teaching style and platform before making a commitment.</li>

                        <li class="mb-2 fs-18 lh-1-5"><strong class="fc-gold-700">Secure Payment Options:</strong> Your convenience and security are our priorities. We offer secure payment options for a hassle-free experience.</li>

                        <li class="mb-2 fs-18 lh-1-5"><strong class="fc-gold-700">Dedicated Support:</strong> Have questions about our fees or need assistance choosing the right plan? Our dedicated support team is ready to help. Contact us via email or phone for prompt assistance.</li>
                    </ul>

                    <p>At Hayat Ul Quran Academy, we believe in the transformative power of Quranic education. Join us on this journey, and let's make the path to knowledge accessible and affordable together.</p>
                </div>
            </div>

            <div class="section__text mb-3 text-center">
                <h6 class="section__label">Packages</h6>
                <h4 class="section__heading">Our <span class="fc-gold">Packages</span></h4>
            </div>
            <div class="d-flex justify-content-end gap-10 mb-4 mb-md-5">
                <?php
                foreach ($package_pricing as $pricing_region => $data) { ?>
                    <a href="fees.php?region=<?php echo $pricing_region ?>" class="btn btn-primary"><?php echo $data["region_title"]; ?></a>
                <?php  } ?>
            </div>

            <div class="position-relative py-md-5">
                <div class="pricing" id="pricing_section">

                    <?php foreach ($packages as $packageKey => $package) { ?>
                        <?php
                        $region = isset($_GET["region"]) ? $_GET["region"] : "usa";
                        $_price = $package_pricing[$region]["packages_name"]["$packageKey"];
                        ?>
                        <div class="item">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <h5 class="card-title  text-uppercase text-center fc-gold-700 fw-800"><?php echo $package["title"]; ?></h5>
                                    <h6 class="card-price text-center"><span class="fc-gold amount">
                                            <?php echo $_price; ?>
                                        </span><span class="period">/month</span></h6>
                                    <hr>
                                    <ul class="fa-ul card_ul">
                                        <?php
                                        foreach ($package["perks"] as $perk) { ?>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $perk; ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="d-grid">
                                        <a href="register.php?package_name=<?php echo $package["title"]; ?>" class="btn btn-primary">Register Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="feesSliderButton">
                    <button id="prev"><img src="assets/images/arrow-left.svg" alt="Reload Page"></button>
                    <button id="next"><img src="assets/images/arrow-right.svg" alt="Reload Page"></button>
                </div>
            </div>
        </div>
    </section>
    <!--==== PRICING END ====-->


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