


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											<!-- begin:: Content Head -->

<!-- end:: Content Head -->					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin:: Portlet-->
<div class="kt-portlet ">
    <div class="kt-portlet__body">
        <div class="kt-widget kt-widget--user-profile-3">
            <div class="kt-widget__media kt-hidden-">
                    <img src="<?php echo base_url()?>uploads/projet/<?php echo $projectInfo->banner ?>" alt="image" width="300px" >
                </div>
            <div class="kt-widget__top">
                
                <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                    JM
                </div>
                <div class="kt-widget__content">
                    <div class="kt-widget__head">
                       

                        <a href="#" class="kt-widget__title"><?php echo $projectInfo->titre; ?> <small> #<?php echo $projectInfo->projectId; ?></small></a>

                        <div class="kt-widget__action">
                            <button type="button" class="btn btn-sm btn-upper" style="background: #edeff6">Noter</button>&nbsp;
                            <button type="button" class="btn btn-success btn-sm btn-upper">Supprimer</button>&nbsp;
                        </div>
                    </div>

                    <i class="fas fa-map-marker-alt"></i> <?php echo $projectInfo->local ?>
                    <br></br>
                    <div class="kt-widget__info">

                        <div class="kt-widget__desc">
                            <?php echo $projectInfo->description ; ?>
                        </div>
                        <div class="kt-widget__progress kt-hidden">
                            <div class="kt-widget__text">
                                Progress
                            </div>
                            <div class="progress" style="height: 5px;width: 100%;">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="kt-widget__stats">
                                78%
                            </div>
                        </div>

                        <div class="kt-widget__stats d-flex align-items-center flex-fill">
                            <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                 Date Debut
                                </span>
                                <div class="kt-widget__label">
                                    <span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $projectInfo->startDate ; ?></span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                 Date Fin
                                </span>
                                <div class="kt-widget__label">
                                    <span class="btn btn-label-danger btn-sm btn-bold btn-upper"><?php echo $projectInfo->endDate ; ?></span>
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
                        <span class="kt-widget__title">Prix</span>
                        <span class="kt-widget__value"><span><?php echo $projectInfo->prix ; ?></span> DT</span>
                    </div>
                </div>

                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-confetti"></i>
                    </div>
                    <div class="kt-widget__details">
                        <span class="kt-widget__title">Place</span>
                        <span class="kt-widget__value"><span></span><?php echo $projectInfo->capacite ; ?></span>
                    </div>
                </div>

               

                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-file-2"></i>
                    </div>
                    <div class="kt-widget__details">
                        <span class="kt-widget__title">73 Tasks</span>
                    </div>
                </div>

               

                <div class="kt-widget__item">
                    <div class="kt-widget__icon">
                        <i class="flaticon-network"></i>
                    </div>
                    <div class="kt-widget__details">
                        <div class="kt-section__content kt-section__content--solid">
                            <div class="kt-badge kt-badge__pics">
                                <?php foreach ($resource as $member) {
                                ?>
                                <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="<?php echo $member->name ; ?>">
                                    <img src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $member->avatar ; ?>" alt="image">
                                </a>
                                <?php
                                }
                                ?>
                                
                                <a href="#" class="kt-badge__pic kt-badge__pic--last kt-font-brand">
                                 +   <?php echo count($resource) ?>
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

<!--end:: Widgets/Tasks -->
  
</div>
<div class="row">
    <div class="col-md-6">
        <!--begin:: Widgets/Last Updates-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Evaluation des membres
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
				<!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-link"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->			</div>
		</div>
	</div>
    <style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 0%;

  width: 25px;
  height: 25px;
}
</style>
	<div class="kt-portlet__body">
		<!--begin::widget 12-->
		<div class="kt-widget4">
             <?php foreach ($resource as $member) {
                                ?>
			<div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<img src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $member->avatar ; ?>" class="kt-radius-100 alligator-turtle"  >
				</span>	
				<a href="#" class="kt-widget4__title kt-widget4__title--light">
					<?php echo $member->name ?><small>#<?php echo $member->userId ?></small>
				</a> 		
				<span class="kt-widget4__number kt-font-info"><?php echo $member->score ?></span>
			</div>
        <?php }     ?>
			
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
				Media
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
						Album Photo
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
						After Mov
					</a>
				</li>
				<li class="nav-item">

				</li>
			</ul>
		</div>
	</div>
    <div class="kt-portlet__body">
        <div class="tab-content">
            <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                <div class="kt-notification">
                   <a href="<?php echo $evaluations->album ; ?>">Album Photo</a> 
                    <br>
               <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->album ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                   
               </iframe>
                </div>
                <div class="kt-notification">
               <a href="<?php echo $evaluations->afterMovie ; ?>">After Movie </a>
                <br>
               <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->afterMovie ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>

            <div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">

            </div>
            

        </div>
    </div>
</div>
<!--end:: Widgets/Notifications-->    </div>
</div>	</div>
<!-- end:: Content -->				</div>