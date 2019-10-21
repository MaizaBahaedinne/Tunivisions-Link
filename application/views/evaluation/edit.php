     <style type="text/css">
       .star-rating {
              font-size: 0;
              white-space: nowrap;
              display: inline-block;
              width: 250px;
              height: 50px;
              overflow: hidden;
              position: relative;
              background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
              background-size: contain;
            }
            .star-rating i {
              opacity: 0;
              position: absolute;
              left: 0;
              top: 0;
              height: 100%;
              width: 20%;
              z-index: 1;
              background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
              background-size: contain;
            }
            .star-rating input {
              -moz-appearance: none;
              -webkit-appearance: none;
              opacity: 0;
              display: inline-block;
              width: 20%;
              height: 50%;
              margin: 0;
              padding: 0;
              z-index: 2;
              position: relative;
            }
            .star-rating input:hover + i,
            .star-rating input:checked + i {
              opacity: 1;
            }
            .star-rating i ~ i {
              width: 40%;
            }
            .star-rating i ~ i ~ i {
              width: 60%;
            }
            .star-rating i ~ i ~ i ~ i {
              width: 80%;
            }
            .star-rating i ~ i ~ i ~ i ~ i {
              width: 100%;
            }
            ::after,
            ::before {
              height: 100%;
              padding: 0;
              margin: 0;
              box-sizing: border-box;
              text-align: center;
              vertical-align: middle;
            }

      </style>


<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    <?php echo $evaluationRecord->titre ?>                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails de l'évaluation
                                                             </span>
                
                            </div>

                    </div>        
        <div class="kt-subheader__toolbar">

                            <a href="../../../index.html#.html" class="btn btn-default btn-bold">
                    
                    Back                </a>
            
                                                <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">
                                                        
                            Submit                        </button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-writing"></i>
                                        <span class="kt-nav__link-text">Save &amp; continue</span>
                                    </a>
                                </li>                            
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                        <span class="kt-nav__link-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
                                        <span class="kt-nav__link-text">Save &amp; exit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                        
                    </div>
    </div>
</div>
<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first">
    <!--begin: Form Wizard Nav -->
   
    <!--end: Form Wizard Nav -->

    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <!--begin: Form Wizard Form-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    
    <section class="kt-container">
    <br>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>Evaluation/evalutionupdate/<?php echo $evaluationRecord->evaluationId ?>" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">

                            <h4><?php echo $evaluationRecord->titre ?></h4><br>
                            
                            <hr>

                                <div class="col-md-12">                                
                                            <div class="form-group">
                                                <label for="fname">Lien album photo</label>
                                               <input type="text" name="album" class="form-control" id="album" />
                                    </div>   
                                </div>
                                <div class="col-md-12">                                
                                            <div class="form-group">
                                                <label for="fname">Lien after movie</label>
                                               <input type="text" name="afterMovie" class="form-control" id="afterMovie" />
                                    </div>   
                                </div>
                                
                                    <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" style="width:100%" >
                                        <thead>
                                            <th>ID</th>
                                            <th>Nom Prénom</th>
                                            <th>Note </th>
                                            <th>Observation </th>
                                        </thead>
                                        <tbody>
                                           <tr> 
                                    <?php foreach($ressourceRecords as $record)
                                        {
                                    ?>

                                           <td> <?php echo $record->userID ?> </td>
                                           <td> <?php echo $record->name ?>  </td>
                                           <td> 
                                       

                <span class="star-rating">
                  <input type="radio" name="<?php echo $record->ressourceID ?>" value="1"><i></i>
                  <input type="radio" name="<?php echo $record->ressourceID ?>" value="2"><i></i>
                  <input type="radio" name="<?php echo $record->ressourceID ?>" value="3"><i></i>
                  <input type="radio" name="<?php echo $record->ressourceID ?>" value="4"><i></i>
                  <input type="radio" name="<?php echo $record->ressourceID ?>" value="5"><i></i>
                </span>
                <br><br>


        
                                            </td>
                                            <td>
                                                <input type="text" name="observation" class="form-control">
                                            </td>    
                                        </tr>

                                    <?php 
                                        }
                                    ?>
                                   
                                    </tbody>
                                    </table>

                            

                            
                            
                                 
                                
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Valider" />
                            <input type="reset" class="btn btn-default" value="Annuler" />
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 ">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>  



  
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end:: Content -->              
</div>

<script src="<?php echo base_url(); ?>custom/apps/user/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/scripts.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>custom/apps/user/assets/js/demo12/pages/custom/user/add-user.js" type="text/javascript"></script>
<script type="text/javascript">
    function submit_by_id() {
    document.getElementById('kt_apps_user_add_user_form').submit() ;
    }
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>

<script type="text/javascript">
$( document ).ready( function()
{
    var json ;
    var gouvernorat = $( '#gouvernorat' );
    var delegation = $( '#delegation' );
    
    $('#club').select2();
    $('#gouvernorat').select2();
    $('#delegation').select2();

    var d = $.ajax({
    url: '<?php echo base_url(); ?>assets/json/tunisia.json',
    type: "GET",
    dataType: 'json',
    success: function (data) {
        console.log(data);
           $.each( data , function (index, value)
        {
        gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
        });

        gouvernorat.change( function()
        {
        var gouv = $(this).val();
        var deleg = data[ gouv ];

        $('option', delegation).remove();
        delegation.append('<option value="">-- Delegation --</option>');

        $.each( deleg, function (index, value)
        {
        delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
        });
        });    

    } 
    });



        
    });
</script>
<script>  
            function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                  $('#preview-img').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
              }
            }

            $("#image_file").change(function() {
              readURL(this);
            });
</script>
