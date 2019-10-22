<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 50%;

  width: 150px;
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
                           <?php echo $clubs ?>
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
                            <div class="kt-widget5__pic">
                                <img class="alligator-turtle" width="200px"   src="<?php echo base_url() ?>/uploads/Actu/<?php echo $record->image ?>" alt="">
                            </div>
                            <div class="kt-widget5__section">
                                <a href="<?php echo base_url() ?>Actu/Show/<?php echo $record->actuID ?> " class="kt-widget5__title">
                                    <?php echo $record->titre ;?>
                                </a>
                                <p class="kt-widget5__desc">
                                    <?php
                                    $string = strip_tags($record->description);
                                    if (strlen($string) > 35) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 35);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... <a href="/this/story">  Plus d\'information</a>';
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
                                            echo  '<td> <img src='.base_url().'/uploads/avatar/'.$rc->avatar.  ' width="30px" alt="image" class="kt-radius-100"> '
                                            .
                                            '</span> </td><td> '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 2){ 
                                   echo  ' <tr> <td> <img src='.base_url().'/uploads/avatar/'.$rc->avatar.  ' width="30px" alt="image" class="kt-radius-100"> '
                                            .
                                            '</span></td><td>   '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 3){ 
                                   echo  ' <tr> <td> <img src='.base_url().'/uploads/avatar/'.$rc->avatar.  ' width="30px" alt="image" class="kt-radius-100"> '
                                            .
                                            '</span> </td><td>   '
                                            .$rc->name.
                                            '</td><td>'. 
                                            $rc->scores
                                              ;
                                            }
                                   if($c> 3) { 
                                   echo  ' <tr> <td> <img src='.base_url().'/uploads/avatar/'.$rc->avatar.  ' width="30px" alt="image" class="kt-radius-100"> '
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