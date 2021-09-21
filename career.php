<!doctype html>
<html class="no-js" lang="zxx">

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Pixy - Kariyer</title>
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

      <!-- header area start -->
         <?php
               $foo = include 'header.php';
      
     
         ?>
      <!-- header area end -->

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu mobile-menu-2"></div>
               <div class="sidebar__info mt-350">
                  <a href="#" class="w-btn w-btn-blue-2 w-btn-4 d-block mb-15 mt-15">login</a>
                  <a href="#" class="w-btn w-btn-blue d-block">sign up</a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>


         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
               <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Kariyer <br></h2>
                        <p>Takımımıza katıl, ekibimizde yer al.</a></p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                           <div class="sign__in text-center">
                              <a href="#" class="sign__social text-start mb-15"><i class="fas fa-file-pdf"></i>Özgeçmiş Ekle</a>
                             
                           </div>
                        </div>
                        <div class="sign__form">
                           <form action="#">
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Ad</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Ad">
                            
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-10">
                                 <h5>Soyad</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Soyad">
                             
                                 </div>
                              </div>
                               <div class="sign__input-wrapper mb-10">
                                 <h5>Cep Telefonu</h5>
                                 <div class="sign__input">
                                    <input type="number" placeholder="Cep Telefonu">
                       
                                 </div>
                              </div>
                               <div class="sign__input-wrapper mb-10">
                                 <h5>E posta</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="E-posta">
                                 
                                 </div>
                              </div>
                               
                               <div class="sign__input-wrapper mb-10">
                                 <h5>Başvurulan Bölüm</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Bölüm">
                             
                                 </div>
                              </div>
                             


                               <div class="sign__input-wrapper mb-10">
                                 <h5>Lokasyon</h5>
                                 <div class="sign__input">
                                    <input type="textarea" placeholder="Lokasyon">
                                  
                                 </div>
                              </div>

                               <div class="sign__input-wrapper mb-10">
                                 <h5>Ön Yazı</h5>
                                 
                                 <textarea id="w3review" name="w3review" rows="4" cols="50">
                                 </textarea>
                                 
                              </div>


                           
                              <button class="w-btn w-btn-11 w-100"> <span></span>Başvur</button>
                            
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
      </main>


      <!-- footer area start -->
        <?php
               $foo = include 'footer.php';
      
     
         ?>
      <!-- footer area end -->

   
   </body>

</html>

