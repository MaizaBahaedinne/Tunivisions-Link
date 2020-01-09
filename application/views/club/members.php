<link rel="stylesheet" href="<?php echo base_url() ; ?>assets/vendors/select2/select2.min.css">
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
                  <div>
</div>
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
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal2-xl">Approuver des membres</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-xl">Bloquer un membre</button>
                  </div>
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


  <!-- Extra large modal -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Blocage d'un membre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="<?php echo base_url() ?>User/blockMember" method="post">
        
      <label> Nom et prénome de membre :  </label>
      <select class="form-control" name="userId">
        <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <option value="<?php echo $record->userId ?>" class="js-example-basic-single"><?php echo $record->name ?> </option>
                           <?php
                       }
                   }
          ?>
      </select>
      <label> Expliquer pourqoui voulez-vous bloquer ce membre :  </label>
      <textarea name="why" class="form-control" ></textarea>
      <hr>
      <input type="submit" name="" value="Bloquer" class="btn btn-danger"> 
    </form>
    </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal2-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Approuver des membre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url() ; ?>User/actifMember" method="post" >

                    
                    <?php
                    if(!empty($useraRecords))
                    {
                        foreach($useraRecords as $record)
                        {
                    ?>
                    <div class="row">

             
                       
                            <div class="col-md-4">
                            <img class="kt-radius-100 alligator-turtle" width="45 px" src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $record->avatar ; ?>" alt="image" />
                 
                           <b>&nbsp; &nbsp; <?php echo $record->name ?></b>
                           
                           </div>

                            <div>
                                <b>Date d'inscription :</b> <p style="color: blue"> <?php echo $record->createdDtm ?> </p>
                            </div>

                           <div class="col-md-2">
                            
                            <span class="kt-switch kt-switch--sm" >
                                <label>
                               
                                <input type="checkbox" name="actifs[]" id="<?php echo $record->userId ;?>"  value="<?php echo $record->userId ;?>" >
                                <span></span>
                                </label>
                            </span>
                            </div>      

                             
                            
                        
                        
                            <script type="text/javascript">
                                $("#<?php echo $record->userId ;?>").click(function(){
                                  $("#Cellule_<?php echo $record->userId ;?>").toggle();
                                });
                            </script>

                            <div  style="display: none;" id="Cellule_<?php echo $record->userId ;?>">
                                            
                                <p>Cellule</p>

                                <select class="form-control"   name="Cellule_<?php echo $record->userId ;?>">
                                    <option></option>
                                    <option value="Marketing" >Marketing</option>
                                    <option value="Administration et finance" >Administration et finance</option>
                                    <option value="Evenementiel" >Evenementiel</option>
                                    <option value="Gestion des talents" >Gestion des talents</option>
                                </select>
                          
                            </div>

                            
                        
                       
                        
                      
            
                    
                      </div>      
                        <hr>
                      
                       
                        
              
                    <?php
                        }
                    }
                    ?>
                    <input type="submit" class="btn btn-primary" value="Envoyer" >
                     <input type="reset" class="btn btn-default"  >
                    
                   
                    
            </form>
    </div>
    </div>
  </div>
</div>





<script defer src="<?php echo base_url()?>assets/vendors/select2/select2.min.js"></script>
<script type="text/javascript">
  $(function() {
  'use strict'

  if ($(".js-example-basic-single").length) {
    $(".js-example-basic-single").select2();
  }
  if ($(".js-example-basic-multiple").length) {
    $(".js-example-basic-multiple").select2();
  }
});
</script>