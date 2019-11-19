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
                  <?php echo $count ;  ?> Members
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
          
            <a href="<?php echo base_url() ; ?>User/userByClubListingToApprove" class="btn btn-primary" >Approuver les membres</a>
            
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
                       
                        <th></th>
                        <th>Nom et prénom</th>
                        <th>Poste</th>
                        <th>Cellule</th>
                        <th>contact</th>
                        <th></th>
                        
                    </tr>
                    </thead>

                    <tbody>
                        <style type="text/css">
                       .alligator-turtle {
                  object-fit: cover;
                  object-position: 50% 0;

                  width: 45px;
                  height: 45px;
                                }
                </style>
                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                            <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        <img alt="<?php echo $record->name ?>" class="kt-radius-100 alligator-turtle" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" />
                                    </div>
                                </div>     
                        </td>
                        <td>
                            <span style="width: auto;">
                                                     
                                <div class="kt-user-card-v2__details">                              
                                        <a class="kt-user-card-v2__name" href="#">
                                         <?php echo $record->name ?>
                                        </a>
                 
                                    </div>                      
                                </div>
                            </span>

                           </td>
                        <td>

                            <?php echo $record->role ?>


                        </td>
                        
                        <td> <?php echo $record->cellule ?> </td>
                        <td><?php echo $record->email ?><br>
                        <?php echo $record->mobile ?> </td>
                        
                        <td> 
                            <!--
                        <?php  
                            if($record->isDeleted != 1) 
                         echo'<a href="'.base_url().'User/deleteUser/'.$record->userId.'"> <button class="btn btn-primary">Actif</button></a>' ;
                        
                        ?>
                        <?php  
                            if($record->isDeleted == 1) 
                         echo'<a href="'.base_url().'User/actifUser/'.$record->userId.'"> <button class="btn btn-danger">Inactif</button></a >' ;
                        
                        ?> -->
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
