<!-- header start -->
<?php include "includes/header.php"; ?>
<!-- header end -->

<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
  <div class="container-sm pt-5 aos-init aos-animate">
    <div class="row py-5 " data-aos="fade-up">
      <div class=" banner-content my-5 py-5 ">
        <h1 class="banner-title light text-titlecase fw-bold">About us</h1>
        <nav class="breadcrumb mt-3 ">
          <a href="index.php" class="breadcrumb-item text-white">Home /</a>
          <span class=" active text-warning" aria-current="page">About Us</span>
        </nav>
      </div>
    </div>
  </div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
    <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;images/View_of_the_world_in_thailand_dan_siam_land_smile_so_cute_buteiful_mak_mak.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 142px; transform: translate3d(0px, -36.1016px, 0px);"></div>
  </div>
</section>
<!-- Page Header End -->

<section id="about-us" class="container mt-5 pt-5">
  <!-- Solution content Start -->

  <?php
  $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=2 AND tbl_categories.cat_id=2 AND tbl_posts.post_status='Published'";
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
      <div class="vertical-element aos-init aos-animate">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex align-items-center">
            <div class="col-md-5 ">
              <div class="image-holder">
                <img class="img-fluid rounded" src="<?php echo "admin//images/" . $the_post_image; ?>">
              </div>
            </div>
            <div class="col-md-7 ">
              <div class="section-element ps-0 p-5">
                <div class="section-header mb-4">
                  <h2 class="left-pattern text-uppercase"><?php echo $the_post_subtitle ?></h2>
                  <h3 class="text-titlecase"><?php echo $the_post_title ?></h5>
                </div>
                <p class="mb-4"><?php echo $the_post_content ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    } else {
    ?>
      <div class="vertical-element mt-md-5 py-md-5 aos-init aos-animate">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 ">
              <div class="section-element ps-0 p-5">
                <div class="section-header mb-4">
                  <h2 class="left-pattern text-uppercase"><?php echo $the_post_subtitle ?></h2>
                  <h3 class="text-titlecase"><?php echo $the_post_title ?></h3>
                </div>
                <p class="mb-4"><?php echo $the_post_content ?></p>
              </div>
            </div>
            <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
              <img class="img-fluid rounded" src="<?php echo "admin/images/" . $the_post_image; ?>">
            </div>
          </div>
        </div>
      </div>
  <?php
    }
    $counter++; // เพิ่มตัวนับ
  }
  ?>

</section>
<!-- Solution content End -->


<section id="blog" class="padding-large position-relative ">
  <div class="container">
    <div class="section-header col-lg-6">
      <h2 class="text-uppercase mb-3 left-pattern">Our Services</h2>
      <h3 class="text-titlecase"><?php echo constant('page_about_3') ?></h3>
    </div>
    <div class="row mt-5 mt-lg-0 ">
      <?php
      $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=2 and tbl_categories.cat_id=7 AND tbl_posts.post_status='Published'";
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
        <div class="col-md-3 mb-4 ">
          <div class="shadow-lg pt-4 px-3 h-100 " style="padding-bottom: 5rem; border-radius:10px;">
            <img src="<?php echo "admin/images/" . $the_post_image; ?>" alt="image" class="img-fluid rounded-3 h-100 " style="object-fit: cover;">
            <!-- <p class="blog text-capitalize mt-3 fw-semibold"><?php echo $the_post_subtitle ?></p> -->
            <h4 class="blog-heading fw-semibold mt-3 text-center"><?php echo $the_post_title ?></h4>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="btn d-flex justify-content-center">
      <a href="4_services.php" class="btn-slide btn-medium btn-dark hover-slide-right mt-5">
        <span class="text-titlecase"><?php echo constant('page_index_button_4') ?>
          <svg class="btn-arrow text-white" width="18" height="18">
            <use xlink:href="#btn-arrow"></use>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>



<!-- footer start -->
<?php include "includes/footer.php"; ?>
<!-- footter end -->