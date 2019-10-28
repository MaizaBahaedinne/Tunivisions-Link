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
                Clubs Tunivisions                            </h3>
                
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
    
    &nbsp;  &nbsp;
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
                        
                        <th>Faculté</th>
                        <th>Secteur</th>
                        <th>Président</th>
                        <th>Contact</th>
                        <th>Actif</th>

                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($clubRecords))
                    {
                        foreach($clubRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                           <?php echo $record->name ?>
                        </td>
                        <td>
                            <?php echo $record->city ?>
                        </td>
                        <td>
                            <?php echo $record->P ?>
                        </td>
                        <td>
                            <?php echo $record->email ?>
                        <td> 
                         <?php    
                        if($record->is_Actif == 1) 
                         echo '<button class="btn btn-primary">Actif</button></a >' ;
                        ?> 

                        
                        </td>
                        <td >
                        <?php  
                            if($record->isDeleted == 1) 
                         echo'<a href="'.base_url().'User/actifUser/'.$record->userId.'"> <button class="btn btn-primary">Send</button></a >' ;
                        
                        ?> 
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
