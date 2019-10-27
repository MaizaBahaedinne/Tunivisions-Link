<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 50%;

  width: auto;
  height: 100px;
}
</style>

<?php  if ($countEval>0 && ($role ==1  ||  ($role == 3  && $cellule='Gestion des talents' )) ){ ?>
<a href=" <?php echo base_url() ; ?>Evaluation/evaluationListing "  >

<div class="alert alert-danger fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text"><strong>Alerte :  </strong> Vous avez <?php echo $countEval ?> évaluation à valider !</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
</a>
<?php } ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">

</div>
<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
    <div class="kt-portlet__body  kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            
            <div class="col-md-3">
                <!--begin::Total Profit-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                              <i class="flaticon2-user"> Tunimateurs</i>
                            </h4>
                            <span class="kt-widget24__desc">
                               
                            </span>
                        </div>

                        <span class="kt-widget24__stats kt-font-brand">
                             <?php echo $tunimateurs ; ?>
                        </span>  
                    </div>       
                </div>
                <!--end::Total Profit-->
            </div>

            <div class="col-md-3">
                <!--begin::New Feedbacks-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                               <i class="flaticon2-safe"> Club Tunivisions</i>
                            </h4>
     
                        </div>

                        <span class="kt-widget24__stats kt-font-warning">
                           <?php echo $clubscount ; ?>
                        </span>  
                    </div> 


                           
                </div>              
                <!--end::New Feedbacks--> 
            </div>

            <div class="col-md-3">
                <!--begin::New Orders-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                                <i class="flaticon2-pie-chart-2"> Projet</i>
                            </h4>

                        </div>

                        <span class="kt-widget24__stats kt-font-danger">
                            <?php echo $projets ; ?>
                        </span>  
                    </div> 

                   

                            
                </div>              
                <!--end::New Orders--> 
            </div>

            <div class="col-md-3">
                <!--begin::New Users-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                             <i class="flaticon2-favourite "> Region</i> 
 
                            </h4>
                            <span class="kt-widget24__desc">
                              
                            </span>
                        </div>

                        <span class="kt-widget24__stats kt-font-success">
                            24 
                        </span>  
                    </div> 


                                               
                </div>              
                <!--end::New Users--> 
            </div>

        </div>
    </div>
</div>
  <div class="row"> 
    <div class="col-md-8">
        
                    <table  style="border-collapse:separate;background-color:#ffffff;border:1px solid #dddfe2;border-radius:3px;font-family:Helvetica, Arial, sans-serif;margin:0px auto; width: auto;">
                        <tr>
                            <td style="">
                                <img  src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/p960x960/73554703_10219860737658001_5161063467171446784_o.jpg?_nc_cat=106&_nc_oc=AQnmV79RHBFmxu5gbXgd6pgalzNZkNEXWKOKeP1SD22xmPlAvhcpBMN3BE3lZR6qpFQ&_nc_ht=scontent.ftun3-1.fna&oh=744c8a999e61f62694951e443b1fe2ee&oe=5E17ACAF" style="max-width: 100%; max-height: 100%;"  alt="" />
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:14px;font-weight:bold;padding:8px 8px 0px 8px;text-align:center;">Only Tunimateurs Mandat 2019-2020</td></tr><tr><td style="color:#90949c;font-size:12px;font-weight:normal;text-align:center;">Groupe Privé · 3 membres</td></tr><tr><td style="padding:8px 12px 12px 12px;">
                                <table border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:100%;">
                                    <tr>
                                        <td style="background-color:#4267b2;border-radius:3px;text-align:center;"><a style="color:#3b5998;text-decoration:none;cursor:pointer;width:100%;" href="https://www.facebook.com/plugins/group/join/popup/?group_id=403356133691439&amp;source=email_campaign_plugin" target="_blank" rel="noopener">
                                            <table border="0" cellspacing="0" cellpadding="3" align="center" style="border-collapse:collapse;"><tr>
                                                <td style="border-bottom:3px solid #4267b2;border-top:3px solid #4267b2;color:#FFF;font-family:Helvetica, Arial, sans-serif;font-size:12px;font-weight:bold;">Rejoindre ce groupe</td>
                                            </tr>
                                        </table>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
 

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Actualité 
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                <div class="kt-widget5">
                    <?php foreach ($ActuRecords as $record ) {
                        ?>

                    <div class="kt-widget5__item">
                        <div class="kt-widget5__content">
                            <div class="kt-widget5__pic" style="background-image: ">
                                <img class="alligator-turtle"    src="<?php echo base_url() ?>uploads/Actu/<?php echo $record->image ?>" alt="">
                            </div>
                            <div class="kt-widget5__section">
                                <a href="<?php echo base_url() ?>Actu/Show/<?php echo $record->actuID ?> " class="kt-widget5__title">
                                    

                                    <?php
                                    $string = strip_tags( $record->titre );
                                    if (strlen($string) > 35){

                                        // truncate string
                                        $stringCut = substr($string, 0, 35);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
}

                                     echo $string ;?>
                                </a>
                                <p class="kt-widget5__desc">
                                    <?php
                                    $string = strip_tags($record->description);
                                    if (strlen($string) > 100) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 100);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... <a href="'.base_url().'/Actu/Show/'.$record->actuID.'">  Plus d\'information</a>';
}

                                     echo $string ;?>
                                </p>
                                <div class="kt-widget5__info">
                                    <span>Par:</span>
                                    <span class="kt-font-info"><?php echo $record->name ;?></span>
                                    <span>Publié le:</span>
                                    <span class="kt-font-info"><?php echo $record->createdDate ;?></span>
                                </div>
                            </div>
                        </div>                      
                        <div class="kt-widget5__content">
                            <!--
                            <div class="kt-widget5__stats">
                                <span class="kt-widget5__number"><span class="kt-widget5__number"><i class="kt-menu__link-icon 
                                flaticon-like"></i></span></span>
                                <span class="kt-widget5__sales">100</span>
                            </div>
                            <div class="kt-widget5__stats">
                                <span class="kt-widget5__number"><i class="kt-menu__link-icon 
                                flaticon-comment"></i></span>
                                <span class="kt-widget5__votes">20</span>
                            </div>
                            -->
                        </div>  
                    </div>
    
                    <?php  # code...
                    }
                    ?>
                     
                </div>
            </div>
            </div>
        </div>
        <!--end::Portlet-->

    </div>

<div class="col-md-4">    
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       <i class="fa fa-star" > Classement des clubs</i>
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th>Nom</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c= 1; 
                                foreach ($RateClub as $rc) {
                                 if ($rc->clubID == $MyclubID)
                                    {  echo '   <tr  bgcolor="#ADD8E6" > '; }
                                else{  echo '   <tr   > '; }
                                   if ($c== 1){ 
                                   echo  '  <td> <span class="kt-badge kt-badge--inline kt-badge--success"> '
                                            .$c.
                                            '</span> </td><td> Club Tunivisions '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 2){ 
                                   echo  ' <tr> <td> <span class="kt-badge kt-badge--inline kt-badge--info">  '
                                            .$c.
                                            '</span></td><td> Club Tunivisions '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 3){ 
                                   echo  ' <tr> <td><span class="kt-badge kt-badge--inline kt-badge--warning"> '
                                            .$c.
                                            '</span> </td><td> Club Tunivisions '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if($c> 3) { 
                                   echo  ' <tr> <td>'
                                            .$c.
                                            '</td><td> Club Tunivisions '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }

                                    else{echo  '</td> ' ;}    
                              $c++ ; 
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>




                        

                    
                </div>
            </div>
        </div>
        <!--end::Portlet-->

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       <i class="fa fa-star" > Classement des membres</i>   
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                   <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th>Nom</th>
                                    <th>Score</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $c= 1; 
                                foreach ($RateMember as $rc) {
                                 if ($rc->userID == $MyuserId)
                                    {  echo '   <tr  bgcolor="#ADD8E6" > '; }
                                else{  echo '   <tr   > '; }
                                   if ($c== 1){ 
                                            echo  '<td> <img src='.base_url().'uploads/avatar/'.$rc->avatar.' width="30px" alt="'.$rc->name.'" class="kt-radius-100"> '
                                            .
                                            '</span> </td><td> '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 2){ 
                                   echo  ' <tr> <td> <img src='.base_url().'uploads/avatar/'.$rc->avatar.' width="30px" alt="'.$rc->name.'" class="kt-radius-100"> '
                                            .
                                            '</span></td><td>   '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 3){ 
                                   echo  ' <tr> <td> <img src='.base_url().'uploads/avatar/'.$rc->avatar.' width="30px" alt="'.$rc->name.'" class="kt-radius-100"> '
                                            .
                                            '</span> </td><td>   '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if($c> 3) { 
                                   echo  ' <tr> <td> <img src='.base_url().'uploads/avatar/'.$rc->avatar.' width="30px" alt="'.$rc->name.'" class="kt-radius-100"> '
                                            .
                                            '</td><td>   '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }

                                    else{echo  '</td> ' ;}    
                              $c++ ; 
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end::Portlet-->


    </div>

<!-- end:: Content -->              
</div>
</div>
<!-- end:: row -->

</div>
</div>