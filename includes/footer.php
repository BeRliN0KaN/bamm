<<<<<<< HEAD
<div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_5') ?></h1>

                <p id="size15" class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i><?php echo constant('page_footer_2') ?>
                </p>
                <p id="size15" class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i><?php echo constant('page_footer_3') ?>
                </p>
                <p id="size15" class="mb-2">
                    <i class="fa fa-envelope me-3"></i><?php echo constant('page_footer_4') ?>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://x.com/Wisepaq"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Wisepaqbusiness/"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://youtube.com/@wisepaq-business?feature=shared">
                        <i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="">
                        <i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_6') ?></h1>
                <?php
                $query = "SELECT * FROM quick_link";
                $fetch_data = mysqli_query($connection, $query);

                if (mysqli_num_rows($fetch_data) == 0) {
                    //echo "<h1 class='text-center'>No content Found</h1>";
                } else {
                    while ($Row = mysqli_fetch_assoc($fetch_data)) {

                        $menu_id = $Row['idFQ'];
                        //                        $menu_title = $Row['name'];
                        if ($_SESSION['lang'] == 'en') {
                            $menu_title = $Row['nameFQ'];
                        } else {
                            $menu_title = $Row['menuTH'];
                        }
                        $link = $Row['linkFQ'];

                ?>
                        <a href="<?php echo $link; ?>" class="btn btn-link fs-5"><?php echo $menu_title; ?></a>

                <?php }
                } ?>

                <!-- <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4">Quick Links</h1>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div> -->
            </div>
            <!-- Endfooter Quick-Link -->

            <!-- Startfooter Popular-Link -->
            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4"><?php echo constant('page_footer_7') ?></h1>
                <?php
                $query = "SELECT * FROM popular_link";
                $fetch_data = mysqli_query($connection, $query);

                if (mysqli_num_rows($fetch_data) == 0) {
                    //echo "<h1 class='text-center'>No content Found</h1>";
                } else {
                    while ($Row = mysqli_fetch_assoc($fetch_data)) {

                        $menu_id = $Row['idFP'];
                        //                        $menu_title = $Row['name'];
                        if ($_SESSION['lang'] == 'en') {
                            $menu_title = $Row['nameFP'];
                        } else {
                            $menu_title = $Row['menuTH'];
                        }
                        $link = $Row['linkFP'];

                ?>
                        <a href="<?php echo $link; ?>" class="btn btn-link fs-5"><?php echo $menu_title; ?></a>

                <?php }
                } ?>

                <!-- <div class="col-lg-3 col-md-6">
                    <h1 class="text-light mb-4">Popular Links</h1>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div> -->
            </div>
            <!-- Endfooter Popular-Link -->

            <div class="col-lg-3 col-md-6">
                <h1 class="text-light mb-4">Newsletter</h1>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        SignUp
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                    Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By
                    <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    <br />Distributed By:
                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
</div>
=======
 <!-- footer start -->
 <footer id="footer" class="overflow-hidden padding-large">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between">
        <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
          <div class="footer-menu ">
            <img src="images/logo-文字版.png" style="height:100px; width:100px; object-fit:cover;" alt="footer logo" class="pb-2 mx-auto d-block"/>
            <p class="fw-semibold text-center" style="font-size: 1rem;">บริการรับเหมาก่อสร้าง <br> บริษัท เอ.เอ็กซ์.ดับบลิว อินเตอร์เนชันแนล จํากัด <br> A.X.W INTERNATIONAL CO.,LTD.</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 pb-3">
          <div class="footer-menu">
            <ul class="menu-list list-unstyled">
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#about">Home</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">Services</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">News</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">Terms of use</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
          <div class="footer-menu">
            <ul class="menu-list list-unstyled">
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#about">Our location</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">About </a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">Contact </a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">Help Center</a>
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <a href="#">FAQs</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
          <div class="footer-menu">
            <ul class="menu-list list-unstyled">
              <li class="pb-2 fw-bold text-capitalize">
                <svg class="text-primary" width="25" height="20" aria-hidden="true">
                  <use xlink:href="#location"></use>
                </svg>
                163 Elm Drive, New York City
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <svg class="text-primary" width="25" height="20" aria-hidden="true">
                  <use xlink:href="#call"></use>
                </svg>(+089) 234-516-6123
              </li>
              <li class="pb-2 fw-bold text-capitalize">
                <svg class="text-primary" width="25" height="20" aria-hidden="true">
                  <use xlink:href="#mail"></use>
                </svg>
                <a href="mailto:">info@yourinfo.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->

  <div class="footer-bottom d-flex flex-wrap justify-content-between border-top pt-5 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>
            ©2024 Bamboo | All Rights Reserved | Template by <strong>
              <a href="https://templatesjungle.com/" target="_blank">TemplatesJungle</a>
            </strong>
          </p>
        </div>
        <div class="col-lg-6">
          <ul class="social-links list-unstyled d-flex justify-content-lg-end">
            <li class="pe-3">
              <a href="#">
                <svg class="facebook text-primary-500" width="15" height="15" aria-hidden="true">
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#">
                <svg class="twitter text-primary-500" width="15" height="15" aria-hidden="true">
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#">
                <svg class="instagram text-primary-500" width="15" height="15" aria-hidden="true">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#">
                <svg class="linkedin text-primary-500" width="15" height="15" aria-hidden="true">
                  <use xlink:href="#linkedin"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg class="youtube text-primary-500" width="15" height="15" aria-hidden="true">
                  <use xlink:href="#blogger"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="aos/aos.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
>>>>>>> 41a6ff312a503175ddb6602c2d473fee4490a930
