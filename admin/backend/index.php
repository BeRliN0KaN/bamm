<?php
include "includes_backend/header.php";
include "includes_backend/navigation.php";

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Dashboard
                    <small><?php echo $_SESSION['username'] ?></small>
                </h1>
            </div>

        </div>


        <div class="row">
            <!-- Chart -->
            <div class="col-lg-6 col-md-6">
                <div id="myChart" style="max-width:700px; height:400px"></div>
            </div>
            <!-- Widgets Cards -->
            <div class="col-lg-6 col-md-6">
            <div class="col-lg-12" style="padding-top: 50px;">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-primary ">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM tbl_users";
                                        $select_all_users = mysqli_query($connection, $query);
                                        $users_count = mysqli_num_rows($select_all_users);
                                        ?>
                                        <div class='huge'><?php echo $users_count; ?></div>
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" >
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query_pro = "SELECT * FROM tbl_project_cat";
                                        $select_all_categories_pro = mysqli_query($connection, $query_pro);
                                        $categories_pro_count = mysqli_num_rows($select_all_categories_pro);
                                        ?>
                                        <div class='huge'><?php echo $categories_pro_count; ?></div>
                                        <div>Categories Project</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories_project.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM tbl_categories";
                                        $select_all_categories = mysqli_query($connection, $query);
                                        $categories_posts_count = mysqli_num_rows($select_all_categories);
                                        ?>
                                        <div class='huge'><?php echo $categories_posts_count ?></div>
                                        <div>Categories Post</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories_post.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query_pro = "SELECT * FROM tbl_projects";
                                        $select_all_posts = mysqli_query($connection, $query_pro);
                                        $pro_count = mysqli_num_rows($select_all_posts);

                                        ?>
                                        <div class='huge'><?php echo $pro_count; ?></div>
                                        <div>Project</div>
                                    </div>
                                </div>
                            </div>
                            <a href="projects.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-purple">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM tbl_posts";
                                        $select_all_posts = mysqli_query($connection, $query);
                                        $posts_count = mysqli_num_rows($select_all_posts);

                                        ?>
                                        <div class='huge'><?php echo $posts_count; ?></div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        $query = "SELECT * FROM tbl_posts WHERE post_status='Published'";
        $select_active_posts = mysqli_query($connection, $query);
        $active_posts_count = mysqli_num_rows($select_active_posts);

        $query = "SELECT * FROM tbl_posts WHERE post_status='Draft'";
        $select_draft_posts = mysqli_query($connection, $query);
        $draft_posts_count = mysqli_num_rows($select_draft_posts);

        $query_pro = "SELECT * FROM tbl_project WHERE post_status='Published'";
        $select_active_pro = mysqli_query($connection, $query);
        $active_pro_count = mysqli_num_rows($select_active_pro);

        $query_pro = "SELECT * FROM tbl_project WHERE post_status='Draft'";
        $select_draft_pro = mysqli_query($connection, $query);
        $draft_pro_count = mysqli_num_rows($select_draft_pro);
        ?>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    ['Users', <?php echo $users_count ?>],
                    ['Categories Project', <?php echo $categories_pro_count ?>],
                    ['Categories Post', <?php echo $categories_posts_count ?>],
                    ['Project', <?php echo $pro_count ?>],
                    ['Posts', <?php echo $posts_count ?>],
                    ['Draft Project', <?php echo $draft_pro_count ?>],
                    ['Draft Posts', <?php echo $draft_posts_count ?>],
                ]);

                var options = {
                    title: 'Summary'
                };

                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>

    </div>
</div>

<?php include "includes_backend/footer.php" ?>