<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Projets                           
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
        if(!empty($projectRecords))
            {
              foreach($projectRecords as $record)
            {
            ?>
    <div class="col-md-11">
        <!--begin:: Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
        

            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--project-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__label">
                            <div class="kt-widget__media">
                                
                             </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__media">

                                <span class="btn btn-danger "> 
                                        <?php $date = new DateTime($record->startDate) ; 
                                        echo $date->format('d').'-'.$date->format('M').'-20'.$date->format('y') ; ?>    
                                </span>
                            </div>


                                <a href="" class="kt-widget__title">
                                  

                                    <?php 
                                     echo $record->titre ;
                                     ?>
                                </a>
                                <small>
                                <?php if ($record->cible=='Publique' )
                                    { ?>
                                        <i class="flaticon-share"></i>
                                <?php }
                                    else if ( $record->cible=='Privé' ){ ?>
                                        <i class="flaticon2-user-outline-symbol"></i>
                                <?php } 
                                 
                                    else if ( $record->cible=='Only tunimateur' ){ ?>
                                        <i class="flaticon-users"></i>
                                <?php } ?>

                                <?php  echo $record->cible ?></small>
                                <span class="kt-widget__desc">
                                    par 
                                <?php if ($record->ClubName !='Foundation') {echo 'club';} ?> Tunivisions <?php echo $record->ClubName ?>  

                                </span>
                                

                                     
                                
                            </div>
                        </div>
                        

                    </div>

                    

                    
                </div>
                <!--end::Widget -->
            </div>
        </div>

        <!--end:: Portlet-->
    </div>
     <div class="kt-portlet kt-portlet--height-fluid col-md-1" style="background-color: #F82565 ">
           <label style="color: #FFFFFF ">Note :   </label>
           <br>
           <h2 style="color: #FFFFFF ">20   </h2>
    </div>  
    
    <?php
                        }
                    }
                    ?>
              
</div>
<!--End::Section-->



<!--Begin::Section-->

<!--End::Section--> </div>
<!-- end:: Content -->              </div>