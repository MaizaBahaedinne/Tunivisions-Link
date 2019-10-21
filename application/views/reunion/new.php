<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Réunion +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails de la reunion
                                                             </span>
                
                            </div>

                    </div>        
        <div class="kt-subheader__toolbar">

                            

                                        
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
                    <form role="form" id="addproject" action="<?php echo base_url() ?>Reunion/addNewReunion" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">

                            <h4>Reunion</h4>
                            <hr>


                            <div class="row">


                            <br>
                            <div class="row">

                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Sujet</label>
                                        <input type="text" class="form-control required" id="sujet" name="sujet" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule</label>
                                        <select class="form-control" id="type" name="cellule" >
                                            <option value="Generale">Generale</option>
                                            <option value="Bureau">Bureau</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Evenementiel">Evenementiel</option>
                                            <option value="Administration et finance">Administration et finance</option>
                                            <option value="Gestion des talents">Gestion des talents</option>
                                            

                                        </select>
                                    </div>
                                    
                                </div>


                              <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Date</label>
                                        <input type="date" class="form-control required"  id="dateDo" name="dateDo" min="<?php echo date('Y-m-d') ?>"  required >
                                    </div>
                                </div>

                              <div class="col-md-2">                                
                                    <div class="form-group">
                                        <label for="fname">Heure</label>
                                        <input type="time" class="form-control required"  id="timeDo" name="timeDo"  required >
                                    </div>
                                </div>
                            
                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Local</label>
                                          <input type="text" class="form-control required" id="local" name="local" maxlength="255" required >      


                                    </div>
                                </div>
                                
                                

                            </div>
                            
                           

                           
         
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <br>
                            <br>
                        </div>
                    </form>
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

<script type="text/javascript">
    $(function(){

    $('#txtDate').attr('min', maxDate);
});
</script>

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
    url: '<?php echo base_url(); ?>/assets/json/tunisia.json',
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