
<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 0;

  width: 200px;
  height: 100px;
}
</style>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.paginate.css">


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                    Tunimateurs                           
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            <?php echo $count ;  ?>                                     </span>
                
                                  
                            </div>
      </div>
        <div class="kt-subheader__toolbar">

                            <form class="kt-margin-l-20" method="post" action="<?php echo base_url(); ?>users" >
                            <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                            <input type="text" name="searchText" value="<?php echo $searchText ?>" class="form-control" placeholder="Chercher..." id="generalSearch">

                            <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
                                </g>
                        </svg>                                    <!--<i class="flaticon2-search-1"></i>-->
                                </span>
                            </span>
                        </div>
                       
                    </form>
                    
                                    </a>
            
                                                
                                        

            </div>

</div>
</div>
<!-- end:: Content Head -->					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" id="page">
		<!--begin:: Widgets/Applications/User/Profile3-->
        
    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
    ?>
    <div class="col-sm-12">
        <div class="kt-portlet" >
            <div class="kt-portlet__body">

                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media kt-hidden-">
                            <img src="<?php echo base_url()  ?>uploads/avatar/<?php echo $record->avatar; ?>" class="alligator-turtle"  alt="image">
                        </div>
                        
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">
                                    <?php echo $record->name ?>    
                                    <i class="flaticon2-correct kt-font-success"></i>                       
                                </a>                         
                               
                                <div class="kt-widget__action">
                                                                
                                    <button type="button" class="btn btn-brand btn-sm btn-upper">Ajouter</button>                     
                                </div>                        
                            </div>

                            <div class="kt-widget__subhead">
                                 
                                <a href="#"><i class="flaticon2-calendar-3"></i><?php echo $record->role ?> <?php echo $record->cellule ?> </a> 
                                <br>
                                <a href="#"><i class="flaticon2-placeholder"></i>
                                    <?php if($record->ClubName!="Foundation"){ ?> Club <?php } ?>Tunivisions <?php echo $record->ClubName ?> </a>
                                <br>
                                <a href="#"><i class="flaticon2-new-email"></i><?php echo $record->email ?></a>                        
                            </div> 


                        </div>    
                    </div>
                   
                </div>
            </div>
           
        </div>
</div>
 <?php
                            }
                    }
    ?>

<!--end:: Widgets/Applications/User/Profile3-->




 <!--Begin::Section-->

       
        <!--begin:: Components/Pagination/Default-->

        <!--begin: Pagination-->
        <div id ="pagination-container" class="kt-pagination kt-pagination--brand">
           <script src="<?php echo base_url() ?>assets/js/jquery.paginate.js"></script>
            <script >
                
            $('#page').paginate({
                paginatePosition:['bottom'],
                perPage: 100,
                autoScroll:true,
            }
            );


            </script> 

            
        <!--end: Pagination-->
    </div>
      

<!--End::Section-->

 	
<!-- end:: Content -->				</div>



</div>