<!DOCTYPE html>

<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<html lang="en">
<head>

	<title>World Of Art</title>

  <link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>




<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Beuty Of Art</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">This is an official site where artist can be linked with there clients easily.</p>
              <a href="#about" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">LEARN MORE</a>
          </div>

      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">ART</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#menu" class="smoothScroll">Menu</a></li>
        <li><a href="#team" class="smoothScroll">Team</a></li>
        <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
      </ul>
    </div>

  </div>
</div>




<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Our Story</h2>
            <h4>Get to see this incredible Designs that might inspire you not to give up</h4>
          </div>
      </div>

      <div class="clearfix"></div>
      
      <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
        <img src="images/about-img.jpg" class="img-responsive" alt="About">
        <h3>Its Indredible working on your dreams.</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="images/slide-img1.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img2.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/slide-img3.jpg" alt="Flexslider">
            </li>

          </ul>
        </div>

         <p>"Stay away from those people who try to disparage your ambitions. Small minds will always do that, but great minds will give you a feeling that you can become great too".</p>
      </div>

       <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
        	<h2>Get Inspired</h2>
         	
         	<p>“It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest".</p>
         	
            
      </div>

		</div>
	</div>
</section>


<!-- Video section -->
<section id="video" class="parallax-section">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=GTl9H980lmY"><i class="fa fa-play"></i></a>
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video</h2>
              <p class="wow fadeInUp" data-wow-delay="0.8s">This video Teache's you how to create your Arts Using Dribble.</p>
          </div>

      </div>
    </div>
</section>

<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Best Designs Menu</h2>
            <h4>we have special Designs for you</h4>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.6s">
          <div class="media-object pull-left">
            <img src="images/gallery-img1.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.300</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Sitting Room</h3>
            <p>If you love playing games this design will be much better for your sitting room presentation</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="images/gallery-img2.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.600</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Gym</h3>
            <p>Part of your house where you have Gym, you can have this pinting because the give you a positive look.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object pull-left">
            <img src="images/gallery-img3.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.450</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Painting Room</h3>
            <p>This is the best paint to hang on the wall of your painting gurrage.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="1s">
          <div class="media-object pull-left">
            <img src="images/gallery-img4.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.320</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Bedroom</h3>
            <p>This paint makes reminds you your lover and will show how much you love your woman.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.3s">
          <div class="media-object pull-left">
            <img src="images/gallery-img5.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.640</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Vacation</h3>
            <p>This paint can be hanged of your sons bedroom, this reminds him of the best vaction you've ever taken him.</p>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="1.6s">
          <div class="media-object pull-left">
            <img src="images/gallery-img6.jpg" class="img-responsive" alt="Food Menu">
            <a href="https://www.paypal.com/cgi-bin/webscr" class="smoothScroll"><strong>BUY</strong></a>
            <span class="menu-price">Ksh.450</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Mountains</h3>
            <p>This Design Presents the best view of natural resources.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Team section -->
<section id="team" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Meet Our Best Team</h2>
            <h4>we are Designers specialists</h4>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <img src="images/chef1.jpg" class="img-responsive" alt="Team">  
                <div class="team-des">
                  <h3>Esekon</h3>
                  <h4>Site Manager</h4>
                    <ul class="social-icon">
                      <li><a href="https://web.facebook.com/" class="fa fa-facebook"></a></li>
                      <li><a href="https://twitter.com/Akuya_Isah" class="fa fa-twitter"></a></li>
                      <li><a href="https://dribbble.com/" class="fa fa-dribbble"></a></li>
                    </ul>
                </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-thumb">
            <img src="images/chef2.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Manu</h3>
                <h4>Co-Founder</h4>
                  <ul class="social-icon">
                      <li><a href="https://twitter.com/Akuya_Isah" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
          <div class="team-thumb">
            <img src="images/chef3.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>AKuya</h3>
                <h4>Senior Designer</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="https://twitter.com/Akuya_Isah" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.1s">
          <div class="join-team">
            <i class="fa fa-plus"></i>
            <p>Make your dream come true today.</p>
            <a href="#" class="btn btn-default hvr-bounce-to-bottom">JOIN US</a>
          </div>
      </div>

      <div class="clearfix"></div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.3s">
        <h2>Our Aim</h2>
         <p>Fusce lobortis quis nisl nec facilisis. Donec fringilla ipsum arcu, quis maximus est molestie eget. Nunc ullamcorper suscipit neque, ac malesuada purus molestie non. Phasellus sollicitudin urna sed ultrices dictum.</p>
      </div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
        <h2>Our Service</h2>
         <p>Maecenas dictum cursus dui, quis mattis eros ultricies sed. Maecenas ligula nulla, dictum eu cursus id, semper in orci. Fusce vel nisi hendrerit justo viverra vehicula in nec nunc. Curabitur blandit fringilla quam.</p>
      </div>

    </div>
  </div>
</section>

<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Designed Gallery</h2>
            <h4>we have special Designes for you</h4>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Family</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">SIngle Room</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Master Bedroom</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".dinner">Dinning</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box breakfast pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem One</h3>
                        </div>

                        <div class="iso-box breakfast lunch dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum two</h3>
                        </div>

                        <div class="iso-box dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Third Lorem ipsum</h3>
                        </div>

                        <div class="iso-box breakfast col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum fourth</h3>
                        </div>

                        <div class="iso-box lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Fifth Lorem ipsum</h3>
                        </div>

                        <div class="iso-box pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img6.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Sixth Lorem ipsum</h3>
                        </div>

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<!-- Contact section -->
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Say hello to us</h2>
                <h4>we are always ready to serve you!</h4>
            </div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					<form id="contact-form" method="post" action="#">
						<input name="name" type="text" class="form-control" placeholder="Your Name" required>
						<input name="email" type="email" class="form-control" placeholder="Your Email" required>
						<textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
						<input type="submit" class="form-control submit" value="SEND MESSAGE">
					</form>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Footer section -->
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>About Our Site</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                	tincidunt ut laoreet. Dolore magna aliquam erat volutpat ipsum.</p>
              </div>  
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Contact Detail</h3>
                <p>P.O BOX 1699 Bungoma, Kenya</p>
                <p>0792480503</p>
                <p>naomiotieno@gmail.com</p>
              </div> 
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Opening Hours</h3>
                <strong>We are live 24/7</strong>
                <strong>Saturday - Sunday</strong>
                
              </div> 

		</div>
	</div>
</footer>

<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2022 - Designed by Treazer Naomi</p>
      </div>  

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>