<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Postes                            
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                       
                            </div>

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
                
                <style >
                    .col-md-6 {
                          padding: 25px;
                        } 
                    .row{
                          padding: 2px;
                        }      
                </style>
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Club/EditPostes" method="post" role="form">
                        <div class="box-body">

                            <h4>Poste bureau executif</h4>
                            <hr>


                            <div class="row">


                                <div class="col-md-6">
                                 <h4>VP Administration et finance </h4>
                                 <hr></hr>
                                <?php foreach ($membres as $record ) { if ($record->cellule=='Administration et finance') { ?>  
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                            <img alt="Pic" class="kt-radius-100" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" width="40px" /> 
                                            &nbsp; &nbsp;  <span> <h6> <?php echo $record->name ?> </h6> <?php if ($record->role =='Vice Président') { echo 'VP' ; } else { echo $record->role ;}  ?>    </span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="radio" name="VPAF" <?php if($record->role=='Vice Président') { echo "checked";} ?>  value="<?php echo $record->userId ?>" />
                                        
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                                
                            
                               <div class="col-md-6">
                                 <h4>VP Marketing </h4>
                                 <hr></hr>
                                <?php foreach ($membres as $record ) { if ($record->cellule=='Marketing') { ?>  
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                            <img alt="Pic" class="kt-radius-100" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" width="40px" /> 
                                            &nbsp; &nbsp;  <span> <h6> <?php echo $record->name ?> </h6> <?php if ($record->role =='Vice Président') { echo 'VP' ; } else { echo $record->role ;}  ?>   </span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="radio" name="VPM"  
                                            <?php if($record->role=='Vice Président') { echo "checked";} ?>  value="<?php echo $record->userId ?>" >
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>

                                <div class="col-md-6">
                                <h4>VP Evenmentiel</h4>
                                <hr></hr>
                                <?php foreach ($membres as $record ) { if ($record->cellule=='Evenementiel') { ?>  
                                <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                            <img alt="Pic" class="kt-radius-100" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" width="40px" /> 
                                            &nbsp; &nbsp;  <span> <h6> <?php echo $record->name ?> </h6> <?php if ($record->role =='Vice Président') { echo 'VP' ; } else { echo $record->role ;}  ?>   </span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="radio" name="VPE"  
                                        <?php if($record->role=='Vice Président') { echo "checked";} ?>  value="<?php echo $record->userId ?>" >
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>

                                <div class="col-md-6">
                                   <h4>VP Gestion des talents </h4>
                                   <hr></hr>
                                <?php foreach ($membres as $record ) { if ($record->cellule=='Gestion des talents') { ?>  
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                            <img alt="Pic" class="kt-radius-100" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" width="40px" /> 
                                            &nbsp; &nbsp;  <span> <h6> <?php echo $record->name ?> </h6> <?php if ($record->role =='Vice Président') { echo 'VP' ; } else { echo $record->role ;}  ?>   </span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <input type="radio" name="VPGT" <?php if($record->role=='Vice Président') { echo "checked";} ?>    value="<?php echo $record->userId ?>" >
                                        </div>
                                    </div>
                                    <?php } } ?>
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

