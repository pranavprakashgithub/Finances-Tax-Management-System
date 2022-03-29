<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Municipal Finances & Tax Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="recent-news-boxes.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Navigation -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style="background-color: #017E7E;">
    <div class="trans" style="height: 40px; width:100vw; background-color:#045D5D; color: white; ">
                <img src="logo.jpeg" alt="Tax Portal" style="width: 50px; height: 40px; margin-left: 20px;">
                <b>Ministry Of Housing & Urban Affairs</b>
                <span style=" color:blue; border-radius: 5px; margin-left: 67%;"><select><option>English</option><option>हिंदी</option></select></span>
            </div>
    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: white;"><b>FINANCES & TAX PORTAL </b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"style="margin-left: 46%;">
                    <li>
                        <a href="https://localhost/Finances-Tax-Management-System/users/" style="color: white;">User Login</a>
                    </li>
                    <li >
                        <a href="https://localhost/Finances-Tax-Management-System/users/registration.php" style="color: white;">User Registration</a>
                    </li>
                    <!-- <li>
                        <a href="http://localhost/Complaint Management System/worker/">Worker</a>
                    </li> -->
                    <li > 
                        <a href="https://localhost/Finances-Tax-Management-System/admin/"  style="color: white;">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <style>
        .navbar {
            background-color: #2A3132;
        }
            </style>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active1">
                <div class="fill" style="background-image:url('https://www.bankbazaar.com/images/india/infographic/tax-planning-v1.png');"> </div>
            </div>

            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://www.fraserinstitute.org/sites/default/files/styles/large/public/lifetime-tax-burden-for-canadians-from-federal-debt-accumulation.jpg?itok=M7Cwx86f');">
                    <style>
                        .fill {
                            height: 70vh;
                        }
                    </style>
                </div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://cgs.rutgers.edu/sites/cgs.rutgers.edu/files/images/banners/progbanner_financialmanagement.png');">
                  <style>
                      .fill{
                          width: 100vw;
                          height: 50vh;
                      }
                      </style>
                </div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->


    <div class="row">
        <div class="col-lg-12">
            <div class="com">
                <h1><b>WELCOME TO MUNICIPAL FINANCES & TAX PORTAL</b></h1>
                <p>
                    <h2>Here you can easily generate and pay your tax </h2><br> <b><i>No need to visit office and wait in a queue, Pay your tax & get e-receipt in no time </i></b>                    
                </p>
            </div>

            <section class="recentNews" style="background-color: #EDFFFF;">
                <div class="container">
                    <h2 class="news-title" style="color: #007c7c;;">3 Easy Steps</h2>
                    <div class="row">
                        <div class="ct-blog col-sm-6 col-md-4">
                            <div class="inner">
                                <div class="fauxcrop">
                                    <a href="#"><img alt="News Entry" src="https://www.cowin.gov.in/assets/images/Step_1.svg" style="height: 200px; width:270px;"></a>
                                </div>
                                <div class="ct-blog-content" style="background-color: #007C7C; margin-top: 15px; height:120px;">
                                    <!-- <div class="ct-blog-date">
                                        <span>March</span><strong>1</strong>
                                    </div> -->
                                    <h3 class="ct-blog-header" style="color: aliceblue;">
                                        Get Yourself Register & Update Kyc Details
                                    </h3>
                                </div>
                                <a href="https://localhost/Finances-Tax-Management-System/users/registration.php"><h4 style="color: darkblue;"> Click Here To Register</h4></a>
                            </div>
                        </div>
                        <div class="ct-blog col-sm-6 col-md-4">
                            <div class="inner">
                                <div class="fauxcrop">
                                    <a href="#"><img alt="News Entry" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO1l8u6jTVPvmYl5zkyXa5x5BWvGWAEmVDEw&usqp=CAU"style="height: 205px;"></a>
                                </div>
                                <div class="ct-blog-content" style="background-color: #007C7C;margin-top: 15px; height:120px;">
                                    <!-- <div class="ct-blog-date">
                                        <span>February</span><strong>27</strong>
                                    </div> -->
                                    <h3 class="ct-blog-header"style="color: aliceblue;">
                                     Generate  Pay your Property Tax Contribute to GDP
                                    </h3>
                                </div>
                                <a href="https://localhost/Finances-Tax-Management-System/users/"><h4 style="color: darkblue;"> Login</h4></a>
                            </div>
                        </div>
                        <div class="ct-blog col-sm-6 col-md-4">
                            <div class="inner">
                                <div class="fauxcrop">
                                    <a href="#"><img alt="News Entry" src="https://www.cowin.gov.in/assets/images/Step_3.svg" style="height: 180px;"></a>
                                </div>
                                <div class="ct-blog-content"style="background-color: #007C7C;margin-top: 15px; height:120px;">
                                    <!-- <div class="ct-blog-date">
                                        <span>February</span><strong>25</strong>
                                    </div> -->
                                    <h3 class="ct-blog-header"style="color: aliceblue;">
                                      Get e-receipt or Request For Registration of New Property
                                    </h3>
                                </div>
                                <a href="https://localhost/Finances-Tax-Management-System/users/"><h4 style="color: darkblue;"> Login</h4></a>
                            </div>
                        </div>




                        <style>
                            .com {
                                text-align: center;
                            }
                        </style>
                        <hr>

                        <!-- Footer -->
                        <!-- <footer>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Copyright &copy; <b>Team Hashtag</b></p>
                                </div>
                            </div>
                            <!-- /.row -->
                        </footer> -->
                        <style>
                            .col-lg-12 {
                                text-align: center;
                                background-color: #90AFC5;
                            }
                            /* footer {
                                position: absolute;
                                width: 100%;
                                bottom: -49px;
                                background-color: #2A3132;
                            } */
                        </style>
                        <style>
                            body {
                                background-color: #2A3132;
                            }
                        </style>

                    </div>
                    <!-- /.container -->

                    <!-- jQuery -->
                    <script src="js/jquery.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>

                    <!-- Script to Activate the Carousel -->
                    <script>
                        $('.carousel').carousel({
                            interval: 5000 //changes the speed
                        })
                    </script>

</body>

</html>