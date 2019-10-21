<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Projet +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails du projet
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
                    <form role="form" id="addUser" action="<?php echo base_url() ?>addNewUser" method="post" role="form">
                        <div class="box-body">

                            <h4>Projet</h4>
                            <hr>


                            <div class="row">


                            <br>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Banner</label>
                                        <br>
                                        <input type="file" name="Banner">
                                    </div>
                                    
                                </div>
                                <div class="col-md-2">                                
                                    <div class="form-group">
                                        <label for="fname">Type</label>
                                        <select class="form-control" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Team Building">Team Building</option>

                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="col-md-10">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="Titre" name="Titre" value="<?php echo $Titre; ?>" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                        <textarea type="text" class="form-control required" id="description" name="description" maxlength="1000" required ></textarea>
                                    </div>
                                    
                                </div>
                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date debut</label>
                                        <input type="date" class="form-control required"  id="debut" name="debut"  required >
                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date fin</label>
                                        <input type="date" class="form-control required"  id="fin" name="fin"  required >
                                    </div>
                                </div>
                            <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">cible  &nbsp; &nbsp; </label>
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Publique" required> Publique
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Privé"> Privé
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" value="Only tunimateur" required> Only tunimateur
                                                <span></span>
                                        </label>


                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Local</label>
                                          <input type="text" class="form-control required" id="local" name="local" maxlength="255" required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Capacité</label>
                                          <input type="number" class="form-control required" id="capacite" name="capacite"  required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Prix</label>
                                          <input type="number" class="form-control required" id="prix" name="prix"  required >      


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
    url: 'http://127.0.0.1/TunivisionsFoundation.org/tlink/assets/json/tunisia.json',
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
