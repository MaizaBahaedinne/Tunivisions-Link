<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->

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
                Reclamations
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">

    &nbsp;  &nbsp;
</div>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              
                              <div class="input-group-btn">
                               
                              </div>
                            </div>
                        </form>
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
                      
                        <th>Ticket</th>
                        <th>Titre</th>
                        <th>date de création</th>
                        
                        <th>fait par</th>
                        <th>statut</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($reclamationRecords))
                    {
                        foreach($reclamationRecords as $record)
                        {
                    ?>
                    <tr>

                        
                   
                        
                        <td><?php echo $record->reclamId ?></td>
                        <td>  <?php echo $record->Sujet ?> </td>
                        <td>  <?php   
                                $d1 = new DateTime($record->createdDate);
                                $d2 = new DateTime();
                                $diff = $d1->diff($d2);

                                $nb_jours = $diff->d;


                         echo 'Il y a '. $nb_jours.' jours' ?> </td>

                        
                        <td> 
                            <div class="row">
                            <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        <img alt="Pic" class="kt-radius-100" src="<?php echo base_url() ?>uploads/avatar/<?php echo $record->avatar ?>">
                                    </div>
                                </div>  <?php echo $record->faitpar ?> <br> Club Tunivisions <?php echo $record->clubName ?> </td>
                               
                         <td><?php  
                            if($record->staut == 'Traité') 
                         echo'<span class="kt-badge kt-badge--brand kt-badge--inline">Traité</span>' ;
                        
                        ?>
                        <?php  
                            if($record->staut == 'En Attend') 
                         echo'<span class="kt-badge kt-badge--warning kt-badge--inline">En Attend</span>' ;
                        
                        ?></td>       
                        <td class="text-center">



                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url().'editOld/'.$record->reclamId; ?>"><i class="la la-edit"></i> Modifier</a>
                                
                            </div>
                        </span>
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>


                        </td>
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
