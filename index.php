<!-- header start -->
<?php include "includes/header.php"; ?>
<!-- header end -->


<section id="main-banner " class="padding-medium position-relative margin-medium">
  <div class="container" data-aos="fade-up">
    <div class="row g-md-5 d-flex justify-content-center align-items-center timer">
      <div class="col-lg-6">
        <h1 class="display-4 text-titlecase fw-bold text-black">
        <?php echo constant('page_index_slide_1') ?>
        </h1>
        <p class="fs-5 mt-3">
        <?php echo constant('page_index_slide_2') ?>
        </p>
        <a href="3_projects.php" class="btn-slide btn-medium btn-dark hover-slide-right my-5">
          <span class="text-titlecase"><?php echo constant('page_index_button_3') ?>
            <svg class="btn-arrow text-white" width="18" height="18">
              <use xlink:href="#btn-arrow"></use>
            </svg>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <div class="hero-buttons">
          <div class="video-container ">
            <video autoplay muted loop playsinline class="shadow-lg img-fluid z-5 rounded-3">
              <source src="video/AXW.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
        <!-- <img src="images/banner-img.png" alt="" class="img-fluid z-5"> -->
      </div>
    </div>
  </div>
</section>
<div class="bg-pattern position-absolute top-0 end-0">
  <img src="images/bg-pattern1.png" alt="" class="img-fluid"
    style="background-repeat: no-repeat; overflow: hidden;">
</div>

<section id="service" class="bg-light">
  <div class="container" data-aos="fade-up">
    <div class="row g-md-5 pt-4 timer" data-to="100" data-speed="1000">
      <div class="col-md-3 my-3">
        <div class="card text-center text-lg-start border-0">
          <div class="service-svg text-center m-auto m-md-0 pb-5">
            <div class="svg position-relative">
              <svg class="text-black" width="70" height="70">
                <use xlink:href="#home"></use>
              </svg>
              <span class="circle-pattern position-absolute top-0 start-0"></span>
              <span class="circle-pattern position-absolute bottom-0 end-0"></span>
            </div>
          </div>
          <h4 class="fw-bold py-3 m-0"><?php echo constant('page_index_card_1') ?></h3>
            <div class="card-text">
              <p class="blog-paragraph fs-5"><?php echo constant('page_index_card_content_1') ?></p>
            </div>
            <!-- <a href="#" class="btn-normal my-2">
                  <span class="text-titlecase fw-bold fs-5">View Details
                    <svg class="btn-arrow" width="18" height="18">
                      <use xlink:href="#btn-arrow"></use>
                    </svg>
                  </span>
                </a> -->
        </div>
      </div>
      <div class="col-md-3 my-3">
        <div class="card text-center text-lg-start border-0">
          <div class="service-svg text-center m-auto m-md-0 pb-5">
            <div class="svg position-relative">
              <svg class="text-black" width="60" height="60">
                <use xlink:href="#design"></use>
              </svg>
              <span class="circle-pattern position-absolute top-0 start-0"></span>
              <span class="circle-pattern position-absolute bottom-0 end-0"></span>
            </div>
          </div>
          <h4 class="fw-bold py-3 m-0"><?php echo constant('page_index_card_2') ?></h3>
            <div class="card-text">
              <p class="blog-paragraph fs-5"><?php echo constant('page_index_card_content_2') ?></p>
            </div>
            <!-- <a href="#" class="btn-normal my-2">
                  <span class="text-titlecase fw-bold fs-5">View Details
                    <svg class="btn-arrow" width="18" height="18">
                      <use xlink:href="#btn-arrow"></use>
                    </svg>
                  </span>
                </a> -->
        </div>
      </div>
      <div class="col-md-3 my-3">
        <div class="card text-center text-lg-start border-0">
          <div class="service-svg text-center m-auto m-md-0 pb-5">
            <div class="svg position-relative">
              <svg class="text-black" width="60" height="60">
                <use xlink:href="#tools"></use>
              </svg>
              <span class="circle-pattern position-absolute top-0 start-0"></span>
              <span class="circle-pattern position-absolute bottom-0 end-0"></span>
            </div>
          </div>
          <h4 class="fw-bold py-3 m-0"><?php echo constant('page_index_card_3') ?></h3>
            <div class="card-text">
              <p class="blog-paragraph fs-5"><?php echo constant('page_index_card_content_3') ?></p>
            </div>
            <!-- <a href="#" class="btn-normal my-2">
                  <span class="text-titlecase fw-bold fs-5">View Details
                    <svg class="btn-arrow" width="18" height="18">
                      <use xlink:href="#btn-arrow"></use>
                    </svg>
                  </span>
                </a> -->
        </div>
      </div>
      <div class="col-md-3 my-3">
        <div class="card text-center text-lg-start border-0">
          <div class="service-svg text-center m-auto m-md-0 pb-5">
            <div class="svg position-relative">
              <svg class="text-black" width="60" height="60">
                <use xlink:href="#landscape"></use>
              </svg>
              <span class="circle-pattern position-absolute top-0 start-0"></span>
              <span class="circle-pattern position-absolute bottom-0 end-0"></span>
            </div>
          </div>
          <h4 class="fw-bold py-3 m-0"><?php echo constant('page_index_card_4') ?></h3>
            <div class="card-text">
              <p class="blog-paragraph fs-5"><?php echo constant('page_index_card_content_4') ?></p>
            </div>
            <!-- <a href="#" class="btn-normal my-2">
                  <span class="text-titlecase fw-bold fs-5">View Details
                    <svg class="btn-arrow" width="18" height="18">
                      <use xlink:href="#btn-arrow"></use>
                    </svg>
                  </span>
                </a> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section id="about-us" class=" padding-large position-relative ">
  <div class="container" data-aos="fade-up">
    <div class="section-header col-lg-4">
      <h2 class="text-uppercase mb-3 left-pattern"><?php echo constant('page_index_about_1') ?></h2>
      <h3 class="text-titlecase"><?php echo constant('page_index_about_2') ?></h3>
    </div>
    <div class="row g-md-5 flex-row-reverse d-flex justify-content-center align-items-top mt-5">
      <div class="col-lg-6 mt-0 justify-content-top">
        <img src="images/about2.jpg" alt="" class="img-fluid rounded-3">
        <h5 class="mt-3"><?php echo constant('page_index_about_3') ?></h5>
        <p class="fs-5 mt-2">
        <?php echo constant('page_index_about_4') ?>
        </p>
        <a href="2_about.php" class="btn-slide btn-medium btn-dark hover-slide-right my-3">
          <span class="text-titlecase"><?php echo constant('page_index_button_2') ?>
            <svg class="btn-arrow text-white" width="18" height="18">
              <use xlink:href="#btn-arrow"></use>
            </svg>
          </span>
        </a>
      </div>
      <div class="col-lg-6 mt-0">
        <img src="images/about1.jpg" alt="" class="img-fluid rounded-3">
      </div>
    </div>
  </div>
  <div class="bg-pattern position-absolute top-0 start-0">
    <img src="images/bg-pattern2.png" alt="" class="img-fluid"
      style="background-repeat: no-repeat; overflow: hidden;">
  </div>
  </div>
</section>

  <!-- start -->
  <section id="our-achievement" class="padding-large">
    <div class="container" data-aos="fade-up">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="counter-info text-center align-items-end">
            <div class="counter-number align-items-center">
              <h4 class="timer fw-bold m-0" data-to="100" data-speed="1000">
                100+
              </h4>
            </div>
            <h2 class="counter-description text-uppercase ps-2 fw-semibold">
              Projects done
            </h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="counter-info text-center align-items-end">
            <div class="counter-number align-items-center">
              <h4 class="timer fw-bold m-0" data-to="100" data-speed="1000">
                20+
              </h4>
            </div>
            <h2 class="counter-description text-uppercase ps-2 fw-semibold">
            Years Experience
            </h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="counter-info text-center align-items-end">
            <div class="counter-number align-items-center">
              <h4 class="timer fw-bold m-0" data-to="100" data-speed="1000">
                627
              </h4>
            </div>
            <h2 class="counter-description text-uppercase ps-2 fw-semibold">
              Total members
            </h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="counter-info text-center align-items-end">
            <div class="counter-number align-items-center">
              <h4 class="timer fw-bold m-0" data-to="10" data-speed="1000">
                100+
              </h4>
            </div>
            <h2 class="counter-description text-uppercase ps-2 fw-semibold">
              Happy customers
            </h2>
          </div>
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

<!-- footer start -->
<?php include "includes/footer.php"; ?>
<!-- footter end -->