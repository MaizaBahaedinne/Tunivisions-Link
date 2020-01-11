
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
                     <th>Projet </th>
                     <th>Statut </th>
                     <th>Validation </th>
                     <th></th>
                   </thead>
                   <tbody>
                   

              
                  <?php foreach ($projectRecords as $record ) {
                    
                  ?>
                  <tr>

                    <td>
                               
                    <?php 
                            echo $record->startDate ; ?>  
                    </td>


                    

                    <td>


                      <h5 class="mt-0 mb-1">
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
                    
                    </td>
                    
                    <td>
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
                    
                    </td>
                    <td>
                    </td>
                    <td>
                      
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