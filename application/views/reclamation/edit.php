<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Reclamation +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Numéro de tickets : #<?php echo $reclamRecords->reclamId ?>
                                                             </span>
                
                            </div>

                    </div>        
        <div class="kt-subheader__toolbar">

                            

                                        
                    </div>
    </div>
</div>
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
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Reclamation/editreclamtion/<?php echo $reclamRecords->reclamId  ?>" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            



                              

                            <br>
                            <div class="row">


                                

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        
                                        <br> 
                                        <label for="fname"> Faite par <img src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $reclamRecords->avatar ?>" width="20px" >  <?php echo $reclamRecords->faitpar  ?></label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname"> Le <?php echo $reclamRecords->createdDate  ?> </label>
                                         <h4> Sujet : <span> <?php echo  $reclamRecords->Sujet ?> </span> </h4>
                                         
                                         
                                    </div>
                                    
                                </div>
                               
                                


                              
                            
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Text</label>
                                          <p> <?php echo $reclamRecords->Text ; ?>   </p>


                                    </div>
                                </div>

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Réponse</label>
                                       <textarea class="input-block-level" id="summernote" name="response" rows="20">
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

<script src="<?php echo base_url(); ?>custom/apps/user/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/scripts.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/pages/custom/user/add-user.js" type="text/javascript"></script>
<script type="text/javascript">
    function submit_by_id() {
    document.getElementById('kt_apps_user_add_user_form').submit() ;
    }
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
