<!--https://www.google.com/maps/d/edit?mid=1JuAqwTszRjsxIDilGztVVzQTlVruOWA&usp=sharing-->
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-------------------- Required meta tags --------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Images/favicon/favicon.ico">
    <title>Cygnus Medical Billing</title>
    <!---------------------- Bootstrap CSS ------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----------------------- Custom CSS -------------------------->
    <link href="../Css/style.css" rel="stylesheet" type="text/css">
    <!---------------------- Font Awesome CSS ------------------------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css" rel="stylesheet">
    <!---------------------- Owl Carousel CSS ------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!--------------------------- Custom JS ----------------------------->
    <script src="../Js/navigation-bar.js" type="text/javascript"></script>
    <!----------------------------- Jquery JS ------------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-------------------------- Owl Carousel JS --------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-------------------------- Bootstrap JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php
    include("../dbconnection.php");
    if (isset($_POST['subbtn'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $query = "INSERT INTO contact_requests (name, phone, email, subject, message) VALUES('$name','$phone','$email','$subject','$message')";
        $result = mysqli_query($conn, $query);
        if ($result){
            echo("<script>alert('Successfully Submitted');</script>");
        }else{
            echo("<script>alert('Something went wrong');</script>");
        }
    }
    if (isset($_POST['sub_subbtn'])){
        $subscriber_name = $_POST['subscriber_name'];
        $subscriber_email = $_POST['subscriber_email'];
        $query = "INSERT INTO subscription (name, email) VALUES('$subscriber_name','$subscriber_email')";
        $result = mysqli_query($conn, $query);
        if ($result){
            echo("<script>alert('Successfully Subscribed');</script>");
        }else{
            echo("<script>alert('Something went wrong');</script>");
        }
    }
    ?>
</head>
<body>
<span class="screen-darken"></span> <!-- responsive side navigation -->
<!-- fixed scroll button -->
<a href="#header">
    <div style="height: 44px;position: fixed;width: 45px;background-color: #28a7ae;border-radius: 6px;right: 8px;bottom: 15px;">
        <i class="fa fa-arrow-up" style="color: white;position: relative;top: 10px;left: 16px;"></i>
    </div>
</a>
<!-- Navbar -->
<div class="container-fluid fixed-top" style="height: 70px;background-image: linear-gradient(#cee4e1, #ffffff);border-bottom:1px solid #efefef;" id="header">
    <div class="navbar navbar-expand-lg navbar-light container-xxl">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="index.php">
                <img src="../Images/Logo/logo.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-trigger="navbar_main" style="padding: 0.3rem 0.45rem !important; font-size: 1rem !important;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="navbar_main" style="background-image: linear-gradient(#d4e8e5, #ffffff);" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark" style="padding-top: 7px !important;">
                <div class="container-fluid">
                    <div class="offcanvas-header pb-5">
                        <button class="btn-close float-end"></button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item ms-3 my-auto active"> <a class="nav-link nav-link-text" href="../index.php"> HOME </a> </li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="about.php"> About Us</a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="services.php"> Services </a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="specialities.php"> Specialties </a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="#"> Blogs </a></li>
                        <li class="nav-item ms-3 me-3 my-auto"><a class="nav-link nav-link-text" href="contact.php"> Contact Us </a></li>
                        <li class="nav-item my-auto" ><a class="nav-link nav-link-main-btn" href="request-demo.php"> Request Demo </a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Contact Form and Map -->
<section >
    <div class="container pb-3 pt-3 mt-5">
        <div class="row">
            <div class="col-md-6 col-12 p-4">
                    <h3 class="text-primary">Tell Us Where to Reach You</h3>
                    <form class="form" method="post" action="#">
                        <div class="row">
                            <div class="col-6">
                                <label class=" fw-bold">Name:</label>
                                <input class="form-control" type="text" name="name" placeholder="Please enter your name" required>
                            </div>
                            <div class="col-6">
                                <label class=" fw-bold">Email:</label>
                                <input class="form-control" name="email" placeholder="Please enter your email" required>
                            </div>
                            <div class="col-12">
                                <label class="mt-3 fw-bold">Phone:</label><br>
                                <input class="form-control" name="phone" placeholder="Please enter your contact number" required>
                            </div>
                            <div class="col-12">
                                <label class="mt-3 fw-bold">Subject:</label><br>
                                <input class="form-control" name="subject" placeholder="Please enter Subject" required>
                            </div>
                            <div class="col-12">
                                <label class="mt-3 fw-bold">Your Message:</label><br>
                                <textarea class="form-control" rows="5" placeholder="Enter Message(Optional)" name="message"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <input type="submit" class="btn btn-primary w-100 mt-1" style="font-size:17px;letter-spacing: 1px;border: none;height: 42px;" value="SUBMIT NOW" name="subbtn">
                            </div>
                        </div>
                    </form>
            </div>
            <div class="col-md-6 col-12 p-4" >
                <h3 class="text-primary">ADDRESS</h3>
                <h4 class="text-dark">New York Office</h4>
                <p class="text-muted" >1129 Northern Blvd, Suite 404, Manhasset, NY, 11030</p>
                <h4 class="text-dark">Find Us on Map</h4>
                <div>
                    <iframe src="https://www.google.com/maps/d/embed?mid=1JuAqwTszRjsxIDilGztVVzQTlVruOWA&ehbc=2E312F" width="100%" height="340" ></iframe>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-12 col-sm-6 col-md-3 px-3">
                <div class="contact-cards text-center">
                    <img src="../Images/icons/hospital-1.svg" height="50">
                    <p class="pt-4">Phone</p>
                    <p>+1 516 8443086</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 px-3">
                <div class="contact-cards text-center">
                    <img src="../Images/icons/doctor.svg" height="50">
                    <p class="pt-4">Fax</p>
                    <p>+1 917 994 6089</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 px-3">
                <div class="contact-cards text-center">
                    <img src="../Images/icons/microscope.svg" height="50">
                    <p class="pt-4">For Info</p>
                    <p>info@cygnusbilling.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 px-3">
                <div class="contact-cards text-center">
                    <img src="../Images/icons/hospital-billing.webp" height="50">
                    <p class="pt-4">Address</p>
                    <p>New York, USA</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Quick Link & Keep Connected Section -->
<section style="background-color: #01517a!important;">
    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <h3 style="font-family: mont;font-size: 18px;font-family: mont; font-weight: bold;color: white;" class="mb-3 mt-3">Our Services</h3>
                <ul style="list-style: none;padding: 0;">
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Monthly Collection Reports</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">EDI, ERA & EFT enrolment</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Patient’s Demographic Entry</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Setting Up EHR and PM</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <h3 style="font-family: mont;font-size: 18px;font-family: mont; font-weight: bold;color: white;" class="mb-3 mt-3">Our Location</h3>
                <ul style="list-style: none;padding: 0;">
                    <li class="pt-1 pb-1"><i class="fa text-light fa-fax"></i> <a href="tel:+19179946089" class="footer-links">+1 917 994 6089</a></li>
                    <li class="pt-1 pb-1"><i class="fa text-light fa-phone"></i> <a href="tel:+15168443086" class="footer-links">+1 516 844 3086</a></li>
                    <li class="pt-1 pb-1"><i class="fa text-light fa-envelope"></i> <a href="mailto:info@cygnusbilling.com" class="footer-links">info@cygnusbilling.com</a></li>
                    <li class="pt-1 pb-1" style="line-height:12px;"><i class="fa text-light fa-address-book"></i> <a href="#" class="footer-links" style="font-size:12px;">1129 NORTHERN BLVD, SUITE 404,
                            MANHASSET, NY, 11030</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <h3 style="font-family: mont;font-size: 18px;font-family: mont; font-weight: bold;color: white;" class="mb-3 mt-3">Quick Links</h3>
                <ul style="list-style: none;padding: 0;">
                    <li class="pt-1 pb-1"><a href="#about" class="footer-links">About Us</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Contact Us</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Testimonials</a></li>
                    <li class="pt-1 pb-1"><a href="#" class="footer-links">Specialities</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <h3 style="font-family: mont;font-size: 18px;font-family: mont; font-weight: bold;color: white;" class="mb-3 footer-connected-text-center mt-3">Keep Connected</h3>
                <div class="text-center">
                    <form action="#" method="post">
                        <input style="margin-top: 15px;border: 2px solid white;border-radius: 25px;height: 40px;background-color: transparent;width: 100%;padding: 2px 8px;color: #d6d6d6;" placeholder="Name" name="subscriber_name">
                        <input style="margin-top: 15px;border: 2px solid white;border-radius: 25px;height: 40px;background-color: transparent;width: 100%;padding: 2px 8px;color: #d6d6d6;" placeholder="Your Email" name="subscriber_email">
                        <input type="submit" class="footer-subscribe-btn" value="Subscribe" name="sub_subbtn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer style="background-color: #003e5e!important;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 pt-4 text-center">
                <p style="font-family: mont;font-size: 14px;color: white;font-weight: 500;">© CMD - CYGNUS Multi Services, INC NY</p>
            </div>
            <div class="col-12 col-md-4 pt-0 pt-md-4 text-center">
                <!--<p style="font-family: mont;font-size: 14px;color: #D5D5D5;font-weight: 500;"><a href="#" class="text-decoration-none text-light">Return Policy</a> | <a href="#" class="text-decoration-none text-light">Sitemap</a> | <a href="#" class="text-decoration-none text-light">Privacy Policy</a></p>--->
            </div>
            <div class="col-12 col-md-4 pt-0 pt-md-3 d-none d-md-block">
                <ul style="list-style: none;display: inline-flex;" class="mx-auto">
                    <li style="margin-right: 10px;">
                        <a href="https://www.facebook.com/Cygnus-Medical-Billing-105094499030236/" target="_blank">
                            <div style="height: 33px;width: 33px;border: 1px solid rgba(255,255,255,0.31);border-radius: 29px;">
                                <i class="fab fa-facebook-f" style="position: relative; top: 7%;left:38%;color:rgba(255,255,255,0.31);font-size: 12px;"></i>
                            </div>
                        </a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="https://www.instagram.com/cygnusbilling/" target="_blank">
                            <div style="height: 33px;width: 33px;border: 1px solid rgba(255,255,255,0.31);border-radius: 29px;">
                                <i class="fab fa-instagram" style="position: relative; top: 7%;left:35%;color:rgba(255,255,255,0.31);font-size: 12px;"></i>
                            </div>
                        </a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="https://twitter.com/CygnusBilling/" target="_blank">
                            <div style="height: 33px;width: 33px;border: 1px solid rgba(255,255,255,0.31);border-radius: 29px;">
                                <i class="fab fa-twitter" style="position: relative; top: 7%;left:34%;color:rgba(255,255,255,0.31);font-size: 12px;"></i>
                            </div>
                        </a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="https://www.linkedin.com/company/cygnus-medical-billing/" target="_blank">
                            <div style="height: 33px;width: 33px;border: 1px solid rgba(255,255,255,0.31);border-radius: 29px;">
                                <i class="fab fa-linkedin-in" style="position: relative; top: 7%;left:34%;color:rgba(255,255,255,0.31);font-size: 12px;"></i>
                            </div>
                        </a>
                    </li>
                    <li style="margin-right: 10px;">
                        <a href="#">
                            <div style="height: 33px;width: 33px;border: 1px solid rgba(255,255,255,0.31);border-radius: 29px;">
                                <i class="fab fa-youtube" style="position: relative; top: 7%;left:31%;color:rgba(255,255,255,0.31);font-size: 12px;"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>