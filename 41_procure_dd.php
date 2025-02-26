<!-- header start -->
<?php include "includes/header.php"; ?>
<!-- header end -->


<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 5rem;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0 me-5">PRODUCT</h2>
            <p class="p-1 fs-5">by</p>
            <h5 class="fw-bold text-primary text-uppercase mt-1">A.X.W</h5>
        </div>
        <div class="row g-5">

            <?php
            $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=4 AND tbl_categories.cat_id=20 AND tbl_posts.post_status='Published'";
            $fetch_posts_data = mysqli_query($connection, $query);
            while ($Row = mysqli_fetch_assoc($fetch_posts_data)) {
                $the_post_id = $Row['post_id'];
                $the_post_image = $Row['post_image'];
                $lang = $_SESSION['lang'];
                switch ($lang) {
                    case 'en':
                        $the_post_title = base64_decode($Row['post_title']);
                        $the_post_subtitle = base64_decode($Row['post_subtitle']);
                        $the_post_content = base64_decode($Row['post_content']);
                        break;
                    case 'cn':
                        $the_post_title = base64_decode($Row['post_title_china']);
                        $the_post_subtitle = base64_decode($Row['post_subtitle_china']);
                        $the_post_content = base64_decode($Row['post_content_china']);
                        break;
                    default:
                        $the_post_title = base64_decode($Row['post_title_thai']);
                        $the_post_subtitle = base64_decode($Row['post_subtitle_thai']);
                        $the_post_content = base64_decode($Row['post_content_thai']);
                        break;
                }
            ?>
                <div class="col-lg-4 wow slideInUp " data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden shadow-lg">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100 " style="object-fit:cover;" src="<?php echo "admin/images/" . $the_post_image; ?>" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class=" mb-3">
                                <small class="me-3"><i class="fas fa-building text-primary me-2"></i><?php echo $the_post_subtitle ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3"><?php echo $the_post_title ?></h4>
                            <h2><?php echo $the_post_content ?></h2>
                            <!-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Blog Start -->

<!-- footer start -->
<?php include "includes/footer.php"; ?>
<!-- footter end -->