<!-- header start -->
<?php include "includes/header.php"; ?>
<!-- header end -->


<!-- Solution content Start -->
<div class="container" style="margin-top: 10rem;">
    <?php
    $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=4 AND tbl_categories.cat_id=4 AND tbl_posts.post_status='Published'";
    $fetch_posts_data = mysqli_query($connection, $query);
    $counter = 1; // ตัวแปรสำหรับนับลูป
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

        // ตรวจสอบว่าตัวนับคือเลขคี่หรือคู่
        if ($counter % 2 != 0) {
    ?>
            <div class="row g-5 py-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="mb-0"><?php echo $counter ?></h1>
                        <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                        <h5 class="mb-0"><?php echo $the_post_title ?></h5>
                    </div>
                    <p class="mb-4"><?php echo $the_post_content ?></p>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="mb-0"><?php echo $counter ?></h1>
                        <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                        <h5 class="mb-0"><?php echo $the_post_title ?></h5>
                    </div>
                    <p class="mb-4"><?php echo $the_post_content ?></p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
                </div>
            </div>
    <?php
        }
        $counter++; // เพิ่มตัวนับ
    }
    ?>
</div>
<!-- Solution content End -->

<!-- About Start -->
<div class="container-fluid service">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <h2 class="display-5 mb-4 fw-bold "><?php echo constant('page_about_4') ?></h2>
            <p class="fs-5 mb-0"><?php echo constant('page_about_5') ?></p>
        </div>
        <div class="row g-4 justify-content-center">

            <?php
            $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=4 and tbl_categories.cat_id=21 AND tbl_posts.post_status='Published'";
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
                <div class="col-md-6 col-lg-4 col-xl-3 fadeInUp d-flex" data-wow-delay="0.1s">
                    <div class="service-item text-center rounded-4 p-4 d-flex flex-column w-100 shadow-lg">
                        <div class="blog-item flex-grow-1">
                            <div class="blog-img overflow-hidden" style="position: relative;">
                                <img src="<?php echo "admin/images/" . $the_post_image; ?>" class="img-fluid" style="object-fit: cover; height: 200px; width: 100%;" alt="">
                            </div>
                            <div class="service-content">
                                <h6 class="my-3 fw-bold"><?php echo $the_post_title; ?></h6>
                                <p class=""><?php echo $the_post_content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- About End -->

<!-- footer start -->
<?php include "includes/footer.php"; ?>
<!-- footter end -->