






                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Club</a></li>
                        
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">
                                <h6 class="card-title">Feather Icons</h6>
                                   
                <div class="container">
                    

                     <!--begin: Datatable -->
        <table id="example" class="table dataTable no-footer"  style="width:100%" >
                    <thead>
                    <tr>
                        
                        <th>Faculté</th>
                        <th>Secteur</th>
                        <th>Président</th>
                        <th>Membres</th>
                        <th>Contact</th>
                        <th>Charte</th>

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
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->clubID ?>" target="_blank"   >
                           <?php echo $record->name ?>
                         </a>
                        </td>
                        <td>
                            <?php echo $record->city ?>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>" target="_blank"   >
                           <?php echo $record->P ?>
                         </a>
                        </td>
                        <td>
                            <?php echo $record->members ; ?> 
                        </td>
                        <td>
                            <?php if($record->facebook != ''){ echo $record->facebook ?> <?php } if($record->email != ''){ ?> <br> <a href ="<?php echo $record->email ?>">Facebook</a><?php } ?>

                        <td> 
                         <?php    
                        if($record->charte == 1 ) {?> 
                         <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Formé</span>
                        <?php } ?> 

                        
                          <?php   
                        if($record->charte == 0 ) {?> 
                         <span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">non formé</span>
                        <?php } ?> 
                        </td>
                        <td>
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
            </div>
                    </div>
                </div>


             <!-- begin::Global Config(global config for global JS sciprts) -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>
