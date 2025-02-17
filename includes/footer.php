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