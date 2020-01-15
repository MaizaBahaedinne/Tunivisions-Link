<style type="text/css">
       .profile-turtle {
  object-fit: cover;
  object-position: 50% 50%;
  width: 30px;
  height: 30px;
}
 .readMore .addText {
                      display: none;
                    }
 </style>

        <div class="profile-page tx-13">
          <div class="row">
            <div class="col-12 grid-margin">
                            <div class="profile-header">
                                <div class="cover">
                                    <div class="gray-shade"></div>
                                    <figure>
                                        <img src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/81382847_979373362434357_6461190259974602752_o.jpg?_nc_cat=107&_nc_ohc=dw5BIDn6ESsAQnicy4-j9tuz3aYeovi8Soh5PblzvZrhwrysvPDyzC4sw&_nc_ht=scontent.ftun3-1.fna&oh=c120a4486d217f6ca641d9447aa4407a&oe=5EA7A436" class="img-fluid" alt="">
                                    </figure>
                                    <div class="cover-body d-flex justify-content-between align-items-center">
                                        <div>
                                            
                                            <span class="profile-name"><?php if($clubInfo->name != 'Foundation') {echo "Club";} ?> Tunivisions <?php echo $clubInfo->name ?> <br> <br></span>
                                            <br>
                                        </div>
                                        <div class="d-none d-md-block">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="header-links">
                                    <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                        <li class="header-link-item d-flex align-items-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns mr-1 icon-md"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                                            <a class="pt-1px d-none d-md-block" href="<?php echo base_url()?>club/clubInfo">Timeline</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1 icon-md"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <a class="pt-1px d-none d-md-block" href="<?php echo base_url()?>club/about">About</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center active">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-1 icon-md"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            <a class="pt-1px d-none d-md-block" href="<?php echo base_url()?>Club/Members">Membres <span class="text-muted tx-12"><?php echo $membersCount ?></span></a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image mr-1 icon-md"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                            <a class="pt-1px d-none d-md-block" href="#">Projets</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video mr-1 icon-md"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                            <a class="pt-1px d-none d-md-block" href="#">Badges</a>
                                        </li>
                                    </ul>
                                </div>
                </div>
            </div>
                    </div>
                    <div class="row profile-body">
                        <!-- left wrapper start -->
                        <div class="d-none d-md-block col-md-12 col-xl-12 left-wrapper">
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="card-title mb-0">Membres</h6>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch icon-sm mr-2"><line x1="6" y1="3" x2="6" y2="15"></line><circle cx="18" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 9a9 9 0 0 1-9 9"></path></svg> <span class="">Update</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View all</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                        <style type="text/css">
                                                   .alligator-turtle {
                                              object-fit: cover;
                                              object-position: 50% 20%;
                                              width: 100%;
                                              height: 200px;
                                            }
                                            table ,tr td{
                                                
                                            }
                                            tbody {
                                                display:block;
                                                height:600px;
                                                overflow:auto;
                                            }
                                            thead, tbody tr {
                                                display:table;
                                                width:100%;
                                                table-layout:auto;/* even columns width , fix width of table too*/
                                            }
                                            thead {
                                                width: calc( 100% - 1em )/* scrollbar is average 1em/16px width, remove it from thead width */
                                            }
                                            table {
                                                width:100%;
                                            }

                                            </style>

                                            <div class="row">
                                                          
                                                           
                                                        <?php foreach($userRecords as $record ) { ?>
                                                           <div class="col-md-3 card" style="padding:16px" >
                                                              <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>" class="card-img-top alligator-turtle" alt="...">
                                                              <div class="card-body">
                                                                 <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>"> 
                                                                  <h5 class="card-title"><?php echo $record->name ?></h5>
                                                                </a>
                                                                <p class="card-text"><?php if ($record->ClubName != 'Foundation'){ echo 'club' ;} echo " Tunivisions ";    echo $record->ClubName ?></p>
                                                                <p class="card-text"><small class="text-muted"><?php echo $record->role.' ' ; ?><?php echo $record->cellule ; ?></small></p>
                                                              </div>
                                                             
                                                                
                                                              <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-primary"><i data-feather="activity"></i> Link</button>
                                                               <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>"> <button type="button" class="btn">visiter</button></a>
                                                              </div>
                                                              
                                                        
                                                            </div>
                                                        <?php   } ?>

                                                          
                                             </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <!-- middle wrapper start -->
                        
                        <!-- middle wrapper end -->
                        <!-- right wrapper start -->
                        
                        <!-- right wrapper end -->
                    </div>
        </div>

           