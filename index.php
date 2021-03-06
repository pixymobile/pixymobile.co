<!doctype html>
<html class="no-js" lang="tr">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Pixy - Mobile Development </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/preloader.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/backToTop.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="assets/css/elegantFont.css">
      <link rel="stylesheet" href="assets/css/default.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      
      <!-- Add your site or application content here -->  

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

  
         <?php
               $foo = include 'header_v1.php';
      
     
         ?>
      

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>kapat</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="assets/img/logo/logo.svg" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu mobile-menu-3"></div>
               <div class="sidebar__info mt-350">
                <!--   <a href="#" class="w-btn w-btn-blue-2 w-btn-4 d-block mb-15 mt-15">login</a>
                  <a href="#" class="w-btn w-btn-blue d-block">sign up</a>-->
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

     <main>


         <!-- hero area start -->
         <section class="hero__area hero__height-3 hero__bg p-relative d-flex align-items-center" data-background="/assets/img/hero/home-1/hero-bg.jpg" style="background-image: url(&quot;/assets/img/hero/home-1/hero-bg.jpg&quot;);">
            <div class="hero__shape">
               <img class="hero-circle-1" src="assets/img/icon/hero/home-1/circle-1.png" alt="">
               <img class="hero-circle-2" src="assets/img/icon/hero/home-1/circle-2.png" alt="">
               <img class="hero-triangle-1" src="assets/img/icon/hero/home-1/triangle-1.png" alt="">
               <img class="hero-triangle-2" src="assets/img/icon/hero/home-1/triangle-2.png" alt="">
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                     <div class="hero__thumb-3 ">
                        <img class="hero-phone wow fadeInLeft" data-wow-delay=".3s" src="assets/img/hero/home-3/hero-phone.png" alt="" style="visibility: visible; animation-delay: 0.3s;">
                        <img class="hero-3-gradient" src="assets/img/icon/hero/home-3/hero-gradient-circle.png" alt="">
                        <img class="hero-3-dot-2" src="assets/img/icon/hero/home-3/hero-dot-2.png" alt="">
                     </div>
                  </div>
                  <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                     <div class="hero__content-3 mb-100 pl-70">
                        <h3 class="hero__title wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;"> Ninja VPN</h3>
                        <p class="wow fadeInUp" style="color: black;" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;">Her uygulamam??z??n i??inde emek var. En ince ayr??nt??s??na kadar biz tasarl??yoruz ve geli??tiriyoruz!</p>

                        <div class="hero__app wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s;">
                           <ul>
                              <li>
                                 <a href="https://play.google.com/store/apps/details?id=com.free.vpn.ninja&hl" target="_blank" class="d-flex align-items-center active">
                                    <div class="hero__app-icon">
                                       <i class="fab fa-google-play"></i>
                                    </div>
                                    <div class="hero__app-content">
                                       <h5>Available on the</h5>
                                       <span> Google Play </span>
                                    </div>
                                 </a>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

         <!-- services area start -->
       <section class="services__area p-relative pt-150 pb-130">
            <div class="services__shape">
               <img class="services-circle-1" src="assets/img/icon/services/home-1/circle-1.png" alt="">
               <img class="services-circle-2" src="assets/img/icon/services/home-1/circle-2.png" alt="">
               <img class="services-dot" src="assets/img/icon/services/home-1/dot.png" alt="">
               <img class="services-triangle" src="assets/img/icon/services/home-1/triangle.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 col-md-10 offset-md-1 p-0">
                     <div class="section__title-wrapper text-center mb-75 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <h2 class="section__title">Harika Uygulamalar yaz??yoruz! </h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="services__item white-bg text-center transition-3 ">
                           <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                              <img src="assets/img/icon/services/home-1/services-1.png" alt="">
                           </div>
                           <div class="services__content">
                              <h3 class="services__title"><a href="services-details.html">Geli??tirme</a></h3>
                              <p>En optimize kodlar?? yaz??p uygulamam??z i??ine yerle??tiririz.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="services__item white-bg mb-30 text-center transition-3">
                           <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                              <img src="assets/img/icon/services/home-1/services-2.png" alt="">
                           </div>
                           <div class="services__content">
                              <h3 class="services__title"><a href="services-details.html">Ara??t??rma</a></h3>
                              <p>Uygulamam??z hakk??nda bilgi edinirken her kayna???? tarar??z.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="services__inner hover__active mb-30 wow fadeInUp active" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="services__item white-bg text-center transition-3">
                           <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                              <img src="assets/img/icon/services/home-1/services-3.png" alt="">
                           </div>
                           <div class="services__content">
                              <h3 class="services__title"><a href="services-details.html">Pazarlama</a></h3>
                              <p>Ara??t??rmalar??m??zdan sonra do??ru hedef kitleye ula????r??z.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="services__inner hover__active mb-30 wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <div class="services__item white-bg text-center transition-3">
                           <div class="services__icon mb-25 d-flex align-items-end justify-content-center">
                              <img src="assets/img/icon/services/home-1/services-4.png" alt="">
                           </div>
                           <div class="services__content">
                              <h3 class="services__title"><a href="services-details.html">Teknoloji</a></h3>
                              <p>Hedeflerimizi tutturmak i??in son teknolojiyi takip eder ve kullan??r??z.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- services area end -->

         <!-- about area start -->
         <section class="about__area pb-120 p-relative">
            <div class="about__shape">
               <img class="about-triangle" src="assets/img/icon/about/home-1/triangle.png" alt="">
               <img class="about-circle" src="assets/img/icon/about/home-1/circle.png" alt="">
               <img class="about-circle-2" src="assets/img/icon/about/home-1/circle-2.png" alt="">
               <img class="about-circle-3" src="assets/img/icon/about/home-1/circle-3.png" alt="">
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-9">
                     <div class="about__wrapper mb-10">
                        <div class="section__title-wrapper mb-25">
                         <h2 class="section__title">Kullan??c??lar??m??z?? anlay??p uygulamam??z?? ona g??re ??ekillendiriyoruz.</h2>
                           <p>Kullan??c??lar??m??z??n istedikleri bizim ??ok ??nemli, bu y??zden aray??ze ve kod yap??s??na ??ok ??nem veriyoruz. En basit ama bir o kadarda efektif uygulamalar yarat??yoruz.</p>
                        </div>
                        <ul>
                           <li>G??ncel repo ve trend olan tasar??m anlay????lar??n?? benimsiyoruz.</li>
                           <li>Kullan??c??lar??m??z??n davran????lar??na g??re uygulamalar??m??z?? s??rekli g??ncelliyoruz.</li>
                        </ul>
                      
                     </div>



                  </div>
                  <div class="col-xxl-6 offset-xxl-1 col-xl-6 col-lg-6 col-md-10 order-first order-lg-last">
                     <div class="about__thumb-wrapper p-relative ml-40 fix text-end">
                        <img src="assets/img/about/home-1/about-bg.png" alt="">
                        <div class="about__thumb p-absolute">
                           <img class="bounceInUp wow about-big" data-wow-delay=".3s" src="assets/img/about/home-1/about-1.png" alt="" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                           <img class="about-sm" src="assets/img/about/home-1/about-1-1.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="about__area pb-160 pt-80 p-relative">
            <div class="about__shape">
               <img class="about-plus" src="assets/img/icon/about/home-1/plus.png" alt="">
               <img class="about-triangle-2" src="assets/img/icon/about/home-1/triangle-2.png" alt="">
               <img class="about-circle-4" src="assets/img/icon/about/home-1/circle-4.png" alt="">
               <img class="about-circle-5" src="assets/img/icon/about/home-1/circle-5.png" alt="">
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="about__thumb-wrapper p-relative ml--30 fix mr-70">
                        <img src="assets/img/about/home-1/about-bg-2.png" alt="">
                        <div class="about__thumb about__thumb-2 p-absolute wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                           <img class="about-big bounceInUp wow" data-wow-delay=".5s" src="assets/img/about/home-1/about-2.png" alt="" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">
                           <img class="about-sm about-sm-2" src="assets/img/about/home-1/about-2-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9">
                     <div class="about__wrapper about__wrapper-2 ml-60 mb-30">
                        <div class="section__title-wrapper mb-25">
                           <h2 class="section__title">S??rad?????? i??ler yap??yoruz</h2>
                           <p>Tasar??m ve kod anlam??nda s??rad?????? i??ler yap??yoruz ve kullan??c??lar??m??z uygulamalar??m??zdan tam performans almas??n?? sa??l??yoruz.</p>
                        </div>
                        <ul>
                           <li>Tasar??mlar?? en minimal ve kullan????l?? ??ekilde haz??rl??yoruz</li>
                           <li>Trendleri takip ederek, en iyisi i??in ??abal??yoruz</li>
                             <li>Kod mimarisini takip ederek, performansa asla d??????rmeyecek uygulamalar sunuyoruz.</li>
                        </ul>
                       
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about area end -->

         <!-- app downloads area start -->
        <section class="features__area pt-135 pb-120 p-relative">
            <div class="features__shape-2">
               <img class="features-2-dot" src="assets/img/icon/features/home-2/features-dot.png" alt="">
               <img class="features-2-dot-2" src="assets/img/icon/features/home-2/features-dot-2.png" alt="">
               <img class="features-2-dot-3" src="assets/img/icon/features/home-2/features-dot-3.png" alt="">
               <img class="features-2-triangle-1" src="assets/img/icon/features/home-2/features-triangle-1.png" alt="">
               <img class="features-2-triangle-2" src="assets/img/icon/features/home-2/features-triangle-2.png" alt="">
               <img class="features-2-triangle-3" src="assets/img/icon/features/home-2/features-triangle-3.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                     <div class="section__title-wrapper section__title-wrapper-2 text-center mb-75 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <span class="section__pre-title purple">Uygulamalar??m??z</span>
                        <h2 class="section__title section__title-2">G??zel uygulamalar yaratmak i??in birlikte ??al??????yoruz..</h2>
                       
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-3 offset-xxl-1 col-xl-3 col-lg-4 col-md-4">
                     <div class="features__tab">
                        <ul class="nav nav-tabs" id="feaTab" role="tablist">
                           <li class="nav-item" role="presentation">
                             <button class="nav-link pink-bg active" id="sync-tab" data-bs-toggle="tab" data-bs-target="#sync" type="button" role="tab" aria-controls="sync" aria-selected="true">Ninja VPN</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link blue-bg" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Ninja VPN Lite</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link yellow-bg" id="multitask-tab" data-bs-toggle="tab" data-bs-target="#multitask" type="button" role="tab" aria-controls="multitask" aria-selected="false">Net Booster</button>
                           </li>
                            <li class="nav-item" role="presentation">
                             <button class="nav-link green-bg" id="applock-tab" data-bs-toggle="tab" data-bs-target="#applock" type="button" role="tab" aria-controls="multitask" aria-selected="false">Applocker</button>
                           </li>
                         </ul>
                     </div>
                  </div>
                  <div class="col-xxl-7 offset-xxl-1 col-xl-7 offset-xl-1 col-lg-8 col-md-8">
                     <div class="features__tab-content">
                        <div class="tab-content" id="feaTabContent">
                           <div class="tab-pane fade active show" id="sync" role="tabpanel" aria-labelledby="sync-tab">
                              <div class="features__thumb">
                                 <div class="features__thumb-inner">
                                    <img class="fea-thumb" src="assets/img/features/home-2/fea-thumb-2.png" alt="">
                                    <img class="fea-sm" src="assets/img/features/home-2/fea-sm.jpg" alt="">
                                    <img class="fea-sm-2" src="assets/img/features/home-2/fea-sm-2.jpg" alt="">
                                    <img class="fea-2-shape" src="assets/img/icon/features/home-2/features-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                              <div class="features__thumb">
                                 <div class="features__thumb-inner">
                                    <img class="fea-thumb" src="assets/img/features/home-2/fea-thumb.jpg" alt="">
                                    <img class="fea-sm" src="assets/img/features/home-2/fea-sm.jpg" alt="">
                                    <img class="fea-sm-2" src="assets/img/features/home-2/fea-sm-2.jpg" alt="">
                                    <img class="fea-2-shape" src="assets/img/icon/features/home-2/features-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="multitask" role="tabpanel" aria-labelledby="multitask-tab">
                              <div class="features__thumb">
                                 <div class="features__thumb-inner">
                                    <img class="fea-thumb" src="assets/img/features/home-2/fea-thumb-3.jpg" alt="">
                                    <img class="fea-sm" src="assets/img/features/home-2/fea-sm.jpg" alt="">
                                    <img class="fea-sm-2" src="assets/img/features/home-2/fea-sm-3.jpg" alt="">
                                    <img class="fea-2-shape" src="assets/img/icon/features/home-2/features-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                             <div class="tab-pane fade" id="applock" role="tabpanel" aria-labelledby="applock-tab">
                              <div class="features__thumb">
                                 <div class="features__thumb-inner">
                                    <img class="fea-thumb" src="assets/img/features/home-2/fea-thumb-4.jpg" alt="">
                                    <img class="fea-sm" src="assets/img/features/home-2/fea-sm.jpg" alt="">
                                    <img class="fea-sm-2" src="assets/img/features/home-2/fea-sm-4.jpg" alt="">
                                    <img class="fea-2-shape" src="assets/img/icon/features/home-2/features-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- platform area end -->


         <!-- price area start
         <section class="price__area pt-120 pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                     <div class="section__title-wrapper section__title-wrapper-3 section-padding-p-0 text-center mb-65 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                        <span class="section__pre-title-img"><img src="assets/img/icon/title/price.png" alt=""></span>
                        <h2 class="section__title section__title-3">Why Choose Us Our Premium Features on Pricing  Plan?</h2>
                        <p>Say chap skive off the little rotter gosh he erised it matie.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                     <div class="price__item-3 white-bg mb-30 text-center fix">
                        <div class="price__heading free">
                           <h4>Free</h4>
                        </div>
                        <div class="price__body">
                           <div class="price__icon mb-15">
                              <img src="assets/img/icon/pricing/home-3/pricing-1.png" alt="">
                           </div>
                           <div class="price__tag-3">
                              <h3>$00 <span>monthly</span></h3>
                           </div>
                           <div class="price__features-2">
                              <ul>
                                 <li>1GB Cloud Storage</li>
                                 <li>Share on Cloud</li>
                                 <li>Private &amp; Team Folders</li>
                                 <li>30GB Cloud Storage</li>
                              </ul>
                           </div>
                           <div class="price__btn">
                              <a href="contact.html" class="w-btn w-btn-10">buy package</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                     <div class="price__item-3 white-bg mb-30 text-center fix">
                        <div class="price__heading basic">
                           <h4>Basic</h4>
                        </div>
                        <div class="price__body">
                           <div class="price__icon mb-15">
                              <img src="assets/img/icon/pricing/home-3/pricing-2.png" alt="">
                           </div>
                           <div class="price__tag-3">
                              <h3>$430 <span>monthly</span></h3>
                           </div>
                           <div class="price__features-2">
                              <ul>
                                 <li>1GB Cloud Storage</li>
                                 <li>Share on Cloud</li>
                                 <li>Private &amp; Team Folders</li>
                                 <li>30GB Cloud Storage</li>
                              </ul>
                           </div>
                           <div class="price__btn">
                              <a href="contact.html" class="w-btn w-btn-10">buy package</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                     <div class="price__item-3 white-bg mb-30 text-center fix">
                        <div class="price__heading premium">
                           <h4>Premium</h4>
                        </div>
                        <div class="price__body">
                           <div class="price__icon mb-15">
                              <img src="assets/img/icon/pricing/home-3/pricing-3.png" alt="">
                           </div>
                           <div class="price__tag-3">
                              <h3>$780 <span>yearly</span></h3>
                           </div>
                           <div class="price__features-2">
                              <ul>
                                 <li>1GB Cloud Storage</li>
                                 <li>Share on Cloud</li>
                                 <li>Private &amp; Team Folders</li>
                                 <li>30GB Cloud Storage</li>
                              </ul>
                           </div>
                           <div class="price__btn">
                              <a href="contact.html" class="w-btn w-btn-10">buy package</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         platform area end -->
      

         <!-- cta area start 
         <section class="cta__area pb-140 p-relative">
            <div class="container">
               <div class="cta__inner-3 p-relative fix wow fadeInUp" data-wow-delay=".4s" data-background="assets/img/cta/home-3/cta-3-bg.jpg" style="background-image: url(&quot;assets/img/cta/home-3/cta-3-bg.jpg&quot;); visibility: visible; animation-delay: 0.4s;">
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-8 col-lg-10 col-md-9">
                        <div class="cta__content-3">
                           <h3 class="cta__title cta__title-3">Need Some Custom Plan?</h3>
                           <p>Connect with our support team and ask for our Business &amp; eCommerce Premium plans.</p>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-4 col-lg-2 col-md-3">
                        <div class="cta__btn text-md-end">
                           <a href="contact.html" class="w-btn w-btn-white-3">Request Plan</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         cta area end -->

         <!-- why area start -->
         <section class="why__area grey-bg-5 pt-135 pb-90">
            <div class="container">
               <div class="row">
                 <div class="col-xxl-6 offset-xxl-1 col-xl-6 offset-xl-1 col-lg-6 col-md-6">
                     <div class="faq__content">
                        <div class="section__title-wrapper section__title-wrapper-2 mb-35 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                           <h2 class="section__title section__title-2">Kullan??c??lar??m??za en iyisini sunuyoruz.</h2>
                           <p>D??nya genelinde 500bin ??zerinde indirilme say??lar??na ula????yoruz ve bu rakam s??rekli artmaya devam ediyoruz.</p>
                        </div>
                        <div class="faq__counter wow fadeInUp" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                           <ul>
                              <li>
                                 <h3 class="pink"><span class="counter">18300</span></h3>
                                 <p>Kullan??c??</p>
                              </li>
                              
                              <li>
                                 <h3 class="yellow"><span class="counter">545000</span></h3>
                                 <p>??ndirilme Say??s??</p>
                              </li>
                              <li>
                                 <h3 class="blue"><span class="counter">10</span></h3>
                                 <p>Proje</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 offset-xxl-1 col-xl-4 col-lg-4 col-md-6">
                     <div class="why__features white-bg wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                        <ul>
                           <li>5+ Y??ll??k Deneyim</li>
                           <li>????inin eri ??al????anlar??m??z</li>
                           <li>Geli??mi?? yaz??l??m prensipleri</li>
                           <li>Minimal tasar??m anlay??????</li>
                        </ul>
                        <a href="contact.html" class="w-btn w-btn-purple w-100"> Bize ula????n</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- why area end -->



         <!-- testimonial area start 
         <section class="testimonial__area grey-bg-5 pb-175 overflow-y-visible">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2">
                     <div class="section__title-wrapper section__title-wrapper-3 text-center section-padding-4 mb-55 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <span class="section__pre-title-img"><img src="assets/img/icon/title/testimonial.png" alt=""></span>
                        <h2 class="section__title section__title-3 section-mb-15">See What Others Have to Say</h2>
                        <p>Connect with our support team and ask for our Business &amp; eCommerce Premium plans</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="testimonial__slider-3 owl-carousel wow fadeInUp owl-loaded owl-drag" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s;">
                        
                        
                        
                        
                     <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2010px, 0px, 0px); transition: all 0.5s ease 0s; width: 3618px;"><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1608px, 0px, 0px); transition: all 0s ease 0s; width: 6030px;"><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div></div></div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="owl-nav disabled"><div class="owl-prev"><button><i class="fa fa-angle-left"></i>PREV</button></div><div class="owl-next"><button>NEXT<i class="fa fa-angle-right"></i></button></div></div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2010px, 0px, 0px); transition: all 0.5s ease 0s; width: 6030px;"><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div></div></div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="owl-nav disabled"><div class="owl-prev"><button><i class="fa fa-angle-left"></i>PREV</button></div><div class="owl-next"><button>NEXT<i class="fa fa-angle-right"></i></button></div></div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div><div class="owl-item cloned active" style="width: 372px; margin-right: 30px;"><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1608px, 0px, 0px); transition: all 0s ease 0s; width: 6030px;"><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item active" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Decaprio Helson</h4>
                                 <span>Digital Marketer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-5.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Thomas Edison</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-6.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Robert Downey Jr.</h4>
                                 <span>Inventor</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-1.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Hilary Ouse</h4>
                                 <span>Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-2.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>INNA Gomz</h4>
                                 <span>Designer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-3.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Shahnewaz Sakil</h4>
                                 <span>Web Developer</span>
                              </div>
                           </div>
                        </div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="testimonial__item-3 white-bg mb-30">
                           <div class="rating">
                              <ul>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                                 <li><i class="icon_star"></i></li>
                              </ul>
                           </div>
                           <div class="testimonial__text-3">
                              <p>??????Cobblers posh cras victoria sponge some dodgy chaverat barney only a quid, boot bubble and squeak wind up bits and boes bleeding up the duff brolly. ?????? </p>
                           </div>

                           <div class="testimonial__person d-flex align-items-center">
                              <div class="testimonial__avater mr-20">
                                 <img src="assets/img/testimonial/home-1/testi-4.png" alt="">
                              </div>
                              <div class="testimonial__author-3">
                                 <h4>Charlie</h4>
                                 <span>Business Man</span>
                              </div>
                           </div>
                        </div></div></div></div></div><div class="owl-item cloned active" style="width: 372px; margin-right: 30px;"><div class="owl-nav disabled"><div class="owl-prev"><button><i class="fa fa-angle-left"></i>PREV</button></div><div class="owl-next"><button>NEXT<i class="fa fa-angle-right"></i></button></div></div></div><div class="owl-item cloned" style="width: 372px; margin-right: 30px;"><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><button><i class="fa fa-angle-left"></i>PREV</button></div><div class="owl-next"><button>NEXT<i class="fa fa-angle-right"></i></button></div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>
                  </div>
               </div>
            </div>
         </section>
          testimonial area end -->

         <!-- blog area start
         <section class="blog__area pt-120 pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-10">
                     <div class="section__title-wrapper section__title-wrapper-3 mb-65 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s;">
                        <span class="section__pre-title-img"><img src="assets/img/icon/title/blog.png" alt=""></span>
                        <h2 class="section__title section__title-3 section-mb-15">The Ultimate Marketing Technology News.</h2>
                        <p>Connect with our support team and ask for our Business &amp; eCommerce Premium plans.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                     <div class="blog__item-3 white-bg mb-30">
                        <div class="blog__thumb-3 p-relative w-img fix">
                           <a href="blog-details.html">
                              <img src="assets/img/blog/home-3/blog-1.jpg" alt="">
                           </a>
                           <div class="blog__meta-3">
                              <span class="tag-3"><a href="blog-details.html">Design</a></span>
                           </div>
                        </div>
                        <div class="blog__content-3">
                           <div class="blog__meta-3 mb-10">
                              <span class="date">May 18, 2021</span>
                           </div>
                           <h3 class="blog__title-3"><a href="blog-details.html">What is a digital agency &amp; what can they do for my business?</a></h3>

                           <a href="blog-details.html" class="link-btn">More Details <i class="arrow_right"></i> </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                     <div class="blog__item-3 white-bg mb-30">
                        <div class="blog__thumb-3 p-relative w-img fix">
                           <a href="blog-details.html">
                              <img src="assets/img/blog/home-3/blog-2.jpg" alt="">
                           </a>
                           <div class="blog__meta-3">
                              <span class="tag-3"><a href="#">Creative</a></span>
                           </div>
                        </div>
                        <div class="blog__content-3">
                           <div class="blog__meta-3 mb-10">
                              <span class="date">May 20, 2021</span>
                           </div>
                           <h3 class="blog__title-3"><a href="blog-details.html">How to Create an Amazon Affiliate Store in WordPress?</a></h3>

                           <a href="blog-details.html" class="link-btn">More Details <i class="arrow_right"></i> </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          blog area end -->

      </main>

   
      <?php
               $foo = include 'footer.php';
      
     
         ?>

 
   </body>

</html>

