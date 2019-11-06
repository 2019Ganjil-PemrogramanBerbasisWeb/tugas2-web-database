<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style_sign.css">
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
        </div>
        </nav>
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
                        <h2> CONTACT CONTACT CONTACT CONTACT <span>CONTACT</span> CONTACT </h2>
                        <p> We connect to official cooperatives that active in Indonesia in order to save people from 
                            fraud and build people trust to all cooperatives. </p>
                        <p>
                            <small>Cooperative is an economic organization that is owned and operated by individuals for the common good.
                                    Cooperatives based activities based on the principles of the people's economic movement based on family principles
                            </small>
                        </p>
                        <p>
                            <h3>
                                Why do we exist?
                            </h3>
                        </p>
                        <p>
                            In our beloved country, there is a problem in fraud. Oftenly, we got an unknown text message,
                            offering for loan with the name of cooperatives. The Cooperatives name that used is real and exist,
                            but the ID is different. Sadly, most people fell in to this kind of fraud and become hate or untrust cooperatives.
                            Although cooperatives didn't do anything wrong, people still see it that way.
                        </p>
                        <p>
                            That's why, we E-KOSPIN, make sure you meet only real, absolute, and trusted cooperative only, without
                            the fear of getting fraud by unknown person.
                        </p>

                    <div class="message-form">
                     <h3 class="form-title">Message</h3>
                        <form method="POST" class="message-form" id="message-form" action="insertcontact.php">
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="f_name" id="f_name" placeholder="First Name" required/>
                            </div>
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="l_name" id="l_name" placeholder="Last Name" required/>
                            </div>
                            <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                            <label for="message"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="message" id="message" placeholder="Enter your message" required/>
                            </div>
                            <div class="form-group form-button">
                            <input type="submit" name="insertmessage" id="insertmessage" class="form-submit" value="Submit Message" />
                            </div> 
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    
    </html>