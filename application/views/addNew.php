<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Tunimateur +                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                         Entrer les détails de Tunimateurs
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
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>addNewUser" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">

                            <h4>Club</h4>
                            <hr>
                            <div class="row">

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="role">club Tunivisions</label>
                                        <select class="form-control required" id="club" name="club">
                                            <option value="0"> -------- </option>
                                            <?php
                                            if(!empty($clubs))
                                            {
                                                foreach ($clubs as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->clubID ?>" <?php if($rl->clubID == set_value('club')) {echo "selected=selected";} ?>><?php echo $rl->name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="role">Poste</label>
                                        <select class="form-control required" id="role" name="role">
                                            <option value="0">--------</option>
                                            <?php
                                            if(!empty($roles))
                                            {
                                                foreach ($roles as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->roleId ?>" <?php if($rl->roleId == set_value('role')) {echo "selected=selected";} ?>><?php echo $rl->role ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="affectedYear">Année d'affectation</label>
                                        <input type="Number" pattern="yyyy" class="form-control required digits" id="affectedYear" value="<?php echo set_value('affectedYear'); ?>" name="affectedYear" min="2016"  >
                                    </div>
                                </div>    
                           

   
                            
                            </div>

                            <h4>Information personnel</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Avatar</label>
                                        <br>
                                        <img id="preview-img" width="360px"  />  
                                         <br>  
                                       <input type="file" name="file" id="file" />
                                    </div>
                                    
                                </div>
  
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Nom Prénom</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" maxlength="128" required >
                                    </div>
                                    
                                </div>
                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">CIN</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('cin'); ?>" id="cin" name="cin" maxlength="128" required >
                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date de naissance</label>
                                        <input type="date" class="form-control required" value="<?php echo set_value('cin'); ?>" id="birthday" name="birthday" maxlength="128" required >
                                    </div>
                                </div>
                            <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Sexe  &nbsp; &nbsp; </label>
                                        <label class="kt-radio">
                                                <input type="radio" name="sexe" value="Homme" required> Homme
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="sexe" value="Femme"> Femme
                                                <span></span>
                                        </label>

                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Gouvernorat</label>
                                                <select class="form-control" name="gouvernorat" id="gouvernorat" required >
                                                    <option value="">-- Gouvernorat --</option>
                                                </select>


                                    </div>
                                </div>
                                 <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Delegation</label>
                                                <select class="form-control" name="delegation" id="delegation" required >
                                                    <option value="">-- Delegation --</option>
                                                 </select>

                                    </div>
                                </div>

                            </div>

                            <h4>Compte utilisateur</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control required" id="password" name="password" maxlength="20" required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirmation mot de passe</label>
                                        <input type="password" class="form-control required equalTo" id="cpassword" name="cpassword" maxlength="20" required >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                @
                                                </span>
                                            </div>
                                            <input type="email" class="form-control required email" id="email" value="<?php echo set_value('email'); ?>" name="email" maxlength="128" required >
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile </label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo set_value('mobile'); ?>" name="mobile" maxlength="8" required >
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile 2</label>
                                        <input type="text" class="form-control required digits" id="mobile2" value="<?php echo set_value('mobile2'); ?>" name="mobile2" maxlength="8">
                                    </div>
                                </div>
                            </div>
                            <h4>Réseaux sociaux</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mobile">Facebbok </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="flaticon-facebook-logo-button"></i>
                                                </span>
                                            </div>
                                         <input type="text" class="form-control required digits"
                                        pattern="https://www.facebook.com/(.+)" id="facebook" placeholder="https://www.facebook.com/username"  name="facebook" required >
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mobile">instagram</label>
                                   
                                        <label for="email">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                <i class="flaticon-instagram-logo"></i>
                                                </span>
                                            </div>
                                         <input type="text" class="form-control required digits"
                                        pattern="https://www.instagram.com//(.+)" id="instagram" placeholder="https://www.instagram.com/username"  name="instagram" >
                                        </div>
                                        
                                
                                       
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mobile">linkedin </label>
                                        <input type="text" class="form-control required digits" id="linkedin" name="linkedin" >
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
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