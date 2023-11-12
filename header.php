<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saintsoliderz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="http://saintsoldierz.com/staging/wp-content/uploads/2023/11/ss-logo-w-icon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom-animation.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/pagepiling.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hover-reveal.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/spacing.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->



   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="preloader__content text-center">
               <div class="preloader__top-text d-flex align-items-center justify-content-between">
                  <p class="preloader__loading text-start">Loading</p>
                  <h2 id="tp-loading-number" class="text-end"></h2>
               </div>
               <div id="tp-loading-bar" class="preloader__bar">
                  <div id="tp-loading-line" class="preloader__bar-inner"></div>
               </div>
            </div>
         </div>
      </div>  
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- offcanvas area end -->
   <div class="tp-offcanvas-area">
      <div class="tp-offcanvas-bg is-left"></div>
      <div class="tp-offcanvas-bg is-right d-none d-md-block">
         <div class="tp-offcanvas-shape">
            <img class="tp-offcanvas-shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/offcanvas/bg-shape-2.png" alt="">
         </div>
      </div>
      <div class="tp-offcanvas-wrapper-2">
         <div class="tp-offcanvas-left">
            <div class="tp-offcanvas-left-wrap d-flex justify-content-between align-items-center">
               <div class="tpoffcanvas__logo">
                  <img class="logo-white" src="http://saintsoldierz.com/staging/wp-content/uploads/2023/11/ss-logo.png" alt="">
               </div>
               <div class="tp-offcanvas-close d-md-none text-end">
                  <button class="tp-offcanvas-close-btn tp-offcanvas-close-btn">
                     <span class="text">
                        <span>close</span>
                     </span>
   
                     <span class="d-inline-block">
                        <span>
                           <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.80859 9.80762L28.1934 28.1924" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M9.80859 28.1924L28.1934 9.80761" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </span>
                     </span>
                     
                  </button>
               </div>
            </div>
            <div class="tp-main-menu-mobile menu-hover-active counter-row">
               <nav></nav>
            </div>
         </div>
         <div class="tp-offcanvas-right d-none d-md-block">
            <div class="tp-offcanvas-close text-end">
               <button class="tp-offcanvas-close-btn tp-offcanvas-close-btn">
                  <span class="text">
                     <span>close</span>
                  </span>

                  <span class="d-inline-block">
                     <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.80859 9.80762L28.1934 28.1924" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M9.80859 28.1924L28.1934 9.80761" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </span>
                  
               </button>
            </div>
            <div class="tp-offcanvas-right-inner d-flex flex-column justify-content-between h-100">
               
               <div class="tpoffcanvas__right-info">
                  <div class="tpoffcanvas__tel">
                     <a href="tel:61404093954">+61404093 954</a>
                  </div>
                  <div class="tpoffcanvas__mail">
                     <a href="mailto:hellocontact@diego.com">
                        hello contact@diego.com</a>
                  </div>
                  <div class="tpoffcanvas__text">
                     <p>If in doubt. reach out.</p>
                  </div>
               </div>
               
               <div class="tpoffcanvas__social-link">
                  <ul>
                     <li><a href="#">Dribbble</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Linkedin</a></li>
                     <li><a href="#">Behance</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- offcanvas area start -->

   <!-- header area start -->
   <header>
      <div class="tp-header-3__area tp-header-transparent tp-header-3__ptlr">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-3__logo">
                     <a class="logo-white" href="index.html"><img src="http://saintsoldierz.com/staging/wp-content/uploads/2023/11/ss-logo.png" width="200" height="86" alt=""></a>
                  </div>
               </div>
               <div class="col-xl-6 d-none">
                  <div class="tp-header-4__menu text-center">
                     <nav class="tp-main-menu-content counter-row">
                        <ul>
                           <li class="has-dropdown">
                              <a href="index.html">Home</a>
                              
                           </li>
                           <li><a href="about-me.html">About Me</a></li>
                           <li class="has-dropdown"><a href="service.html">Services</a>
                             
                           </li>
                           <li class="has-dropdown">
                              <a href="portfolio.html">Portfolio</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="portfolio.html">Porfolio</a></li>
                                 <li><a href="portfolio-details.html">Portfolio Details</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blog</a>
                              
                           </li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-3__right-action d-flex align-items-center justify-content-end">
                     
                     <div class="tp-header-3__btn d-none d-md-block">
                        <a class="tp-btn-white" href="contact.html">
                           <span class="text">Let’s Talk</span>
                           <span>
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M4.9297 10.3651C5.12061 10.2162 5.29376 10.043 5.64006 9.69671L9.95722 5.37954C10.0616 5.27517 10.0138 5.0954 9.87438 5.04702C9.36479 4.87022 8.70189 4.53829 8.0818 3.9182C7.46171 3.29811 7.12978 2.63521 6.95299 2.12562C6.9046 1.98617 6.72483 1.9384 6.62046 2.04278L2.30329 6.35994L2.30328 6.35995C1.95699 6.70624 1.78385 6.87939 1.63494 7.0703C1.45928 7.29551 1.30868 7.53919 1.18581 7.79701C1.08164 8.01558 1.00421 8.24789 0.849336 8.71249L0.649225 9.31283L0.331026 10.2674L0.0326691 11.1625C-0.0435433 11.3911 0.0159628 11.6432 0.186379 11.8136C0.356795 11.984 0.608868 12.0435 0.837505 11.9673L1.73258 11.669L2.68717 11.3508L3.28751 11.1507C3.75211 10.9958 3.98442 10.9184 4.20299 10.8142C4.46082 10.6913 4.70449 10.5407 4.9297 10.3651Z" fill="currentcolor"/>
                                 <path d="M11.3089 4.02783C12.2304 3.10641 12.2304 1.61249 11.3089 0.691067C10.3875 -0.230356 8.89359 -0.230356 7.97217 0.691067L7.83337 0.82986C7.69944 0.963792 7.63876 1.15087 7.67222 1.3373C7.69327 1.45458 7.73229 1.62603 7.80327 1.83063C7.94522 2.23979 8.21329 2.77689 8.7182 3.2818C9.22311 3.78671 9.76021 4.05478 10.1694 4.19673C10.374 4.26772 10.5454 4.30673 10.6627 4.32778C10.8491 4.36124 11.0362 4.30056 11.1701 4.16663L11.3089 4.02783Z" fill="currentcolor"/>
                              </svg>
                           </span>
                        </a>
                     </div>
                     <div class="tp-header-3__bar">
                        <button class="tp-menu-bar tp-offcanvas-open-btn">
                           <svg width="32" height="10" viewBox="0 0 32 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M31 1H1" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>
                              <path d="M31 9H1" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->

   <!-- header area start -->
   <header>
      <div class="tp-header-3__area tp-header-transparent tp-header-3__ptlr tp-int-menu tp-header-sticky-cloned">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-3__logo">
                     <a class="logo-white" href="index.html"><img src="http://saintsoldierz.com/staging/wp-content/uploads/2023/11/ss-logo-w-icon.png" width="56" alt=""></a>
                  </div>
               </div>
               <div class="col-xl-6 d-none">
                  <div class="tp-header-4__menu text-center">
                     <nav class="tp-main-menu-content counter-row">
                        <ul>
                           <li class="has-dropdown">
                              <a href="index.html">Home</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="index.html">Freelancer</a></li>
                                 <li><a href="index-2.html">Interface Designer</a></li>
                                 <li><a href="index-3.html">Web Developer</a></li>
                              </ul>
                           </li>
                           <li><a href="about-me.html">About Me</a></li>
                           <li><a href="service.html">Services</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="service.html">Service</a></li>
                                 <li><a href="service-details.html">Service Details</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="portfolio.html">Portfolio</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="portfolio.html">Porfolio</a></li>
                                 <li><a href="portfolio-details.html">Portfolio Details</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="blog.html">Blog</a>
                              <ul class="tp-submenu submenu">
                                 <li><a href="blog.html">Blog List</a></li>
                                 <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                                 <li><a href="blog-details-2.html">Blog Details 02</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-3__right-action d-flex align-items-center justify-content-end">
                     
                     <div class="tp-header-3__btn d-none d-md-block">
                        <a class="tp-btn-white" href="contact.html">
                           <span class="text">Let’s Talk</span>
                           <span>
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M4.9297 10.3651C5.12061 10.2162 5.29376 10.043 5.64006 9.69671L9.95722 5.37954C10.0616 5.27517 10.0138 5.0954 9.87438 5.04702C9.36479 4.87022 8.70189 4.53829 8.0818 3.9182C7.46171 3.29811 7.12978 2.63521 6.95299 2.12562C6.9046 1.98617 6.72483 1.9384 6.62046 2.04278L2.30329 6.35994L2.30328 6.35995C1.95699 6.70624 1.78385 6.87939 1.63494 7.0703C1.45928 7.29551 1.30868 7.53919 1.18581 7.79701C1.08164 8.01558 1.00421 8.24789 0.849336 8.71249L0.649225 9.31283L0.331026 10.2674L0.0326691 11.1625C-0.0435433 11.3911 0.0159628 11.6432 0.186379 11.8136C0.356795 11.984 0.608868 12.0435 0.837505 11.9673L1.73258 11.669L2.68717 11.3508L3.28751 11.1507C3.75211 10.9958 3.98442 10.9184 4.20299 10.8142C4.46082 10.6913 4.70449 10.5407 4.9297 10.3651Z" fill="currentcolor"/>
                                 <path d="M11.3089 4.02783C12.2304 3.10641 12.2304 1.61249 11.3089 0.691067C10.3875 -0.230356 8.89359 -0.230356 7.97217 0.691067L7.83337 0.82986C7.69944 0.963792 7.63876 1.15087 7.67222 1.3373C7.69327 1.45458 7.73229 1.62603 7.80327 1.83063C7.94522 2.23979 8.21329 2.77689 8.7182 3.2818C9.22311 3.78671 9.76021 4.05478 10.1694 4.19673C10.374 4.26772 10.5454 4.30673 10.6627 4.32778C10.8491 4.36124 11.0362 4.30056 11.1701 4.16663L11.3089 4.02783Z" fill="currentcolor"/>
                              </svg>
                           </span>
                        </a>
                     </div>
                     <div class="tp-header-3__bar">
                        <button class="tp-menu-bar tp-offcanvas-open-btn">
                           <svg width="32" height="10" viewBox="0 0 32 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M31 1H1" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>
                              <path d="M31 9H1" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header area end -->


