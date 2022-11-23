<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-------------------- Required meta tags --------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="Images/favicon/favicon.ico">
    <title>Cygnus Medical Billing</title>
    <!---------------------- Bootstrap CSS ------------------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----------------------- Custom CSS -------------------------->
    <link href="Css/style.css" rel="stylesheet" type="text/css">
    <!---------------------- Font Awesome CSS ------------------------->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css" rel="stylesheet">
    <!---------------------- Owl Carousel CSS ------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!--------------------------- Custom JS ----------------------------->
    <script src="Js/navigation-bar.js" type="text/javascript"></script>
    <!----------------------------- Jquery JS ------------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-------------------------- Owl Carousel JS --------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-------------------------- Bootstrap JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php
    include("dbconnection.php");
    if (isset($_POST['subbtn'])){
        $name = $_POST['name'];
        $bname = $_POST['business'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $query = "INSERT INTO demo_requests (name, business_name, email, phone, message) VALUES('$name','$bname','$email','$phone','$message')";
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
    <a href="#header"> <!-- fixed scroll button -->
    <div style="height: 44px;position: fixed;width: 45px;background-color: #28a7ae;border-radius: 6px;right: 8px;bottom: 15px;">
        <i class="fa fa-arrow-up" style="color: white;position: relative;top: 10px;left: 16px;"></i>
    </div>
    </a>
    <div class="container-fluid fixed-top" style="height: 70px;background-image: linear-gradient(#cee4e1, #ffffff);border-bottom:1px solid #efefef;" id="header">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-light container-xxl">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="index.php">
                <img src="Images/Logo/logo.png" height="50" alt="Logo">
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
                        <li class="nav-item ms-3 my-auto active"> <a class="nav-link nav-link-text" href="index.php"> HOME </a> </li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="./pages/about.php"> About Us</a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="./pages/services.php"> Services </a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="./pages/specialities.php"> Specialties </a></li>
                        <li class="nav-item ms-3 my-auto"><a class="nav-link nav-link-text" href="#"> Blogs </a></li>
                        <li class="nav-item ms-3 me-3 my-auto"><a class="nav-link nav-link-text" href="./pages/contact.php"> Contact Us </a></li>
                        <li class="nav-item my-auto" ><a class="nav-link nav-link-main-btn" href="./pages/request-demo.php"> Request Demo </a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
    <div class="container-fluid home-img">  <!-- Home -->
        <div class="container-xl h-100" >
            <div class="home-main-text-cont ms-sm-4 ms-0">
                 <h1 class="fw-bold text-primary" style="margin-left:-3px;">Cygnus Medical Billing</h1>
                <p class="home-text">Medical Billing Services for your Gains</p>
                <div class="pt-5">
                    <a href="tel:+15168443086" class="home-call-btn btn btn-outline-primary rounded-pill border-2 btn-lg float-start">Click to Call</a>
                </div>
            </div>
        </div>
    </div>
    <section style="background-color: #1171a1!important;"> <!-- Home Footer -->
        <div class="container-xxl">
            <div class="row">
                <div class="col-md-1 d-md-flex d-none">
                </div>
                <div class="col-md-2 col-6 text-center mt-1">
                    <img src="Images/icons/wall-clock.svg" height="40" class="mt-4">
                    <p style="font-size: 30px;color:white;margin: 12px;margin-bottom: 0">24/7</p>
                    <p style="font-size: 14px;color:white;font-family: sans;">Customer Services</p>
                </div>
                <div class="col-md-2 col-6 text-center mt-1">
                    <img src="Images/icons/decrease.svg" height="40" class="mt-4">
                    <p style="font-size: 30px;color:white;margin: 12px;margin-bottom: 0">30%</p>
                    <p style="font-size: 14px;color:white;font-family: sans;">Reduction in A/R</p>
                </div>
                <div class="col-md-2 col-6 text-center mt-1">
                    <img src="Images/icons/increasing.svg" height="40" class="mt-4">
                    <p style="font-size: 30px;color:white;margin: 12px;margin-bottom: 0">15-20%</p>
                    <p style="font-size: 14px;color:white;font-family: sans;">Revenue Increase</p>
                </div>
                <div class="col-md-2 col-6 text-center mt-1">
                    <img src="Images/icons/tax.svg" height="40" class="mt-4">
                    <p style="font-size: 30px;color:white;margin: 12px;margin-bottom: 0">90%+</p>
                    <p style="font-size: 14px;color:white;font-family: sans;">Collection Ratios</p>
                </div>
                <div class="col-md-2 col-12 text-center mt-1">
                    <img src="Images/icons/official-documents.svg" height="40" class="mt-4">
                    <p style="font-size: 30px;color:white;margin: 12px;margin-bottom: 0">95%</p>
                    <p style="font-size: 14px;color:white;font-family: sans;">First Pass Clean Claims Rate</p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: rgba(232,237,242,0.59)!important;padding-bottom: 50px;" id="about"> <!-- Why Choose Us Section -->
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6 col-12 ">
                    <div class="px-4">
                        <h3 style="font-family: mont;color:#1171a1;font-weight: bold;">Why Choose us?</h3>
                        <p style="font-weight: bold;font-family: mont;">We’re Healthcare Revenue Cycle Management Experts</p>
                        <p style="font-family: mont;font-size: 14px;text-align: justify;">CYGNUS Medical Billing provides extraordinary Medical billing, Medical coding, and Revenue Cycle Management Services. CMB is providing Customers with exceptional Customer Services, a Customer-Focused Business Model, Advanced Technology, and Software that maximizes returns on your Billing. <br>Our employees understand the headaches and frustrations of dealing with Insurance Companies, claim denials, and ever-changing regulations. This is why we work with you and create a medical billing solution adapted to your practice and your mission.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-5">
                    <div style="height: 90%;width: 100%;">
                        <img src="Images/gydytojas-pacientas-shutterstock-79211181.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url('Images/physician.jpg');background-repeat: no-repeat;background-size: cover;background-position: bottom;" id="scheduel-demo"> <!-- Checkup & Demo Section -->
        <div class="container pb-3 pt-4">
            <div class="row">
                <div class="col-md-6 col-12" style="padding: 1.5rem 1.5rem 0;">
                    <div style="margin-top: 0px;color: white;">
                        <h3>Need a CheckUp?</h3>
                        <p style="font-family: mont; font-size: 18px;text-align: justify;">Time to Diagnose Your Medical Billing Needs</p>
                    </div>
                    <div class="mt-4">
                        <div class="checkup-boxes">
                            <p style="font-size: 20px;margin-bottom: 5px;">1. Decrease Costs</p>
                            <p style="margin: 0;text-align: justify;font-family: mont;font-size: 14px;">By <a class="text-decoration-none" href="#">outsourcing medical billing services</a> to CMB, you will save thousands of dollars. CMB charges just a small percentage of your collections.</p>
                        </div>
                        <div class="checkup-boxes">
                            <p style="font-size: 20px;margin-bottom: 5px;">2. Eliminate Headaches</p>
                            <p style="margin: 0;text-align: justify;font-family: mont;font-size: 14px;">As a <a class="text-decoration-none" href="#">RCM Company</a> CMB will ensure that your claims are accurately submitted in a timely manner. This has the net effect of reducing the number of rejected or denied claims due to the inefficient medical billing cycle.</p>
                        </div>
                        <div class="checkup-boxes">
                            <p style="font-size: 20px;margin-bottom: 5px;">3. Get Paid Faster</p>
                            <p style="margin: 0;text-align: justify;font-family: mont;font-size: 14px;">We provide reliable electronic medical billing services to ensure that claims are being submitted to all possible carriers and are set up to receive ERAs, further reducing turnaround time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-4">
                    <div style="margin-top: 0px;color: white;">
                        <h3 style="font-size: 28px;">Schedule a Demo</h3>
                        <p style="font-family: mont; font-size: 18px;text-align: justify;margin: 0;line-height: 22px;margin-bottom:3px;">One of our agent will get back to you within 24 hours.</p>
                        <p style="font-family: mont; font-size: 12px;text-align: justify;">Need urgent help? Call Us Now +1 516 844 3086</p>
                    </div>
                    <div class="scheduel-demo-form-div">
                        <form class="form" method="post" action="#">
                            <div class="row">
                                <div class="col-6">
                                    <label class=" fw-bold">Name:</label>
                                    <input class="form-control" type="text" name="name" placeholder="Please Enter Name" required>
                                </div>
                                <div class="col-6">
                                    <label class=" fw-bold">Business Name:</label>
                                    <input class="form-control" name="business" placeholder="Please Enter Business Name" required>
                                </div>
                                <div class="col-12">
                                    <label class="mt-3 fw-bold">Phone:</label><br>
                                    <input type="tel" class="form-control" name="phone" placeholder="Please Enter Contact No." required>
                                </div>
                                <div class="col-12">
                                    <label class="mt-3 fw-bold">Email:</label><br>
                                    <input type="email" class="form-control" name="email" placeholder="Please Enter Email" required>
                                </div>
                                <div class="col-12">
                                    <label class="mt-3 fw-bold">Your Message:</label><br>
                                    <textarea type="text" class="form-control" rows="5" placeholder="Enter Message(Optional)" name="message"></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="submit" class="btn btn-primary w-100 mt-1" style="font-size:17px;letter-spacing: 1px;border: none;height: 42px;" value="SUBMIT NOW" name="subbtn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 pb-5" id="services"> <!-- Services Section -->
        <div class="px-1 px-sm-2">
            <h2 style="color: #1171a1; font-size: 26px; font-family: mont;text-align: center;font-weight: bold;margin-top: 10px;">Best Services for your medical billing</h2>
        </div>
        <div class="container px-5 px-sm-3">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/hospital-1.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Hospital Billing Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">We take a comprehensive, all-inclusive approach.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/doctor.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Physician Billing Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">Your dedication to your patients is of the utmost importance.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/microscope.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Laboratory Billing Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">Leverage experience and know-how to help chart a successful future.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div><div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/hospital-billing.webp" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Imaging Center Billing</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">We will handle complicated coding for your imaging center.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/coverage-discovery.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Coverage Discovery</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">We take a comprehensive, all-inclusive approach.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/bank.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">AR Recovery Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">To meet the unique needs of your organization.</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/ambulance.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Ambulatory Surgery Billing</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">Relief from billing confusion and increases revenue</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-cards">
                        <a href="#" class="text-decoration-none" style="color: black;">
                            <div style="">
                                <img src="Images/icons/bank.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">Customer Support Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">Proven ability to provide excellent customer service</p>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none" style="font-size: 14px;font-family: mont;">Contact Us</a>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-3 px-3">
                    <div class="services-card-view-all">
                        <a href="#" class="text-decoration-none" style="color: white;">
                            <div style="">
                                <img src="Images/icons/next.svg" height="30">
                            </div>
                            <div style="margin-top: 30px;">
                                <p style="font-family: mont;font-size: 18px;line-height: 20px;">View All Services</p>
                                <p style="font-size: 14px; font-family: mont;margin-top: 10px;">Relief from billing confusion and increases revenue</p>
                            </div>
                        </a>
                        <a href="" class="btn text-decoration-none btn-light rounded-pill" style="font-size: 14px;font-family: mont;color: #1171a1;">View All Services</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section style="background-color: rgba(232,237,242,0.59)!important;padding-bottom: 20px;"> <!-- HIPAA Complaint Section -->
        <div class="container">
            <div class="row" style="padding-top: 40px;">
                <div class="col-lg-6 col-12" style="padding: 0 35px;">
                    <div class="mt-sm-4 mt-1" style="height: 90%;width: 100%;">
                        <img src="Images/happy-patient.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="px-4 pt-3">
                        <h3 style="font-family: mont;color:#1171a1;font-weight: bold;">We’re HIPAA Compliant:</h3>
                        <p style="font-weight: bold;font-family: mont;margin-bottom: 6px;">Happy Patients, Healthy Practice</p>
                        <p style="font-family: mont;font-size: 14px;text-align: justify;">The Health Insurance Portability and Accountability Act (HIPAA) sets the standard for sensitive patient data protection. Compliance with HIPPA is mandatory. We are having HIPAA-trained staff with regular HIPPA training to make us up-to-date. Our Priority is to safeguard the privacy of patient data.</p>
                        <p style="font-family: mont;font-size: 14px;text-align: justify;">Our business is focused on medical data, therefore we have a tendency to contract with one amongst the nation’s high IT security corporations to confirm the most recent secret writing and knowledge protection protocols square measure in place.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 pb-5" id="specialties"> <!-- Specialties Section -->
        <div class="px-1 px-sm-2">
            <h2 style="color: #1171a1; font-size: 26px; font-family: mont;text-align: center;font-weight: bold;margin-top: 10px;">Our Specialties</h2>
        </div>
        <div class="container-xxl px-4 px-md-3">
            <div class="row text-center">
                <div class="col-1 d-none d-lg-block"></div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/index.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Primary Care</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/dem-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">DME</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/ob-GYN-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">OB/GYN</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/oncology-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Oncology</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/psychology-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Psychiatric</h4>
                        </a>
                    </div>
                </div>
                <div class="col-1 d-none d-lg-block"></div>
                <div class="col-1 d-none d-lg-block"></div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/radiology-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Radiology</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/dermatology.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Dermatology</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/cardiology-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Cardiology</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/urology-1.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Urology</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/psychology.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">Psychology</h4>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-lg-2 px-3">
                    <div class="specialties-cards mt-4 mt-md-5">
                        <a href="#" class="text-decoration-none text-dark">
                            <img src="Images/icons/view-more.png" height="81">
                            <h4 style="font-size: 18px; font-family: mont;margin: 30px 0 8px;">View All</h4>
                        </a>
                    </div>
                </div> -->
                <div class="col-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <section style="background-color: #f3f5fa!important;padding: 30px 0px 10px;"> <!-- Brands Section -->
        <div class="container">
            <div class="brand-carousel owl-carousel">
                <div class="single-logo">
                    <img src="Images/Brands/bbb-no-shadow.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
                <div class="single-logo">
                    <img src="Images/Brands/iso-no-shadow.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
                <div class="single-logo">
                    <img src="Images/Brands/dmca-no-shadow.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
                <div class="single-logo">
                    <img src="Images/Brands/google-reviews-no-shadow.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
                <div class="single-logo">
                    <img src="Images/Brands/NILA_medcaremso.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
                <div class="single-logo">
                    <img src="Images/Brands/hippa-no-shadow.png" class="mx-auto" style="width: 144px!important;" height="143" alt="">
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #01517a!important;"> <!-- Quick Link & Keep Connected Section -->
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
    <footer style="background-color: #003e5e!important;"> <!-- Footer Section -->
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

    <script>
        $('.brand-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    </script>
</body>
</html>