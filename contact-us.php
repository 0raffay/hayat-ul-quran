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
      <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center">Contact Us</h1>
    </div>
  </section>
  <!-- Inner page banner -->

  <!--==== REGISTER FORM SECTION START ====-->


  <section class="contactSection">
    <div class="container">
      <div class="row">
        <div class="col-6 d-none d-lg-block">
          <div class="img_wrap">
            <img src="assets/images/contact-img.png" class="rounded-3" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <form action="#" class="basic_form px-4 py-4 py-xl-5 px-xl-5">
            <h4 class="section__heading text-center mb-3 fs-35">Contact Us</h4>
            <div class="row align-items-center">
              <div class="col-lg-6 mb-3 mb-md-4 pb-md-3">
                <div class="infoInput">
                  <label for="firstName">First Name <span>*</span></label>
                  <input type="text" placeholder="First Name" id="firstName">
                </div>
              </div>
              <div class="col-lg-6 mb-3 mb-md-4 pb-md-3">
                <div class="infoInput">
                  <label for="lastName">Last Name <span>*</span></label>
                  <input type="text" id="lastName" placeholder="Last Name">
                </div>
              </div>
              <div class="col-lg-6 mb-3 mb-md-4 pb-md-3">
                <div class="infoInput">
                  <label for="email">Email <span>*</span></label>
                  <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
              </div>
              <div class="col-lg-6 mb-3 mb-md-4 pb-md-3">
                <div class="infoInput">
                  <label for="phone">Phone Number<span>*</span></label>
                  <input type="phone" name="number" id="phone" placeholder="Enter your Phone">
                </div>
              </div>
              <div class="col-md-12 mb-3 mb-md-4 pb-md-3">
                <div class="infoInput">
                  <label for="classes">Message <span>(Optional)</span></label>
                  <textarea id="msg" rows="5" class="w-100 h-100"></textarea>
                </div>
              </div>
            </div>

            <div class="registerFormButton contactFormButton text-center">
              <button id="submitBtn" class="btn btn-primary fs-18 bg-gold-700">Submit</button>
            </div>
          </form>
        </div>
      </div>


    </div>
  </section>
  <!--==== REGISTER FORM SECTION END ====-->

  <!--==== FREE TRIAL CTA START ====-->
  <div class="border-top">
    <?php include("sections/free-trial-section.php"); ?>
  </div>
  <!--==== FREE TRIAL CTA END ====-->


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