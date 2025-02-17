<head>
  <meta charset="utf-8" />
  <title>WISEPAQ | วางระบบ network | Thailand</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/clients/client-2/assets/css/client-2.css"> -->

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">


</head>
<!-- ------------------------------ -->

<?php
session_start();
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'en';
}
include('lang_' . $_SESSION['lang'] . '.php');
?>
<!-- Spinner Start -->
<div
  id="spinner"
  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
  <div
    class="spinner-border text-primary"
    style="width: 3rem; height: 3rem"
    role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
  <div class="row gx-0 d-none d-lg-flex">
    <div class="col-lg-7 px-5 text-start">
      <div class="h-100 d-inline-flex align-items-center py-3 me-4">
        <small class="fa fa-map-marker-alt text-primary me-2"></small>
        <small><?php echo constant('address') ?></small>
      </div>
      <div class="h-100 d-inline-flex align-items-center py-3">
        <small class="far fa-clock text-primary me-2"></small>
        <small>Mon - Fri : 08.30 AM - 17.00 PM</small>
      </div>
    </div>
    <div class="col-lg-5 px-5 text-end">
      <div class="h-100 d-inline-flex align-items-center py-3 me-4">
        <small class="fa fa-phone-alt text-primary me-2"></small>
        <small>02-119-5300</small>
      </div>
      <div class="h-100 d-inline-flex align-items-center">
        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/Wisepaqbusiness/"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/Wisepaq"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<!--<div id="navbar"></div>-->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 "><img src="img/icon/wisepaq.jpg" alt="" width="60" height="60" style="margin-right: 5px;">WISEPAQ</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">


      <?php
      $query = "SELECT * FROM  menu1";
      $fetch_data = mysqli_query($connection, $query);

      if (mysqli_num_rows($fetch_data) == 0) {
        //echo "<h1 class='text-center'>No content Found</h1>";
      } else {
        while ($Row = mysqli_fetch_assoc($fetch_data)) {

          $menu_id = $Row['testm1'];
          //                        $menu_title = $Row['name'];
          if ($_SESSION['lang'] == 'en') {
            $menu_title = $Row['name'];
          } else {
            $menu_title = $Row['menuTH'];
          }
          $link = $Row['link'];

          $query_sub = "SELECT * FROM menus1 where testm1 = $menu_id";
          $fetch_data_sub = mysqli_query($connection, $query_sub);

          if (mysqli_num_rows($fetch_data_sub) == 0) {
            //echo "<h1 class='text-center'>No content Found</h1>";
      ?>
            <a href="<?php echo $link; ?>" class="nav-item nav-link"><?php echo $menu_title;  ?></a>

          <?php
          } else {
          ?>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $menu_title; ?></a>
              <div class="dropdown-menu fade-up m-0">
                <?php
                while ($Row_sub = mysqli_fetch_assoc($fetch_data_sub)) {
                  //                                $menu_title_sub = $Row_sub['name1'];
                  if ($_SESSION['lang'] == 'en') {
                    $menu_title_sub = $Row_sub['name1'];
                  } else {
                    $menu_title_sub = $Row_sub['menuTH'];
                  }
                  $link_sub = $Row_sub['link1'];
                ?>
                  <a href="<?php echo $link_sub;  ?>" class="dropdown-item "><?php echo $menu_title_sub  ?></a>
                <?php  } ?>
              </div>
            </div>

          <?php  } ?>

      <?php  }
      } ?>
      <div class="d-inline-flex align-items-center">
        <select id='select_lang' onchange='change_lang(this.value)' data-show-content='true' class='form-control' style="font-size:10px">
          <option value="" selected disabled hidden><?php echo constant("web_option_select"); ?></option>
          <option value="th">ไทย</option>
          <option value="en">English</option>
        </select>
      </div>
    </div>
    <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
  </div>
</nav>
<!-- Navbar End -->

<!-- Scripts -->
<script>
  function change_lang(value) {
    window.location.replace("?lang=" + value);
  }
</script>