<div class="row" >

    <div class="card col-md-12">
            <div class="card-header">
        <h4><?php echo count($userRecords) ?> Participant</h4>
        <?php if($clubID == 0 ){ ?>
            <a href="<?php echo base_url() ?>TFM/stats">statistiques</a>
        <?php } ?>
    </div>
        <div class="card-body">

            <!--begin: Datatable -->

        <table id="example" class="table dataTable no-footer" style="width:cover" >
                    <thead>
                    <tr>
                       
                        <th>Club</th>
                       
                        <th>Paiment</th>
                  
                        
                        <th>statut</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                              
                </style>
                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>

                       
                      
                           
                            
                          
                          

                        <td>

                            <span style="width: 145px;">
                                <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        
                                    </div>                          
                                    <div class="kt-user-card-v2__details">                              
                                        <a class="kt-user-card-v2__name" href="#">
                                         <?php
                                            if ($record->ClubName != "Foundation"  && $record->ClubName != "Foundation Junior" && $record->ClubName != "Alumni")
                                            echo "club ";
                                            ?>   Tunivisions  <?php echo $record->ClubName ?></td>
                                        </a>                              
                                    </div>                      
                                </div>
                            </span>


                        </td>
                        
                     
                    
                        
                    <td>

                      <?php echo $record->partant ?> 
                    </td> 
 

                    <td> 
                          <?php  if ($record->statut == 1 ) { ?> 
                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">validé 
                                <?php if ($record->p_tranch1 == 40) { ?><small> <br> (sans logement) </small> <?php } ?> </span><br> 
                          <?php } ?>

                          <?php if ($record->statut == 2 ) { ?> 
                            <span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Non validé</span><br>
                         <?php } ?>

        

                    </tr>

                    <?php
                    }
                    }
                    ?>
                    
                    </tbody>

                  </table>

        
    </div>
        <div class="card-footer">
        
    </div>
        
    </div>
    

</div>


            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>