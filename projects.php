<?php include "includes/header.php"; ?>

<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
  <div class="container-sm pt-5 aos-init aos-animate">
    <div class="row py-5 " data-aos="fade-up">
      <div class=" banner-content my-5 py-5 ">
        <h1 class="banner-title light text-titlecase fw-bold">Projects</h1>
        <nav class="breadcrumb mt-3 ">
          <a href="index.php" class="breadcrumb-item text-white">Home /</a>
          <span class="breadcrumb-item active text-warning" aria-current="page">Projects</span>
        </nav>
      </div>
    </div>
  </div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
    <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://demo.templatesjungle.com/bamboo/images/call-to-action.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 142px; transform: translate3d(0px, -36.1016px, 0px);"></div>
  </div>
</section>
<!-- Page Header End -->


<!-- start -->
<section id="projects" class="padding-large">
  <div class="container">
    <div class="container">
      <div class="section-header offset-lg-4">
        <h2 class="text-uppercase mb-3 left-pattern">OUR PROJECTS</h2>
        <h3 class="text-titlecase">Explore our works</h3>
      </div>
      <div class="projects-flters d-flex flex-wrap justify-content-center my-5">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="projects-flters d-flex flex-wrap">
            <button class="filter-button active border-0 bg-transparent me-5 mb-3 fs-5" data-filter="*">
              All
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".building">
              Buildings
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".hotel">
              Hotel
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".mall, .restaurant">
              Mall&Restaurant
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".industry">
              Industry
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".road, .parking">
              Road&Parking
            </button>
          </div>
        </div>
      </div>
      <div class="row isotope-container">
        <?php
        $query = "SELECT * FROM tbl_posts inner join tbl_categories on tbl_categories.cat_id = tbl_posts.post_category_id where tbl_categories.cat_page=3 AND tbl_categories.cat_id=3 AND tbl_posts.post_status='Published'";
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
        ?>

          <div class="col-lg-4 col-md-6 item <?php echo $the_post_subtitle ?>">
            <div class="projects-content mx-auto">
              <a href="project-single.html">
                <img src="<?php echo "admin//images/" . $the_post_image; ?>" class="rounded-3 " alt="building" />
              </a>
            </div>
            <h3 class="fs-3 text-center mt-3 mb-5">
              <a href="project-single.html"><?php echo $the_post_title ?></a>
            </h3>
          </div>
        <?php } ?>
      </div>
    </div>
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