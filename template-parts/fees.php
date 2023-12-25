<?php
// Template Name: Fees
get_header();


$siteName = "Hayat Ul Quran Academy";
?>

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

            <h6 class="fc-gold fs-24 mb-3 fw-700">Enjoy 3 Free Trial Quran Classes</h6>
            <p class="fs-18 lh-1-5">Apart from Free trial Classes We also offer automatic discounts </p>
            <p class="fs-18 lh-1-5"><span class="fw-700 fs-24 fc-gold">3 USD/Hour</span> instead of <span class="fs-24 text-danger"><del>13 USD</del>/Hour</span></p>

        </div>
        <div class="d-flex justify-content-center gap-10 mb-4 mb-md-5 flex-wrap">
            <a href="<?php bloginfo("url") ?>/fees?region=us" class="btn btn-primary">US</a>
            <a href="<?php bloginfo("url") ?>/fees?region=uk" class="btn btn-primary">UK</a>
            <a href="<?php bloginfo("url") ?>/fees?region=ca" class="btn btn-primary">CAD</a>
            <a href="<?php bloginfo("url") ?>/fees?region=eu" class="btn btn-primary">Euro</a>
            <a href="<?php bloginfo("url") ?>/fees?region=au" class="btn btn-primary">AUD</a>
        </div>

        <div class="position-relative py-md-5">
            <div class="pricing" id="pricing_section">

                <?php
                $args = array(
                    'post_type' => 'fee',
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();

                        $package_pricing = get_field("plan_pricing");
                        $region = isset($_GET["region"]) ? $_GET["region"] : "";
                        $show_pricing = $package_pricing["plan_usd"];

                        switch ($region) {
                            case "us":
                                $show_pricing = $package_pricing["plan_usd"] . "$";
                                break;
                            case "uk":
                                $show_pricing = $package_pricing["plan_pound"] . "£";
                                break;
                            case "eu":
                                $show_pricing = $package_pricing["plan_euro"] . "€";
                                break;
                            case "au":
                                $show_pricing = $package_pricing["plan_euro"] . "AUD";
                                break;
                            case "ca":
                                $show_pricing = $package_pricing["canada_pricing"] . "CAD";
                                break;
                            default:
                                $show_pricing = $package_pricing["plan_aus"] . "$";
                        }

                ?>
                        <div class="item">
                            <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                    <h5 class="card-title  text-uppercase text-center fc-gold-700 fw-800"><?php echo the_field("plan_title"); ?></h5>
                                    <h6 class="card-price text-center"><span class="fc-gold amount">
                                            <?php echo $show_pricing ?>
                                        </span><span class="period">/month</span></h6>
                                    <hr>
                                    <ul class="fa-ul card_ul">
                                        <?php
                                        foreach (get_field("perks") as $key => $perk) { ?>
                                            <li><span class="fa-li"><i class="fas fa-check"></i></span><?php print_r($perk["list_item_text"]); ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="d-grid">
                                        <a href="register.php?package_name=<?php echo $package["title"]; ?>" class="btn btn-primary">Register Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No appeals found.';
                endif;
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
<?php include(get_template_directory() . "/sections/testimonial-section.php"); ?>
<!--==== TESTIMONIALS SECTION END ====-->

<!--==== COUNTER SECTION START ====-->
<?php include(get_template_directory() . "/sections/counter-section.php") ?>
<!--==== COUNTER SECTION END ====-->


<!--==== CTA SECTION START ====-->
<?php include(get_template_directory() . "/sections/cta-section.php") ?>
<!--==== CTA SECTION END ====-->


<?php
get_footer();
?>