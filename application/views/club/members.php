
            <!-- partial -->

            
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Ressource humaine</a></li>
                        <li class="breadcrumb-item active" aria-current="page">membres</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Gestion des membres</h6>

                <div class="table-responsive">
                          <table id="example" class="table dataTable no-footer"  >
                    <thead>
                    <tr>
                       
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
            </div>
                    </div>
                </div>

          

             <!-- begin::Global Config(global config for global JS sciprts) -->

        <!-- end::Global Config -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <!--end::Page Scripts -->


            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>
