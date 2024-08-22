<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title>Job Board - Job Portal</title>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="keywords"
        content="applicant, candidate, career, companies, employment, freelancer, job board, job directory, Job guru, job listing, job posting, job seeker, recruiting, resume, resume listing">
    <meta name="description"
        content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:title" content="Job Board - Job Portal HTML Template + RTL and Dark layout">
    <meta property="og:description"
        content="JobBoard: is a flexible and smooth theme to make it simple as possible to create a professional job portal website. It covers all the features that are necessary for job board like searching option, login and register.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/templete.css">
    <link class="skin" rel="stylesheet" type="text/css" href="./assets/css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/dark-layout.css">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;family=Rubik:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper bg-white">
        <?php
        if (isset($_SESSION['email'])) {
            include_once './header2.php';
        } else {
            include_once './header.php';
        }
        ?>
        <!-- header END -->
        <div class="page-content">
            <!-- Section Banner -->
            <div class="content-inner-1 main-bnr">
                <div class="bg-circle-bx"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h5>We Have <span id="job-count"></span>Live Jobs
                                    <h1>Your <span class="text-primary">Dream</span> Job Is Waiting For You
                                        <h6>Type your keywork, then click search to find your perfect job.</h6>
                                        <div class="find-job-bx style-1">
                                            <form class="dezPlaceAni"
                                                action="https://job-board.dexignzone.com/xhtml/category-all-jobs.html"
                                                id="FindJob">
                                                <div class="row align-items-center find-job-bx-inner">
                                                    <div class="col-sm-9 col-9  find-job-bx-inner1">
                                                        <div class="row align-items-center dz-input-group">
                                                            <div class="col-sm-6 col-6  dz-input-group-inner">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g clip-path="url(#clip0_4_85)">
                                                                                        <path
                                                                                            d="M18.5575 17.5437L14.0426 12.848C15.2034 11.468 15.8395 9.7317 15.8395 7.92414C15.8395 3.70097 12.4035 0.265015 8.18036 0.265015C3.95719 0.265015 0.52124 3.70097 0.52124 7.92414C0.52124 12.1473 3.95719 15.5833 8.18036 15.5833C9.7658 15.5833 11.2766 15.1051 12.5684 14.1973L17.1176 18.9286C17.3077 19.1261 17.5635 19.235 17.8375 19.235C18.0969 19.235 18.343 19.1361 18.5298 18.9563C18.9268 18.5743 18.9394 17.941 18.5575 17.5437ZM8.18036 2.26305C11.302 2.26305 13.8415 4.80255 13.8415 7.92414C13.8415 11.0457 11.302 13.5852 8.18036 13.5852C5.05877 13.5852 2.51927 11.0457 2.51927 7.92414C2.51927 4.80255 5.05877 2.26305 8.18036 2.26305Z"
                                                                                            fill="var(--primary)" />
                                                                                    </g>
                                                                                    <defs>
                                                                                        <clipPath id="clip0_4_85">
                                                                                            <rect width="18.97"
                                                                                                height="18.97"
                                                                                                fill="white"
                                                                                                transform="translate(0.193542 0.265015)" />
                                                                                        </clipPath>
                                                                                    </defs>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Job Title, Keywords"
                                                                            id="keywords">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-6  dz-input-group-inner">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <svg width="21" height="21"
                                                                                    viewBox="0 0 21 21" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g clip-path="url(#clip0_4_89)">
                                                                                        <path
                                                                                            d="M10.1935 0.75C6.31651 0.75 3.16229 3.90422 3.16229 7.78125C3.16229 9.09117 3.52514 10.3695 4.21186 11.4786L9.79331 20.473C9.90022 20.6453 10.0886 20.75 10.2912 20.75C10.2927 20.75 10.2942 20.75 10.2958 20.75C10.5001 20.7484 10.6889 20.6405 10.7939 20.4652L16.233 11.3836C16.8819 10.298 17.2248 9.05231 17.2248 7.78125C17.2248 3.90422 14.0706 0.75 10.1935 0.75ZM15.2274 10.782L10.2823 19.0385L5.20788 10.8612C4.63628 9.93805 4.32636 8.87305 4.32636 7.78125C4.32636 4.55039 6.96268 1.91406 10.1935 1.91406C13.4244 1.91406 16.0568 4.55039 16.0568 7.78125C16.0568 8.84066 15.7673 9.87844 15.2274 10.782Z"
                                                                                            fill="var(--primary)" />
                                                                                        <path
                                                                                            d="M10.1935 4.26562C8.25503 4.26562 6.67792 5.84273 6.67792 7.78125C6.67792 9.70738 8.22936 11.2969 10.1935 11.2969C12.1819 11.2969 13.7092 9.68621 13.7092 7.78125C13.7092 5.84273 12.1321 4.26562 10.1935 4.26562ZM10.1935 10.1328C8.89444 10.1328 7.84198 9.07684 7.84198 7.78125C7.84198 6.48891 8.9012 5.42969 10.1935 5.42969C11.4859 5.42969 12.5412 6.48891 12.5412 7.78125C12.5412 9.05793 11.5132 10.1328 10.1935 10.1328Z"
                                                                                            fill="var(--primary)" />
                                                                                    </g>
                                                                                    <defs>
                                                                                        <clipPath id="clip0_4_89">
                                                                                            <rect width="20" height="20"
                                                                                                fill="white"
                                                                                                transform="translate(0.193542 0.75)" />
                                                                                        </clipPath>
                                                                                    </defs>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="City Or Postcode">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-3 find-job-bx-inner1">
                                                        <button type="submit" class="site-button btn-block">Find
                                                            Job</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="dz-searches d-flex align-items-center">
                                            <h4>Popular Searches :</h4><span>Designer, Senor, Architecture, IOS,
                                                Etc.</span>
                                        </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-media">
                                <div class="banner-main-media">
                                    <img src="./assets/images/man.png" alt="">
                                </div>
                                <div class="banner-media-bg">
                                    <div class="bnr-circle1">
                                        <img src="./assets/images/banner/microsoft.svg" class="banner-icon1" alt="">
                                    </div>
                                    <div class="bnr-circle2">
                                        <img src="./assets/images/banner/google.svg" class="banner-icon1" alt="">
                                        <img src="./assets/images/banner/logo.svg" class="banner-icon2" alt="">
                                        <img src="./assets/images/banner/amazon.svg" class="banner-icon3" alt="">
                                    </div>
                                    <div class="bnr-circle3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back-circle"></div>
                <div class="back-circle2"></div>
            </div>
            <!-- Section Banner END -->
            <!-- Partners -->
            <div class="section-full content-inner-1 partners bg-white style-1">
                <div class="container" id="logo">
                    <!-- <div class="our-partners item-center owl-loaded owl-theme owl-carousel owl-none mfp-gallery owl-dots-none" > -->

                </div>
            </div>
        </div>
        <!-- Partners End-->
        <!-- About Work -->
        <!-- About Work END -->
        <!-- Our Job -->
        <div class="section-full bg-white content-inner-1 recent-jobs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-head style-1">
                            <h6>Recent Job</h6>
                            <h5 class="section-title-2">Over all 10,00+ Talented People Registered in Our Website </h5>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <a href="javascript:void(0);" class="site-button style-1">Join Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dz-job-media">
                            <img src="./assets/images/man1.png" alt="">
                            <svg width="892" height="733" viewBox="0 0 892 733" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M61.3623 116.435C23.5447 121.128 -3.30874 155.589 1.38355 193.406L44.2694 539.047C47.5755 565.692 65.66 586.895 89.2844 595.456C95.1286 598.219 101.463 600.202 108.175 601.249L941.587 731.348C979.239 737.225 1014.53 711.467 1020.4 673.815L1050.07 483.78L1053.09 483.404C1090.91 478.712 1117.77 444.251 1113.07 406.433L1070.19 60.7929C1065.5 22.9753 1031.03 -3.87817 993.217 0.81412L61.3623 116.435Z"
                                    fill="#2E55FA" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Job END -->
        <!-- Job Category -->
        <div class="section-full job-category content-inner-1 bg-white">
            <div class="container">
                <div class="section-head text-center style-1">
                    <h6>Jobs Category</h6>
                    <h2 class="section-title-3">Choose Your Desire Category </h2>
                    <p>There are many variations of passages of available, but the majority have suffered
                        some form, by injected humour, or look even slightly believable.</p>
                </div>
                <div class="row sp20 wrapper-spacing" id="job-category">
                    <!-- Job Category -->
                </div>
            </div>
            <div class="back-circle"></div>
            <div class="back-circle2"></div>
        </div>
        <!-- Job Category END -->
        <!-- Latest jobs -->
        <div class="section-full latest-jobs content-inner-1 bg-white">
            <div class="container">
                <div class="latest-jobs-inner">
                    <div class="section-head style-1">
                        <h6>Latest Job</h6>
                        <h2 class="section-title-3">New Job Offer</h2>
                        <p class="dz-text-2">More Than +500 Job Offer Everyday</p>
                    </div>
                    <a href="javascript:void(0);" class="site-button style-1">Post a Job</a>
                </div>
                <div class="row sp20 m-b20" id="latestJob">

                </div>

                <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="exampleModalLabel">Job Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="jobDetails">Loading job details....</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="job_apply">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jobs-btn">
                    <a href="category-all-jobs.php" class="site-button style-1">Load More</a>
                </div>
            </div>
        </div>
        <!-- Latest jobs END -->
        <!-- Reviews Testimonial -->
        <div class="section-full content-inner-2 testimonials bg-white">
            <div class="container">
                <div class="section-head style-1 text-center">
                    <h6>Clents Testimonials</h6>
                    <h2 class="section-title-3">What A Job Holder Says About Us</h2>
                    <p class="dz-text-2">There are many variations of passages of available, but the majority have
                        suffered
                        some form, by injected humour, or look even slightly believable.</p>
                </div>
                <div
                    class="review-testimonial owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 owl-dots-none">
                    <div class="item">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-inner">
                                <div class="bg-img">
                                    <svg width="64" height="46" viewBox="0 0 64 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M50.6293 17.2257C50.5004 15.8322 50.599 12.0441 54.2279 6.77654C54.5024 6.37904 54.4526 5.84295 54.1117 5.50214C52.6322 4.02264 51.7162 3.08904 51.0737 2.43575C50.2289 1.57434 49.8432 1.18184 49.2787 0.670045C48.9018 0.331244 48.3315 0.325345 47.9506 0.657445C41.6254 6.16134 34.6 17.5343 35.6166 31.4679C36.2123 39.6495 42.1801 45.588 49.8061 45.588C57.6322 45.588 63.9994 39.2218 63.9994 31.3956C63.9994 23.8458 58.0737 17.6544 50.6293 17.2257ZM49.8061 43.588C43.2572 43.588 38.1293 38.4298 37.6108 31.3234C36.4672 15.6525 45.7826 5.47284 48.5971 2.77754C48.8715 3.04805 49.185 3.36634 49.6469 3.83704C50.2035 4.40345 50.9653 5.17884 52.1176 6.33514C47.7123 13.1222 48.5434 17.9581 48.9076 18.6515C49.0805 18.9806 49.435 19.2023 49.8061 19.2023C56.5297 19.2023 61.9994 24.672 61.9994 31.3956C61.9994 38.1183 56.5297 43.588 49.8061 43.588Z"
                                            fill="#2E55FA" />
                                        <path
                                            d="M15.1137 17.2257C14.9838 15.8361 15.0795 12.0509 18.7123 6.77654C18.9858 6.37904 18.9369 5.84294 18.5961 5.50214C17.1195 4.02554 16.2045 3.09294 15.5629 2.43964C14.7153 1.57634 14.3285 1.18274 13.7641 0.670039C13.3871 0.331239 12.8168 0.326339 12.436 0.656439C6.11077 6.16034 -0.915635 17.5314 0.0989652 31.4679C0.696665 39.6485 6.66537 45.588 14.2914 45.588C22.1176 45.588 28.4848 39.2218 28.4848 31.3956C28.4848 23.8449 22.559 17.6525 15.1137 17.2257ZM14.2914 43.588C7.74357 43.588 2.61267 38.4298 2.09316 31.3224C0.952565 15.6476 10.268 5.47184 13.0824 2.77754C13.3578 3.04804 13.6723 3.36834 14.1352 3.84004C14.6908 4.40644 15.4516 5.18084 16.602 6.33514C12.1967 13.1232 13.0278 17.9581 13.392 18.6505C13.5649 18.9796 13.9203 19.2023 14.2914 19.2023C21.0151 19.2023 26.4848 24.672 26.4848 31.3956C26.4848 38.1183 21.0151 43.588 14.2914 43.588Z"
                                            fill="#2E55FA" />
                                    </svg>
                                </div>
                                <div class="testimonial-pic style-1">
                                    <div class="testimonial-pic-circle"></div>
                                    <div class="profile-pic">
                                        <img src="./assets/images/testimonials/pic4.png" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <h5 class="profile-name">Andnew Smith</h5>
                                    <span>One Year With Us</span>
                                </div>
                                <p class="dz-text-3">It is a long established fact that a reader
                                    will be distracted by readable content
                                    of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-inner">
                                <div class="bg-img">
                                    <svg width="64" height="46" viewBox="0 0 64 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M50.6293 17.2257C50.5004 15.8322 50.599 12.0441 54.2279 6.77654C54.5024 6.37904 54.4526 5.84295 54.1117 5.50214C52.6322 4.02264 51.7162 3.08904 51.0737 2.43575C50.2289 1.57434 49.8432 1.18184 49.2787 0.670045C48.9018 0.331244 48.3315 0.325345 47.9506 0.657445C41.6254 6.16134 34.6 17.5343 35.6166 31.4679C36.2123 39.6495 42.1801 45.588 49.8061 45.588C57.6322 45.588 63.9994 39.2218 63.9994 31.3956C63.9994 23.8458 58.0737 17.6544 50.6293 17.2257ZM49.8061 43.588C43.2572 43.588 38.1293 38.4298 37.6108 31.3234C36.4672 15.6525 45.7826 5.47284 48.5971 2.77754C48.8715 3.04805 49.185 3.36634 49.6469 3.83704C50.2035 4.40345 50.9653 5.17884 52.1176 6.33514C47.7123 13.1222 48.5434 17.9581 48.9076 18.6515C49.0805 18.9806 49.435 19.2023 49.8061 19.2023C56.5297 19.2023 61.9994 24.672 61.9994 31.3956C61.9994 38.1183 56.5297 43.588 49.8061 43.588Z"
                                            fill="#2E55FA" />
                                        <path
                                            d="M15.1137 17.2257C14.9838 15.8361 15.0795 12.0509 18.7123 6.77654C18.9858 6.37904 18.9369 5.84294 18.5961 5.50214C17.1195 4.02554 16.2045 3.09294 15.5629 2.43964C14.7153 1.57634 14.3285 1.18274 13.7641 0.670039C13.3871 0.331239 12.8168 0.326339 12.436 0.656439C6.11077 6.16034 -0.915635 17.5314 0.0989652 31.4679C0.696665 39.6485 6.66537 45.588 14.2914 45.588C22.1176 45.588 28.4848 39.2218 28.4848 31.3956C28.4848 23.8449 22.559 17.6525 15.1137 17.2257ZM14.2914 43.588C7.74357 43.588 2.61267 38.4298 2.09316 31.3224C0.952565 15.6476 10.268 5.47184 13.0824 2.77754C13.3578 3.04804 13.6723 3.36834 14.1352 3.84004C14.6908 4.40644 15.4516 5.18084 16.602 6.33514C12.1967 13.1232 13.0278 17.9581 13.392 18.6505C13.5649 18.9796 13.9203 19.2023 14.2914 19.2023C21.0151 19.2023 26.4848 24.672 26.4848 31.3956C26.4848 38.1183 21.0151 43.588 14.2914 43.588Z"
                                            fill="#2E55FA" />
                                    </svg>
                                </div>
                                <div class="testimonial-pic style-1">
                                    <div class="testimonial-pic-circle"></div>
                                    <div class="profile-pic">
                                        <img src="./assets/images/testimonials/pic5.png" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <h5 class="profile-name">Max Makina</h5>
                                    <span>One Year With Us</span>
                                </div>
                                <p class="dz-text-3">It is a long established fact that a reader
                                    will be distracted by readable content
                                    of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-inner">
                                <div class="bg-img">
                                    <svg width="64" height="46" viewBox="0 0 64 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M50.6293 17.2257C50.5004 15.8322 50.599 12.0441 54.2279 6.77654C54.5024 6.37904 54.4526 5.84295 54.1117 5.50214C52.6322 4.02264 51.7162 3.08904 51.0737 2.43575C50.2289 1.57434 49.8432 1.18184 49.2787 0.670045C48.9018 0.331244 48.3315 0.325345 47.9506 0.657445C41.6254 6.16134 34.6 17.5343 35.6166 31.4679C36.2123 39.6495 42.1801 45.588 49.8061 45.588C57.6322 45.588 63.9994 39.2218 63.9994 31.3956C63.9994 23.8458 58.0737 17.6544 50.6293 17.2257ZM49.8061 43.588C43.2572 43.588 38.1293 38.4298 37.6108 31.3234C36.4672 15.6525 45.7826 5.47284 48.5971 2.77754C48.8715 3.04805 49.185 3.36634 49.6469 3.83704C50.2035 4.40345 50.9653 5.17884 52.1176 6.33514C47.7123 13.1222 48.5434 17.9581 48.9076 18.6515C49.0805 18.9806 49.435 19.2023 49.8061 19.2023C56.5297 19.2023 61.9994 24.672 61.9994 31.3956C61.9994 38.1183 56.5297 43.588 49.8061 43.588Z"
                                            fill="#2E55FA" />
                                        <path
                                            d="M15.1137 17.2257C14.9838 15.8361 15.0795 12.0509 18.7123 6.77654C18.9858 6.37904 18.9369 5.84294 18.5961 5.50214C17.1195 4.02554 16.2045 3.09294 15.5629 2.43964C14.7153 1.57634 14.3285 1.18274 13.7641 0.670039C13.3871 0.331239 12.8168 0.326339 12.436 0.656439C6.11077 6.16034 -0.915635 17.5314 0.0989652 31.4679C0.696665 39.6485 6.66537 45.588 14.2914 45.588C22.1176 45.588 28.4848 39.2218 28.4848 31.3956C28.4848 23.8449 22.559 17.6525 15.1137 17.2257ZM14.2914 43.588C7.74357 43.588 2.61267 38.4298 2.09316 31.3224C0.952565 15.6476 10.268 5.47184 13.0824 2.77754C13.3578 3.04804 13.6723 3.36834 14.1352 3.84004C14.6908 4.40644 15.4516 5.18084 16.602 6.33514C12.1967 13.1232 13.0278 17.9581 13.392 18.6505C13.5649 18.9796 13.9203 19.2023 14.2914 19.2023C21.0151 19.2023 26.4848 24.672 26.4848 31.3956C26.4848 38.1183 21.0151 43.588 14.2914 43.588Z"
                                            fill="#2E55FA" />
                                    </svg>
                                </div>
                                <div class="testimonial-pic style-1">
                                    <div class="testimonial-pic-circle"></div>
                                    <div class="profile-pic">
                                        <img src="./assets/images/testimonials/pic3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <h5 class="profile-name">Makima Smith</h5>
                                    <span>One Year With Us</span>
                                </div>
                                <p class="dz-text-3">It is a long established fact that a reader
                                    will be distracted by readable content
                                    of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reviews Testimonial END -->
    </div>
    <!-- Content End -->
    <!-- Modal Box -->
    <div class="section-full find-jobs">
        <div class="container">
            <div class="find-jobs-inner">
                <div class="section-head style-1">
                    <h3>Let’s Get Connected And Start
                        Finding Your Dream Job</h3>
                </div>
                <a href="javascript:void(0);" class="site-button style-1">Click Here</a>
            </div>
        </div>
    </div>
    <!-- Modal Box End -->
    <!-- Footer -->
    <footer class="site-footer style-1">
        <?php
        if (isset($_SESSION['email'])) {
            include_once './footer2.php';
        } else {
            include_once './footer.php';
        }
        ?>
    </footer>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up"></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="../xhtml/assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="../xhtml/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="../xhtml/assets/plugins/wow/wow.js"></script><!-- FORM JS -->
    <script src="../xhtml/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="../xhtml/assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <!-- FORM JS -->
    <script src="../xhtml/assets/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="../xhtml/assets/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="../xhtml/assets/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="../xhtml/assets/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="../xhtml/assets/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="../xhtml/assets/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="../xhtml/assets/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="../xhtml/assets/plugins/scroll/scrollbar.min.js"></script><!-- OWL SLIDER -->
    <script src="../xhtml/assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="../xhtml/assets/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="../xhtml/assets/js/dz.ajax.js"></script><!-- CONTACT JS  -->
    <!-- <script src="../xhtml/assets/plugins/switcher/switcher.js"></script>SWITCHER -->
    <script src="../xhtml/assets/js/index.js"></script>
    <script src="../xhtml/assets/js/signOut.js"></script><!-- Sign out  -->


</body>

</html>