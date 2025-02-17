<?php include"includes/header.php"; ?>

  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- start -->
  <section id="projects" class="padding-large">
    <div class="container">
      <div class="section-header">
        <h2 class="text-uppercase mb-3 left-pattern">Latest Projects</h2>
        <h3 class="text-titlecase">Explore our works</h3>
      </div>
      <div class="projects-isotope my-5">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="projects-flters d-flex flex-wrap">
            <button class="filter-button active border-0 bg-transparent me-5 mb-3 fs-5" data-filter="*">
              All
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".building">
              Buildings
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".interior">
              Interior & Exterior
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".renovate">
              Renovate
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".industry">
              Industry
            </button>
            <button class="filter-button border-0 bg-transparent me-5 mb-3 fs-5" data-filter=".road">
              Road
            </button>
          </div>
          <div class="text-start text-lg-end">
            <a href="#" class="btn-normal">
              <span class="text-titlecase fw-bold fs-5">View All Projects
                <svg class="btn-arrow" width="18" height="18">
                  <use xlink:href="#btn-arrow"></use>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row isotope-container">
        <div class="col-lg-4 col-md-6 item building">
          <div class="projects-content mx-auto">
            <a href="project-single.html">
              <img src="images/projects-item1.jpg" class="rounded-3 " alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Outbox creatives building</a>
          </h3>
        </div>
        <div class="col-lg-4 col-md-6 item renovate">
          <div class="projects-content mx-auto">
            <a href="project-single.html">
              <img src="images/projects-item2.jpg" class="rounded-3 img-fluid" alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Slova private residence</a>
          </h3>
        </div>
        <div class="col-lg-4 col-md-6 item industry">
          <div class="projects-content mx-auto">
            <a href="project-single.html">
              <img src="images/projects-item3.jpg" class="rounded-3 img-fluid" alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Jaguare garment industry</a>
          </h3>
        </div>
        <div class="col-lg-4 col-md-6 item industry">
          <div class="projects-content">
            <a href="project-single.html">
              <img src="images/projects-item4.jpg" class="rounded-3 img-fluid" alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Jaguare garment industry</a>
          </h3>
        </div>
        <div class="col-lg-4 col-md-6 item road">
          <div class="projects-content">
            <a href="project-single.html">
              <img src="images/projects-item5.jpg" class="rounded-3 img-fluid" alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Jaguare garment industry</a>
          </h3>
        </div>
        <div class="col-lg-4 col-md-6 item building">
          <div class="projects-content">
            <a href="project-single.html">
              <img src="images/projects-item6.jpg" class="rounded-3 img-fluid" alt="building" />
            </a>
          </div>
          <h3 class="fs-3 text-center mt-3 mb-5">
            <a href="project-single.html">Jaguare garment industry</a>
          </h3>
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

  <?php include"includes/footer.php"; ?>