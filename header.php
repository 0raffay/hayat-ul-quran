<?php
wp_head();

$siteName = "Hayat Ul Quran Academy";

$siteURL = get_template_directory_uri();
$siteEmail = "info@hayat-ul-quran.com";
$sitePhone = "+923052156938";


$ogContent1 = "Learn Quran from the best.";
$ogContent2 = "Join now.";
$ogImgPath =  "$siteURL/assets/images/og.png";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==== OFINFO START ====-->
    <meta property="og:url" content="<?php echo $siteURL ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $ogContent1 ?>">
    <meta property="og:description" content="<?php echo $ogContent2 ?>">
    <meta property="og:image" content="<?php echo $ogImgPath ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?php echo $siteURL ?>">
    <meta property="twitter:url" content="<?php echo $siteURL ?>">
    <meta name="twitter:title" content="<?php echo $ogContent1 ?>">
    <meta name="twitter:description" content="<?php echo $ogContent2 ?>">
    <meta name="twitter:image" content="<?php echo $ogImgPath ?>">

    <meta property="og:image" content="<?php echo $ogImgPath ?>" />
    <meta property="og:image:secure_url" content="<?php echo $ogImgPath ?>" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="330" />
    <meta property="og:image:alt" content="<?php echo $ogContent1 ?>" />
    <meta name="image" property="og:image" content="<?php echo $ogImgPath ?>">
    <meta name="author" content="<?php echo $siteName ?>">
    <meta name="description" property="og:description" content="<?php echo $ogContent2 ?>">
    <!--==== OFINFO END ====-->


    <base href="<?php echo get_template_directory_uri(); ?>/">

    <link rel="icon" type="image/png" href="assets/images/favicon/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


    <title><?php echo the_title(); ?> | <?php echo $siteName; ?></title>
</head>

<body class="<?php if (is_front_page()) echo "homeBody" ?>">


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
                    <a href="<?php bloginfo("url") ?>/home" class="text-decoration-none">
                        <span class="logo-text fc-blue fs-30 fw-800 ">LOGO</span>
                    </a>
                </div>
                <div class="nav-list">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        "container_class" => "nav-list p-0 m-0 list-unstyled d-flex"
                    ));
                    ?>
                </div>
                <div class="header-button">
                    <a href="<?php bloginfo("url"); ?>/register" class="btn btn-primary">Student Registration</a>
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

        <div class="mobile__list p-0 mb-3">
            <li><a class="<?php bloginfo("url")?>/home" href="#">Home</a></li>
            <li><a class="<?php bloginfo("url")?>/about" href="#">About Us</a></li>
            <li><a class="<?php bloginfo("url")?>/courses" href="#">Contact Us</a></li>
            <li><a class="<?php bloginfo("url")?>/fees" href="#">Fees</a></li>
            <li><a class="<?php bloginfo("url")?>/become-a-teacher" href="#">Become a Teacher</a></li>
            <li><a class="<?php bloginfo("url")?>/contact" href="#">Contact Us</a></li>
        </div>

        <div class="header-button">
            <a href="#" class="btn btn-primary">Student Registration</a>
        </div>
    </div>