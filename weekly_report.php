<?php
$page = "weekly_report";
include('header.php');

$num_week = 14;
$week1="APRIL 4 - 8, 2022";
$week2="APRIL 11 - 15, 2022";
$week3="April 18 - 22, 2022";
$week4="April 25 - 29, 2022";
$week5="May 2 - 6, 2022";
$week6="May 9 - 13, 20222";
$week7="May 16 - 20, 2022";
$week8="May 23 - 27, 2022";
$week9="May 30 - June 3, 2022";
$week10="June 6 - 10, 2022";
$week11="June 13 - 17, 2022";
$week12="June 20 - 24, 2022";
$week13="June 27 - July 1, 2022";
$week14="July 4 - 8, 2022";


?>


<!-- Start Portfolio Area -->
<div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle"></span>
                    <h3 class="title">Weekly Accomplishment Reports</h3>
                </div>
            </div>
        </div>

        <div class="row row--25 mt--10 mt_md--10 mt_sm--10">

            <?php 
            
            for($count=1; $count<=$num_week; $count++) { 
            ?>
            <!-- Start Single Portfolio -->
            <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#week<?php echo $count ?>">
                    <div class="inner">
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="javascript:void(0)"><?php 
                                    switch($count){
                                        case 1:
                                            echo $week1;
                                        break;

                                        case 2:
                                            echo $week2;
                                        break;

                                        case 3:
                                            echo $week3;
                                        break;

                                        case 4:
                                            echo $week4;
                                        break;

                                        case 5:
                                            echo $week5;
                                        break;

                                        case 6:
                                            echo $week6;
                                        break;

                                        case 7:
                                            echo $week7;
                                        break;

                                        case 8:
                                            echo $week8;
                                        break;

                                        case 9:
                                            echo $week9;
                                        break;

                                        case 10:
                                            echo $week10;
                                        break;

                                        case 11:
                                            echo $week11;
                                        break;

                                        case 12:
                                            echo $week12;
                                        break;

                                        case 13:
                                            echo $week13;
                                        break;

                                        case 14:
                                            echo $week14;
                                        break;


                                        default:
                                        echo null;
                                        break;
                                    }
                                    
                                    ?></a>
                                </div>

                            </div>
                            <h4 class="title"><a href="javascript:void(0)">Week <?php echo $count ?> Accomplishment Report <i class="feather-arrow-up-right"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

           


            <!-- Start Modal-->
            <div class="modal fade" id="week<?php echo $count ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Week <?php echo $count ?> Accomplishment Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <embed style="height: 100vh" class="w-100" src="assets/pdf/Week <?php echo $count ?>.pdf#toolbar=0" type="application/pdf">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- End Modal -->

             <?php 

            
            }
            ?>
        </div>
    </div>
</div>
<!-- End portfolio Area -->

<?php
include('footer.php');
?>