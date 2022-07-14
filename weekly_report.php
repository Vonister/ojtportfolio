<?php
$page = "weekly_report";
ob_start();
include('header.php');


// Fetch all weekly report
$sql = "SELECT * FROM weekly_report ORDER BY id";
$result = mysqli_query($conn, $sql);

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
            
            while ($row = mysqli_fetch_array($result)) { 
            ?>
            <!-- Start Single Portfolio -->
            <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#week<?php echo $row['id'] ?>">
                    <div class="inner">
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <a href="javascript:void(0)"><?php echo $row['date'] ?></a>
                                </div>

                            </div>
                            <h4 class="title"><a href="javascript:void(0)"><?php echo $row['name'] ?> <i class="feather-arrow-up-right"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

           


            <!-- Start Modal-->
            <div class="modal fade" id="week<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['name'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <embed style="height: 100vh" class="w-100" src="assets/pdf/<?php echo $row['filename'] ?>#toolbar=0" type="application/pdf">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- End Modal-->

             <?php 
            }
            ?>
        </div>
    </div>
</div>
<!-- End portfolio Area -->

<?php
ob_flush();
include('footer.php');
?>