<?php
include('smtp/PHPMailerAutoload.php');
// $massage=
$name = $_POST['username'];
$massage = $_POST['message'];
$email = $_POST['email'];
$subject = $email.' send you enquiry';

smtp_mailer($email,$subject,$massage,$name,$email);
function smtp_mailer($to,$subject, $msg,$name,$email){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "safalyacorporation@gmail.com";
	$mail->Password = "wvwbzeknqyqpidam";
	$mail->SetFrom("safalyacorporation@gmail.com");
	$mail->Subject = $subject;
	$mail->Body ='Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Message : '.$msg;
	$mail->AddAddress("safalyacorporation@gmail.com");
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
// 		echo $mail->ErrorInfo;
		echo '<script>alert("Message Send")</script>';
  
	}else{
		echo '<script>alert("Message Send")</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="images/faviconn.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/faviconn.png" />
    <title>Safalya | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

 <style>
        @media (min-width:320px) {
            .main-footer {
                margin-top: 30px;
            }

            .footer-bottom {
                width: 100%;
                padding: 20px;
                text-align: center;
            }

            .logo {
                padding: 20px;
            }
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide">

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t10">
                    <div class="container">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                    <img src="images/logo-black.png" width="171" height="49" alt="" />
                                </a>
                            </div>
                        </div>
                        <button data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                </li>
                                <li>
                                <li>
                                    <a href="about.html">About us</a>
                                </li>
                                </li>
                                <li>
                                    <a href="javascript:;">Projects</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:;">Ongoing Projects</a>
                                            <ul class="sub-menu">
                                                <li><a href="panorama.html">Safalya Panorama</a></li>
                                                <li><a href="rise.html">Safalya Rise</a></li>
                                                <li><a href="bouganvilla.html">Bouganvilla</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Completed Projects</a>
                                            <ul class="sub-menu">
                                                <li><a href="arcade.html">Safalya Arcade</a></li>
                                                <li><a href="bliss.html">Safalya Bliss</a></li>
                                                <li><a href="riverscape.html">Kunj Riverscape</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <li>
                                    <a href="contact.html">Contact us</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
                style="background-image:url(images/gallery/1.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">SAFALYA GROUP : CONTACT US</h2>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80">
                <!-- LOCATION BLOCK-->
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-left text-black">
                        <h2 class="text-uppercase font-36">Where to Find us </h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="wt-box">
                            <form class="contact-form cons-contact-form" method="post"
                                action="contact.php">
                                <div class="contact-one p-a40 p-r150">
                                    <div class="form-group">
                                        <input name="username" type="text" required class="form-control"
                                            placeholder="Name">
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" required
                                            placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" rows="3" class="form-control " required
                                            placeholder="Message"></textarea>
                                    </div>

                                    <button name="submit" type="submit" value="Submit"
                                        class="site-button black radius-no text-uppercase">
                                        <span class="font-12 letter-spacing-5">Submit</span>
                                    </button>

                                    <div class="contact-info bg-black text-white p-a30">
                                        <div class="wt-icon-box-wraper left p-b30">
                                            <div class="icon-sm"><i class="iconmoon-smartphone-1"></i></div>
                                            <div class="icon-content text-white ">
                                                <h5 class="m-t0 text-uppercase">Phone number</h5>
                                                <p>(+91) 90814 44881</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left p-b30">
                                            <div class="icon-sm"><i class="iconmoon-email"></i></div>
                                            <div class="icon-content text-white">
                                                <h5 class="m-t0  text-uppercase">Email address</h5>
                                                <p>enquiry@safalyagroup.in</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-sm"><i class="iconmoon-travel"></i></div>
                                            <div class="icon-content text-white">
                                                <h5 class="m-t0  text-uppercase">Address info</h5>
                                                <p>Jetalpur Road, Vadodara</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-full">
                <div class="gmap-outline">
                    <!-- <div id="gmap_canvas4" class="google-map"></div> -->
                    <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1I9y4yYip5j5rmSbrX69BhGfpQm0WVEo&ehbc=2E312F" width="640" height="480"></iframe> -->
                    <iframe class="img-fluid" src="https://www.google.com/maps/d/u/0/embed?mid=1I9y4yYip5j5rmSbrX69BhGfpQm0WVEo&ehbc=2E312F" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
          
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="widgets-section" style="display: flex;justify-content: center;">
                    <div class="row clearfix" style="width: 80%;">
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix justify-content-center">
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/logo-black.png" style="width: 200px;"
                                                    alt="" /></a>
                                        </div>
                                        <div class="text" style="width: 90%;text-align: justify;">CREATING LUXURIOUS
                                            HOMES THAT ARE NOT ONLY BEAUTIFUL BUT ALSO SUSTAINABLE AND WELL ARCHITECTED.
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <div class="footer-title">
                                            <h2 style="color: #000;">Quick Links</h2>
                                        </div>
                                        <ul class="footer-lists" style="list-style: none;">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <div class="footer-title">
                                            <h2 style="color: #000;">Projects</h2>
                                        </div>
                                        <ul class="footer-lists" style="list-style: none;">
                                        <li><a href="panorama.html">Safalya Panorama</a></li>
                                        <li><a href="rise.html">Safalya Rise</a></li>
                                        <li><a href="bliss.html">Safalya Bliss</a></li>
                                        <li><a href="bouganvilla.html">Bouganvilla </a></li>
                                        <li><a href="riverscape.html">Kunj Riverscape</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="footer-column col-lg-3 col-md-4 col-sm-12">
                                    <div class="footer-widget subscribe-widget">
                                        <div class="footer-title">
                                            <h2 style="color: #000;">Address</h2>
                                        </div>
                                        <div class="widget-content">
                                            <!-- <div class="text">
                                                </div> -->
                                            <ul class="social-icon-two" style="list-style: none;">
                                                <div style="display: flex;align-items: center;">
                                                    <li style="font-size: 20px;"><a href="tel:"><span
                                                                class="fa fa-map-marker"></span></a></li>
                                                    <span class="widget-content"
                                                        style="font-size: 14px;margin-left: 10px;color: #767676;">C-1,
                                                        Nitiraj Apartment, 68 Suvarnapuri Society, Chikuwadi, Jetalpur
                                                        Road, Vadodara</span>
                                                </div>
                                                <div style="display: flex;align-items: center;">
                                                <li style="font-size: 20px;"><a href="tel:"><span
                                                            class="fa fa-phone"></span></a></li>
                                                <span class="widget-content"
                                                    style="font-size: 14px;margin-left: 10px;color: #767676;"><a href="tel:9081444881">9081444881</a></span>
                                            </div>
                                            <div style="display: flex;align-items: center;">
                                                <li style="font-size: 20px;"><a href="tel:"><span
                                                            class="fa fa-envelope"></span></a></li>
                                                <span class="widget-content"
                                                    style="font-size: 14px;margin-left: 10px;color: #767676;"><a href="mailto:safalyacorporation@gmail.com">safalyacorporation@gmail.com</a></span>
                                            </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright" style="font-size: 16px;">&copy; Copyright
                        <script>document.write(new Date().getFullYear())</script>. All Rights Reserved. Developed by
                        <a href="https://devkrutitech.com" style="list-style: none;color: black;">
                            <b>Devkrutitech</b></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


    <div class="loading-area">
        <div class="containerr">
            <div class="tt">
                 <img src="./images/logo-black.png" alt="" height="400" width="200" style="margin-bottom: 25px;">
                <div class="animation">
                    <div class="animation-left"><span>SAFALYA GROUP</span></div>
                    <div class="animation-right"><span>SAFALYA GROUP</span></div>
                </div>
            </div>
        </div>
    </div>
     <a href="https://api.whatsapp.com/send?phone=9081444881" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <script src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
    <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
    <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
    <script src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
    <script src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqwdZHU6gzIhPBEB2VNbIydp4coZmNPy0&amp;callback=initMap"></script>
    <script src="js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->
    <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
</body>

</html>