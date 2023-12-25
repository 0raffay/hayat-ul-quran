<?php
// Template Name: Become a Teacher
get_header();


$siteName = "Hayat Ul Quran Academy";
?>


    <!-- Inner page banner -->
    <section class="innerBanner d-grid align-items-center justify-content-center" style="min-height: 400px; background: url(assets/images/register-bg.png) center/cover no-repeat fixed">
        <div class="container">
            <h1 class="page_heading fs-60 fw-700 ff-primary fc-gold text-center">Become a Teacher</h1>
        </div>
    </section>
    <!-- Inner page banner -->


    <!--==== REGISTER FORM SECTION START ====-->
    <section class="registerFormSection">
        <div class="container">

            <form action="#" class="registerForm">
                <div class="registerFormText mb-3 mb-md-5 mb-md-4 pb-md-30 text-center">
                    <h4 class="section__heading">Apply Now</h4>
                    <p>We are actively looking for new Quran Teachers at <span class="fc-gold"><?php echo $siteName; ?></span></p>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="teacher_name">First Name <span>*</span></label>
                            <input type="text" placeholder="First Name" id="teacher_name">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="teacher_last_name">Last Name <span>*</span></label>
                            <input type="text" id="teacher_last_name" placeholder="Last Name">
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
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="country">Country <span>*</span></label>
                            <select name="country" id="country">
                                <option value="">Select Country</option>
                                <option value="something">Option 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="city">City <span>*</span></label>
                            <input type="text" id="city" placeholder="Enter your city">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <div class="infoInput">
                                <label for="education">Education <span>*</span></label>
                                <select name="eductaion" id="eduction">
                                    <option value="">Enter your Educational Details</option>
                                    <option value="1">FSC</option>
                                    <option value="1">HSC</option>
                                    <option value="1">BA</option>
                                    <option value="1">BSC</option>
                                    <option value="1">MA</option>
                                    <option value="1">BCS</option>
                                    <option value="1">BCS</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-4 pb-md-3">
                        <div class="infoInput">
                            <label for="classes">Past Job Experience<span>(Optional)</span></label>
                            <textarea id="msg" rows="5" class="w-100 h-100"></textarea>
                        </div>
                    </div>
                </div>

                <div class="registerFormButton text-center">
                    <button id="submitBtn" class="btn btn-primary fs-18 bg-gold-700">Apply Now</button>
                </div>
            </form>
        </div>
    </section>
    <!--==== REGISTER FORM SECTION END ====-->






    <?php
    get_footer();
    ?>