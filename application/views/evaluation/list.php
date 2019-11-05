<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->

<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        

<div class="kt-portlet kt-portlet--mobile">
    

    <div class="kt-portlet__body">
            

        <div class="row">
    <div class="col-sm-12">
    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table id="example" class="display" style="width:100%" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Titre</th>
                        <th>faite </th>
                        
                        

                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($evaluationRecords))
                    {
                        foreach($evaluationRecords as $record)
                        {
                    ?>
                    <tr>

                        
                   

                        <td><?php echo $record->evaluationId ?></td>
                        <td>  <?php echo $record->titre ?> </td>
                        <td> <?php if($record->name !=''){ ?> Le <b> <?php echo $record->doDate ?> </b> par <b> <?php echo $record->name ?></b><?php } ?> </td>

                 
                        <td class="text-center">



                        <?php if ($record->statut == 'En Attend') {
                            # code...
                        ?>
                        <a href="<?php echo base_url() ?>Evaluation/doEvaluation/<?php echo $record->evaluationId ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>
                        <?php 
                        }else if($clubID == 0 ){
                          ?>
                            <a href="<?php echo base_url() ?>Evaluation/doEvaluationF/<?php echo $record->evaluationId ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>
                          <?php  
                        }

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
