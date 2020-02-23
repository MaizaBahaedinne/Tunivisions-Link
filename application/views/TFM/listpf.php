<div class="row" >

    <div class="card col-md-12">
            <div class="card-header">
        <h4><?php echo count($userRecords) ?> Participant</h4>
        <?php if($clubID == 0 ){ ?>
            <a href="<?php echo base_url() ?>TFM/partantF">statistiques</a>
        <?php } ?>
    </div>
        <div class="card-body">

            <!--begin: Datatable -->

        <table id="example" class="table dataTable no-footer" style="width:cover" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nom et prénom</th>
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


                        
<!--
                       
                            
                            
                            <a class="btn btn-warning"   alt="<?php echo $record->id ?>"   id="<?php echo $record->id ?>" >Paiement</a>
                            <script type="text/javascript">
                                $("#<?php echo $record->id ?>").click(function(){
                                    $.ajax({
                                       url : '<?php echo base_url() ?>TFM/partanTfmPaiement2/<?php echo$record->id ?>' ,
                                        type : 'POST',
                                       dataType : 'html',
                                       success : function(code_html, statut){ 
                                            $("#<?php echo $record->id ?>").text('Validé');  
                                            $("#<?php echo $record->id ?>").removeClass() ; 

                                       },

                                       error : function(resultat, statut, erreur){

                                       }

                                    });
                                });

                            </script>

             
     
     -->            
                      
             


              


     
                   

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