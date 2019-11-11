<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Projet +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails du projet
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
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            <h4>Projet</h4>
                            <hr>


                            <div class="row">


                            <br>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Banner</label>
                                        <br>
                                        <div class="dropzone dropzone-default dropzone-brand dz-clickable" >
                                            <input type="file" name="file" id="file" required/>
                                          </div>
                                         
                                        <br>  
                                       
                                       <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 2 MO </p>
                                      <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 2 Mo.
                                          </p>
                                    </div>

                                    <script type="text/javascript">
                                          $('#submitt').prop("disabled", true);
                                            var a=0;
                                            //binds to onchange event of your input field
                                            $('#file').bind('change', function() {
                                              if ($('input:submit').attr('disabled',false)){
                                                 $('input:submit').attr('disabled',true);
                                                 }
                                                var ext = $('#file').val().split('.').pop().toLowerCase();
                                                if ($.inArray(ext, ['jpg','jpeg']) == -1){
                                                   $('#error1').slideDown("slow");
                                                   $('#error2').slideUp("slow");
                                                   a=0;
                                                 }else{
                                                   var picsize = (this.files[0].size);
                                                   if (picsize > 2000000){
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
                                    
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-2">                                
                                    <div class="form-group">
                                        <label for="fname">Type</label>
                                        <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Couverture Mediatique">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
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
                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date debut</label>
                                        <input type="date" class="form-control "  min="<?php echo date('Y-m-d') ?>"   id="debut" name="debut"  required >
                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date fin</label>
                                        <input type="date" class="form-control" min="<?php echo date('Y-m-d') ?>"   id="fin" name="fin"  required >
                                    </div>
                                </div>
                            <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">cible  &nbsp; &nbsp; </label>
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Publique" required> Publique
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Privé"> Privé
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Only tunimateur" required> Only tunimateur
                                                <span></span>
                                        </label>


                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Local</label>
                                          <input type="text" class="form-control required" id="local" name="local" maxlength="255" required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Capacité</label>
                                          <input type="number" class="form-control required" id="capacite" name="capacite"  required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Prix</label>
                                          <input type="number" class="form-control required" id="prix" name="prix"  required >      


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
                                                    <br><input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  />
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
                                                    <br><input type="checkbox" name="ressource[]"  value="<?php echo   $record->userId ; ?>" />
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
                                                    <br><input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Gestion des talents</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Gestion des talents')
                                                        {
                                            ?>            
                                                    <br><input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  />
                                            <?php
                                                     echo   $record->name ; 
                                                    }
                                                }
                                            ?>

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

<script type="text/javascript">
$( document ).ready( function()
{
    var json ;
    var gouvernorat = $( '#gouvernorat' );
    var delegation = $( '#delegation' );
    
    $('#club').select2();
    $('#gouvernorat').select2();
    $('#delegation').select2();

    var d = $.ajax({
    url: 'http://127.0.0.1/TunivisionsFoundation.org/tlink/assets/json/tunisia.json',
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
<script>  
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                  $('#preview-img').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
              }
            }

            $("#image_file").change(function() {
              readURL(this);
            });
</script>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii', minDate : '-1969/12/31'  });
    </script>  