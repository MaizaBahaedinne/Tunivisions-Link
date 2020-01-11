
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
<!-- partial -->

        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 email-aside border-lg-right">
                    <div class="aside-content">
                      <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                          <span class="icon"><i data-feather="chevron-down"></i></span>
                        </button>
                        <span class="title text-muted font-weight-bold">Projet</span>
                        <p class="text-muted"></p>
                      </div>
                      <div class="aside-compose"><a class="btn btn-primary btn-block" href="<?php echo base_url() ; ?>Project/addNew">Nouveau projet</a></div>
                      <div class="aside-nav collapse">
                        <ul class="nav">
                          <li><a href="<?php echo base_url() ; ?>Project/projectListingbyClub"><span class="icon"><i data-feather="inbox"></i></span>Nos projets<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                           <?php  if  ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) { ?>
                          <li class=""><a href="<?php echo base_url() ; ?>Evaluation/evaluationListing"><span class="icon"><i data-feather="mail"></i></span>Evaluations</a></li>
                          <?php } ?>
                        </ul>
                        
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-9 email-content">
                    <div class="email-head">
                      <div class="email-head-title d-flex align-items-center">
                        <span data-feather="edit" class="icon-md mr-2"></span>
                        Noveau projet
                      </div>
                    </div>
                    <div class="container">
                        
                     <?php $this->load->helper("form"); ?>
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        


                            <div class="row">


                            <br>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Banner</label>
                                        <br>
                                       
                                            <input type="file" name="file" id="file" class="dropify" required/>
                                       
                                         
                                        <br>  
                                       
                                       <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 500 ko </p>
                                      <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 500 ko.
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
                                                   if (picsize > 500000){
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
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Type</label>
                                        <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Action">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                       <textarea class="form-control" name="description" id="tinymceExample" rows="10"></textarea>

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

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
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

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
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

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
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

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                            </div>

                            
                            
                           

                           
         
                        
    
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
              </div>
            </div>
          </div>
        </div>




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



    <script src="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.js"></script>
    <script type="text/javascript">
      $('.dropify').dropify();
    </script>

    !-- plugin js for this page -->
  <script src="<?php echo base_url() ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/ace-builds/src-min/ace.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
  <!-- end plugin js for this page -->


  <script src="<?php echo base_url() ?>assets/js/tinymce.js"></script>