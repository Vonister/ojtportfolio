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
                                                <div class="container d-flex mb-5">
                                                    <div class="container text-start" style="width: 70%">
                                                        <h5>EASTVANTAGE BUSINESS SOLUTIONS INC.</h5>
                                                        <small class="text-primary"> <i class="fas fa-map-marker-alt"></i> 24th Floor Fort Legend Tower 3rd Avenue cor. 31st Street, Bonifacio Global City, Taguig, 1634 Metro Manila, Philippines</small>
                                                    </div>
                                                    <div class="container" style="width: 30%">
                                                        <img class="border border-primary border-5 rounded-circle p-2" src="assets/images/eastvantage logo.png" alt="">
                                                    </div>

                                                </div>
                                                <div class="container">
                                                    <p> <span class="text-primary"> About the Company</span> </br>
                                                        Eastvantage is a global business solutions company enabling
                                                        offshore operations from the locations in the Philippines, India
                                                        and Bulgaria. With over a decade of operations, they offer a
                                                        wealth of international insights and local knowledge in the
                                                        areas of digital transformation, customer experience, and
                                                        business support.

                                                        Combining expertise with a hands-on approach to managing client
                                                        relationships, they help bring about strategic growth for
                                                        businesses in a wide range of industries worldwide.

                                                        Eastvantage makes offshoring simple and seamless.</p>
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
                                            <p> <span class="text-primary"> Historical Background</span> </br> </br>
                                                Eastvantage is a global business solutions company enabling
                                                offshore operations from the locations in the Philippines, India
                                                and Bulgaria. With over a decade of operations, they offer a
                                                wealth of international insights and local knowledge in the
                                                areas of digital transformation, customer experience, and
                                                business support.

                                                Combining expertise with a hands-on approach to managing client
                                                relationships, they help bring about strategic growth for
                                                businesses in a wide range of industries worldwide.

                                                Eastvantage makes offshoring simple and seamless.</p>

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
                                            <p> <span class="text-primary"> Mission</span> </br> </br>
                                                Eastvantage is a global business solutions company enabling
                                                offshore operations from the locations in the Philippines, India
                                                and Bulgaria. With over a decade of operations, they offer a
                                                wealth of international insights and local knowledge in the
                                                areas of digital transformation, customer experience, and
                                                business support.

                                                </br> </br></br>
                                                <span class="text-primary"> Vision</span> </br> </br>
                                                Combining expertise with a hands-on approach to managing client
                                                relationships, they help bring about strategic growth for
                                                businesses in a wide range of industries worldwide.

                                                Eastvantage makes offshoring simple and seamless.</p>

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