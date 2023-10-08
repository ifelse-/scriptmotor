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

        <header class="page-header section-padding pb-0 sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="caption">
                            <h6 class="sub-title">What Can I Do ?</h6>
                            <h1 class="fz-55">Building Efficient Infrastructure and Streamlining with Automation.</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 offset-lg-4">
                        <div class="text mt-30">
                            <p>In my DevOps journey, I've learned that collaboration between development and operations teams is the linchpin of success. Together, we build robust infrastructure, automate repetitive tasks, and streamline processes. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-marq xlrg section-padding pb-0">
                <div class="slide-har st1">
                    <div class="box">
                        <div class="item">
                            <h4>AWS</h4>
                        </div>
                        <div class="item">
                            <h4>Git</h4>
                        </div>
                        <div class="item">
                            <h4>Jenkins</h4>
                        </div>
                        <div class="item">
                            <h4>Docker</h4>
                        </div>
                        <div class="item">
                            <h4>Terraform</h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <h4>Prometheus</h4>
                        </div>
                        <div class="item">
                            <h4>Selenium</h4>
                        </div>
                        <div class="item">
                            <h4>Jira</h4>
                        </div>
                        <div class="item">
                            <h4>CI/CD</h4>
                        </div>
                        <div class="item">
                            <h4>Testing</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="serv-box section-padding">
            <div class="container">
                <div class="sec-lg-head mb-80">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="position-re">
                                <h6 class="dot-titl-non mb-10">Dev Ops</h6>
                                <h2 class="fz-60 fw-700">Deployments</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="text">
                                <p>Bridging the Gap: How DevOps Transformed My Development Workflow</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="serv-item md-mb50 radius-10">
                            <div class="icon-img-60 mb-40">
                                <img src="assets/imgs/serv-icons/0.png" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">AWS <br> Social Media App</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="serv-item md-mb50 radius-10">
                            <div class="icon-img-60 mb-40">
                                <img src="assets/imgs/serv-icons/1.png" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">UX/UI Design & <br> Website/App Design</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="serv-item radius-10">
                            <div class="icon-img-60 mb-40">
                                <img src="assets/imgs/serv-icons/2.png" alt="">
                            </div>
                            <h5 class="mb-30 pb-30 bord-thin-bottom">Typography & <br> Video Production</h5>
                            <p>Creating a higher spacing and how people move through a unique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="portfolio-fixed">
            <div class="container-fluid rest">
                <div class="row">
                    <div class="col-lg-6 rest">
                        <div class="left" id="sticky_item">
                            <div id="tab-1" class="img bg-img" data-background="assets/imgs/portfolio/gallery/1.jpg">
                            </div>
                            <div id="tab-2" class="img bg-img" data-background="assets/imgs/portfolio/gallery/2.jpg">
                            </div>
                            <div id="tab-3" class="img bg-img" data-background="assets/imgs/portfolio/gallery/3.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sub-bg right">
                        <div class="cont active" data-tab="tab-1">
                            <div class="img-hiden">
                                <img src="assets/imgs/portfolio/gallery/1.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">From Scratch</span>
                            <h2 class="mb-30">Docker Setup</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="#0" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-2">
                            <div class="img-hiden">
                                <img src="assets/imgs/portfolio/gallery/2.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">From Scratch</span>
                            <h2 class="mb-30">AWS Setup</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="#0" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-3">
                            <div class="img-hiden">
                                <img src="assets/imgs/portfolio/gallery/3.jpg" alt="">
                            </div>
                            <span class="sub-title mb-15">From Scratch</span>
                            <h2 class="mb-30">Jenkins Setup</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-11">
                                    <p>We craft premium designs for agencies and global brands around the globe.</p>
                                    <ul class="rest list-arrow mt-30">
                                        <li>
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your business visible online.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Make your eCommerce business stand out.</h6>
                                        </li>
                                        <li class="mt-5">
                                            <span class="icon">
                                                <svg width="100%" height="100%" viewBox="0 0 9 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.71108 3.78684L8.22361 4.29813L7.71263 4.80992L4.64672 7.87832L4.13433 7.36688L6.87531 4.62335H1.11181H0.750039H0.388177L0.382812 0.718232H1.10645L1.11082 3.90005H6.80113L4.12591 1.22972L4.63689 0.718262L7.71108 3.78684Z"
                                                        fill="#fff"></path>
                                                </svg>
                                            </span>
                                            <h6 class="inline fz-16 fw-400">Grow with your audience.</h6>
                                        </li>
                                    </ul>
                                    <a href="#0" class="butn-circle d-flex align-items-center text-center mt-50">
                                        <div class="full-width">
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg></span>
                                            <span class="full-width">View Details</span>
                                        </div>
                                        <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start services tabs ==================== -->

        <section class="services-tab section-padding">
            <div class="container">
                <div class="row" id="tabs">
                    <div class="col-lg-6 order2">
                        <div class="serv-tab-cont mb-80">
                            <div class="tab-content current" id="tabs-1">
                                <div class="item">
                                    <div class="img">
                                        <img class="rotate-circle" src="assets/imgs/dev-flow.png" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Git is a distributed version control system widely used for source code management and collaboration.</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-2">
                                <div class="item">
                                    <div class="img">
                                    <img class="rotate-circle" src="assets/imgs/dev-flow.png" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Docker is a containerization platform that allows you to package applications and their dependencies into containers for easy deployment and scalability.</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-3">
                                <div class="item">
                                    <div class="img">
                                    <img class="rotate-circle" src="assets/imgs/dev-flow.png" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Jenkins is a popular open-source automation server that facilitates continuous integration and continuous delivery (CI/CD) pipelines.</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-4">
                                <div class="item">
                                    <div class="img">
                                    <img class="rotate-circle" src="assets/imgs/dev-flow.png" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Terraform is an infrastructure as code (IaC) tool for provisioning and managing infrastructure resources across multiple cloud providers.</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="tabs-5">
                                <div class="item">
                                    <div class="img">
                                    <img src="assets/imgs/dev-flow.png" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Selenium is an open-source testing framework for web applications. It allows you to automate browser actions and perform functional testing across different browsers and platforms.</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 valign order1">
                        <div class="serv-tab-link tab-links full-width md-mb50">
                            <div class="sec-lg-head mb-80">
                                <h6 class="dot-titl-non mb-15">Automation: Empowering Developers and Operations</h6>
                                <p>Automation is the heart of DevOps. From CI/CD pipelines to auto-scaling, automation streamlines workflows, reduces errors, and accelerates releases. </p>
                            </div>
                            <ul class="rest">
                                <li class="item-link current mb-15" data-tab="tabs-1"><span>01</span> Git</li>
                                <li class="item-link mb-15" data-tab="tabs-2"><span>02</span> Docker</li>
                                <li class="item-link mb-15" data-tab="tabs-3"><span>03</span> Jenkins</li>
                                <li class="item-link mb-15" data-tab="tabs-4"><span>04</span> Terraform</li>
                                <li class="item-link" data-tab="tabs-4"><span>05</span> Selenium</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End services tabs ==================== -->



        <!-- ==================== Start about ==================== -->

        <section class="intro-corp section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-head mb-40">
                            <h6 class="sub-title">Key Areas.</h6>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cont">
                            <div class="text">
                                <h2 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Three must-know areas for DevOps</span>
                                    </span>
                                
                                </h2>
                            </div>
                            <div class="accordion bord mt-40">

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".1s">
                                    <div class="title">
                                        <h6 class="fz-18">Continuous Integration/Continuous Delivery (CI/CD)</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">CI/CD is the backbone of DevOps. Understanding how to create automated pipelines for building, testing, and deploying applications is essential. This includes knowledge of tools like Jenkins, Git, and Docker.</p>
                                    </div>
                                </div>

                                <div class="item mb-15 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="title">
                                        <h6 class="fz-18">Infrastructure as Code (IaC)</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">IaC involves managing and provisioning infrastructure using code. Tools like Terraform and Ansible are crucial for automating infrastructure tasks, enabling efficient scaling and version control.</p>
                                    </div>
                                </div>

                                <div class="item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="title">
                                        <h6 class="fz-18">Monitoring and Observability</h6>
                                        <span class="ico"></span>
                                    </div>
                                    <div class="accordion-info">
                                        <p class="fz-14">DevOps engineers should know how to monitor applications and infrastructure effectively. Tools like Prometheus and Grafana help collect and visualize data to identify issues proactively.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->

    </main>

    <!-- ==================== Start call to action ==================== -->

    <section class="call-action-img">
        <div class="container">
            <div class="sec-bg-img bg-img parallaxie" data-background="assets/imgs/background/2.jpg"></div>
            <div class="sec-lg-head section-padding">
                <div class="row ontop">
                    <div class="col-11 d-flex align-items-center">
                        <div>
                            <h2 class="fz-50 d-rotate wow">
                                <span class="rotate-text">Have a project in mind?</span>
                                <span class="rotate-text">Let’s <span>get to work</span>.</span>
                            </h2>
                        </div>
                        <div class="ml-auto">
                            <a href="#0" class="butn-circle d-flex align-items-center text-center mt-50 m-auto">
                                <div class="full-width">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                fill="currentColor"></path>
                                        </svg></span>
                                    <span class="full-width">Get In Touch</span>
                                </div>
                                <img src="assets/imgs/svg-assets/circle-star.svg" alt="" class="circle-star">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End call to action ==================== -->



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