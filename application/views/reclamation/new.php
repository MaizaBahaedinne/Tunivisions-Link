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
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Reclamation/addNewReclamation" method="post" role="form" enctype="multipart/form-data" >
                        <div class="box-body">

                            <h4>Reclamation +</h4>
                            <hr>


                            <div class="row">


                            <br>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">à</label>
                                        <br>
                                        <select name="to" class="form-control">
                                            <option value="AS">Administration du system T-Link</option>
                                            <option value="M">Département Marketing</option>
                                            <option value="R">Département Ressource Humain</option> 
                                        </select>
                                    </div>
                                    
                                </div>
             
                            <br>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Sujet</label>
                                        <br>
                                        <input type="text" name="sujet" class="form-control">
                                    </div>
                                    
                                </div>
                                
                          
                           
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Text</label>
                                        <br>
                                        <textarea name="Text" rows="20" name="text" class="form-control" ></textarea>
                                    </div>
                                    
                                </div>
                            
                          
                            
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Pièce</label>
                                        <br>
                                        <input  type="file" name="fileToUpload" >
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


