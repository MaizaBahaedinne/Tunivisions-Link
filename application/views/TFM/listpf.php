<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                <?php echo $count ;  ?>  Tunimateurs                            </h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Gestion                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            List                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        
                </div>
                    
        </div>
        <?php if($clubID == 0 ){?>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                                    <a href="<?php echo base_url(); ?>TFM/stats" class="btn kt-subheader__btn-primary">
                        statistiques &nbsp;
                        <!--<i class="flaticon2-calendar-1"></i>-->
                    </a>
                                
                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>                        <!--<i class="flaticon2-plus"></i>-->
                    </a>
                    
                </div>
            </div>
        </div>
    <?php }     ?>
    </div>
</div>
<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Tunimateurs
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
    <div class="kt-portlet__head-actions">
        <div class="dropdown dropdown-inline">
            
            <div class="dropdown-menu dropdown-menu-right">

            </div>
        </div>
        &nbsp;
        
    </div>
    &nbsp;  &nbsp;
</div>
                    <div class="box-tools">
                       
                    </div>
      </div>
    </div>

    <div class="kt-portlet__body">
            

        <div class="row">
    <div class="col-sm-12">
    <div class="kt-portlet__body">
        <!--begin: Datatable -->

        <table id="example" class="display" style="width:100%" >
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
                                            if ($record->ClubName != "Foundation")
                                            echo "club ";
                                            ?>   Tunivisions  <?php echo $record->ClubName ?></td>
                                        </a>                              
                                    </div>                      
                                </div>
                            </span>


                        </td>
                        
                     
                    
                        
                    <td> 
                        <?php if ($record->p_tranch1 <= 0 ) { ?> 
                        
                       
                        <span>Tranche 1 :</span>  <span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Non validé </span><br><?php } ?>
                        <?php if ($record->p_tranch1 > 0 ) { ?> 
                        <span>Tranche 1 :</span>  <span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">  <?php echo $record->p_tranch1 ; ?> Dt Validé <small>par : <?php echo $record->recp1 ; ?> le  <?php echo $record->dateTranche1 ; ?> </small></span><br><?php } ?>

                        

                        <?php if (($userId == 1 ||  $userId == 164 || $userId == 162 || $userId == 167) && $record->statut == 3 ) { 
                            if ($record->p_tranch2 ==0 ){
                         ?>
                            
                            <span>Tranche 2 :</span>  &nbsp;
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

             
                        <?php } } if (($record->p_tranch2 <= 0 ) &&  !($userId == 1 ||  $userId == 164 || $userId == 162) ) { ?> 
                        <span>Tranche 2 :</span>  <span class="kt-badge kt-badge--warning kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-warning">En Attente</span><br>
                        <?php } ?>
                 
                      
                        <?php if ($record->p_tranch2 > 0 ) { ?> 
                        <span>Tranche 2 :</span>  <span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary"><?php echo $record->p_tranch2 ; ?> Dt Validé <small>par : <?php echo $record->recp2 ; ?> le  <?php echo $record->dateTranche2; ?> </small></span><br><?php } ?>


              


     
                   

                    <td> 
                          <?php  if ($record->statut == 1 ) { ?> 
                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">validé 
                                <?php if ($record->p_tranch1 == 40)?><small> <br> (sans logement) </small>  </span><br> 
                          <?php } ?>

                          <?php if ($record->statut == 2 ) { ?> 
                         <span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Non validé</span><br>
                         <?php } ?>

                         <?php if ($record->statut == 3 ) { ?> 
                           <span class="kt-badge kt-badge--warning kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-warning">pre-validé</span><br>
                            <?php } ?> 

                    </tr>

                    <?php
                    }
                    }
                    ?>
                    
                    </tbody>

                  </table>

    </div>
    </div>
                
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    
    </div>
<!-- end:: Content -->  
            </div>

             <!-- begin::Global Config(global config for global JS sciprts) -->

        <!-- end::Global Config -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <!--end::Page Scripts -->


<script>
$('table').dataTable( {

  paginate: true,
  
} );
</script>
