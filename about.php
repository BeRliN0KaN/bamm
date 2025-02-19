<?php include "includes/header.php"; ?>

<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
  <div class="container-sm pt-5 aos-init aos-animate">
    <div class="row py-5 " data-aos="fade-up">
      <div class=" banner-content my-5 py-5 ">
        <h1 class="banner-title light text-titlecase fw-bold">About us</h1>
        <nav class="breadcrumb mt-3 ">
          <a href="index.php" class="breadcrumb-item text-white">Home /</a>
          <span class="breadcrumb-item active text-warning" aria-current="page">About Us</span>
        </nav>
      </div>
    </div>
  </div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
    <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://demo.templatesjungle.com/bamboo/images/call-to-action.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 142px; transform: translate3d(0px, -36.1016px, 0px);"></div>
  </div>
</section>
<!-- Page Header End -->


<!-- Solution content Start -->
<div class="container">
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
      <div class="row g-5 py-5 align-items-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid rounded" src="<?php echo "admin//images/" . $the_post_image; ?>">
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="d-flex align-items-center mb-4">
          <div class="section-header mb-4">
            <h2 class="left-pattern text-uppercase"><?php echo $the_post_subtitle ?></h2>
            <h3 class="mb-0"><?php echo $the_post_title ?></h5>
            </div>
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
          <div class="section-header mb-4">
            <h2 class="left-pattern text-uppercase"><?php echo $the_post_subtitle ?></h2>
            <h3 class="text-titlecase"><?php echo $the_post_title ?></h3>
            </div>
          </div>
          <p class="mb-4"><?php echo $the_post_content ?></p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <img class="img-fluid rounded" src="<?php echo "admin//images/" . $the_post_image; ?>">
        </div>
      </div>
  <?php
    }
    $counter++; // เพิ่มตัวนับ
  }
  ?>
</div>
<!-- Solution content End -->


<section id="blog" class="padding-large position-relative">
  <div class="container">
    <div class="section-header col-lg-4">
      <h2 class="text-uppercase mb-3 left-pattern">News articles</h2>
      <h3 class="text-titlecase">Read some latest news articles</h3>
    </div>
    <div class="row mt-5 mt-lg-0">
      <?php
            $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id   where tbl_categories.cat_page=2 and tbl_categories.cat_id=19 AND tbl_posts.post_status='Published'";
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
      <div class="col-md-4 mb-4 mt-4">
        <a href="blog-single.html"><img src="<?php echo "admin//images/" . $the_post_image; ?>" alt="image" class="img-fluid rounded-3 h-100"></a>
        <p class="blog text-capitalize mt-3 fw-semibold"><?php echo $the_post_subtitle ?></p>
        <h4 class="blog-heading fw-semibold"><a href="blog-single.html"><?php echo $the_post_title ?></a></h4>
      </div>
    <?php } ?>
    </div>
  </div>
</section>



<!-- start -->
<section id="blog" class="padding-large position-relative">
  <div class="container">
    <div class="section-header col-lg-4">
      <h2 class="text-uppercase mb-3 left-pattern">News articles</h2>
      <h3 class="text-titlecase">Read some latest news articles</h3>
    </div>
    <div class="row mt-5 mt-lg-0">
      <div class="col-md-4 mb-4 mt-4">
        <a href="blog-single.html"><img src="images/blog1.jpg" alt="image" class="img-fluid rounded-3"></a>
        <p class="blog text-capitalize mt-3 fw-semibold">feb 1, 2022 / buildings</p>
        <h4 class="blog-heading fw-semibold"><a href="blog-single.html">Top 10 mindblowing architecture buildings in
            the world</a></h4>
      </div>
      <div class="col-md-4 mb-4 mt-4">
        <a href="blog-single.html"><img src="images/blog2.jpg" alt="image" class="img-fluid rounded-3"></a>
        <p class="blog text-capitalize mt-3 fw-semibold">feb 1, 2022 / buildings</p>
        <h4 class="blog-heading fw-semibold"><a href="blog-single.html">Amazing technologies that helped to create
            creatives works</a></h4>
      </div>
      <div class="col-md-4 mb-4 mt-4">
        <a href="blog-single.html"><img src="images/blog3.jpg" alt="image" class="img-fluid rounded-3"></a>
        <p class="blog text-capitalize mt-3 fw-semibold">feb 1, 2022 / buildings</p>
        <h4 class="blog-heading fw-semibold"><a href="blog-single.html">Top 100 best construction company around the
            world</a></h4>
      </div>
    </div>
    <div class="btn d-flex justify-content-center">
      <a href="#" class="btn-slide btn-medium btn-dark hover-slide-right mt-5">
        <span class="text-titlecase">All Articles
          <svg class="btn-arrow text-white" width="18" height="18">
            <use xlink:href="#btn-arrow"></use>
          </svg>
        </span>
      </a>
    </div>
  </div>

  <div class="bg-pattern position-absolute top-0 end-0">
    <img src="images/bg-pattern3.png" alt="" class="img-fluid"
      style="background-repeat: no-repeat; overflow: hidden;">
  </div>
</section>
<!-- end -->



<!-- start -->
<section id="contact" class="jarallax d-flex align-items-center padding-large" style="
          background-image: url(images/call-to-action.jpg);
          width: 100%;
          height: 567px;
          background-repeat: no-repeat;
          background-position: center;
        ">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3 class=" display-2 text-center text-white text-titlecase ">
          Are You Ready To Start Your Next Project?
        </h3>
        <div class="btn d-flex justify-content-center">
          <a href="#" class="btn-slide btn-medium btn-light hover-slide-right mt-5">
            <span class="text-titlecase">Get in touch
              <svg class="btn-arrow" width="18" height="18">
                <use xlink:href="#btn-arrow"></use>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  end-->

<?php include "includes/footer.php"; ?>