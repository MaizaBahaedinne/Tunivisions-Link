


<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="https://www.nobleui.com/injected/cashery.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>T-Link | S'inscrire </title>
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


<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
<!-- partial -->
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
                <div class="col-md-0 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-12 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2 text-center"><img src="<?php echo base_url()?>assets\media\logos\logo rouge.svg " width ="250px"></a>
                    <h5 class="text-muted font-weight-normal mb-4 text-center">Cette application est déstiné aux clubs Tunivisions.</h5>
                    <?php
            $this->load->helper('form');
             $var1 = $this->input->get('var1');
             $var2 = $this->input->get('var2');
            ?>
          <!--begin::Form-->
    <form  role="form" class="kt-form" runat="server" action="<?php echo base_url() ?>Register/registerNewUser?var1=<?php echo $var1 ?>&var2=<?php echo $var2 ?>"    method="post" enctype="multipart/form-data"  >
      <div  class="text-center">
            <div   id="fb-root" class=""></div>
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
              <div class="fb-page" data-href="https://www.facebook.com/Tunivisionsfoundation" data-tabs="" data-width="1000" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Tunivisionsfoundation" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tunivisionsfoundation">Tunivisions Foundation <br> <br></a></blockquote></div>
           
        </div>
              <hr>
            
            <?php if ($var1!=Null && $var2  == 2  ) { ?> 
            
            <div class="form-group">
              <input class="form-control" type="text" placeholder="CIN"  pattern="[0-9]{8}"  name="cin" required>
            </div>
            <div class="form-group">
             
              <input class="form-control" type="text" placeholder="Nom et prénom" name="fname" required>
            </div>
            <div class="form-group">
              Date de naissance <input class="form-control " type="date" placeholder="Date de naissance" name="birth" required>
            </div>
            <div class="form-group">
            <SELECT class="form-control" type="text" placeholder="sexe" name="sexe" required>
              <option value="" > sexe </option>
              <option value="Homme"> Homme</option>
              <option value="Femme"> Femme</option>
            </SELECT>
          </div>
             <div class="row">
                  <div class="col-md-6">                                
                      <div class="form-group">
                      
                                  <select class="form-control" name="gouvernorat" id="gouvernorat" required >
                                      <option value="">-- Gouvernorat --</option>
                                  </select>


                      </div>
                  </div>
                  <div class="col-md-6">                                
                      <div class="form-group">
                    
                                  <select class="form-control" name="delegation" id="delegation" required >
                                      <option value="">-- Delegation --</option>
                                   </select>

                      </div>
                  </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Email" name="email"  required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" minlength="8" placeholder="Mot de passe" name="password" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" minlength="8" placeholder="Confirmation mot de passe" name="rpassword" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" pattern="[0-9]{2}\d{6}" placeholder="mobile" name="mobile" required>
            </div>
            <div class="form-group">
            
              <input class="form-control" pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" type="url"  placeholder="facebook | Format : |https://www.facebook.com/UserName " name="facebook" required>
            </div>
            <div class="form-group">
              <span>Photo de profile : </span>
              <input type="file" name="fileToUpload" id="fileToUpload" class="dropify" required>
              <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 100 KO </p>
              <p id="error1" style="display:none; color:#FF0000;">
                  Format d'image invalide! Le format d'image doit être JPG, JPEG.
                  </p>
                  <p id="error2" style="display:none; color:#FF0000;">
                  La taille maximale du fichier est de 100 ko.
                  </p>
            </div>

            <div class="form-group">
              <div class="col kt-align-left">
                <br>
                <label class="kt-checkbox">
                  <input type="checkbox" name="agree" required> j'accepte <a href="<?php echo base_url(); ?>Register/reglement" class="kt-link kt-login__link kt-font-bold">le manuel de procedure de la foundation</a>.
                  <span></span>
                </label>
                <span class="form-text text-muted"></span>
              </div>
            </div>
             <?php } ?>
            <div class="kt-login__actions">          <?php if ($var1!=Null || $var2!=Null ) { ?> 
              <input type="submit" value="S'inscrire" id="submitt"  class="btn btn-primary"> &nbsp;&nbsp;<?php } else { ?><div class="alert alert-danger alert-dismissable">
                            Tu doit ètre parrainé par un président des club Tunivisions                    
                        </div> <?php }   ?>
             
            </div>

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



        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
        </script>
        <!-- end::Global Config -->

      <!--begin::Global Theme Bundle(used by all pages) -->
               <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
             <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/js/pages/custom/login/login-1.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            
    <!-- end::Body -->

<script src="//s3.amazonaws.com/jscriptcdn/1f546f49ebf4153c8a.js"></script><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-74dcf4e32eff343c96838bf3a780ac1d.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><iframe style="display: none; visibility: hidden;"></iframe><iframe style="position:absolute;left:-999px;top:-999px;visibility:hidden"></iframe><iframe style="display: none; visibility: hidden;"></iframe><script>[object Object]</script></body></html>

<script type="text/javascript">
    $('.form_date').datepicker({ yearRange: '1990:2001' });
</script>


<script type="text/javascript">
      $('#submitt').prop("disabled", true);
        var a=0;
        //binds to onchange event of your input field
        $('#fileToUpload').bind('change', function() {
          if ($('input:submit').attr('disabled',false)){
             $('input:submit').attr('disabled',true);
             }
            var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['jpg','jpeg']) == -1){
               $('#error1').slideDown("slow");
               $('#error2').slideUp("slow");
               a=0;
             }else{
               var picsize = (this.files[0].size);
               if (picsize > 100000){
               $('#error2').slideDown("slow");
             a=0;
             }else{
             a=1;
                $('#error2').slideUp("slow");
             }
                $('#error1').slideUp("slow");
             if (a==1){
             $('input:submit').attr('disabled',false);
           }
        }
    });
</script>
<script type="text/javascript">
$( document ).ready( function()
{
    var json ;
    var gouvernorat = $( '#gouvernorat' );
    var delegation = $( '#delegation' );
    
   
    var d = $.ajax({
    url: '<?php echo base_url(); ?>assets/json/tunisia.json',
    type: "GET",
    dataType: 'json',
    success: function (data) {
        console.log(data);
           $.each( data , function (index, value)
        {
        gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
        });

        gouvernorat.change( function()
        {
        var gouv = $(this).val();
        var deleg = data[ gouv ];

        $('option', delegation).remove();
        delegation.append('<option value="">-- Delegation --</option>');

        $.each( deleg, function (index, value)
        {
        delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
        });
        });    

    } 
    });



        
    });
</script>

  <script src="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.js"></script>
    <script type="text/javascript">
      $('.dropify').dropify();
    </script>