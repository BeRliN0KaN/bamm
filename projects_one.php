<?php include "includes/header.php";
include('project_one_page.php'); ?>
<?php $lang = $_SESSION['lang'];  ?>

<script type="text/javascript">
  //JK Popup Window Script (version 3.0)- By JavaScript Kit (http://www.javascriptkit.com)
  //Visit JavaScriptKit.com for free JavaScripts
  //This notice must stay intact for legal use
  function openpopup(popurl) {
    var winpops = window.open(popurl, "", "width=auto,height=auto,status,scrollbars,resizable,modal")
  }
</script>
<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
  <div class="container-sm pt-5 aos-init aos-animate">
    <div class="row py-5 " data-aos="fade-up">
      <div class=" banner-content my-5 py-5 ">
        <h1 class="banner-title light text-titlecase fw-bold">Projects</h1>
        <nav class="breadcrumb mt-3 ">
          <a href="index.php" class="breadcrumb-item text-white">Home /</a>
          <span class=" active text-warning" aria-current="page">Projects</span>
        </nav>
      </div>
    </div>
  </div>
  <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
    <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;images/View_of_the_world_in_thailand_dan_siam_land_smile_so_cute_buteiful_mak_mak.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 142px; transform: translate3d(0px, -36.1016px, 0px);"></div>
  </div>
</section>
<!-- Page Header End -->


<!-- start -->
<section id="projects" class="padding-large">
  <div class="container">
    <div class="container">
      <div class="section-header d-flex  justify-content-center">
        <h2 class="text-uppercase mb-3  left-pattern  "><span class=""></span> OUR PROJECTS</h2>
      </div>
      <h3 class="text-titlecase  d-flex  justify-content-center"><?php echo constant('page_project_1') ?></h3>
      <div class="projects-flters d-flex flex-wrap justify-content-center my-5">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="projects-flters d-flex flex-wrap">

            <?php
            $sql = "SELECT * FROM tbl_project_cat ";
            $fetch_data = $connection->query($sql);
            if ($fetch_data->num_rows > 0) {
              while ($row_project = $fetch_data->fetch_assoc()) {
                $id_project = $row_project['id_project'];
                $filter_name = $row_project['filter_name'];
                $filter_name_sec = $row_project['filter_name_sec'];
                $lang = $_SESSION['lang'];
                switch ($lang) {
                  case 'en':
                    $title_name = $row_project['title_name'];
                    $title_name_sec = $row_project['title_name_sec'];
                    break;
                  case 'cn':
                    $title_name = $row_project['title_name_cn'];
                    $title_name_sec = $row_project['title_name_sec_cn'];
                    break;
                  default:
                    $title_name = $row_project['title_name_th'];
                    $title_name_sec = $row_project['title_name_sec_th'];
                    break;
                }
            ?>

            <?php
                if ($filter_name == "*") {
                  echo "<a href='projects_one.php?page=$id_project'  class='filter-button border-0 bg-transparent me-3 mb-3 fs-5' >$title_name  </a>";
                } elseif (isset($filter_name_sec)) {
                  echo "<a href='projects_one.php?page=$id_project'  class='filter-button border-0 bg-transparent me-3 mb-3 fs-5' >$title_name&$title_name_sec</a>";
                } else {
                  echo "<a href='projects_one.php?page=$id_project'  class='filter-button border-0 bg-transparent me-3 mb-3 fs-5' >$title_name  </a>";
                }
              }
            }
            ?>
          </div>
        </div>
      </div>
      <div class="row isotope-container">




        <?php

        if (isset($_GET["page"])) {
          $page = $_GET['page'];
        } else {
          //             $page = 1;            
        }


        while ($Row = mysqli_fetch_array($nquery)) {

          //  $counter = 1; // ตัวแปรสำหรับนับลูป
          //    while ($Row = mysqli_fetch_assoc($fetch_data)) {  

          $the_project_id = $Row['project_id'];
          $the_project_image = $Row['project_image'];

          switch ($lang) {
            case 'en':
              $the_project_title = base64_decode($Row['project_title']);
              break;
            case 'cn':
              $the_project_title = base64_decode($Row['project_title_china']);
              break;
            default:
              $the_project_title = base64_decode($Row['project_title_thai']);
              break;
          }

        ?>

          <div class="col-lg-4 col-md-6 item <?php echo $the_project_subtitle ?>">
            <div class="projects-content mx-auto">
              <a href="javascript:openpopup('service-project.php?lan=<?php echo   $_SESSION['lang']  ?>&id=<?php echo $the_project_id ?>')">
                <img src="<?php echo "admin//projects/" . $the_project_image; ?>" class="rounded-3 " alt="building" />
              </a>
            </div>
            <h3 class="fs-3 text-center mt-3 mb-5">
              <a href="javascript:openpopup('service-project.php?lan=<?php echo   $_SESSION['lang']  ?>&id=<?php echo $the_project_id ?>')"><?php echo $the_project_title ?></a>
            </h3>
          </div>

        <?php } ?>

      </div>
      <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
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