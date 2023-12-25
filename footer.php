<?php
wp_footer();

$siteName = "Hayat Ul Quran Academy";
$siteURL = "http://localhost/hayat-ul-quran/";

$siteEmail = "info@hayat-ul-quran.com";
$sitePhone = "+923052156938";
$siteAddress = "24th Street, Golimar Karachi.";
?>


<!--==== FOOTER START ====-->
<footer>
    <div class="container">
        <div class="util__panel top__footer">
            <div class="footer__text">
                <div class="logo mb-20">
                    <a href="" class="text-decoration-none">
                        <span class="logo-text fc-blue fs-30 fw-800 ">LOGO</span>
                    </a>
                </div>
                <p><span class="fc-gold"><?php echo $siteName; ?> </span> is an independent entity managed by a small group of dedicated professionals.</p>
                <div class="flex gap-10">
                </div>
            </div>
            <div class="footer__info">
                <h6 class="footer__title">Contact info</h6>
                <div class="flex">
                    <div class='img__wrap'>
                        <i class="ri-phone-fill"></i>
                    </div>
                    <a href="tel: <?php echo $sitePhone; ?>"><?php echo $sitePhone; ?></a>
                </div>
                <div class="flex">
                    <div class='img__wrap'>
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <a href="javacript:;"><?php echo $siteAddress; ?></a>
                </div>
                <div class="flex">
                    <div class='img__wrap'>
                        <i class="ri-mail-fill"></i>
                    </div>
                    <a href="maito: <?php echo $siteEmail; ?>"><span><?php echo $siteEmail; ?></span></a>
                </div>
            </div>

            <div class="util__panel footer__listContainer">
                <div>
                    <h6 class="footer__title">Quick links</h6>
                    <div class="footer__list p-0">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                        ));
                        ?>
                        <!-- <li><a href="">Register Now</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Bacome A Teacher</a></li>
                        <li><a href="">Contact Us</a></li> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom__footer">
            <p>© <?php echo date("Y"); ?> All rights reserved by <?php echo $siteName; ?>.</p>
        </div>
    </div>
</footer>

<div class="whatsapp-icon">
    <a href="https://api.whatsapp.com/send?phone=923052156938&text=" target="_blank"> <i class="ri-whatsapp-line"></i></a>
</div>


<!--==== LIBRARY FILES START =====-->
<script src="assets/js/libs.js"></script>
<!--==== LIBRARY FILES END =====-->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--==== LOCAL FILES START =====-->
<script src="assets/js/script.js"></script>
<!--==== LOCAL FILES END =====-->