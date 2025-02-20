<?php include "includes/header.php"; ?>

<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
  <div class="container-sm pt-5 aos-init aos-animate">
    <div class="row py-5 " data-aos="fade-up">
      <div class=" banner-content my-5 py-5 ">
        <h1 class="banner-title light text-titlecase fw-bold">Services </h1>
        <nav class="breadcrumb mt-3 ">
          <a href="index.php" class="breadcrumb-item text-white">Home /</a>
          <span class=" active text-warning" aria-current="page">Services</span>
        </nav>
      </div>
    </div>
  </div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
    <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;images/projects-item8.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 142px; transform: translate3d(0px, -36.1016px, 0px);"></div>
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
            <?php
            $sql = "SELECT * FROM tbl_service_cat ";
            $fetch_data = $connection->query($sql);
            if ($fetch_data->num_rows > 0) {
              while ($row_service = $fetch_data->fetch_assoc()) {
                $filter_name = $row_service['filter_ser'];
                $lang = $_SESSION['lang'];
                switch ($lang) {
                  case 'en':
                    $title_name = $row_service['name_serEN'];

                    break;
                  case 'cn':
                    $title_name = $row_service['name_serCN'];

                    break;
                  default:
                    $title_name = $row_service['name_serTH'];

                    break;
                }
                if ($filter_name == "*") {
                  echo "<button class='filter-button border-0 bg-transparent me-5 mb-3 fs-5' data-filter='{$filter_name}'>
                          {$title_name} 
                       </button>";
                } else {
                  echo "<button class='filter-button border-0 bg-transparent me-5 mb-3 fs-5' data-filter='.{$filter_name}'>
                                  {$title_name}
                              </button>";
                }
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div class="row isotope-container">
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


<div class="container mt-5 pt-5 aos-init aos-animate" data-aos-duration="2000">
  <div class="section-header my-5" data-aos="fade-up">
    <h2 class="text-uppercase mb-3 left-pattern">
      Our Services
    </h2>
    <h3 class="text-titlecase">
      What we provide
    </h3>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="fluent-mdl2:home">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 2048 2048">
            <path fill="currentColor" d="m1024 165l941 942l-90 90l-83-82v805h-640v-640H896v640H256v-805l-83 82l-90-90zm640 1627V987l-640-640l-640 640v805h384v-640h512v640z" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="material-symbols:shapes-outline">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M8 17.95q.25.025.488.038T9 18t.513-.012t.487-.038V20h10V10h-2.05q.025-.25.038-.488T18 9t-.012-.513T17.95 8H20q.825 0 1.413.588T22 10v10q0 .825-.587 1.413T20 22H10q-.825 0-1.412-.587T8 20zM9 16q-2.925 0-4.962-2.037T2 9t2.038-4.962T9 2t4.963 2.038T16 9t-2.037 4.963T9 16m0-2q2.075 0 3.538-1.463T14 9t-1.463-3.537T9 4T5.463 5.463T4 9t1.463 3.538T9 14m0-5" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="icon-park-outline:road-one">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 6v36M24 6v4m0 10v8m0 10v4M40 6v36" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="file-icons:renovate">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
            <path fill="currentColor" d="m0 178.145l32.48-32.48l32.478 32.48l-32.479 32.48zm96.98-96.978l32.479-32.48l32.479 32.48l-32.48 32.479zm.45 129.466l-32.48 32.48l55.837 55.837l194.426-194.426L226.905 16.2l-32.48 32.479L226.9 81.162l-32.484 32.484l32.48 32.48l-32.476 32.476l-64.953-64.964l-32.48 32.479l64.954 64.964l-32.032 32.031zm258.386 100.722L458.08 209.09c12.046-12.046 12.046-31.646 0-43.694l-37.688-37.687c-15.705-14.473-35.476-11.255-48.172 4.479l-13.374-13.374c-12.37-11.984-30.436-10.403-40.593 0L135.098 301.972c-10.638 10.853-12.437 26.79 0 40.59l42.268 42.266c12.53 12.136 30.42 10.362 40.59 0l183.155-183.155c11.19-11.192 11.19-29.402 0-40.593l-13.374-13.374c5.166-5.739 9.885-10.338 17.14-4.478l37.686 37.686c3.49 3.492 3.49 9.173 0 12.663L340.3 295.84c-11.664 11.602-12.869 30.625 0 43.694l23.416 23.416c-10.476 11.239-10.27 28.89.678 39.84l84.532 84.53c12.331 11.494 29.174 11.115 40.591.003l14.09-14.09c11.19-11.19 11.19-29.398 0-40.59l-84.534-84.533c-10.95-10.948-28.598-11.156-39.84-.677l-23.42-23.419c-3.888-4.2-3.12-9.303.002-12.66" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="fluent:design-ideas-24-regular">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6 2.75a.75.75 0 0 0-1.219-.586c-1.31 1.049-2.023 1.968-2.398 2.768A3.96 3.96 0 0 0 2 6.75c0 .946.477 1.78 1.204 2.275a2.4 2.4 0 0 0-.506.593c-.476.77-.698 1.947-.698 3.637c0 1.712.23 3.768.605 5.41c.186.816.417 1.569.692 2.134c.137.281.304.555.51.77c.206.211.523.436.943.436s.737-.225.942-.436a3 3 0 0 0 .51-.77c.276-.566.507-1.318.693-2.135a26 26 0 0 0 .605-5.41c0-1.69-.222-2.866-.698-3.636a2.4 2.4 0 0 0-.506-.593A2.75 2.75 0 0 0 7.5 6.75c0-.927-.436-1.574-.768-2.068l-.029-.043C6.313 4.058 6 3.58 6 2.75m-2.5 4v-.001c0-.298 0-.665.242-1.18c.168-.361.469-.819 1.012-1.371c.193.517.463.92.692 1.26l.012.018c.357.531.542.835.542 1.274a1.25 1.25 0 0 1-2.5 0m0 6.505c0-1.623.226-2.447.474-2.849a.8.8 0 0 1 .325-.317a1 1 0 0 1 .451-.084c.2 0 .343.031.451.084c.1.048.212.135.325.317c.248.402.474 1.226.474 2.849c0 1.601-.218 3.545-.567 5.076c-.176.77-.376 1.395-.579 1.811a3 3 0 0 1-.104.195a3 3 0 0 1-.104-.195c-.203-.416-.403-1.042-.579-1.811a24.6 24.6 0 0 1-.567-5.076m4.984.822a5 5 0 0 0 1.516.398V12.25A3.25 3.25 0 0 1 13.25 9h2.225a5 5 0 0 0-7.344-3.904a6.4 6.4 0 0 0-.548-.94l-.05-.074l-.179-.272A6.5 6.5 0 0 1 16.981 9h1.769A3.25 3.25 0 0 1 22 12.25v5.5A3.25 3.25 0 0 1 18.75 21h-5.5A3.25 3.25 0 0 1 10 17.75v-1.769a6.5 6.5 0 0 1-1.621-.335c.05-.53.086-1.058.105-1.569M18.75 10.5h-1.826a6.505 6.505 0 0 1-5.424 5.424v1.826c0 .966.784 1.75 1.75 1.75h5.5a1.75 1.75 0 0 0 1.75-1.75v-5.5a1.75 1.75 0 0 0-1.75-1.75m-7.25 3.9a5.01 5.01 0 0 0 3.9-3.9h-2.15a1.75 1.75 0 0 0-1.75 1.75z" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-5">
      <div class="service-item">
        <iconify-icon class="services-icon my-2" icon="maki:building-alt1">
          <style data-style="data-style"></style>
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
            <path fill="currentColor" d="M11 13.5v-9c0-.3-.2-.5-.5-.5H9V1L5 2.1v11.4H2v.5h11v-.5zm-4 0V3h1v10.5z" />
          </svg>
        </iconify-icon>
        <h4 class=" fs-1">
          Building New Homes
        </h4>
        <p>Vehicula at eget a arcu neque ultricies.</p>
        <a href="projects.php" class="btn-slide btn-medium btn-dark hover-slide-right text-uppercase mt-3">
          <span class="text-titlecase">
            Read More
          </span>
        </a>
      </div>
    </div>
  </div>

  <?php include "includes/footer.php"; ?>