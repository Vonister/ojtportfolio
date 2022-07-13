<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OJT Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/VR.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS 
    ============================================ -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/VR.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link p-2 
                            <?php if ($page == "home") {
                                echo 'active border-bottom border-primary border-3 px-3';
                            } else {
                                echo null;
                            } ?> " href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link p-2  <?php if ($page == "company") {
                                                                                echo 'active border-bottom border-primary border-3 px-3';
                                                                            } else {
                                                                                echo null;
                                                                            } ?>" href="company.php?company_tab=about">Company Profile</a></li>
                            <li class="nav-item"><a class="nav-link p-2  <?php if ($page == "supervisor") {
                                                                                echo 'active border-bottom border-primary border-3 px-3 smoth-animation';
                                                                            } else {
                                                                                echo null;
                                                                            } ?>" href="supervisor_profile.php">Supervisor Profile</a></li>
                            <li class="nav-item"><a class="nav-link p-2  <?php if ($page == "my_profile") {
                                                                                echo 'active border-bottom border-primary border-3 px-3 smoth-animation';
                                                                            } else {
                                                                                echo null;
                                                                            } ?>" href="my_profile.php">Intern Profile</a></li>
                            <li class="nav-item"><a class="nav-link p-2  <?php if ($page == "assessment") {
                                                                                echo 'active border-bottom border-primary border-3 px-3';
                                                                            } else {
                                                                                echo null;
                                                                            } ?>" href="assessment.php">Self-Assessment</a></li>
                            <li class="nav-item"><a class="nav-link p-2  <?php if ($page == "weekly_report") {
                                                                                echo 'active border-bottom border-primary border-3 px-3';
                                                                            } else {
                                                                                echo null;
                                                                            } ?>" href="weekly_report.php">Weekly Accomplishment Reports</a></li>


                            <li class="nav-item"><a class="nav-link p-2 <?php if ($page == "appendices") {
                                                                            echo 'active border-bottom border-primary border-3 px-3';
                                                                        } else {
                                                                            echo null;
                                                                        } ?>" href="appendices.php">Appendices</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <!-- <a class="rn-btn" target="_blank" href="https://www.youtube.com/c/AnimationCoding"><span>Resume</span></a> -->
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.php">
                        <img src="assets/images/VR.png" alt="">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Thank you for visiting my Portfolio.</p>
            </div>
            <div class="content">
                <ul class="side-menu nav nav-pills d-flex flex-column">
                    <li class="nav-item <?php if ($page == "home") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "home") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="index.php">Home</a></li>


                    <li class="nav-item <?php if ($page == "company") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "company") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="company.php?company_tab=about">Company Profile</a></li>

                    <li class="nav-item <?php if ($page == "supervisor") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "supervisor") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="supervisor_profile.php">Supervisor Profile</a></li>


                    <li class="nav-item <?php if ($page == "my_profile") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "my_profile") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="my_profile.php">Intern Profile</a></li>


                    <li class="nav-item <?php if ($page == "assessment") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "assessment") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="assessment.php">Self-Assessment</a></li>


                    <li class="nav-item <?php if ($page == "weekly_report") {
                                            echo ' border-bottom border-primary';
                                        } else {
                                            echo null;
                                        } ?>"><a class="nav-link <?php if ($page == "weekly_report") {
                                                                        echo ' text-primary';
                                                                    } else {
                                                                        echo "text-light";
                                                                    } ?>" href="weekly_report.php">Weekly Accomplishment Reports</a></li>


                    <li class="nav-item  <?php if ($page == "appendices") {
                                                echo ' border-bottom border-primary';
                                            } else {
                                                echo null;
                                            } ?>"><a class="nav-link <?php if ($page == "appendices") {
                                                                            echo ' text-primary';
                                                                        } else {
                                                                            echo "text-light";
                                                                        } ?>" href="appendices.php">Appendices</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="https://www.facebook.com/vonryan0910/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="https://www.instagram.com/vonsumague/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="https://www.linkedin.com/in/von-ryan-sumague-0430a0232/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->


    <main class="main-page-wrapper">