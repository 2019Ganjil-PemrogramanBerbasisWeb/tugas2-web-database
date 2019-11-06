<!-- cek apakah sudah login -->
<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>e-KOSPIN</title>
    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">e-KOSPIN</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="login.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        
            <ul class="navbar-nav mr-2">
                <li class="nav-item">Selamat datang, <?php echo $_SESSION['name'];?>! </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="logout.php" class="btn btn-outline-dark my-2 my-sm-0 mr-3">Sign Out</a> 
            </form>            
        </div>
    </div>
</nav>
<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> We bring the best <span>solution</span> for
                    your problem. </h1>
                <p> Simple, Easy, and Trustworthy. </p>
                <a href="#contact">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="images/banner-img.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-feature" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cover">
                    <div class="card">
                        <svg
                                class="back-bg"
                                width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                            <defs>
                                <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                  d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                        </svg>

                        <svg width="100%" viewBox="0 0 700 500">
                            <clipPath id="clip-path">
                                <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                            </clipPath>
                            <!-- xlink:href for modern browsers, src for IE8- -->
                            <image clip-path="url(#clip-path)" xlink:href="images/learn-img.jpg" width="100%"
                                   height="465" class="svg__image"></image>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h2> We are the bridge to <span>all cooperative</span> in Indonesia </h2>
                <p> We connect to official cooperatives that active in Indonesia in order to save people from 
                    fraud and build people trust to all cooperatives. </p>
                <p>
                    <small>Cooperative is an economic organization that is owned and operated by individuals for the common good.
                            Cooperatives based activities based on the principles of the people's economic movement based on family principles.
                    </small>
                </p>
                <a href="about.php">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2> Explore The Services<br/>
                    We Offer For You </h2>
                <p> Our services are limited as a link between you and cooperatives.
                    We verified the cooperatives for you! </p>
                <a href="services.php">All Services <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-lg-8">
                <svg id="bg-services"
                     width="100%"
                     viewBox="0 0 1000 800">
                    <defs>
                        <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                            <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                            <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                        </linearGradient>
                    </defs>
                    <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                          d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                </svg>
                <div class="row">
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/web-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Easy to Use</h3>
                                <p class="card-text">Just open e-Kospin website and all you need to do is click!</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/marketing.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Cooperatives</h3>
                                <p class="card-text">Working with or become a member of one or more cooperatives is profitable </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/seo.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">No Worry</h3>
                                <p class="card-text">All cooperatives inside e-Kospin are verified!</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <div class="oval"><img class="card-img-top" src="images/graphics-design.png" alt=""></div>
                            <div class="card-body">
                                <h3 class="card-title">Join us Now!</h3>
                                <p class="card-text">Sign yourself up! or sign in if you already have an account</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-numbers-block">
    <div class="container">
        <svg width="100%" viewBox="0 0 1600 400">
            <defs>
                <linearGradient id="PSgrad_03" x1="80.279%" x2="0%"  y2="0%">
                    <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                </linearGradient>

            </defs>

            <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                  d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

            <clipPath id="ctm" fill="none">
                <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
            </clipPath>

            <!-- xlink:href for modern browsers, src for IE8- -->
            <image  clip-path="url(#ctm)" xlink:href="images/word-map.png" height="800px" width="100%" class="svg__image">

            </image>

        </svg>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">152k</h5>
                        <p class="card-text">Cooperatives</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">120k</h5>
                        <p class="card-text">Verified</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">100k</h5>
                        <p class="card-text">Completed Transactions</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">90k</h5>
                        <p class="card-text">Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-testimonials">
    <div class="container">
        <h2>What our customers say about us.</h2>
        <div class="owl-carousel owl-carousel1 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer1.jpg" alt="">
                    <div class="card-body">
                        <h5>Lisa Gally <br/>
                            <span> Housewife </span></h5>
                        <p class="card-text">“ e-Kospin is a great link to cooperatives. ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer2.jpg" alt="">
                    <div class="card-body">
                        <h5>Missy Limana<br/>
                            <span> CEO Unicorn </span></h5>
                        <p class="card-text">“ My company was almost bankrupt. Without e-Kospin to save us, we already died. ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer3.jpg" alt="">
                    <div class="card-body">
                        <h5>Aana Brown<br/>
                            <span> School Teacher </span></h5>
                        <p class="card-text">“ Connecting to cooperative become easier and we can teach students about cooperative itself. ” </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/customer4.jpg" alt="">
                    <div class="card-body">
                        <h5>Anatasha<br/>
                            <span> Cafe Owner </span></h5>
                        <p class="card-text">“ My Cafe were able to start due to e-Kospin. I owe e-Kospin a lot. ” </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-features-list">
    <div class="container">
        <div class="row">
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/quality-results.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Quality Results</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/analytics.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Analytics</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/affordable-pricing.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Affordable Pricing</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/easy-to-use.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Easy To Use</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/free-support.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Free Support</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
            <div class="media col-md-6 col-lg-4">
                <div class="oval mr-4"><img class="align-self-start" src="images/effectively-increase.png" alt=""></div>
                <div class="media-body">
                    <h5 class="mb-0">Effectively Increase</h5>
                    Aliquam a nisl pulvinar, hendrerit arcu sed, dapibus velit. Duis ac quam id sapien vestibulum
                    fermentum ac eu eros. Aliquam erat volutpat.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-logo-area">
    <div class="container">
        <div class="row">
            <div class="col"><img src="images/logo1.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="images/logo2.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="images/logo3.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="images/logo4.png" class="img-fluid" alt=""></div>
            <div class="col"><img src="images/logo5.png" class="img-fluid" alt=""></div>
        </div>
    </div>
</div>
<div class="container-fluid gtco-news" id="news">
    <div class="container">
        <h2>Latest News & Articles</h2>
        <div class="owl-carousel owl-carousel2 owl-theme">
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news1.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Aenean ultrices lorem quis blandit
                            tempor urabitur accumsan. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news2.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5> Nam vel nisi eget odio pulvinar
                            iaculis. Fusce aliquet. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div>
                <div class="card text-center"><img class="card-img-top" src="images/news3.jpg" alt="">
                    <div class="card-body text-left pr-0 pl-0">
                        <h5>Morbi faucibus odio sollicitudin
                            risus scelerisque dignissim. </h5>
                        <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                            et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                            . . . </p>
                        <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <h4> Contact Us </h4>
                <a href="contact.php" class="submit-button">Click! <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="login.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact_s.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="owl-carousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
