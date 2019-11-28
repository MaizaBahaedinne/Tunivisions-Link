<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    TFM                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                                                                </span>
                
                                   
                            </div>

                            <div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">

                    <div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span> Selected:</div>
                    
                    <div class="btn-toolbar kt-margin-l-20">
                        <div class="dropdown" id="kt_subheader_group_actions_status_change">
                            <button type="button" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                                Update Status
                            </button>
                            <div class="dropdown-menu">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Change status to:</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
                                            <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
                                            <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
                                            <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
                                            <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
                            Fetch Selected
                        </button>                
                        <button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
                            Delete All
                        </button>
                    </div>
                </div>
                    </div>        
        <div class="kt-subheader__toolbar">

           <!--         
            <?php if ($role ==1 || $role == 2 || $role == 3  ) {  ?>
                                                <a href="<?php echo base_url() ?>addNewProject" class="btn btn-label-brand btn-bold">
                        
                        Ajouter un projet                    </a>
             <?php } ?>                           
            -->
                    </div>
    </div>
</div>
<!-- end:: Content Head -->					

<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 50%;

  width: 100%;
  height: 150px;
}
</style>


					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Section-->
<div class="row">
    <?php
        if(!empty($tfmRecords))
            {
              foreach($tfmRecords as $record)
            {
            ?>
    <div class="col-md-6">
        <!--begin:: Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
        <div>
             <img src="<?php echo base_url()  ?>uploads/projet/<?php echo $record->banner; ?>"  class="alligator-turtle" alt="image">  
        </div>

            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--project-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__label">
                            <div class="kt-widget__media">
                                 
                             </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__media">
                                <a href="" class="kt-widget__title">
                                  

                                    <?php 
                                    $string = strip_tags( $record->nom );
                                    if (strlen($string) > 20){

                                        // truncate string
                                        $stringCut = substr($string, 0, 20);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?>
                                </a>
                              
                            </div>                                                          
                                <br>
                                <i class="flaticon-users"></i> &nbsp;par  Tunivisions Foundation
                                <br>
                                <span class="btn btn-primary "> 
                                        <?php $date = new DateTime($record->dateDebut) ; 
                                        echo '<span>'.$date->format('d').'-'.$date->format('M').'-20'.$date->format('y').'</span>' ; ?>    
                                </span>
                                <span class="btn btn-danger "> 
                                        <?php $date = new DateTime($record->dateFin) ; 
                                        echo '<span>'.$date->format('d').'-'.$date->format('M').'-20'.$date->format('y').'</span>' ; ?>    
                                </span>
                                <br>

                            </div>
                        </div>
                        <span>
  
                            
                        <?php foreach ($tfmpartRecords as $tfmp ) {
                            if ( $tfmp->tfmId == $record->tfmId && $tfmp->statut == 1  ){
                            ?>
                            <span class="btn btn-primary "> 
                                        TFM validé    
                            </span> 
                         <?php        
                                }
                                else if( $tfmp->tfmId == $record->tfmId && $tfmp->statut == 2  ) {
                                   ?>
                            <span class="btn btn-warning "> 
                                        <b>En cours de traitement</b> <br>
                                        Premiére tranche <b>80 DT</b>  Avant le <b>01/12/2019</b><br>
										Deuxiéme tranche <b>70 DT</b>  Avant le <b>08/12/2019</b>      
                            </span> 
                         <?php   
                                }
                            } 
                            ?>

                            
                            <a <?php foreach ($tfmpartRecords as $tfmp ) {
                            if ( $tfmp->tfmId == 6   ){ ?> style="display: none" <?php }} ?>
                            href="<?php echo base_url() ; ?>TFM/partant/<?php echo $record->tfmId ; ?>">  
                        <!--
                            <?php if ($record->tfmId == 6 ){ ?>
                                <div class="btn btn-danger">
                                    <span class="kt-widget__subtitle"></span>
                                    <span class="kt-widget__value"> je veux participer </span><span></span>
                                </div>
                            <?php }  ?>
                        -->
                                	                             	
                   
                                
                            </a>

                         </span>   
                                
                    </div>

                    <div class="kt-widget__body">

                        <div class="kt-widget__content">
                            
                            <div class="kt-widget__details">
                                <span class="kt-widget__subtitle"></span>
                                <span class="kt-widget__value"><i class="fas fa-map-marker-alt"></i> &nbsp; <span><small><?php  echo $record->local; ?> </small> </span><span></span>
                            </div>
                            
                            <div class="kt-widget__details">
                                <span class="kt-widget__subtitle"></span>
                                <span class="kt-widget__value"><i class="fas fa-money-bill-wave"></i> &nbsp;<small> <span><?php if ($record->prix == 0){echo "Gratuit";}else{echo $record->prix.' DT';} ?> </small> </span><span></span>
                            </div>



                        </div>

                    </div>

                    
                </div>
                <!--end::Widget -->
            </div>
        </div>
        <!--end:: Portlet-->
    </div>
    <?php
                        }
                    }
                    ?>
</div>
<!--End::Section-->



<!--Begin::Section-->

<!--End::Section-->	</div>
<!-- end:: Content -->				</div>