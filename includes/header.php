<header>
    <div class="top-header py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <ul class="top-bar-list d-flex align-items-center list-unstyled gap-5">
                        <li>
                            <a href="tel:<?php echo $sitePhone; ?>">
                                <i class="ri-phone-fill me-2"></i>
                                <?php echo $sitePhone; ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $siteEmail; ?>">
                                <i class="ri-mail-fill me-2"></i>
                                <?php echo $siteEmail; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="top-bar-icon-list d-flex align-items-center justify-content-end list-unstyled gap-3">
                        <li>
                            <a href="https://www.facebook.com" class="fs-24" target="_blank">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" class="fs-24" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-container  d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="" class="text-decoration-none">
                    <span class="logo-text fc-blue fs-30 fw-800 ">LOGO</span>
                </a>
            </div>
            <ul class="nav-list p-0 m-0 list-unstyled d-flex">
                <li><a class="px-3 fw-500" href="index.php">Home</a></li>
                <li><a class="px-3 fw-500" href="about.php">About Us</a></li>
                <li><a class="px-3 fw-500" href="fees.php">Fees</a></li>
                <li><a class="px-3 fw-500" href="become-a-teacher.php">Become a Teacher</a></li>
                <li><a class="px-3 fw-500" href="contact-us.php">Contact Us</a></li>
            </ul>

            <div class="header-button">
                <a href="register.php" class="btn btn-primary">Student Registration</a>
            </div>
            <div class="burgerButton">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</header>

<div class="mobileMenu">
    <div class="mobileMenuHeader">
        <div class="logo">
            <a href="" class="text-decoration-none">
                <span class="logo-text fc-blue fs-30 fw-800 ">LOGO</span>
            </a>
        </div>
        <div class="mobileMenuClose">
            <button><i class="ri-close-line"></i></button>
        </div>
    </div>

    <ul class="mobile__list p-0 mb-3">
        <li><a class="" href="#">Home</a></li>
        <li><a class="" href="#">About Us</a></li>
        <li><a class="" href="#">Fees</a></li>
        <li><a class="" href="#">Become a Teacher</a></li>
        <li><a class="" href="#">Contact Us</a></li>
    </ul>

    <div class="header-button">
        <a href="#" class="btn btn-primary">Student Registration</a>
    </div>
</div>