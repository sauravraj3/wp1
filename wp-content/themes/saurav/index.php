<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saurav
 */

get_header();
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Varsity | Home</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

<!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
	<i class="fa fa-angle-up"></i>
  </a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header  -->
<header id="mu-header">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12 col-md-12">
		<div class="mu-header-area">
		  <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			  <div class="mu-header-top-left">
				<div class="mu-top-email">
				  <i class="fa fa-envelope"></i>
				  <span>info@markups.io</span>
				</div>
				<div class="mu-top-phone">
				  <i class="fa fa-phone"></i>
				  <span>(568) 986 652</span>
				</div>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			  <div class="mu-header-top-right">
				<nav>
				  <ul class="mu-top-social-nav">
					<li><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li><a href="#"><span class="fa fa-youtube"></span></a></li>
				  </ul>
				</nav>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
  <nav class="navbar navbar-default" role="navigation">
	<div class="container">
	  <div class="navbar-header">
		<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<!-- LOGO -->
		<!-- TEXT BASED LOGO -->
		<a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>
		<!-- IMG BASED LOGO  -->
		<!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
	  </div>
	  <div id="navbar" class="navbar-collapse collapse">
		<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		  <li class="active"><a href="index.html">Home</a></li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="course.html">Course Archive</a></li>
			  <li><a href="course-detail.html">Course Detail</a></li>
			</ul>
		  </li>
		  <li><a href="gallery.html">Gallery</a></li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="blog-archive.html">Blog Archive</a></li>
			  <li><a href="blog-single.html">Blog Single</a></li>
			</ul>
		  </li>
		  <li><a href="contact.html">Contact</a></li>
		  <li><a href="404.html">404 Page</a></li>
		  <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
		</ul>
	  </div><!--/.nav-collapse -->
	</div>
  </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
  <div class="mu-search-area">
	<button class="mu-search-close"><span class="fa fa-close"></span></button>
	<div class="container">
	  <div class="row">
		<div class="col-md-12">
		  <form class="mu-search-form">
			<input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
		  </form>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- End search box -->
<!-- Start Slider -->
<section id="mu-slider">
  <!-- Start single slider item -->
  <div class="mu-slider-single">
	<div class="mu-slider-img">
	  <figure>
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/slider/1.jpg" alt="img">
	  </figure>
	</div>
	<div class="mu-slider-content">
	  <h4>Welcome To Varsity</h4>
	  <span></span>
	  <h2>We Will Help You To Learn</h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
	  <a href="#" class="mu-read-more-btn">Read More</a>
	</div>
  </div>
  <!-- Start single slider item -->
  <!-- Start single slider item -->
  <div class="mu-slider-single">
	<div class="mu-slider-img">
	  <figure>
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/slider/2.jpg" alt="img">
	  </figure>
	</div>
	<div class="mu-slider-content">
	  <h4>Premiumu Quality Free Template</h4>
	  <span></span>
	  <h2>Best Education Template Ever</h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
	  <a href="#" class="mu-read-more-btn">Read More</a>
	</div>
  </div>
  <!-- Start single slider item -->
  <!-- Start single slider item -->
  <div class="mu-slider-single">
	<div class="mu-slider-img">
	  <figure>
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/slider/3.jpg" alt="img">
	  </figure>
	</div>
	<div class="mu-slider-content">
	  <h4>Exclusivly For Education</h4>
	  <span></span>
	  <h2>Education For Everyone</h2>
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>
	  <a href="#" class="mu-read-more-btn">Read More</a>
	</div>
  </div>
  <!-- Start single slider item -->
</section>
<!-- End Slider -->
<!-- Start service  -->
<section id="mu-service">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12 col-md-12">
		<div class="mu-service-area">
		  <!-- Start single service -->
		  <div class="mu-service-single">
			<span class="fa fa-book"></span>
			<h3>Learn Online</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
		  </div>
		  <!-- Start single service -->
		  <!-- Start single service -->
		  <div class="mu-service-single">
			<span class="fa fa-users"></span>
			<h3>Expert Teachers</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
		  </div>
		  <!-- Start single service -->
		  <!-- Start single service -->
		  <div class="mu-service-single">
			<span class="fa fa-table"></span>
			<h3>Best Classrooms</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
		  </div>
		  <!-- Start single service -->
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- End service  -->

<!-- Start about us -->
<section id="mu-about-us">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="mu-about-us-area">
		  <div class="row">
			<div class="col-lg-6 col-md-6">
			  <div class="mu-about-us-left">
				<!-- Start Title -->
				<div class="mu-title">
				  <h2>About Us</h2>
				</div>
				<!-- End Title -->
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.</p>
				<ul>
				  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
				  <li>Saepe a minima quod iste libero rerum dicta!</li>
				  <li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
				  <li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
				  <li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6">
			  <div class="mu-about-us-right">
			  <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
				<img src="assets/img/about-us.jpg" alt="img">
			  </a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- End about us -->

<!-- Start about us counter -->
<section id="mu-abtus-counter">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="mu-abtus-counter-area">
		  <div class="row">
			<!-- Start counter item -->
			<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="mu-abtus-counter-single">
				<span class="fa fa-book"></span>
				<h4 class="counter">568</h4>
				<p>Subjects</p>
			  </div>
			</div>
			<!-- End counter item -->
			<!-- Start counter item -->
			<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="mu-abtus-counter-single">
				<span class="fa fa-users"></span>
				<h4 class="counter">3500</h4>
				<p>Students</p>
			  </div>
			</div>
			<!-- End counter item -->
			<!-- Start counter item -->
			<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="mu-abtus-counter-single">
				<span class="fa fa-flask"></span>
				<h4 class="counter">65</h4>
				<p>Modern Lab</p>
			  </div>
			</div>
			<!-- End counter item -->
			<!-- Start counter item -->
			<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="mu-abtus-counter-single no-border">
				<span class="fa fa-user-secret"></span>
				<h4 class="counter">250</h4>
				<p>Teachers</p>
			  </div>
			</div>
			<!-- End counter item -->
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- End about us counter -->

<!-- Start features section -->
<section id="mu-features">
  <div class="container">
	<div class="row">
	  <div class="col-lg-12 col-md-12">
		<div class="mu-features-area">
		  <!-- Start Title -->
		  <div class="mu-title">
			<h2>Our Features</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
		  </div>
		  <!-- End Title -->
		  <!-- Start features content -->
		  <div class="mu-features-content">
			<div class="row">
			  <div class="col-lg-4 col-md-4  col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-book"></span>
				  <h4>Professional Courses</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-users"></span>
				  <h4>Expert Teachers</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-laptop"></span>
				  <h4>Online Learning</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-microphone"></span>
				  <h4>Audio Lessons</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-film"></span>
				  <h4>Video Lessons</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			  <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="mu-single-feature">
				  <span class="fa fa-certificate"></span>
				  <h4>Professional Certificate</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
				  <a href="#">Read More</a>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- End features content -->
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- End features section -->


<!-- Start from blog -->
<section id="mu-from-blog">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="mu-from-blog-area">
		  <!-- start title -->
		  <div class="mu-title">
			<h2>From Blog</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
		  </div>
		  <!-- end title -->
		  <!-- start from blog content   -->
		  <div class="mu-from-blog-content">
			<div class="row">
			  <div class="col-md-4 col-sm-4">
				<article class="mu-blog-single-item">
				  <figure class="mu-blog-single-img">
					<a href="#"><img src="assets/img/blog/blog-1.jpg" alt="img"></a>
					<figcaption class="mu-blog-caption">
					  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
					</figcaption>
				  </figure>
				  <div class="mu-blog-meta">
					<a href="#">By Admin</a>
					<a href="#">02 June 2016</a>
					<span><i class="fa fa-comments-o"></i>87</span>
				  </div>
				  <div class="mu-blog-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
					<a class="mu-read-more-btn" href="#">Read More</a>
				  </div>
				</article>
			  </div>
			  <div class="col-md-4 col-sm-4">
				<article class="mu-blog-single-item">
				  <figure class="mu-blog-single-img">
					<a href="#"><img src="assets/img/blog/blog-2.jpg" alt="img"></a>
					<figcaption class="mu-blog-caption">
					  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
					</figcaption>
				  </figure>
				  <div class="mu-blog-meta">
					<a href="#">By Admin</a>
					<a href="#">02 June 2016</a>
					<span><i class="fa fa-comments-o"></i>87</span>
				  </div>
				  <div class="mu-blog-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
					<a class="mu-read-more-btn" href="#">Read More</a>
				  </div>
				</article>
			  </div>
			  <div class="col-md-4 col-sm-4">
				<article class="mu-blog-single-item">
				  <figure class="mu-blog-single-img">
					<a href="#"><img src="assets/img/blog/blog-3.jpg" alt="img"></a>
					<figcaption class="mu-blog-caption">
					  <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
					</figcaption>
				  </figure>
				  <div class="mu-blog-meta">
					<a href="#">By Admin</a>
					<a href="#">02 June 2016</a>
					<span><i class="fa fa-comments-o"></i>87</span>
				  </div>
				  <div class="mu-blog-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
					<a class="mu-read-more-btn" href="#">Read More</a>
				  </div>
				</article>
			  </div>
			</div>
		  </div>
		  <!-- end from blog content   -->
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- End from blog -->

<!-- Start footer -->
<footer id="mu-footer">
  <!-- start footer top -->
  <div class="mu-footer-top">
	<div class="container">
	  <div class="mu-footer-top-area">
		<div class="row">
		  <div class="col-lg-3 col-md-3 col-sm-3">
			<div class="mu-footer-widget">
			  <h4>Information</h4>
			  <ul>
				<li><a href="#">About Us</a></li>
				<li><a href="">Features</a></li>
				<li><a href="">Course</a></li>
				<li><a href="">Event</a></li>
				<li><a href="">Sitemap</a></li>
				<li><a href="">Term Of Use</a></li>
			  </ul>
			</div>
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3">
			<div class="mu-footer-widget">
			  <h4>Student Help</h4>
			  <ul>
				<li><a href="">Get Started</a></li>
				<li><a href="#">My Questions</a></li>
				<li><a href="">Download Files</a></li>
				<li><a href="">Latest Course</a></li>
				<li><a href="">Academic News</a></li>
			  </ul>
			</div>
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3">
			<div class="mu-footer-widget">
			  <h4>News letter</h4>
			  <p>Get latest update, news & academic offers</p>
			  <form class="mu-subscribe-form">
				<input type="email" placeholder="Type your Email">
				<button class="mu-subscribe-btn" type="submit">Subscribe!</button>
			  </form>
			</div>
		  </div>
		  <div class="col-lg-3 col-md-3 col-sm-3">
			<div class="mu-footer-widget">
			  <h4>Contact</h4>
			  <address>
				<p>P.O. Box 320, Ross, California 9495, USA</p>
				<p>Phone: (415) 453-1568 </p>
				<p>Website: www.markups.io</p>
				<p>Email: info@markups.io</p>
			  </address>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- end footer top -->
  <!-- start footer bottom -->
  <div class="mu-footer-bottom">
	<div class="container">
	  <div class="mu-footer-bottom-area">
		<p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
	  </div>
	</div>
  </div>
  <!-- end footer bottom -->
</footer>
<!-- End footer -->

</body>

<?php
get_sidebar();
get_footer();
