<div class="row" >

    <div class="card col-md-12">
            <div class="card-header">
        <h4><?php echo $count ?> Participant</h4>
        <?php if($clubID == 0 ){ ?>
            <a href="<?php echo base_url() ?>TFM/stats">statistiques</a>
        <?php } ?>
    </div>
        <div class="card-body">

            <!--begin: Datatable -->

        <table id="example" class="table dataTable no-footer" style="width:cover" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nom et prénom</th>
                        
                       
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
                           
                            <div style='text-align: center;'>
                              <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                               <!--
                              <img alt='Barcode Generator TEC-IT'
                                   src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $record->id ?>&code=Code128&multiplebarcodes=true&translate-esc=false&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0'/>
                                -->   
                            </div>
                            <div style='padding-top:8px; text-align:center; font-size:15px; font-family: Source Sans Pro, Arial, sans-serif;'>
                              <!-- back-linking to www.tec-it.com is required -->
                             
                                <?php echo $record->id ?>
                                <!-- logos are optional -->
                                
                             
                            </div>
                          
                          
                      
                        <td>
                           
                                                             
                                        <a class="kt-user-card-v2__name" href="#">
                                         <?php echo $record->name ?>
                                        </a>
                                        <br>                              
                                        <span class="kt-user-card-v2__desc">
                                        <?php echo $record->role ?> <?php echo $record->cellule ?>  
                                        </span>                            
                                    </div>                      
                                
                          

                        </td>
 
                    <td> 

                        <?php if ($record->statut == 2 ) { ?>
                        tranche 1 : 
                        <?php if ($record->p_tranch1 > 0 ){ ?> <span class="badge badge-success">Validé</span>  
                        <?php }else { ?> <span class="badge badge-warning">en attente</span> <?php } ?>
                        <br>
                        tranche 2 :<?php if ($record->p_tranch2 > 0 ){ ?> <span class="badge badge-success">Validé</span>  
                        <?php }else { ?> <span class="badge badge-warning">en attente</span> <?php } ?>
                        <?php } ?>
                        
                  </td>   
                      
             


              


     
                   

                    <td> 
                          <?php  if ($record->statut == 1 ) { ?> 
                                <span class="btn btn-success"> validée </span>
                          <?php } ?>

                          <?php if ($record->statut == 1 && $record->p_tranch2 == 0 ) { ?> 
                                <span class="btn btn-warning"> sans logement </span>
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
