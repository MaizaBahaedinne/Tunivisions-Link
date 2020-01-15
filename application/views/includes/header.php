<html lang="en"><!-- Mirrored from www.nobleui.com/html/template/demo_1/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2019 11:42:07 GMT --><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>T-Link</title>

      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">  
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

      <!-- javascript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/sweetalert2/sweetalert2.min.css">
	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/feather-font/css/iconfont.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url() ; ?>assets\media\logos/icon.svg" />
  <!-- Global site tag (gtag.js) - Google Analytics start -->
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151434993-1');
</script>




  <!-- Google Analytics end -->
<style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}
.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0,0,0,.5);
  box-shadow: 0 0 1px rgba(255,255,255,.5);
  -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
.apexcharts-canvas.dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-gridline, .apexcharts-text {
  pointer-events: none;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}
.apexcharts-tooltip.light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.apexcharts-tooltip.dark {
  color: #fff;
  background: rgba(30,30,30, 0.8);
}
.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line {
  pointer-events: none;
}

.apexcharts-tooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}
.apexcharts-tooltip.light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}
.apexcharts-tooltip.dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value, 
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
  opacity: 1;
}
.apexcharts-tooltip-series-group.active, .apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}
.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}
.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}
.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}
.apexcharts-tooltip-candlestick > div {
  margin: 4px 0;
}
.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
	background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.apexcharts-xaxistooltip:after {
	border-color: rgba(236, 239, 241, 0);
	border-width: 6px;
	margin-left: -6px;
}
.apexcharts-xaxistooltip:before {
	border-color: rgba(144, 164, 174, 0);
	border-width: 7px;
	margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}
.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-bottom.dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color:#ECEFF1
}
.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}
.apexcharts-xaxistooltip-top.dark:after {
  border-top-color:rgba(0, 0, 0, 0.5);
}
.apexcharts-xaxistooltip-top.dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}


.apexcharts-xaxistooltip.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
	background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}
.apexcharts-yaxistooltip:after {
	border-color: rgba(236, 239, 241, 0);
	border-width: 6px;
	margin-top: -6px;
}
.apexcharts-yaxistooltip:before {
	border-color: rgba(144, 164, 174, 0);
	border-width: 7px;
	margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}
.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}
.apexcharts-yaxistooltip-left.dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-left.dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}
.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}
.apexcharts-yaxistooltip-right.dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}
.apexcharts-yaxistooltip-right.dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.active {
  opacity: 1;
}
.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.active, .apexcharts-ycrosshairs.active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-zoom-rect {
  pointer-events: none;
}
.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points, .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}
.svg_select_points_l, .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}
.apexcharts-canvas.zoomable .hovering-zoom {
  cursor: crosshair
}
.apexcharts-canvas.zoomable .hovering-pan {
  cursor: move
}

.apexcharts-xaxis,
.apexcharts-yaxis {
  pointer-events: none;
}

.apexcharts-zoom-icon, 
.apexcharts-zoom-in-icon,
.apexcharts-zoom-out-icon,
.apexcharts-reset-zoom-icon, 
.apexcharts-pan-icon, 
.apexcharts-selection-icon,
.apexcharts-menu-icon, 
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}


.apexcharts-zoom-icon svg, 
.apexcharts-zoom-in-icon svg,
.apexcharts-zoom-out-icon svg,
.apexcharts-reset-zoom-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}
.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.dark .apexcharts-zoom-icon svg, 
.dark .apexcharts-zoom-in-icon svg,
.dark .apexcharts-zoom-out-icon svg,
.dark .apexcharts-reset-zoom-icon svg, 
.dark .apexcharts-pan-icon svg, 
.dark .apexcharts-selection-icon svg,
.dark .apexcharts-menu-icon svg, 
.dark .apexcharts-toolbar-custom-icon svg{
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.selected svg, 
.apexcharts-canvas .apexcharts-selection-icon.selected svg, 
.apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
  fill: #008FFB;
}
.light .apexcharts-selection-icon:not(.selected):hover svg,
.light .apexcharts-zoom-icon:not(.selected):hover svg, 
.light .apexcharts-zoom-in-icon:hover svg, 
.light .apexcharts-zoom-out-icon:hover svg, 
.light .apexcharts-reset-zoom-icon:hover svg, 
.light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon, .apexcharts-menu-icon {
  position: relative;
}
.apexcharts-reset-zoom-icon {
  margin-left: 5px;
}
.apexcharts-zoom-icon, .apexcharts-reset-zoom-icon, .apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoom-in-icon, .apexcharts-zoom-out-icon {
  transform: scale(0.7)
}

.apexcharts-zoom-out-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}
.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}
.apexcharts-pan-icon.selected svg {
  stroke: #008FFB;
}
.apexcharts-pan-icon:not(.selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  top: 0px;
  right: 3px;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center; 
}

.apexcharts-toolbar svg {
  pointer-events: none;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}
.light .apexcharts-menu-item:hover {
  background: #eee;
}
.dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-toolbar {
    /*opacity: 0;*/
  }

  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  } 
}

.apexcharts-datalabel.hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-radar-series path, .apexcharts-radar-series polygon {
  pointer-events: none;
}

/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}</style><style type="text/css">@keyframes resizeanim { from { opacity: 0; } to { opacity: 0; } } .resize-triggers { animation: 1ms resizeanim; visibility: hidden; opacity: 0; } .resize-triggers, .resize-triggers > div, .contract-trigger:before { content: " "; display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; } .resize-triggers > div { background: #eee; overflow: auto; } .contract-trigger:before { width: 200%; height: 200%; }</style><style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body class="sidebar-folded">
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="<?php echo base_url() ?>" class="sidebar-brand">
          <img src="<?php echo base_url()?>assets\media\logos\logo rouge.svg" width="100px" >
        </a>
        <div class="sidebar-toggler ">
          <?php
              function isMobile () {
                return is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));
              }

              echo isMobile() ? 

                "<img src=".base_url()."assets\media\logos/icon.svg>" 
              : "<img width=20 src=".base_url()."assets\media\logos/icon.svg>" ;


              ?>
              


      

        </div>
      </div>
      <div class="sidebar-body ps">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item ">
            <a href="<?php echo base_url() ?>dashboard" class="nav-link">
              <i data-feather="bookmark" width ="15" ></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Foundation</li>
          <?php if ($SA==1 || $clubID ==0  ) { ?>
          <li class="nav-item ">
            <a href="<?php echo base_url() ?>Club/clubListing" class="nav-link">
              <i data-feather="bookmark" width ="15" ></i>
              <span class="link-title">Clubs</span>
            </a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i data-feather="settings" width ="15" ></i>
              <span class="link-title">Système</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <?php if ($SA==1 || ($clubID ==0 &&  ($cellule =='Ressource Humaine' || $cellule =='' ) )) { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>userListing" class="nav-link">Utilisateurs</a>
                </li>
                <?php } ?>
                <?php if ($clubID ==0 && ($SA==1 || (($role ==1 || $role == 2 || $role == 3) && ($cellule =='Marketing' || $cellule =='') )) ) { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Actu/addNew" class="nav-link">Actualités</a>
                </li>
                <?php } ?>
                <?php if ($SA==1) { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Project/oldProjectListing" class="nav-link">Scoring</a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>users" class="nav-link">
              <i data-feather="users" width ="15" ></i>
              <span class="link-title">Members</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Project/projectListing" class="nav-link">
               <i data-feather="calendar" width ="15" ></i>
              <span class="link-title">Projets</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Reclamation/addNew" class="nav-link">
              <i data-feather="calendar" width ="15" ></i>
              <span class="link-title">Reclamation</span>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Reservation/reservationListing" class="nav-link">
               <i data-feather="alert-octagon" width ="15" ></i>
              <span class="link-title">Reservation</span>
            </a>
          </li>
          -->

          <li class="nav-item nav-category">Club </li>
          <li class="nav-item ">
            <a href="<?php echo base_url() ?>club/clubInfo" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
              <span class="link-title">Mon club</span>
            </a>
          </li>
          <?php if ($SA==1 || (($role ==1 || $role == 2 || $role == 3) && ($cellule =='Gestion des talents' || $cellule =='') ))  { ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#RH" role="button" aria-expanded="false" aria-controls="RH">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">Ressource Humaine</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="RH">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>User/userByClubListing" class="nav-link">Membres</a>
                </li>
                <?php if ($SA==1 || $role ==1)  { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>club/Postes" class="nav-link">Postes</a>
                </li>
              <?php } ?>
              </ul>
            </div>
          </li>
          <?php } ?>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="admin">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">Administration et finance</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="admin">
              <ul class="nav sub-menu">
                <?php if ($SA==1 || (($role ==1 || $role == 2 || $role == 3) && ($cellule =='Administration et finance' || $cellule =='') ))  { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Finance/financeListing" class="nav-link">Ressource financier</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Reunion/ReunionListing" class="nav-link">Réunion</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#events" role="button" aria-expanded="false" aria-controls="events">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">Evenementiel</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="events">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>addNewProject" class="nav-link">Gestion des projets</a>
                </li>
                <?php if ($SA==1 || (($role ==1 || $role == 2 || $role == 3)))  { ?>
                <li class="nav-item">
                  <a href="<?php echo base_url() ?>Tasks/tasksListing" class="nav-link">Gestion des taches</a>
                </li>
               <?php }?>
              </ul>
            </div>
          </li>

         
          <li class="nav-item nav-category">TFM </li>
          <li class="nav-item ">
            <a href="<?php echo base_url() ?>TFM/TFMListing" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
              <span class="link-title">TFM</span>
            </a>
          </li>
 
          


        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </nav>
   
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				
          <a href="<?php echo base_url() ?>">
					<?php

              if (isMobile()){ ?> 

                &nbsp;&nbsp; <img src="<?php echo base_url() ?>assets\media\logos/logo rouge.svg" style="width: 55px;" >  <?php } 

                ?>
            </a>
             
		
				<div class="navbar-content"  >
          <form class="search-form" action="<?php echo  base_url() ?>User/userListing2" method="post" >
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
              </div>
              <input type="text" class="form-control" id="navbarForm" name="searchText" >
            </div>
          </form>
					
					<ul class="navbar-nav">
            <li class="nav-item dropdown nav-apps">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
              </a>
              <div class="dropdown-menu" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">Foundation</p>
                  
                </div>
                <div class="dropdown-body">
                  <div class="d-flex align-items-center apps">

                    <a href="<?php echo base_url() ?>users" ><svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><p>Membres</p></a>
                    
                    <a href="<?php echo base_url() ?>Project/projectListing"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar icon-lg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><p>Projet</p></a>
                    
       
                </div>
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">Club</p>
                  
                </div>
                <div class="dropdown-body">
                  <div class="d-flex align-items-center apps">
                    <a href="<?php echo base_url() ?>club/clubInfo" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><p>Mon club</p></a>

                      <a href="<?php echo base_url() ?>Project/projectListingbyClub" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar icon-lg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><p>Nos projets</p></a>


                      <a href="<?php echo base_url() ?>Club/Members" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><p>Membres</p></a>


                      
                    
                  </div>
                </div>
                
              </div>
            </li>
						<li class="nav-item dropdown nav-messages">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="user-plus"></i>
                 <?php if (count($FreindRequest) > 0 ) {?>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
                <?php 
                  }?>
              </a>
              <div class="dropdown-menu" aria-labelledby="messageDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium"> invitation</p>
                  <a href="javascript:;" class="text-muted"></a>
                </div>
                <div class="dropdown-body">
                  <?php foreach ($FreindRequest as $req) {?>
                  
                  <a  href="<?php echo base_url() ?>User/ProfileShow/<?php echo $req->userId ?>" class="dropdown-item">
                    <div class="figure">
                      <img src="<?php echo base_url() ?>Uploads/avatar/<?php echo $req->avatar ?>" alt="userr">
                    </div>
                    <div class="content">
                      <div class="d-flex justify-content-between align-items-center">
                        <p><?php echo $req->name ?></p>
                        <p class="sub-text text-muted">
                          <button type="button" class="btn btn-primary btn-icon">
                            <i data-feather="check-square" style="color:white;"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-icon">
                            <i data-feather="minus" style="color:white;"></i>
                          </button>
                        </p>
                      </div>
                      <p class="sub-text text-muted">New record</p>
                    </div>
                  </a>
                  <?php 
                  }?>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">Afficher tout</a>
                </div>
              </div>
            </li>
            <!--
						<li class="nav-item dropdown nav-messages">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							</a>
							<div class="dropdown-menu" aria-labelledby="messageDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="<?php echo base_url() ?>assets/images/faces/face2.jpg" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Leonardo Payne</p>
												<p class="sub-text text-muted">2 min ago</p>
											</div>	
											<p class="sub-text text-muted">Project status</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="<?php echo base_url() ?>assets/images/faces/face3.jpg" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Carl Henson</p>
												<p class="sub-text text-muted">30 min ago</p>
											</div>	
											<p class="sub-text text-muted">Client meeting</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="<?php echo base_url() ?>assets/images/faces/face4.jpg" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Jensen Combs</p>												
												<p class="sub-text text-muted">1 hrs ago</p>
											</div>	
											<p class="sub-text text-muted">Project updates</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="<?php echo base_url() ?>assets/images/faces/face5.jpg" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Amiah Burton</p>
												<p class="sub-text text-muted">2 hrs ago</p>
											</div>
											<p class="sub-text text-muted">Project deadline</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="<?php echo base_url() ?>assets/images/faces/face6.jpg" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Yaretzi Mayo</p>
												<p class="sub-text text-muted">5 hr ago</p>
											</div>
											<p class="sub-text text-muted">New record</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
            -->
						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                <?php foreach ($notifRecords as $notif ) {?>
								<?php if($notif->seen=="no"){ ?>">
                <div class="indicator">
									<div class="circle"></div>
								</div>
              <?php  } } ?>

							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown" >
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium"><?php echo $notifRecordsNumber ; ?> Notifications</p>
									<a href="javascript:;" class="text-muted"></a>
								</div>
								<div class="dropdown-body" style="  height: 500px; overflow: auto;">
									
									<?php foreach ($notifRecords as $notif ) {?>
									<a href="<?php echo base_url() ?>Notification/notifSeen/<?php echo $notif->notifId ?>" class="dropdown-item" style="<?php if($notif->seen=="no"){echo 'background-color:   #d8ffff;' ;} ?>">
										<div class="icon">
											<?php if( $notif->type=='Notification' ){  ?>  <i data-feather="pocket"></i>   <?php } ?>
                      <?php if( $notif->type=='Actualite' ){  ?>  <i data-feather="rss"></i>   <?php } ?>
                      <?php if( $notif->type=='Reclamation' ){  ?>  <i data-feather="alert-octagon"></i>   <?php } ?>

										</div>
										<div class="content">
											<p> <?php echo $notif->text ; ?></p>
											<p class="sub-text text-muted"><?php
                                                            $d1 = new DateTime($notif->dateNotif);
                                                            $d2 = new DateTime();
                                                            $diff = $d1->diff($d2);
                                                            $nb_jours = $diff->d;
                                                     echo 'Il y a '. $nb_jours.' jours'
                                                     ?></p>
										</div>
									</a>
                  <?php  
                }
                ?>


								</div>

							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="<?php echo base_url() ?>uploads/avatar/<?php echo $avatar ?>" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0"><?php echo $name ?></p>
										<p class="email text-muted mb-3"><?php echo $role_text ?></p>
                    <?php if  ($SA ==1 || $role==1 || $role==2  ) { ?>
            <p style="display: none" id="p1"><?php echo base_url(); ?>Register?var1=<?php echo $uid ?>&var2=<?php echo $clubID; ?></p>
            
              <button class="btn btn-primary" onclick="copyToClipboard('#p1')"  >Lien de parainage</button>     
              <script type="text/javascript">
                function copyToClipboard(element) {
              var $temp = $("<input>");
              $("body").append($temp);
              $temp.val($(element).text()).select();
              document.execCommand("copy");
              $temp.remove();
              Swal.fire(
                    'Bravo !',
                    'votre lien a été copié avec succès',
                    'success'
                  )
            }
            </script>
      <?php } ?>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $MyUserId ; ?>" class="nav-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span>Modifier profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo base_url() ; ?>logout" class="nav-link">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
												<span>Deconnecter</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">
			
			
			