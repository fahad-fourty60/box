<?php include 'keywords.php';?>
<!DOCTYPE html>

<html lang="en">




<head>



<!--  <title>Equity Solutions offers a wide range of consulting services with the necessary tools and expertise to resolve issues faced by clients. </title>-->
	<title><?php echo $pagename ?></title>
	<meta name="keywords" content="<?php echo $metakeywords ?>">
	<meta name="description" content="<?php echo $metadescription ?>">

<link rel="icon" type="image/x-icon" href="assets/details/fav.svg">

  <meta charset="utf-8">



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- bootstrap-->

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900&amp;display=swap" rel="stylesheet">
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">



  <!--Font awesome-->

  <link rel="stylesheet" href="assets/css/fontawesome.min.css">



  <!--animate.css-->

  <link rel="stylesheet" href="assets/css/animate.css">



  <!-- flaticon-->

  <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">



  <!--main css-->

  <link rel="stylesheet" href="assets/css/style.css">



  <!-- slick slider css-->

  <link rel="stylesheet" href="assets/css/slick.css">



  <!--slick theme css-->

  <link rel="stylesheet" href="assets/css/slick-theme.css">

  <!-- magnific popup -->

  <link rel="stylesheet" href="assets/css/magnific-popup.css">





  <!-- google fonts-->

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


  <!-- google fonts-->

  
</head>



<body>



  <!-- Navigation -->



  <div class="navigation-wrap  start-header start-style" style="background: #0f2952;">

    <div class="container">

      <div class="row">

        <div class="col-12">

          <nav class="navbar navbar-expand-md navbar-light">



<!--            <a class="navbar-brand" href="index.php"><img src="assets/img/equity-solution/es-logo.svg" alt=""></a>-->
			<a class="navbar-brand" href="index.php"><img src="assets/img/equity-solution/es-logo.svg" alt=""></a>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav ml-auto py-4 py-md-0">
                  <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="index.php">Home</a>

                </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="teams.php">Team</a>

                </li>
                   <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="vision.php">Vision</a>

                </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="services.php">Services</a>

                </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="nri-services.php">NRI support</a>

                </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="testimonial.php">Testimonials</a>

                </li>
                   <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="contact.php">Contact Us</a>

                </li>

<!--
                <li class="nav-item pl-4 pl-md-0 ml-0">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="index-2.html">Homepage 01</a>

                    <a class="dropdown-item" href="homepage-2.html">Homepage 02</a>

                    <a class="dropdown-item" href="homepage-3.html">Homepage 03</a>

                    <a class="dropdown-item" href="homepage-4.html">Homepage 04</a>

                    <a class="dropdown-item" href="homepage-5.html">Homepage 05</a>

                    <a class="dropdown-item" href="homepage-6.html">Homepage 06</a>

                  </div>

                </li>

                <li class="nav-item pl-4 pl-md-0 ml-0">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="about-us-1.html">About Us 01 </a>

                    <a class="dropdown-item" href="about-us-2.html">About Us 02 </a>

                  </div>

                </li>

                <li class="nav-item pl-4 pl-md-0 ml-0">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="services-1.html">Services  01 </a>

                    <a class="dropdown-item" href="services-2.html">Services 02</a>

                    <a class="dropdown-item" href="services-3.html">Services 03</a>

                    <a class="dropdown-item" href="services-4.html">Services 04</a>

                    <a class="dropdown-item" href="services-5.html">Services 05</a>

                    <a class="dropdown-item" href="services-6.html">Services 06</a>

                  </div>

                </li>

               <li class="nav-item pl-4 pl-md-0 ml-0">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pricing</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="pricing-1.html">Pricing 01</a>

                    <a class="dropdown-item" href="pricing-2.html">Pricing 02</a>

                    <a class="dropdown-item" href="pricing-3.html">Pricing 03</a>

                  </div>

                </li>


                <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Banners</a>

                  <div class="dropdown-menu mega-menu">

                      <div class="row">
                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Banners with solid</h6>

                            Blog Pages

                            <a class="dropdown-item" href="banner-01-solid.html">Curve Banner</a>

                            <a class="dropdown-item" href="banner-02-solid.html">Triangle Asymmetrical</a>

                            <a class="dropdown-item" href="banner-03-solid.html">Titl Banner</a>

                            <a class="dropdown-item" href="banner-04-solid.html">Triangle Banner</a>

                             <a class="dropdown-item" href="banner-06-solid.html">Curve Asymmetrical</a>

                            <a class="dropdown-item" href="banner-07-solid.html">Split Banner</a>

                            <a class="dropdown-item" href="banner-14-solid.html">Fan Opacity</a>


                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6 class="v-none">Banners with solid</h6>

                            <a class="dropdown-item" href="banner-08-solid.html">Zigzac Banner</a>

                            <a class="dropdown-item" href="banner-09-solid.html">Waves Banner</a>

                            <a class="dropdown-item" href="banner-10-solid.html">Mountain Banner</a>

                            <a class="dropdown-item" href="banner-11-solid.html">Books Banner</a>

                            <a class="dropdown-item" href="banner-12-solid.html">Pyramids Banner</a>

                            <a class="dropdown-item" href="banner-13-solid.html">Animated Wave</a>

                            <a class="dropdown-item" href="banner-14-solid.html">Fan Opacity</a>

                          </div>

                        </div>


                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Banner with image</h6>

                            <a class="dropdown-item" href="banner-01.html">Curve Banner</a>

                            <a class="dropdown-item" href="banner-02.html">Triangle Asymmetrical</a>

                            <a class="dropdown-item" href="banner-03.html">Titl Banner</a>

                            <a class="dropdown-item" href="banner-04.html">Triangle Banner</a>

                             <a class="dropdown-item" href="banner-06.html">Curve Asymmetrical</a>

                            <a class="dropdown-item" href="banner-07.html">Split Banner</a>

                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6 class="v-none">Banner with image</h6>

                            <a class="dropdown-item" href="banner-08.html">Zigzac Banner</a>

                            <a class="dropdown-item" href="banner-09.html">Waves Banner</a>

                            <a class="dropdown-item" href="banner-10.html">Mountain Banner</a>

                            <a class="dropdown-item" href="banner-11.html">Books Banner</a>

                            <a class="dropdown-item" href="banner-12.html">Pyramids Banner</a>

                            <a class="dropdown-item" href="banner-13.html">Animated Wave</a>

                            <a class="dropdown-item" href="banner-14.html">Fan Opacity</a>

                          </div>

                        </div>
                      </div>

                  </div>

                </li>



                <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>

                  <div class="dropdown-menu mega-menu">

                      <div class="row">
                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Blog Pages</h6>

                            Blog Pages

                            <a class="dropdown-item" href="blog-details-left.html">Blog Details Left</a>

                            <a class="dropdown-item" href="blog-details-right.html">Blog Details Right</a>

                            <a class="dropdown-item" href="blog-grid-style-1.html">Blog Grid Style 01</a>

                            <a class="dropdown-item" href="blog-grid-style-2.html">Blog Grid Style 02</a>

                             <a class="dropdown-item" href="blog-left-side.html">Blog Left Side</a>

                            <a class="dropdown-item" href="blog-right-side.html">Blog Right Side</a>

                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Others</h6>

                            <a class="dropdown-item" href="faq-style-1.html">FAQ 01</a>

                            <a class="dropdown-item" href="faq-style-2.html">FAQ 02</a>

                            <a class="dropdown-item" href="coming-soon-1.html">Coming Soon 01</a>

                            <a class="dropdown-item" href="coming-soon-2.html">Coming Soon 02</a>

                            <a class="dropdown-item" href="404.html">404</a>

                          </div>

                        </div>


                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Team</h6>

                            <a class="dropdown-item" href="Team-page-1.html">Team Page 01</a>

                            <a class="dropdown-item" href="Team-page-2.html">Team Page 02</a>

                            <a class="dropdown-item" href="Team-page-3.html">Team Page 03</a>

                            <a class="dropdown-item" href="Team-page-4.html">Team Page 04</a>

                          </div>

                        </div>

                        <div class="col-md-3">

                          <div class="mega-menu-inner">

                            <h6>Projects</h6>

                            <a class="dropdown-item" href="Project-1.html">Project 01</a>

                            <a class="dropdown-item" href="Project-2.html">Project 02</a>

                            <a class="dropdown-item" href="Project-3.html">Project 03</a>

                          </div>

                        </div>
                      </div>

                  </div>

                </li>


                <li class="nav-item pl-4 pl-md-0 ml-0 mega-menu-link">

                  <a class="nav-link" href="blog-right-side.html">Blog</a>

                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>

                  <div class="dropdown-menu">

                    <a class="dropdown-item" href="contact-1.html">Contact  01</a>

                    <a class="dropdown-item" href="contact-2.html">Contact 02</a>

                  </div>

                </li>
-->
                  
              </ul>

<!--
               <div class="mega-menu-link" id="searchLink">

                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>

                  <div class="dropdown-menu mega-menu search-form">

                    <div class="row">

                      <div class="col-12">

                        <form role="search" method="get" id="searchform">

                          <div class="input-group">

                          <input type="text" id="searchbox" class="form-control" name="search-box">

                            <div class="input-group-btn">

                            <button class="btn btn-default"  id="searchsubmit"  type="submit">

                           Search

                            </button>

                            </div>

                          </div>

                        </form>

                      </div>

                    </div>

                  </div>

                </div>
-->

            </div>

          </nav>

        </div>

      </div>

      <div class="seperator"></div>
    </div>
  </div>



<!--==END Navigation==-->
