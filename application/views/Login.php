
<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="https://www.nobleui.com/injected/cashery.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>T-Link | Se connecter </title>
  <!-- core:css -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/vendors/core/core.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/fonts/feather-font/css/iconfont.css">
  <!-- endinject -->
  <!-- Layout styles -->  
  <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url() ; ?>assets\media\logos/icon.svg" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151434993-1');
</script>


  
</head>
<body>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pl-md-0" >
                  <div class="auth-form-wrapper px-4 py-5" >
                    <a href="#" class="noble-ui-logo d-block mb-2 text-center"><img src="<?php echo base_url()?>assets\media\logos\logo rouge.svg " width ="250px"></a>
                    <h5 class="text-muted font-weight-normal mb-4">Cette application est déstiné aux clubs Tunivisions.</h5>
                    <form class="kt-form" action="<?php echo base_url() ?>loginMe " method="post" >
                                <div class="form-group">
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
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input class="form-control" type="email" placeholder="E-Mail" name="mail" >
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Mot de passe </label>
                                  <input class="form-control" type="password" placeholder="Mot de passe" name="password" >
                                </div>
                                <!--begin::Action-->
                                <div class="kt-login__actions">
                           
                                  <input type="submit"  class="btn btn-primary  text-center" value="Se connecter">

                                  <br>
                                  <a href="<?php echo base_url() ?>Register/MotDePasse" class="d-block mt-3 text-muted">
                                    Mot de passe oublier ?
                                  </a>


                                  <br>
                                  <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.facebook.com/maiza.koussai" target="_blank">Maiza Bahaedinne </a>. All rights reserved</p>

                                </div>

                                <!--end::Action-->
                              </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- core:js -->
  <script src="<?php echo base_url() ; ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url() ; ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?php echo base_url() ; ?>assets/js/template.js"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <!-- end custom js for this page -->
</body>
</html>