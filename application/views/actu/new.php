<!-- include libraries(jQuery, bootstrap) -->



<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
 
<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first">
    <!--begin: Form Wizard Nav -->
   
    <!--end: Form Wizard Nav -->

    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <!--begin: Form Wizard Form-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    
    <section class="kt-container">
    <br>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Actu/addNewA" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            <h4>Actualité</h4>
                            <hr>


                            <div class="row">


                            <br>
                            <div class="row">

  


                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="titre" name="titre" maxlength="255" required >
                                    </div>
                                    
                                
                                </div>

                           

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                <textarea class="input-block-level" id="summernote" name="description" rows="18">
                                </textarea>
                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#summernote').summernote({
                                        height: "500px"
                                    });
                                });
                                var postForm = function() {
                                    var content = $('textarea[name="description"]').html($('#summernote').code());
                                }
                                </script>
                                        
                                    </div>
                                   
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Lien</label>
                                        <input type="url" class="form-control" id="lien" name="lien"  >
                                </div>
                                    
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">image</label>
                                          <input type="file" class="form-control required" id="fileToUpload" name="fileToUpload"  required >      


                                    </div>
                                </div>
                                

                                
                            </div>

                            
                            
                           

                           
         
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
            </div>

        </div>  



  
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end:: Content -->              
</div>
<script type="text/javascript">
    $('.summernote').summernote({
  airMode: true
});
</script>
