<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];
?>

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Little Closet</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Little Closet template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    </head>
    <body>

        <!-- Menu -->

        <div class="menu">


            <!-- Navigation -->
            <div class="menu_nav">
                <ul>
                    <li><a href="./">Home page</a></li>
                    <li><a href="courses">Categories</a></li>
                    <li><a href="contacts">Contacts</a></li>
                </ul>
            </div>
        </div>

        <div class="super_container">

            <!-- Header -->

            <header class="header">
                <div class="header_overlay"></div>
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo">
                        <a href="#">
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <div><img src="images/logo.png" style="max-width:150px;width:100%"></div>
                                <div>ESTONIAN AUTOS</div>
                            </div>
                        </a>	
                    </div>
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="./">Home page</a></li>
                            <li><a href="courses">Categories</a></li>
                            <li><a href="contacts">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">

                        <!-- User -->
                        <?php
                        if (isset($_SESSION['UserName'])) {
                            echo ' <li style="margin-left:4vw"><a class="navBuutons" href="logout">Log out</a></li>';
                            echo ' <li style="color:#B18322;"><a class="navBuutons" href="profile">My profile</a></li>';
                            echo '	<b class="navYouLogAs">You are logged in as: ' . $_SESSION["UserName"] . '</b> ';
                            // echo '<img width="50px" height="50px" src="images\'.$_SESSION["PrivilegesId"]." alt="'.$_SESSION["UserName"].'">';
                        } else {
                            ?>
                            <div class="user"><a href="login"><div><img src="images/anonim.png" style="max-width:150px;width:100%"></div></a></div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </header>



        </div>
        </div> <!-- End nav -->
<div class="body">

<div class="content"> <!-- Content -->

<?php
if(isset($content)) echo $content;
?>

</div> <!-- End content -->

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap-4.1.2/popper.js"></script>
        <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
        <script src="plugins/greensock/TweenMax.min.js"></script>
        <script src="plugins/greensock/TimelineMax.min.js"></script>
        <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="plugins/greensock/animation.gsap.min.js"></script>
        <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="plugins/progressbar/progressbar.min.js"></script>
        <script src="plugins/parallax-js-master/parallax.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>