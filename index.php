<?php
include "./config/database.php";
session_start();
if(isset($_SESSION ['author-id'])){
    $id = $_SESSION ['author-id'] ;
    $users_query = "SELECT * FROM users WHERE id='$id'";
    $connect = mysqli_query($db,$users_query);
    $user= mysqli_fetch_assoc($connect);
}else{
    $users_query = "SELECT * FROM users";
    $connect = mysqli_query($db,$users_query);
    $user= mysqli_fetch_assoc($connect);
}


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatibl./public/frontend/./public/frontend/img/e" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="./public/frontend/./public/frontend/./public/frontend/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="./public/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/frontend/css/animate.min.css">
        <link rel="stylesheet" href="./public/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="./public/frontend/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./public/frontend/css/flaticon.css">
        <link rel="stylesheet" href="./public/frontend/css/slick.css">
        <link rel="stylesheet" href="./public/frontend/css/aos.css">
        <link rel="stylesheet" href="./public/frontend/css/default.css">
        <link rel="stylesheet" href="./public/frontend/css/style.css">
        <link rel="stylesheet" href="./public/frontend/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="./public/frontend/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="./public/frontend/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                            <li class="nav-item"><a class="nav-link" href="../Naptune/backend/home/home.php">Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link" href="../Naptune/authentication/signin.php">Log in</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="./public/frontend/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <?php if(isset($_SESSION ['author-id'])) :?>

                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">Hey<?=" ". $user['name']?></h6>
                                <?php else : ?>
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">Hey<?=" ". $user['name']?></h6>
                                <?php endif; ?>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Smith</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Smith, professional web developer with long time experience in this field​.</p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="./public/frontend/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="./public/frontend/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="./public/frontend/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                    quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                    blanditiis culpa vitae velit. Numquam!</p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">2020</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>PHD of Interaction Design &amp; Animation</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">2016</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Master of Database Administration</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">2010</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Bachelor of Computer Engineering</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year">2005</div>
                                <div class="line"></div>
                                <div class="location">
                                    <span>Diploma of Computer</span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fab fa-react"></i>
								<h3>Creative Design</h3>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
								<i class="fab fa-free-code-camp"></i>
								<h3>Unlimited Features</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                <i class="fal fa-desktop"></i>
								<h3>Ultra Responsive</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fal fa-lightbulb-on"></i>
								<h3>Creative Ideas</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
                                <i class="fal fa-edit"></i>
								<h3>Easy Customization</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                <i class="fal fa-headset"></i>
								<h3>Supper Support</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/1.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.html">Hamble Triangle</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/2.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Video</span>
									<h4><a href="portfolio-single.html">Dark Beauty</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/3.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Audio</span>
									<h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
						<div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/4.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.html">Ipsum which</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/5.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Creative</span>
									<h4><a href="portfolio-single.html">Eiusmod tempor</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="./public/frontend/img/images/6.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>UX/UI</span>
									<h4><a href="portfolio-single.html">again there</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">245</span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">345</span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">39</span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">3</span>k</h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="./public/frontend/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="./public/frontend/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img01.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/frontend/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="#">
                                    <input type="text" placeholder="your name *">
                                    <input type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="./public/frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./public/frontend/js/popper.min.js"></script>
        <script src="./public/frontend/js/bootstrap.min.js"></script>
        <script src="./public/frontend/js/isotope.pkgd.min.js"></script>
        <script src="./public/frontend/js/one-page-nav-min.js"></script>
        <script src="./public/frontend/js/slick.min.js"></script>
        <script src="./public/frontend/js/ajax-form.js"></script>
        <script src="./public/frontend/js/wow.min.js"></script>
        <script src="./public/frontend/js/aos.js"></script>
        <script src="./public/frontend/js/jquery.waypoints.min.js"></script>
        <script src="./public/frontend/js/jquery.counterup.min.js"></script>
        <script src="./public/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="./public/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="./public/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="./public/frontend/js/plugins.js"></script>
        <script src="./public/frontend/js/main.js"></script>
    </body>

</html>
