<?php include "header.php";


$total_users = mysqli_num_rows( mysqli_query($conn,"SELECT * FROM user_info"));

$total_categories = mysqli_num_rows( mysqli_query($conn,"SELECT * FROM categories"));

$total_posts = mysqli_num_rows( mysqli_query($conn,"SELECT * FROM posts"));

$total_tags = mysqli_num_rows( mysqli_query($conn,"SELECT * FROM tags"));



?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                <?php include "sidebar.php"; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Total Posts</span>
                                                        <h4><?php  echo $total_posts; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                               
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Total catagories</span>
                                                        <h4><?php  echo $total_categories; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                               
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Total Tags</span>
                                                        <h4><?php echo $total_tags; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                               
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Total Users</span>
                                                        <h4><?php  echo $total_users; ?></h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                              
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        
<?php include "footer.php"; ?>
