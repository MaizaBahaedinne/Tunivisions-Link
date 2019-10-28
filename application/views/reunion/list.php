<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Reunion                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            <?php  echo $count ?>                                  </span>
                
                                   
                            </div>


                    </div>        
        <div class="kt-subheader__toolbar">

                            <a href="../../../.html" class="">
                    
                                    </a>
            <?php if($role==1 || $role==2 || $role==3 ) { ?>
                                                <a href="<?php echo base_url() ?>Reunion/addNew" class="btn btn-label-brand btn-bold">
                        
                        Ajouter une réunion                    </a>
                    <?php }?>
                                        

                    </div>
    </div>
</div>
<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Section-->
<div class="row">
    <?php
        if(!empty($reunionRecords))
            {
              foreach($reunionRecords as $record)
            {
            ?>
    <div class="col-md-4">
        <!--begin:: Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--project-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__label">
                            <div class="kt-widget__media">
                                <span class="btn btn-danger "> 
                                        <?php $date = new DateTime($record->dateDo) ; 
                                        echo $date->format('d').'/'.$date->format('m') ; ?>    
                                </span>
                            </div>
                            <div class="kt-widget__info">
                                <a href="#" class="kt-widget__title">
                                    <?php echo $record->Sujet ?><br>
                                                                                    
                                </a>
                                <span class="kt-widget__desc">
                               <small>Cellule : <?php echo $record->cellule ?></small>

                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="kt-widget__body">
                        <div class="kt-widget__stats">
                            <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Date
                                </span>
                                <div class="kt-widget__label">
                                    <span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $record->dateDo ?> <?php echo $record->timeDo ?> </span>
                                </div>
                            </div>

                            

                            <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Local
                                </span>
                                <div class="kt-widget__label">
                                    <span class="btn btn-label-danger btn-sm btn-bold btn-upper"></i> <?php echo $record->local ?></span>
                                </div>
                            </div>

                        </div>

                        
         

                        
                    </div>

                    <div class="kt-widget__footer">
                        <div class="kt-widget__wrapper">
                            <div class="kt-widget__section">
                                
                            </div>

                            <div class="kt-widget__section">
                           <?php
                                                            $d1 = new DateTime($record->dateDo);
                                                            $d2 = new DateTime();
                                                            $diff = $d1->diff($d2);

                                                            $nb_jours = $diff->d;



                            if ($record->PV == '' &&  $record->createdBy == $user &&  $nb_jours >= 0 ) { ?>
                            <a href="<?php echo base_url().'Reunion/PV_edit/'.$record->reunionId; ?>">     <button type="button" class="btn btn-danger btn-sm btn-upper btn-bold">Rediger le PV</button>                                 
                           </a>
                           <?php } ?>
                         &nbsp;&nbsp; <a href="<?php echo base_url().'Reunion/reunionDetails/'.$record->reunionId; ?>">     <button type="button" class="btn btn-brand btn-sm btn-upper btn-bold">details</button>                                 
                           </a>
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

<!--End::Section--> </div>
<!-- end:: Content -->              </div>