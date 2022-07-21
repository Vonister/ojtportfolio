<?php
$page = "company";
include('header.php');

$company_tab = $_GET['company_tab'];
?>
<!-- Start Client Area -->
<div class="rn-client-area rn-section-gap section-separator" id="clients">
    <div class="container">
        <div class="row">
            <div class="company-bg" id="home" style="  background: url(assets/images/client/bg.jpg);    background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center my-3">
                            <div class="section-title" style="margin-top: 100px;">
                                <span class="subtitle">Eastvantage Business Solutions Inc.</span>
                                <h2 class="title">Company Profile</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

        <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
            <div class="col-lg-4">
                <div class="d-flex flex-wrap align-content-start h-100">
                    <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                        <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link <?php
                                                    if ($company_tab == "about") {
                                                        echo ' active';
                                                    } else {
                                                        echo null;
                                                    } ?>" id="v-pills-home-tab" data-toggle="tab" href="#about" role="tab" aria-selected="true">About</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link " id="v-pills-profile-tab" data-toggle="tab" href="#history" role="tab" aria-selected="true">Historical
                                    Background</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-wordpress-tab" data-toggle="tab" href="#missionandvision" role="tab" aria-selected="true">Mision &
                                    Vision</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-settings-tabs" data-toggle="tab" href="#structure" role="tab" aria-selected="true">Organizational
                                    Structure</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#ojtprogram" aria-selected="true">OJT Program of the
                                    Company</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-area">
                    <div class="d-flex align-items-start justify-content-evenly">
                        <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade <?php
                                                        if ($company_tab == "about") {
                                                            echo 'show active';
                                                        } else {
                                                            echo null;
                                                        } ?>" id="about" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="client-card">
                                    <!-- Start Single Brand  -->
                                    <div class="main-content-whole w-100">
                                        <div class="inner text-center">
                                            <div class="container d-flex flex-column">
                                                <div class="header container">
                                                    <div class="company container text-start">
                                                        <h5>EASTVANTAGE BUSINESS SOLUTIONS INC.</h5>
                                                        <p class="text-primary"> <i class="fas fa-map-marker-alt"></i> 24th Floor Fort Legend Tower 3rd Avenue cor. 31st Street, Bonifacio Global City, Taguig, 1634 Metro Manila, Philippines</p>
                                                    </div>
                                                    <div class="logo container">
                                                        <img class="border border-primary border-5 rounded-circle p-2" src="assets/images/eastvantage logo.png" alt="">
                                                    </div>

                                                </div>
                                                <div class="container">
                                                    <p> <span class="text-primary"> About the Company</span> </br>
                                                        Eastvantage provides customized business solutions to global companies, enabling offshore operations from its locations in the Philippines, India and Bulgaria. The management team brings a wealth of global insights and local knowledge in the areas of digital transformation, customer experience, and business support. Combining expertise with a hands-on approach to managing client relationships, we help bring about strategic growth for businesses in a wide range of industries worldwide.

                                                        With over a decade of operations, we have 1000+ happy employees managed by leaders who have a solid understanding of industry best practices. We pride ourselves in having crafted a good record in providing integrated, cost-effective, and fully-functional outsourcing solutions. More than that, we have built a company culture that we are truly proud of. We place a premium on creating a happy workplace driven by meaningful jobs.

                                                        Our core values of customer intimacy, transparency, passion, excellence, and commitment extend to our colleagues as well as to our clients, making offshoring simple and seamless. Proving true to providing inspiration to help global businesses grow, Eastvantage is relentless in adopting innovative strategies to adapt to the ever-changing market demands.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- End Single Brand  -->
                                </div>
                            </div>



                            <div class="tab-pane fade " id="history" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="client-card">
                                    <!-- Start Single Brand  -->
                                    <div class="main-content-whole w-100">
                                        <div class="inner text-center">
                                            <div class="container">
                                                <p> <span class="text-primary"> Historical Background</span> </br> </br>
                                                    Eastvantage was established on October 2010 and the founder of Eastvantage
                                                    is Joeri Timp. Timp held the team at the global service center of UK-based
                                                    NGA (SAP HR outsourcing) and the delivery center of the global law firm Baker &
                                                    McKenzie (legal process outsourcing) and has over 20 years of management experience.
                                                    Eastvantage is a privately-held business solutions company with Euro-Filipino roots. 
                                                    Eastvantage was conceived casually at a Philippine beach by entrepreneur friends, 
                                                    and was born naturally in order to provide small and medium enterprises access to 
                                                    affordable world-class outsourcing services, while providing meaningful jobs.
                                                    
                                                    In 2021, the company restructured its shareholdings with the entry of a 
                                                    seasoned investor who brought in a deep understanding of scaling service o
                                                    perations.
                                                </p>

                                                <p class="text-start"><br>
                                                    <span class="text-primary"> Industry recognized outsourcing:</span> <br>
                                                    2019: International ICT Awards as Best
                                                    Company of the Year Providing Services for
                                                    Information Technology & Software
                                                    Development <br>
                                                    2020: Bronze Stevie® Award for Excellence in
                                                    Innovation in Technology Industries <br>
                                                    2021: Silver Stevie® Award for Most
                                                    Exemplary Employer for COVID-19 Response
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- End Single Brand  -->

                                </div>
                            </div>

                            <div class="tab-pane fade" id="missionandvision" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="client-card">
                                    <!-- Start Single Brand  -->
                                    <div class="main-content-whole w-100">
                                        <div class="inner text-center">
                                            <div class="container">
                                                <p> <span class="text-primary"> Mission</span> </br> </br>
                                                   <img src="assets/images/client/mission.jpg" alt="">
                                                   Providing meaningful jobs for Filipinos.

                                                    </br> </br></br>
                                                    <span class="text-primary"> Vision</span> </br> </br>
                                                    We envision a global business
                                                    community that knows no boundaries,
                                                    where distance is bridged through
                                                    communication and technology.
                                                    We foresee a future where
                                                    entrepreneurs can work with each other
                                                    from across the globe and share the
                                                    wealth of resources available within and
                                                    beyond their spheres of operation.
                                                    It is our company vision to be a strategic
                                                    partner for entrepreneurs around the
                                                    world by providing added-value services
                                                    and providing meaningful jobs for
                                                    Filipinos.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Single Brand  -->
                                </div>
                            </div>

                            <div class="tab-pane fade " id="structure" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                <div class="section-title mb-5">
                                    <h2 class="title">Meet the Team</h2>
                                    <span class="subtitle">Dedicated minds that make inspired outsourcing a reality.</span>
                                </div>
                                <div class="client-card">
                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic1.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic2.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>

                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic3.jpg" alt="Client-image"></a>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic4.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic5.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>

                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic6.jpg" alt="Client-image"></a>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic7.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic8.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>

                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic9.jpg" alt="Client-image"></a>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic10.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic11.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>

                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic12.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic13.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>

                                    <div class="container d-flex justify-content-evenly">
                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic14.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->

                                        <!-- Start Single Brand  -->
                                        <div class="main-content">
                                            <div class="inner text-center">
                                                <div class="thumbnail">
                                                    <a href="#"><img src="assets/images/client/structure/pic15.jpg" alt="Client-image"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Brand  -->
                                    </div>


                                </div>
                            </div>



                            <div class="tab-pane fade <?php if ($company_tab == "supervisor") {
                                                            echo 'show active';
                                                        } else {
                                                            echo null;
                                                        } ?>" id="supervisor" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                <div class="client-card">


                                </div>
                            </div>

                            <!-- Start Modal-->
                            <div class="modal fade" id="ojtprogram" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">OJT Program of the Company</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <embed style="height: 100vh" class="w-100" src="assets/pdf/OJT Program of the company.pdf#toolbar=0" type="application/pdf">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End client section -->

<?php
include('footer.php');
?>