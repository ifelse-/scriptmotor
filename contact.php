<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Title  -->
    <title>ScriptMotor</title>
    <?php include_once('includes/head.php') ?>
</head>

<body class="main-bg">



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <?php include_once('includes/nav.php') ?>

    <!-- ==================== End Navbar ==================== -->

    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">Contact Us</h6>
                            <h1 class="fz-55">Let's make <br> your brand brilliant!</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>We help our clients succeed by creating brand identities, digital experiences, and print materials that communicate clearly, achieve marketing goals, and look fantastic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                            <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                            <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                                touch, we’d love to hear from you!</p>
                            <div class="phone fz-30 fw-600 mt-30 underline">
                                <a href="#0">+1 840 841 25 69</a>
                            </div>
                            <ul class="rest social-text d-flex mt-60">
                                <li class="mr-30">
                                    <a href="#0">Facebook</a>
                                </li>
                                <li class="mr-30">
                                    <a href="#0">Twitter</a>
                                </li>
                                <li class="mr-30">
                                    <a href="#0">LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#0">Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                required="required"></textarea>
                                        </div>
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

    </main>

    <!-- ==================== Start Footer ==================== -->

    <?php include_once('includes/footer.php') ?>


    <!-- ==================== End Footer ==================== -->










    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/ScrollTrigger.min.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>