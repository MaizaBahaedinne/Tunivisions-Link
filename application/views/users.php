






                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Systeme</a></li>
                        <li class="breadcrumb-item active" aria-current="page">utilisateurs</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">
                                <h6 class="card-title">Feather Icons</h6>
                                   
                <div class="container">
                    <table id="example" class="table dataTable no-footer"  >
                    <thead>
                    <tr>
                       
                        <th>id</th>
                        <th>Nom et prénom</th>
                        <th>Club</th>
                        <th>Contact</th>
                        
                        <th>Actif</th>
                        
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
                            <?php echo $record->userId ?>
                        </td>
                      
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
                        
                        
                        <td><?php echo $record->email ?><br>
                        <?php echo $record->mobile ?> </td>
                        
                        <td> 
                        <?php  
                            if($record->isDeleted != 1) 
                         echo'<a href="'.base_url().'User/deleteUser/'.$record->userId.'"> <button class="btn btn-primary">Actif</button></a>' ;
                        
                        ?>
                        <?php  
                            if($record->isDeleted == 1) 
                         echo'<a href="'.base_url().'User/actifUser/'.$record->userId.'"> <button class="btn btn-danger">Inactif</button></a >' ;
                        
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
