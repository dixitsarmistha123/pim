<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

	//$this->extend('layout.html.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pimcore</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/static/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/static/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/static/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/static/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/static/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                <h3><?= $this->input("headline", ["width" => 540]); ?></h3>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="http://exam.local/Homepage">Home</a> </li>
                                        <li> <a href="http://exam.local/Productspage">Products</a> </li>
                                        <li><a href="http://exam.local/ShowFeedback">Feedback</a></li> 
                                        <li><a href="http://exam.local/admin">Log In</a></li>
                                        <li class="last">
                                            <a href="#"><img src="/static/images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="/static/images/1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span >All New T-Shirts </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="/static/images/cap.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Caps </span>
                            <h1>up to 15% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="/static/images/8.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Bags </span>
                            <h1>up to 35% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <div class="container mt-5">

  <style>
    .card-body {
      border-bottom-left-radius: inherit !important;
      border-bottom-right-radius: inherit !important;
    }
  </style>

  <!--Section: Content-->
  <section class="dark-grey-text text-center">
    
    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Our bestsellers</h3>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit fugit, error amet numquam iure provident voluptate esse quasi nostrum quisquam eum porro a pariatur veniam.</p>
<?php     
            	   $products = new \Pimcore\Model\DataObject\Products\Listing();
    		foreach($products as $val=>$product)
    		{
	?>
  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <?php
            $picture = new \Pimcore\Model\Asset\Image();
            $picture = $product->getImage();
		    if($picture instanceof \Pimcore\Model\Asset\Image):
			/** @var \Pimcore\Model\Asset\Image $Image */
		  echo '<img src= " '.$picture->getThumbnail().'"' ;
		  endif;
		    ?>class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
             <?php echo'<a href=""> '.$product->getProductName ().' </a>'; ?>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text"><?php echo $product->getdescription () ;  ?></p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2"><?php echo $product->getprice () ;  ?></p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick Look">
                <i class="fas fa-eye grey-text ml-3"></i>
              </a>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(49).jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
                <a href="">Camera</a>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2">1160$</p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick Look">
                <i class="fas fa-eye grey-text ml-3"></i>
              </a>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">
        <!-- Card -->
        <div class="card card-cascade wider card-ecommerce">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (56).jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card image -->
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h5 class="card-title">
              <strong>
                <a href="">iPhone 6S</a>
              </strong>
            </h5>
            <!-- Description -->
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
            <!-- Card footer -->
            <div class="card-footer mt-4">
              <p class="float-left font-weight-bold mb-1 pb-2">2079$</p>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                <i class="fas fa-heart grey-text ml-3"></i>
              </a>
              <a class="float-right material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Quick Look">
                <i class="fas fa-eye grey-text ml-3"></i>
              </a>
            </div>
          </div>
          <!-- Card content -->
        </div>
        <!-- Card -->
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->

<?php
}?>
</div>
    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                                <p>(+71) 8522369417
                                    <br>demo@gmail.com</p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Products </a></li>
                                    <li> <a href="#">Specials  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By GROUP ONE </a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    
    <!-- Javascript files-->
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/popper.min.js"></script>
    <script src="/static/js/bootstrap.bundle.min.js"></script>
    <script src="/static/js/jquery-3.0.0.min.js"></script>
    <script src="/static/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/static/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/static/js/custom.js"></script>
    <!-- javascript -->
    <script src="/static/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
