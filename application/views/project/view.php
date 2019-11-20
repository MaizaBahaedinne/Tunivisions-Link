


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
                    <img src="<?php echo base_url()?>uploads/projet/<?php echo $projectInfo->banner ?>" alt="image" width="150px" >
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
                                    Start Date
                                </span>
                                <div class="kt-widget__label">
                                    <span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $projectInfo->startDate ; ?></span>
                                </div>
                            </div>

                            <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    Due Date
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
    <div class="col-xl-6">
        <!--begin:: Widgets/Order Statistics-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Order Statistics
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
				Export
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
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
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget12">
			<div class="kt-widget12__content">
                <div class="kt-widget12__item">					 	 
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Annual Taxes EMS</span> 
                        <span class="kt-widget12__value">$400,000</span>
                    </div>	

                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Finance Review Date</span>
                        <span class="kt-widget12__value">July 24,2019</span> 
                    </div>							 		 	 
                </div>
                <div class="kt-widget12__item">
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Avarage Revenue</span> 
                        <span class="kt-widget12__value">$60M</span>
                    </div>
                    <div class="kt-widget12__info">
                        <span class="kt-widget12__desc">Revenue Margin</span> 
                        <div class="kt-widget12__progress">	
                            <div class="progress kt-progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>								 
                            <span class="kt-widget12__stat">
                                40%
                            </span>
                        </div>
                    </div>						
                </div>
			</div>
			<div class="kt-widget12__chart" style="height:250px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<canvas id="kt_chart_order_statistics" style="display: block; height: 250px; width: 634px;" width="507" height="200" class="chartjs-render-monitor"></canvas>
			</div>
		</div>		 
	</div>
</div>
<!--end:: Widgets/Order Statistics-->    </div>
    <div class="col-xl-6">
        <!--begin:: Widgets/Tasks -->
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tasks
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
					Today
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
					Week
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
					Month
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget2_tab1_content">
				<div class="kt-widget2">
					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Prepare Docs For Metting On Monday
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>						
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Great Again.Estudiat Communy Elit
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great Again. Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>


						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							<p></p>							 
							</a><a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>
				</div>            
			</div>

			<div class="tab-pane" id="kt_widget2_tab2_content">
				<div class="kt-widget2">
					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great Again.Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Prepare Docs For Metting On Monday
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>						
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>


						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Great Again.Estudiat Communy Elit
							<p></p>							 
							</a><a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>
				</div>	
			</div>	

			<div class="tab-pane" id="kt_widget2_tab3_content">
				<div class="kt-widget2">

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great Again.Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Great Again.Estudiat Communy Elit
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

				</div>
			</div>		
		</div>
	</div>
</div>
<!--end:: Widgets/Tasks -->
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <!--begin:: Widgets/Last Updates-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Evaluation des membres
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
				Today
			</a>
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

  width: 35px;
  height: 35px;
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
                ALBUM PHOTO
                </div>
            </div>

            <div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
                <div class="kt-notification">

                    
            AFTER MOVIE
                   
                </div>
            </div>
            

        </div>
    </div>
</div>
<!--end:: Widgets/Notifications-->    </div>
</div>	</div>
<!-- end:: Content -->				</div>