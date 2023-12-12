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
    <title>Register | <?php echo $siteName; ?></title>
</head>

<body>

    <?php include("includes/header.php") ?>

    <!--==== REGISTER FORM SECTION BANNER START ====-->
    <section class="registerBanner no-padding">
        <div class="registerBannerWrapper">
            <div class="container">
                <div class="text-center">
                    <h4 class="section__heading fc-white">Register now to become a Student
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!--==== REGISTER FORM SECTION BANNER END ====-->


    <!--==== REGISTER FORM SECTION START ====-->
    <section class="registerFormSection">
        <div class="container">

            <form action="#" class="registerForm">
                <div class="registerFormText mb-3 mb-md-5 mb-md-4 pb-md-30 text-center">
                    <h4 class="section__heading">Fill the details</h4>
                    <p class="fs-18 mb-2">Please fill the form below to register yourself for the desired Quran classes. After filling <br> the form, our representative will contact you shortly.</p>
                    <p class="fs-18 fc-gold">
                        <strong>Register now and enjoy the first 3 classes for free</strong>
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="studentName">Student Name <span>*</span></label>
                            <input type="text" placeholder="Student Name" id="studentName">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="studentAge">Student Age <span>*</span></label>
                            <input type="text" id="studentAge" placeholder="Student Age">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label style="margin-bottom: 15px !important;">Gender <span>*</span></label>
                            <div class="selectGender">

                                <label for="male" class="genderFlex"><input type="radio" name="gender" id="male">Male</label>
                                <label class="genderFlex" for="female">
                                    <input type="radio" name="gender" id="female">
                                    Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="number">Phone Number <span>*</span></label>
                            <input type="number" name="number" id="number" placeholder="Enter your Phone Number" class="hide-arrow">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="studentAge">WhatsApp <span>(Optional)</span></label>
                            <input type="text" id="whatsApp" placeholder="Enter Your WhatsApp">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="country">Country <span>*</span></label>
                            <select name="country" id="country">
                                <option value="">Select Country</option>
                                <option value="something">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="city">City <span>*</span></label>
                            <input type="text" id="city" placeholder="Enter your city">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <div class="infoInput">
                                <label for="zoom">Skype or Zoom ID <span>(Optional)</span></label>
                                <input type="text" placeholder="Enter your Skype or Zoom ID" id="zoom">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="course">Select your Course <span>*</span></label>
                            <select name="" id="" placeholder="select somethign">
                                <option value="">Select Course</option>
                                <option value="1">Something</option>
                                <option value="2">Something</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="classes">No of classes in a week <span>*</span></label>
                            <select name="classes" id="classes">
                                <option value="">Select Class Schedule</option>
                                <option value="2 Days In A Week">2 Days In A Week</option>
                                <option value="3 Days In A Week">3 Days In A Week</option>
                                <option value="4 Days In A Week (Recommended)">4 Days In A Week (Recommended)</option>
                                <option value="6 Days In A Week">6 Days In A Week</option>
                                <option value="6 Days In A Week (Quran Memorization)">6 Days In A Week (Quran Memorization)</option>
                                <option value="2 Days In A Week (Tafseer And Arabic)">2 Days In A Week (Tafseer And Arabic)</option>
                                <option value="3 Days In A Week (Tafseer And Arabic)">3 Days In A Week (Tafseer And Arabic)</option>
                                <option value="4 Days In A Week (Tafseer And Arabic)">4 Days In A Week (Tafseer And Arabic)</option>
                                < </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="classes">Add More Details <span>(Optional)</span></label>
                            <textarea id="msg" rows="5" class="w-100 h-100"></textarea>
                        </div>
                    </div>
                </div>

                <div class="registerFormButton text-center">
                    <button id="submitBtn" class="btn btn-primary fs-18 bg-gold-700">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!--==== REGISTER FORM SECTION END ====-->


    <!--==== FOOTER START ====-->
    <?php include('includes/footer.php') ?>
    <!--==== FOOTER END ====-->

    <!--==== SCRIPTS START ====-->
    <?php include('includes/footer-scripts.php') ?>
    <!--==== SCRIPTS END ====-->

</body>

</html>