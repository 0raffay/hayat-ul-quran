<?php
//Template Name: Courses

get_header();


$siteName = "Hayat Ul Quran Academy";
?>

<!-- Inner page banner -->
<section class="innerBanner d-grid align-items-center justify-content-center" style="min-height: 400px; background: url(<?php echo get_template_directory_uri(); ?>/assets/images/register-bg.png) center/cover no-repeat fixed">
  <div class="container">
    <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center">Our Courses</h1>
  </div>
</section>
<!-- Inner page banner -->

<!-- About us section -->
<section class="aboutUsSection ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pe-md-5 mb-md-4 text-center">
          <h6 class="section__label">Our Courses</h6>
          <h4 class="section__heading">Learn Quran From <span class="fc-gold"><?php echo $siteName; ?></span> </h4>
          <p class="mb-3">Welcome to Hayat Ul Quran Academy, where our commitment is to deliver expert and personalized Quranic instruction to Muslims worldwide. Our dedicated team, comprised of qualified Islamic scholars and experienced Quran tutors, is available around the clock to offer classes tailored to each student's unique needs and schedule.</p>

          <a href="<?php bloginfo("url") ?>/fees" class="btn btn-primary">View Pricing</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About us section -->

<section class="coursesPanelSection pt-0 pb-5">
  <div class="coursesPanelMain  py-5 bg-cream">
    <div class="container">
      <h4 class="section__heading fc-gold mb-4 text-center">FEATURED COURSES
      </h4>
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'course',

        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post();
        ?>

            <div class="col-lg-4">
              <div class="card mb-40">
                <div class="img__wrap">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/contact-img.png" alt="Default Image">';
                  }
                  ?>
                </div>
                <div class="cardMainContent">
                  <!-- <h6><?php the_title(); ?></h6> -->
                  <h4 class="fs-20 fw-800 mb-15"> Basic Qaida for beginners
                  </h4>
                  <p class="fs-16 fw-400 mb-15">Arabic Qaida course is a basic course that is taught by our Quran Tutor using Arabic Qaida curriculum.
                  </p>
                  <div class="button_wrap">
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Course</a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo 'No Courses Found.';
        endif;
        ?>
      </div>


    </div>
  </div>
</section>


<!--==== FREE TRIAL CTA START ====-->
<div class="border-top">
  <?php include(get_template_directory() . "/sections/free-trial-section.php"); ?>
</div>
<!--==== FREE TRIAL CTA END ====-->

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