
<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:47 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tunivsions Link | Se connecter </title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url() ;  ?>images/icon.svg" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div>
              <div id="circle-xxlarge"></div>
          </div>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="<?php echo base_url() ;  ?>images/logo blanc2.svg" class="img-fluid" width="" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="<?php echo base_url() ;  ?>images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url() ;  ?>images/login/2.png" class="img-fluid mb-4" alt="logo"> 
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url() ;  ?>images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Se connecter</h1>
                            <p>Cette application est déstiné aux clubs Tunivisions.</p>

                              <?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if($error)
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                
                                                <?php echo $error; ?>                    
                                            </div>
                                        <?php }
                                        $success = $this->session->flashdata('success');
                                        if($success)
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissable">
                                                
                                                <?php echo $success; ?>                    
                                            </div>
                                      <?php } ?>

                            <form class="mt-4" action="<?php echo base_url() ?>loginMe " method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control mb-0" name="mail" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mot de passe</label>
                                    <a href="#" class="float-right">Mot de passe oublié ?</a>
                                    <input type="password" class="form-control mb-0" name="password"  placeholder="Mot de passe">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Se connecter</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Copyright © 2020 Maiza Bahaedinne . All rights reserved </span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//popper.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//waypoints.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//apexcharts.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//lottie.js"></script>
      <!-- Slick JavaScript --> 
      <script src="<?php echo base_url() ;  ?>assets/js//slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:48 GMT -->
</html>
