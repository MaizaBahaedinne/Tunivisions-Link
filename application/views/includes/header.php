<!DOCTYPE html>

<html lang="fr" >
    <!-- begin::Head -->
    
<!-- Mirrored from keenthemes.com/metronic/preview/demo12/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2019 19:45:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><script type="text/javascript" src="https://keenthemes.com/injected/Async.js"></script>
        <meta charset="utf-8"/>
        
        <title>T-link</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>ajaxcom/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--begin::Fonts -->
        <script src="<?php echo base_url() ?>ajaxcom/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->

                    <!--begin::Page Vendors Styles(used by this page) -->
       <link href="<?php echo base_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="<?php echo base_url() ?>assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="<?php echo base_url() ?>assets/css/demo12/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->
		<link rel="icon" href="<?php echo base_url() ?>assets/media/logos/favicon.ico" />
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/logos/favicon.ico" />
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >



<!-- blockage ---------------->

   <?php if($isBlocked==1) { ?>
    		<script type="text/javascript"> let timerInterval
	Swal.fire({
	  title: 'alert!',
	  html: 'tu es bloqué . Contacter la Foundation',
	  timer: 7000,
	  onBeforeOpen: () => {
	    Swal.showLoading()
	    timerInterval = setInterval(() => {
	      Swal.getContent().querySelector('strong')
	        .textContent = Swal.getTimerLeft()
	    }, 100)
	  },
	  onClose: () => {
	    clearInterval(timerInterval)
	  }
	}).then((result) => {
	  if (
	    /* Read more about handling dismissals below */
	    result.dismiss === Swal.DismissReason.timer
	  ) {
	  	window.location.replace("<?php echo base_url() ;?>logout");
	    console.log('Votre club est bloqué')
	  }
	})</script>
       <?php } ?>
    	<!-- begin:: Page -->
	
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__logo">
		<a href="<?php echo base_url() ; ?>">
			<img alt="Logo" width="80%" src="<?php echo base_url() ?>assets/media/logos/logo-12.png"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
					<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		
				
		
		<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
							<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
	<!-- begin:: Aside -->
<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
	<div class="kt-aside__brand-logo">
		<a href="<?php echo base_url() ; ?>">
			<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-12.png">
		</a>
	</div>

			<div class="kt-aside__brand-tools">
			<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
		</div>
	</div>
<!-- end:: Aside -->	<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	<div 
		id="kt_aside_menu" 
		class="kt-aside-menu " 
		data-ktmenu-vertical="1"
		 data-ktmenu-scroll="1"  
		>		
		
		<ul class="kt-menu__nav ">
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "dash" ){echo("--active") ;} ?> " aria-haspopup="true" ><a  href="<?php echo base_url() ; ?>dashboard" class="kt-menu__link">
				<i class="kt-menu__link-icon flaticon2-architecture-and-city">
				
			</i>
			<span class="kt-menu__link-text">Dashboard</span></a>
			</li>
			
		<li class="kt-menu__section ">
                <h4 class="kt-menu__section-text">Foundation</h4>
                <i class="kt-menu__section-icon flaticon-more-v2"></i>
            </li>
            <?php if ($clubID ==0 ) { ?>
            <li class="kt-menu__item  kt-menu__item<?php if( $active == "clubs" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Club/clubListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-event-calendar-symbol">
					</i>
					<span class="kt-menu__link-text">
						Clubs
					</span>
				</a>
			</li>
			<?php } ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "members" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>users" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-notes">
					</i>
					<span class="kt-menu__link-text">
						Members
					</span>
				</a>
			</li>
			<?php if ($clubID ==0 && (($role ==1 || $role == 2 || $role == 3) && ($cellule =='Marketing' || $cellule =='') )) { ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "actu" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Actu/addNew" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-users">
					</i>
					<span class="kt-menu__link-text">
						Actualités
					</span>
				</a>
			</li>
			<?php } ?>
 			<li class="kt-menu__item  kt-menu__item<?php if( $active == "projects" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Project/projectListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-event-calendar-symbol">
					</i>
					<span class="kt-menu__link-text">
						Projets
					</span>
				</a>
			</li>
			<!--
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "reservations" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-clock-2">
					</i>
					<span class="kt-menu__link-text">
						Reservation
					</span>
				</a>
			</li>
			-->
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "claims" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Reclamation/addNew" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-exclamation">
					</i>
					<span class="kt-menu__link-text">
						Reclamation
					</span>
				</a>
			</li>


			<li class="kt-menu__section ">
                <h4 class="kt-menu__section-text">Club</h4>
                <i class="kt-menu__section-icon flaticon-more-v2"></i>
            </li>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "myClub" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>club/clubInfo" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-interface-3">
					</i>
					<span class="kt-menu__link-text">
						Mon club
					</span>
				</a>
			</li>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "meeting" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Reunion/ReunionListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-exclamation">
					</i>
					<span class="kt-menu__link-text">
						Réunion
					</span>
				</a>
			</li>
			<?php if ($cellule =='' &&  ($role ==1 || $role == 2 )   ) { ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "postes" ){echo("--active") ;} ?> " aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>club/Postes" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-map">
					</i>
					<span class="kt-menu__link-text">
						Gestion des postes
					</span>
				</a>
			</li>
			<?php } ?>
			<?php if ($role ==1  ||  ($role == 3  && $cellule='Gestion des talents' )) {  ?>
 			<li class="kt-menu__item  kt-menu__item<?php if( $active == "RH" ){echo("--active") ;} ?>" aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>User/userByClubListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-network">
					</i>
					<span class="kt-menu__link-text">
						Ressource Humaine
					</span>
				</a>
			</li>
			<?php } ?>
			<?php if ($role ==1  ||  ($role == 3  && $cellule='Administration et finance' )) {  ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "finance" ){echo("--active") ;} ?>" aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Finance/financeListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-folder-1">
					</i>
					<span class="kt-menu__link-text">
						Ressource Financier
					</span>
				</a>
			</li>
			<?php } ?>
			<?php if ($role ==1  ||  ($role == 3  && $cellule='Evenementiel' )) {  ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "project" ){echo("--active") ;} ?>" aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>addNewProject" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon2-architecture-and-city">
					</i>
					<span class="kt-menu__link-text">
						Gestion des projets
					</span>
				</a>
			</li>
			<?php } ?>
			<?php if ($role ==1  ||  $role ==2 ||  $role ==3 ) {  ?>
			<li class="kt-menu__item  kt-menu__item<?php if( $active == "tasks" ){echo("--active") ;} ?>" aria-haspopup="true" >
				<a  href="<?php echo base_url() ; ?>Tasks/tasksListing" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon-list-1">
					</i>
					<span class="kt-menu__link-text">
						Gestion des taches
					</span>
				</a>
			</li>
			<?php } ?>

            		</ul>
	</div>
</div>
<!-- end:: Aside Menu --></div>
<!-- end:: Aside -->			
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
			<!-- begin: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	

</div>
<!-- end: Header Menu -->		<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">
	<!--begin: Search -->


				    <div class="kt-header__topbar-item dropdown">
				        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
				            <span class="kt-header__topbar-icon"><i class="flaticon-chat-2"></i></span>
				            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
				        </div>
				        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
				            <form>
				                <!--begin: Head -->
			    <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
			        <h3 class="kt-head__title">
			            Messages 
			            &nbsp;
			            <span class="btn btn-label-primary btn-sm btn-bold btn-font-md"></span>
			        </h3>
			        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">

			        </ul>
			    </div>
			<!--end: Head -->

			<div class="tab-content">
			    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
			        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
			        	
			            <a href="#" class="kt-notification__item">
			                <div class="kt-notification__item-icon">
			                    <i class="flaticon2-line-chart kt-font-success"></i>
			                </div>
			                <div class="kt-notification__item-details">
			                    <div class="kt-notification__item-title">
			                        Comming Soon
			                    </div>
			                    <div class="kt-notification__item-time">
			                       ...
			                    </div>
			                </div>
			            </a>
			  

			            
			        </div>
			    </div>

			    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
			        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
			            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
			                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
			                    All caught up!
			                    <br>No new notifications.
			                </div>
			            </div>
			        </div>
			    </div>
			</div>	            </form>
				        </div>
				    </div>


		<!--end: Search -->

	<!--begin: Notifications -->
	    
	    <div class="kt-header__topbar-item dropdown" <?php if($notifRecordsNumber>0){ ?> style="background-color: red;" <?php } ?> >
	        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px" aria-expanded="true">
	            <span class="kt-header__topbar-icon">
	            	<i class="flaticon2-bell-alarm-symbol "></i></span>
	            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
	        </div>
	        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
	            <form>
	                <!--begin: Head -->
    <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
        <h3 class="kt-head__title">
            Notifications 
            &nbsp;
            <span class="btn btn-label-primary btn-sm btn-bold btn-font-md"><?php echo $notifRecordsNumber ; ?></span>
        </h3>
        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
            
        </ul>
    </div>
<!--end: Head -->

<div class="tab-content">
    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
            <?php foreach ($notifRecords as $notif ) {
			        	?>
            <a href="<?php echo base_url() ?>Notification/notifSeen/<?php echo $notif->notifId ?>" class="kt-notification__item" style="<?php if($notif->seen=="no"){echo 'background-color: 	#d8ffff;' ;} ?>">
                <div class="kt-notification__item-icon">
                    <i class="flaticon2-line-chart kt-font-success"></i>
                </div>
                <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                        <?php echo $notif->text ; ?>
                    </div>
                    <div class="kt-notification__item-time">
                        <?php
                                                            $d1 = new DateTime($notif->dateNotif);
                                                            $d2 = new DateTime();
                                                            $diff = $d1->diff($d2);

                                                            $nb_jours = $diff->d;


                                                     echo 'Il y a '. $nb_jours.' jours'
                                                     ?>
                    </div>
                </div>
            </a>
             <?php 	# code...
			        	}
			        	?>


            
        </div>
    </div>

    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                    All caught up!
                    <br>No new notifications.
                </div>
            </div>
        </div>
    </div>
</div>	            </form>
	        </div>
	    </div>
		<!--end: Notifications -->

	<!--begin: Quick Actions -->

		<!--end: Quick Actions -->




	

	<!--begin: User Bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
	    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
	        <div class="kt-header__topbar-user">
	            <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
	            <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">$userInfo->name   </span>
	            <img alt="Pic" class="kt-radius-100" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $avatar; ?>" />
	            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
	            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
	        </div>
	    </div>
	    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
	        <!--begin: Head -->
    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
        <div class="kt-user-card__avatar">
            <img class="kt-hidden-" alt="Pic" src="<?php echo base_url()  ?>uploads/avatar/<?php echo $avatar; ?>" />
            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
        </div>
        <div class="kt-user-card__name">
            <?php echo $name; ?> 
            <?php if  ($role ==1 ) { ?>
            <p style="display: none" id="p1"><?php echo base_url(); ?>Register?var1=<?php echo $uid ?>&var2=<?php echo $clubID; ?></p>
            
            <button class="btn btn-label-primary" onclick="copyToClipboard('#p1')"  >Lien de parainage</button>       </div>
        	<script type="text/javascript">
        		function copyToClipboard(element) {
				  var $temp = $("<input>");
				  $("body").append($temp);
				  $temp.val($(element).text()).select();
				  document.execCommand("copy");
				  $temp.remove();
				}

    		</script>
    	<?php } ?>
    </div>
<!--end: Head -->

<!--begin: Navigation -->
<div class="kt-notification">
    <a href="<?php echo base_url() ?>profile" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-calendar-3 kt-font-success"></i>
        </div>
		
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                Mon Profile
            </div>
            <div class="kt-notification__item-time">
               
            </div>
        </div>
		
    </a>
    <a href="#" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-mail kt-font-warning"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                Mes Messages
            </div>
            <div class="kt-notification__item-time">
               
            </div>
        </div>
    </a>
    <a href="#" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-rocket-1 kt-font-danger"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                Mes Activities
            </div>
            <div class="kt-notification__item-time">
                
            </div>
        </div>
    </a>
    <a href="<?php echo base_url() ?>Tasks/myTasksListing " class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-hourglass kt-font-brand"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                Mes taches
            </div>
            <div class="kt-notification__item-time">
                
            </div>
        </div>
    </a>


    <div class="kt-notification__custom kt-space-between">
        <a href="<?php echo base_url() ?>logout" class="btn btn-label btn-label-brand btn-sm btn-bold">Déconnecter</a>

        
    </div>
</div>
<!--end: Navigation -->	    </div>
	</div>
	<!--end: User Bar -->	 
</div>
<!-- end:: Header Topbar --></div>
<!-- end:: Header -->

<script type="text/javascript" src="<?php echo base_url() ;?>assets\js\push\Push.js"></script>
<script type="text/javascript">Push.create("Hello world!", {
    body: "How's it hangin'?",
    icon: '/icon.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});</script>
