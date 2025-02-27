<?php
//include "includes_admin/db.php";
include '../includes/db.php';
/* Page Header and navigation */
include "includes_admin/header.php";
include "includes_admin/navigation.php";

$errMessage = false;

?>
<!-- Page Content -->
<div class="container">
    <?php
    if (isset($_GET['p_id'])) {
        $the_project_id = $_GET['p_id'];
        $lang = $_GET['lang'];
        $query = "SELECT * FROM tbl_projects WHERE project_id = $the_project_id ";
        $select_all_project_query = mysqli_query($connection, $query);

        while ($Row = mysqli_fetch_assoc($select_all_project_query)) {
            $project_id = $Row['project_id'];
            $project_content = base64_decode($Row['project_content']);
            switch ($lang ) {
                case 'en':
                    $project_title =  base64_decode($Row['project_title']);
                    $project_subtitle =  base64_decode($Row['project_subtitle']);
                    break;
                case 'cn':
                    $project_title =  base64_decode($Row['project_title_china']);
                    $project_subtitle =  base64_decode($Row['project_subtitle_china']);
                    break;
                default:
                    $project_title =  base64_decode($Row['project_title_thai']);
                    $project_subtitle =  base64_decode($Row['project_subtitle_thai']);
                    break;
            }
            $project_link_url = $Row['project_link'];
            $project_date = $Row['project_date'];
            $project_image = $Row['project_image'];
    ?>
            <div class="row">
                <!-- Blog Project Content Column -->
                <div class="col-lg-8">

                    <!-- Blog Project -->

                    <!-- Title -->
                    <h1><?php echo $project_title; ?></h1>

                    <!-- Subtitle -->
                    <h3><?php echo $project_subtitle; ?></h3>

                    <!-- Author -->
                    <!-- <p class="lead">
                        by </a>
                    </p> -->
                    <!--Link Url-->
                    <a class="btn btn-link text-light" href="<?php echo $project_link_url ?>" target="_blank">click link</i></a>

                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $project_date; ?></p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-responsive" src="<?php echo "projects/" . $project_image; ?>" alt="<?php echo $project_title; ?>">

                    <hr>

                    <!-- Post Content -->
                    <p><?php echo $project_content; ?></p>

                    <!-- Blog Comments -->

                </div>

                <!-- Blog Sidebar Widgets Column -->
                <?php
                //      include "includes/sidebar.php"
                ?>
            </div>
    <?php
        }
    }
    ?>
    <hr>
    <?php
    /* Page Footer */
    include "includes_admin/footer.php"
    ?>