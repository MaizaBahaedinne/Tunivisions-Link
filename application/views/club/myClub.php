<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											<!-- begin:: Content Head -->

<!-- end:: Content Head -->					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin:: Portlet-->
<div class="kt-portlet ">
    <div class="kt-portlet__body">
        <div class="kt-widget kt-widget--user-profile-3">
            <div class="kt-widget__top">

                <div class="kt-widget__content">
                    <div class="kt-widget__head">


                        <a href="#" class="kt-widget__title">                    
                                            <?php
                                            if ($clubInfo->name!= "Foundation")
                                            echo "club ";
                                            ?>   Tunivisions  <?php echo $clubInfo->name  ?> 
                                        </a>

                        
                         <div class="kt-widget__action">
                             <div class="kt-widget__item">
                                <div class="kt-widget__label">
                                  Fondé le  <span class="btn btn-label-brand btn-sm btn-bold btn-upper"> <?php echo $clubInfo->birthday  ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="kt-widget__info">
                        <div class="kt-widget__desc">
                        <b>Bureau executif</b>
                           
                         
                         <div class="row">
                            <div class="col-md-4">
                            <?php
                                if(!empty($bureauExe))
                                {
                                    foreach($bureauExe as $b)
                                    {
                            ?>
                           
                            <div class="kt-widget__top">
                
                                <style type="text/css">
                                    .crop {
                                        width: 350px;
                                        
                                        overflow: hidden;
                                    }

                                    .crop img {
                                        width: 500px;
                                        
                                        margin: -50px 0 0 -50px;
                                    }

                                </style>
                             
                             <img src="<?php echo base_url()  ?>uploads/avatar/<?php echo $b->avatar; ?>" width="45px" alt="image"  class="kt-radius-100" >
                    
                
                
                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="#" class="kt-widget__username">
                                      <?php echo $b->Tname; ?> 
                                        <br>
                                       <small> <?php echo $b->role; ?> <?php echo $b->cellule  ; ?>  </small>                      
                                    </a>

               
                                </div>

                                


                            </div>
                        </div>

                                
                                
           
                            <?php

                                    }
                                }
                            ?>
                        </div>
                        

                        </div>
           
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-widget__bottom">
                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-piggy-bank"></i>
                    </div>
                    <div class="kt-widget__details">
                        <span class="kt-widget__title">Formation</span>
                        <span class="kt-widget__value"><span></span><?php echo $formation ; ?></span>
                    </div>
                </div>

                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-confetti"></i>
                    </div>
                    <div class="kt-widget__details">
                        <span class="kt-widget__title">Conférence</span>
                        <span class="kt-widget__value"><span></span><?php echo $conference ; ?></span>
                    </div>
                </div>

                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-pie-chart"></i>
                    </div>
                    <div class="kt-widget__details">
                        <span class="kt-widget__title">Evenement</span>
                        <span class="kt-widget__value"><span><?php echo $evenement ;  ?></span></span>
                    </div>
                </div>



                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-network"></i>
                    </div>
                    <div class="kt-widget__details">
                        <div class="kt-section__content kt-section__content--solid">
                            <div class="kt-badge kt-badge__pics">
                                <?php foreach ($members as $member) {
                                ?>
                                <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="<?php echo $member->name ; ?>">
                                    <img src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $member->avatar ; ?>" alt="image">
                                </a>
                                <?php
                                }
                                ?>
                                
                                <a href="#" class="kt-badge__pic kt-badge__pic--last kt-font-brand">
                                 +   <?php echo $membersCount ?>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:: Portlet-->

<div class="row">
    <div class="col-xl-6">
        <!--begin:: Widgets/Last Updates-->
        <div class="kt-portlet kt-portlet--height-fluid">
        	<div class="kt-portlet__head">
        		<div class="kt-portlet__head-label">
        			<h3 class="kt-portlet__head-title">
        				Score du club
        			</h3>
        		</div>

        	</div>
        	<div class="kt-portlet__body">
        		<!--begin::widget 12-->
        		<div class="kt-widget4">
        			

			<?php
                                if(!empty($scoreByClub))
                                {
                                    foreach($scoreByClub as $b)
                                    {
                            ?>
			<div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-file kt-font-success"></i>
				</span>	
				<a href="#" class="kt-widget4__title kt-widget4__title--light">
					<?php echo $b->titre ?>
				</a> 		
				
                    <?php 
                    if($b->score > 0) 
                        {echo '<span class="kt-widget4__number kt-font-success"> +'.$b->score ;} 
                    else 
                        {echo '<span class="kt-widget4__number kt-font-danger">'.$b->score ;}?>
                        
                </span>
			</div>
        <?php                   }
                            }
        ?>
		</div>
		<!--end::Widget 12-->
	</div>
</div>
<!--end:: Widgets/Last Updates-->    </div>
    <div class="col-xl-6">
        <!--begin:: Widgets/Notifications-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Les Projets 
			</h3>
		</div>

		<div class="kt-portlet__head-toolbar">
			
               <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<!--<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
						Semaine
					</a>
				</li>-->
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
						Mois
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
						Passé
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                <div class="kt-notification">
                    
                   
                    <?php foreach ($PTW as $key => $pw ){ ?>
                        <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
                                <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                            </g>
                        </svg>                        
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                <?php echo $pw->titre; ?>
                            </div>
                            <div class="kt-notification__item-time">
                                de <?php echo $pw->startDate ; ?> 
                            </div>
                        </div>
                    </a>
                    <?php }?>

                        
                    
                </div>
            </div>

			<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
                <div class="kt-notification">
                    
                    <?php foreach ($PTM as $key => $pm ){ ?>
                        <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
                                <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                            </g>
                        </svg>                        
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                <?php echo $pm->titre; ?>
                            </div>
                            <div class="kt-notification__item-time">
                                de <?php echo $pm->startDate ; ?> 
                            </div>
                        </div>
                    </a>
                    <?php }?>
           
                    
                    
                   
                    
                </div>
			</div>
            
            <div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
                <div class="kt-notification">
                    
                    <?php foreach ($PTP as $key => $pp ){ ?>
                        <a href="#" class="kt-notification__item">
                                                <div class="kt-notification__item-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
                                <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                            </g>
                        </svg>                        
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                <?php echo $pp->titre; ?>
                            </div>
                            <div class="kt-notification__item-time">
                                 <?php echo $pp->startDate ; ?> 
                            </div>
                        </div>
                    </a>
                    <?php }?>
                   
                    
                </div>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Notifications-->    </div>
    <div class="col-xl-12">
        <!--begin:: Widgets/Order Statistics-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Finance
            </h3>
        </div>

    </div>
    <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget12">
            <div class="kt-widget12__content">
                <div class="kt-widget12__item">                      
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Produit</span> 
                        <span class="kt-widget12__value">+ <?php echo $finance->produits ?> DT</span>
                    </div>  

                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Derniere mise à jour</span>
                        <span class="kt-widget12__value"><?php
                                                            $d1 = new DateTime($finance->createdDate);
                                                            $d2 = new DateTime();
                                                            $diff = $d1->diff($d2);

                                                            $nb_jours = $diff->d;


                                                     echo 'Il y a '. $nb_jours.' jours'
                                                     ?></span> 
                    </div>                                       
                </div>
                <div class="kt-widget12__item">
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Dépense</span> 
                        <span class="kt-widget12__value">- <?php echo $finance->charges ?> DT</span>
                    </div>
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Solde actuel</span> 
                        <div class="kt-widget12__progress"> 
                            <span class="kt-widget12__value"><?php echo ($finance->produits - $finance->charges ) ?> DT</span>                      
                        </div>
                    </div>                      
                </div>
            </div>
            <!--
            <div class="kt-widget12__chart" style="height:250px;">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class="">
                            
                        </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class="">
                        
                        </div>
                    </div>
                </div>
                <canvas id="kt_chart_order_statistics" style="display: block; height: 250px; width: 540px;" width="485" height="224" class="chartjs-render-monitor"></canvas>
            </div>
        -->
        </div>       
    </div>
</div>
<!--end:: Widgets/Order Statistics-->    </div>
</div>	</div>
<!-- end:: Content -->				</div>