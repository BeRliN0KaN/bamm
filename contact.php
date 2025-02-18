<?php include "includes/header.php"; ?>

<!-- Page Header Start -->
<section id="intro" class="jarallax" style="background: none;" data-jarallax-original-styles="background: url(images/call-to-action.jpg);">
    <div class="container-sm pt-5 aos-init aos-animate">
        <div class="row py-5 " data-aos="fade-up">
            <div class=" banner-content my-5 py-5 ">
                <h1 class="banner-title light text-titlecase fw-bold">Contact</h1>
                <nav class="breadcrumb mt-3 ">
                    <a href="index.php" class="breadcrumb-item text-white">Home</a>
                    <span class="breadcrumb-item active text-white" aria-current="page"> / Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
        <div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://demo.templatesjungle.com/bamboo/images/call-to-action.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 100%; height: 549.797px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 14.1016px; transform: translate3d(0px, -36.1016px, 0px);"></div>
    </div>
</section>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">
                            <span class="text-primary me-2">#</span><?php echo constant('page_contact_3') ?>
                        </p>
                        <h5 class="mb-0"><?php echo constant('address') ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">
                            <span class="text-primary me-2">#</span><?php echo constant('page_contact_4') ?>
                        </p>
                        <h5 class="mb-0"><?php echo constant('page_footer_3') ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100 bg-light d-flex align-items-center p-5">
                    <div class="btn-lg-square bg-white flex-shrink-0">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">
                            <span class="text-primary me-2">#</span><?php echo constant('page_contact_5') ?>
                        </p>
                        <h5 class="mb-0"><?php echo constant('page_footer_4') ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">#</span>Contact Us</p>
                <h1 class="display-6 mb-4"><?php echo constant('page_contact_2') ?></h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name" />
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email" />
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="subject" placeholder="Subject" />
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">
                                <?php echo constant('page_contact_8') ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px">
                    <map name="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.4281282176473!2d100.4420494271128!3d13.856306800791435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b12d77b8f3f%3A0x44e8497cc05870b8!2z4Lir4Lih4Li54LmI4Lia4LmJ4Liy4LiZ4Lih4Liy4Lii4Lit4Li04Liq4Lij4LiwIOC4o-C4suC4iuC4nuC4pOC4geC4qeC5jA!5e0!3m2!1sth!2sth!4v1739767775291!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </map>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php include "includes/footer.php"; ?>