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
            

   

        <!--begin: Datatable -->

     <form action="<?php echo base_url() ; ?>User/actifMember" method="post" >

                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <div class="row">

             
                       
                            <div class="col-md-4">
                            <img class="kt-radius-100" width="45 px" src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $record->avatar ; ?>" alt="image" />
                 
                           <b>&nbsp; &nbsp; <?php echo $record->name ?></b>
                           
                           </div>

                            <div>
                                <b>Date d'inscription :</b> <p style="color: blue"> <?php echo $record->createdDtm ?> </p>
                            </div>

                           <div class="col-md-2">
                            <b>Approuver </b><br>
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
                    </div>
                   
                    
            </form>
              <!-- /.box -->
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
