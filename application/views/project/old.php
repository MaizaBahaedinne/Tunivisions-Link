
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
<!-- partial -->

        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                 <table class="table dataTable no-footer" style="width: 100%" >
                   <thead>
                     <th>Date </th>
                     <th>Club </th>
                     <th>Projet </th>
                     <th>Evaluation </th>
                     <th>Validation </th>
                   </thead>
                   <tbody>
                   

              
                  <?php foreach ($projectRecords as $record ) {
                    
                  ?>
                  <tr>

                    <td>
                               
                    <?php 
                               $date = new DateTime($record->startDate);
                            
                              echo $date->format('d/m/Y');       ?>  
                    </td>


                    

                    <td>
                  
                         <b>
                                    <?php echo $record->ClubName ?>
                                  </b>
                      </td>


                    <td>
                      <h6 >
                                <a href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" class="kt-widget__title">                                  
                                  <span>
                                    <?php 
                                    $string = strip_tags( $record->titre );
                                    if (strlen($string) > 30){

                                        // truncate string
                                        $stringCut = substr($string, 0, 30);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?>  </span>
                                  
                                </a>
                      </h6>
                                
                                <?php echo $record->type  ?><br>
                               

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

                              

                                <?php  echo $record->cible ?>
                 

                                <br>
                                
                                 
                                
                                
                    
                    </td>
                    
                    <td>
                      <?php  if($record->statut  == 'En Attend' ){  ?>
                              <span class="badge badge-warning ">En cours </span>
                      <?php }else{ ?>
                            <span class="badge badge-success ">Validé par  : <?php echo $record->dobyName ?></span>
                            <?php if($record->eventFB != '') { ?><br><a href="<?php echo $record->eventFB ?> ">Event facebook </a><?php } ?>
                            <?php if($record->album != '') { ?><br><a href="<?php echo $record->album ?> ">Album photo </a><?php } ?>
                            <?php if($record->afterMovie != '') { ?><br><a href="<?php echo $record->afterMovie ?> ">After movie </a><?php } ?>
                      <?php  } ?>
                    </td>

                    <td>
                       <?php  if($record->statut  == 'En Attend' ){  ?>
                      <?php  }else if($record->affectedBy  == 0 ){  ?>
                              <span class="badge badge-danger "> A Valider </span>
                      <?php }else{ ?>
                            <span class="badge badge-primary">Validé par  : <?php echo $record->validName ?></span>
                      <?php  } ?>
                    </td>
                    
   

                  </tr>
                     
                   
                  <?php } ?>
                  </tbody>
             
            </table>

                  
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


  <script src="<?php echo base_url() ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/ace-builds/src-min/ace.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
  <!-- end plugin js for this page -->


  <script src="<?php echo base_url() ?>assets/js/tinymce.js"></script>


            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>