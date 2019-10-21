<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Tache +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails du tache
                                                             </span>
                
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
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Tasks/addNewTask" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            <h4>Tache</h4>
                            <hr>


                            <div class="row">
                                <div class="col-md-10">                                
                                    <div class="form-group">
                                        <label for="fname">Projet</label>
                                        <select class="form-control" name="project">
                                            <?php foreach ($projectsRecords as $record ) {
                                            ?>
                                            <option value="<?php echo $record->projectId ?>" > <?php echo $record->titre ?>  </option> 
                                            <?php 
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                                    </div>
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                        <textarea class="form-control required" id="Description" name="Description" rows="20" required ></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">deadline</label>
                                        <input type="date" class="form-control required" id="deadline" name="deadline" required >
                                    </div>
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Affecter à </label>
                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Marketing</label>
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Marketing')
                                                        {
                                            ?>            
                                                    <br><input type="radio" name="ressource" value="<?php echo   $record->userId ; ?>" />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?> 


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Evenementiel</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Evenementiel')
                                                        {
                                            ?>            
                                                    <br><input type="radio" name="ressource"  value="<?php echo   $record->userId ; ?>" />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Administration & Finance</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Administration et finance')
                                                        {
                                            ?>            
                                                    <br><input type="radio" name="ressource" value="<?php echo   $record->userId ; ?>"  />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Gestion des talens</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Gestion des talents')
                                                        {
                                            ?>            
                                                    <br><input type="radio" name="ressource" value="<?php echo   $record->userId ; ?>"  />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?>

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
