<?php
// Template Name: Homepage
get_header();


$siteName = "Hayat Ul Quran Academy";
?>

<!--==== HOME BANNER START ====-->
<section class="home-banner p-0">
	<div class="container-fluid p-0">
		<div class="banner-video-wrap">
			<video autoplay muted loop width="100%">
				<source src="assets/video/makkah-2.mp4" type="video/mp4">
				<!-- <source src="assets/video/makkah-2.mp4" type="video/mp4"> -->
				Your browser does not support the video tag.
			</video>
		</div>

		<div class="banner-text">
			<div class="text-center">
				<div class="img-wrap" data-aos="fade-down" data-aos-duration="700" data-aos-delay="300">
					<img src="assets/images/bismillah-text.png" alt="Bismillah Text">
				</div>
				<h1 class="fc-gold" data-aos="fade-down" data-aos-duration="700" data-aos-delay="900">Hayat Ul Quran</h1>
				<h2 class="fc-white text-shadow-white" data-aos="fade-down" data-aos-duration="700" data-aos-delay="1400">Online Academy</h2>
				<i class="fc-white text-italic d-block lh-1-5" data-aos="fade-down" data-aos-duration="700" data-aos-delay="1400">"The example of a believer who recites the Quran is like that of <br> a citron, its taste is delicious and its fragrance spreads."</i>
				<div class="button-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
					<button class="btn btn-primary">Register Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==== HOME BANNER END ====-->

<!--==== STEPS SECTION START ====-->
<section class="stepSection p-0">
	<div class="stepWrapper">
		<div class="container">
			<div class="stepTextContent mb-md-4 text-center mb-40">
				<h6 class="section__label fc-gold">Learning Quran</h6>
				<h4 class="section__heading mb-20">Begin learning <span class="fc-blue">Quran in three easy steps</span></h4>
				<p class="fs-16 fw-500">Getting yourself or your loved ones familiarized with the teachings of the holy Quran doesn’t have to be a hassle. This is the reason why Quran Learn Academy has developed an extremely easy to understand online registration process you can go through to get yourself or your children registered. Just follow these steps to get things on the way.
				</p>
			</div>
			<div class="row align-items">
				<div class="stepMainContent col-xl-8 mx-lg-auto col-xxl-6 mw-100">
					<div class="stepCard">
						<div class="stepCardMainImg">
							<img src="assets/images/step-1.svg" alt="Reload Page">
						</div>
						<div class="stepCardMainContent">
							<h4 class="fs-40 fw-700"><span>click</span> on Register Now
							</h4>
							<p class="fs-18 fw-400">Simply click on “Register Online” and a tab for online registration will open. There, enter your basic details such as name, residential address, and contact information. Once you are done with providing us theses basic credentials, your process for registration will be complete.
							</p>
						</div>
					</div>
					<div class="stepCard">
						<div class="stepCardMainImg">
							<img src="assets/images/step-2.svg" alt="Reload Page">
						</div>
						<div class="stepCardMainContent">
							<h4 class="fs-40 fw-700"><span>Pick a Time</span> for free Trial:
							</h4>
							<p class="fs-18 fw-400">Upon receiving your request for registration, we will get in touch with you to set a time as to when can you take your free trial class. In addition, we will guide you about our Quran teaching process and tell you a little bit about our organization.
							</p>
						</div>
					</div>
					<div class="stepCard">
						<div class="stepCardMainImg fs-60 fc-gold">
							<i class="fa-solid fa-book-open"></i>
						</div>
						<div class="stepCardMainContent">
							<h4 class="fs-40 fw-700"><span>Embark On this Holy</span> Journey with your 1st Class:
							</h4>
							<p class="fs-18 fw-400">Initiate your Quran learning process by logging in with the credentials we provide you and start taking your first class with our Quran teachers.
							</p>
						</div>
					</div>
				</div>
				<div class="stepMainImg text-center text-xxl-end col-xl-8 mx-lg-auto col-xxl-6 mw-100">
					<img src="./assets/images/setep-section-image.png" alt="Reload Page">
				</div>
			</div>
		</div>
	</div>
</section>
<!--==== STEPS SECTION END ====-->

<!--==== FREE TRIAL CTA START ====-->
<?php include(get_template_directory() . "/sections/free-trial-section.php"); ?>
<!--==== FREE TRIAL CTA END ====-->

<!--==== ROUND SECTION START ====-->
<section class="roundSection p-0">
	<div class="roundWrapper pt-5">
		<div class="mb-40 text-center">
			<h6 class="section__label fc-gold">Features</h6>
			<h4 class="section__heading fc-white">Our <span class="fc-gold">Features</span></h4>
		</div>
		<div class="container-fluid">
			<div class="round-about-main">
				<ul class="round-list list-unstyled d-flex justify-content-center">
					<li class="text-center round-1 last" data-index="1">
						<span class="fc-gold"><i class="ri-time-fill"></i></span>
						<h6>Flexible Timings</h6>
					</li>
					<li class="text-center round-2 s-last" data-index="2">
						<span class="fc-gold"><i class="ri-women-fill"></i></span>
						<h6>Female Tutors</h6>
					</li>
					<li class="text-center active round-3 middle" data-index="3">
						<span class="fc-gold"><i class="ri-user-fill"></i></span>
						<h6>One to One Class</h6>
					</li>
					<li class="text-center round-4 s-last" data-index="4">
						<span class="fc-gold"><i class="ri-brain-fill"></i></span>
						<h6>Interactive Learning</h6>
					</li>
					<li class="text-center round-5 last" data-index="5">
						<span class="fc-gold"><i class="ri-computer-fill"></i></span>
						<h6>Multi Platform </h6>
					</li>
				</ul>
				<div class="about-rounded-card text-center">
					<div class="flexibleTimings">
						<span class="fc-gold fs-24"><i class="ri-time-fill"></i></span>
						<h6 class="fs-24 fw-700 mb-3">Flexible Timings</h6>
						<p class="lh-1-5 mb-3">Embrace the freedom to learn at your own pace! Our flexible class timings empower you to tailor your Quranic journey according to your schedule. Whether you're a busy professional or a dedicated parent, we're here to accommodate your learning needs.</p>
					</div>
					<div class="femaleTutors">
						<span class="fc-gold fs-24"><i class="ri-women-fill"></i></span>
						<h6 class="fs-24 fw-700 mb-3">Female Tutors</h6>
						<p class="lh-1-5 mb-3">Experience personalized guidance from our proficient female tutors. Our team of dedicated instructors is committed to nurturing a supportive and empowering learning environment, ensuring a comfortable and enriching Quranic education for all.</p>
					</div>
					<div class="oneToOne active">
						<span class="fc-gold fs-24"><i class="ri-user-fill"></i></span>
						<h6 class="fs-24 fw-700 mb-3">One-to-One Class</h6>
						<p class="lh-1-5 mb-3">Elevate your learning with exclusive one-on-one classes! Benefit from undivided attention, personalized instruction, and a tailored curriculum designed to meet your individual goals. Your Quranic progress is our priority.</p>
					</div>
					<div class="interactiveLearning">
						<span class="fc-gold fs-24"><i class="ri-brain-fill"></i></span>
						<h6 class="fs-24 fw-700 mb-3">Interactive Learning</h6>
						<p class="lh-1-5 mb-3">Immerse yourself in a dynamic learning experience! Our interactive platform offers engaging Quranic games, quizzes, and multimedia resources to complement your one-on-one classes. Unleash the power of interactive learning and make your Quranic journey truly enjoyable.</p>
					</div>
					<div class="multiplatform">
						<span class="fc-gold fs-24"><i class="ri-computer-fill"></i></span>
						<h6 class="fs-24 fw-700 mb-3">Multi Platform Accessibility</h6>
						<p class="lh-1-5 mb-3">Immerse yourself in a dynamic learning experience! Our interactive platform offers engaging Quranic games, quizzes, and multimedia resources to complement your one-on-one classes. Unleash the power of interactive learning and make your Quranic journey truly enjoyable.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==== ROUND SECTION END ====-->

<!--==== COUNTER SECTION START ====-->
<?php include(get_template_directory() . "/sections/counter-section.php") ?>
<!--==== COUNTER SECTION END ====-->


<!--==== TESTIMONIALS SECTION START ====-->
<?php include(get_template_directory() . "/sections/testimonial-section.php"); ?>
<!--==== TESTIMONIALS SECTION END ====-->


<!--==== FAQ SECTION START ====-->
<section class="faq-section">
	<div class="container">
		<div class="mb-40 text-center">
			<h6 class="section__label fc-gold">FAQ</h6>
			<h4 class="section__heading">Frequently Asked<span class="fc-blue">Questions</span></h4>
		</div>

		<div class="row">
			<div class="col-md-9 mx-auto">
				<div class="accordion">
					<div class="accordion__container">
						<div class="accordion__button active">
							<h6 class="accordion__title">How Online Quran Classes Work?</h6>
							<span class="accordion__symbol">
								<i class="fa-solid fa-caret-down"></i>
							</span>
						</div>
						<div class="accordion__panel active">
							<p class="accordion__text">The classes will be online. You will require a stable internet connection. Moreover, you will also need an ID on Zoom, Skype, or Oovoo. You can use any device that supports these software. Our teachers are going to be online on your selected timings. The first three classes will be a free trial. After these classes, you can choose to stay or leave a course. Above all, there is no need for webcams. We only use the screen sharing option to teach you. It enables you to see the same screen which is being used by the teacher. We will also assess your performance through the monthly tests. In January every year, we hold a competition. However, you will have to register at the desired course first. Besides, you can ask for our help to find the right course.

							</p>
						</div>
					</div>
					<div class="accordion__container">
						<div class="accordion__button">
							<h6 class="accordion__title">Why Choose us?</h6>
							<span class="accordion__symbol">
								<i class="fa-solid fa-caret-down"></i>
							</span>
						</div>
						<div class="accordion__panel">
							<p class="accordion__text"><?php echo $siteName; ?> has been enlightening Muslims about the teachings of the holy Quran and making their lives according to the principles of Islam. We take pride in what we do and we take it upon ourselves to make our brothers and sisters good Muslims. With a step by step process designed by keeping in mind the objective of teaching our students correctly, we aim to make you learn Quran with tajweed comprehensively.</p>
						</div>
					</div>
					<div class="accordion__container">
						<div class="accordion__button">
							<h6 class="accordion__title">Our Mission</h6>
							<span class="accordion__symbol">
								<i class="fa-solid fa-caret-down"></i>
							</span>
						</div>
						<div class="accordion__panel">
							<p class="accordion__text">We aim to provide quality Quranic and Islamic education online. The main focus is on reciting the Holy Quran with the rules of Tajweed. Tajweed is necessary for reverence and submission in Salah (Namaz). Moreover, Tajweed is one of the etiquettes to read the holy Quran. Online Quran academy considers that the basic knowledge of Islam should reach every Muslim. The “online” aspect of the academy is an extension of that goal.</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>
<!--==== FAQ SECTION END ====-->

<!--==== CTA SECTION START ====-->
<?php include(get_template_directory() . "/sections/cta-section.php") ?>
<!--==== CTA SECTION END ====-->

<?php
get_footer();
?>