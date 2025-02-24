<!-- footer start -->
<footer id="footer" class="overflow-hidden padding-large" style="border-top: 0.1px solid grey;">
  <div class="container">
    <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
        <div class="footer-menu ">
          <img src="images/logo-文字版.png" style="height:100px; width:160px; object-fit:cover;" alt="footer logo" class="pb-2 mx-auto d-block" />
          <p class="fw-semibold text-center" style="font-size: 1rem;">บริการรับเหมาก่อสร้าง <br> บริษัท เอ.เอ็กซ์.ดับบลิว อินเตอร์เนชันแนล จํากัด <br> A.X.W INTERNATIONAL CO.,LTD.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 pb-3">
        <div class="footer-menu">
        <!--  <ul class="menu-list list-unstyled">
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
                } elseif ($_SESSION['lang'] == 'th') {
                  $menu_title = $Row['menuTH'];
                } else {
                  $menu_title = $Row['menuCN'];
                }
                $link = $Row['linkFQ'];
            ?>
                <li class="pb-2 fw-bold text-capitalize">
                  <a href="<?php echo $link; ?>" ><?php echo $menu_title; ?></a>
                </li>
            <?php }
            }
            ?>
          </ul>-->
        </div>
      </div>
     <div class="col-lg-2 col-md-6 col-sm-6 pb-3">
        <div class="footer-menu">
          <ul class="menu-list list-unstyled">
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
                } elseif ($_SESSION['lang'] == 'th') {
                  $menu_title = $Row['menuTH'];
                } else {
                  $menu_title = $Row['menuCN'];
                }
                $link = $Row['linkFP'];
            ?>
              <li class="pb-2 fw-bold text-capitalize">
                  <a href="<?php echo $link; ?>"><?php echo $menu_title; ?></a>
                </li>
            <?php }
           }
            ?>
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
              เลขที 109 / 39 หมู่บ้าน มายอิสระ ราชพฤกษ์ หมู่ที 10 ตําบลบางกร่าง อําเภอเมืองนนทบุรี จังหวัด นนทบุรี 11140
            </li>
            <li class="pb-2 fw-bold text-capitalize">
              <svg class="text-primary" width="25" height="20" aria-hidden="true">
                <use xlink:href="#call"></use>
              </svg>095-795-6695
            </li>


            <li class="">
              <svg class="text-primary" width="25" height="20" aria-hidden="true">
                <use xlink:href="#mail"></use>
              </svg>
              <a href="mailto:">axw.international@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->

<div class="footer-bottom d-flex flex-wrap justify-content-between border-top pt-3 pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p>
          <?php echo constant('page_footer_0'); ?>
        </p>
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