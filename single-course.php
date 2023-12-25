<?php
get_header();
$siteName = "Hayat Ul Quran Academy";
?>

<!-- Inner page banner -->
<section class="innerBanner d-grid align-items-center justify-content-center" style="min-height: 400px; background: url(<?php echo get_template_directory_uri(); ?>/assets/images/register-bg.png) center/cover no-repeat fixed">
  <div class="container">
    <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center"><?php the_title(); ?></h1>
  </div>
</section>
<!-- Inner page banner -->
<section class="courseTextSection">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pe-md-5 mb-md-4 text-center">
          <h6 class="section__label">Our Courses</h6>
          <h4 class="section__heading">Learn Quran From <span class="fc-gold"><?php echo $siteName; ?></span> </h4>
          <p class="mb-3">Welcome to Hayat Ul Quran Academy, where our commitment is to deliver expert and personalized Quranic instruction to Muslims worldwide. Our dedicated team, comprised of qualified Islamic scholars and experienced Quran tutors, is available around the clock to offer classes tailored to each student's unique needs and schedule.</p>
          <a href="<?php bloginfo("url") ?>/fees" class="btn btn-primary">Register Now</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="courseFeatureSection">
  <div class="courseFeatureMain py-5 position-relative">
    <div class="course-blurred-bg d-block h-100 postion-absolute" style="background:url('<?php echo get_template_directory_uri() ?>/assets/images/testimonial-bg.jpg') center/cover no-repeat;"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <?php
          if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>">
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-img.png" alt="">
          <?php endif; ?>
        </div>
        <div class="col-lg-6 h-100">
          <div class="courseFeatureCardBlack">
            <h4 class="course-feature-title fc-gold fs-30 mb-20 fw-700 text-center">Course Features </h4>
            <div class="courseContent">
              <ul class="list-unstyled">
                <?php
                $courseFeature = get_field("add_course_features");
                if ($courseFeature && count($courseFeature) > 0) :
                  foreach ($courseFeature as $key => $feature) : ?>
                    <li><?php print_r($feature["feature_name"]) ?></li>
                  <?php
                  endforeach;
                else : ?>
                  <li>One-To-One Live Sessions</li>
                  <li> Free Trial Class</li>
                  <li>Classes Around The Clock</li>
                  <li>Male &amp; Female Tutors</li>
                  <li>Completion Certificates</li>
                <?php
                endif;
                ?>
              </ul>
            </div>
            <div class="button_wrap text-center mt-3">
              <a href="<?php bloginfo("url"); ?>/register" class="btn btn-primary">Register Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="courseSection">
  <div class="container">
    <h4 class="section__heading fc-gold mb-4 text-center">
      More Info
    </h4>
    <div class="row">
      <div class="col-lg-6">
        <div class="courseFeatureCard">
          <h4 class="fc-dark fs-30 mb-10 fw-700"><?php the_title(); ?></h4>
          <div class="courseContent">
            <?php
            if (the_content()) {
              the_content();
            } 
            ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="courseFeatureCard">
          <h4 class="fc-dark fs-30 mb-20 fw-700">In the <?php the_title(); ?> You Will Learn</h4>
          <div class="courseContent">
            <ul>
              <?php
              $courseSyllabus = get_field("add_course_syllablus");
              if ($courseSyllabus && count($courseSyllabus) > 0) :
                foreach ($courseSyllabus as $key => $syllablus) : ?>
                  <li><?php print_r($syllablus["syllablus_content"]) ?></li>
                <?php
                endforeach;
              else :
                ?>
                <li>The Arabic Alphabet</li>
                <li>Arabic diacritics</li>
                <li>Letters Forms</li>
                <li>Vowels</li>
                <li>SukunShaddah Madd – Lengthening</li>
                <li>Shaddah Madd – Lengthening</li>
                <li>Laam rules</li>
                <li>AlifulWasl rules</li>
                <li>Characteristics of the Quranic writing</li>
              <?php
              endif;
              ?>
            </ul>
            <div class="button_wrap text-center mt-3">
              <a href="<?php bloginfo("url"); ?>/register" class="btn btn-primary">Register Now</a>
            </div>
          </div>
        </div>
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