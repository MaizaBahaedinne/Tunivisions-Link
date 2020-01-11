
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
<!-- partial -->

        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <ul class="list-unstyled">

                  <?php foreach ($projectRecords as $record ) {
                    
                  ?>
                  <li class="media d-block d-sm-flex" style="padding: 10px">
                    <div 
                                <?php if($record->valider =='Valider'){ ?> class="btn btn-sm btn-primary" 
                                <?php } else if ($record->valider =='' && $record->statut=='fini' ){ ?>class="btn btn-sm btn-warning"  
                                <?php } else if($record->valider =='') { ?> class="btn btn-sm btn-danger" 
                                <?php } ?>
                                 style="overflow: auto;"> 
                                        <?php $date = new DateTime($record->startDate) ; 
                                        echo '<small>'.$date->format('M').'-20'.$date->format('y').'</small><br><h2><b>'.$date->format('d').'</b></h2>' ; ?>  
                                       
                      </div>
                      &nbsp; &nbsp; &nbsp;
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">
                        <a href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" class="kt-widget__title">                                  
                                  <span><?php echo $record->titre ;  ?>  </span>
                                  <?php if ($record->valider =='Valider' && $record->statut=='fini') { ?>
                                  <p style="color: green " >
                                    <?php 
                                        echo $record->score.' <small>points</small>' ; ?>  
                                    </p>  
                                   <?php  }else{ ?>
                                     <p style="color: orange " >
                                    <?php 
                                        echo ' <small>Validation en cours</small>' ; ?>  
                                    </p>  
                                   <?php } ?>
                                </a>
                      </h5>
                      <small>
                                <?php echo $record->type  ?>
                                <?php if ($record->cible=='Publique' )
                                    { ?>
                                        <i class="flaticon-share"></i>
                                <?php }
                                    else if ( $record->cible=='Privé' ){ ?>
                                        <i class="flaticon2-user-outline-symbol"></i>
                                <?php } 
                                 
                                    else if ( $record->cible=='Only tunimateur' ){ ?>
                                        <i class="flaticon-users"></i>
                                <?php } ?>

                                <?php  echo $record->cible ?></small>
                                <span class="kt-widget__desc">
                                 <small>  par 
                                <?php if ($record->ClubName !='Foundation') {echo 'club';} ?> Tunivisions <?php echo $record->ClubName ?>  
                                </small> 
                                </span>
                    </div>
                  </li>
                  <?php } ?>

                </ul>


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