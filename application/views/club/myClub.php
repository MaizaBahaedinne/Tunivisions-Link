
<style type="text/css">
       .profile-turtle {
  object-fit: cover;
  object-position: 50% 50%;
  width: 150px;
  height: 150px;
}


       .profile-turtle2 {
  object-fit: cover;
  object-position: 50% 50%;
  width: 75px;
  height: 75px;
}

       .profile-turtle3 {
  object-fit: cover;
  object-position: 50% 20%;
  width: 100px;
  height: 100px;
}

       .profile-turtle4 {
  object-fit: cover;
  object-position: 50% 20%;
  width: 75px;
  height: 75px;
}


.avatar {
  vertical-align: middle;
   object-fit: cover;
  object-position: 50% 50%;
  width: 70px;
  height: 50px;
  border-radius: 50%;
}
</style>

                  <div id="content-page" class="content-page">
<div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/69821656_880672415637786_7990683763971457024_o.png?_nc_cat=106&_nc_ohc=ZSbbBML7_bAAQn-smaSlN-7t5GFYkdOiVFaQqa5aQ8JLumCn4LjJ4d5jA&_nc_ht=scontent.ftun3-1.fna&oh=c89735e9bf57c3d076d757071ff04e65&oe=5EAB140C" alt="profile-bg" class="rounded img-fluid">
                                 <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                 </ul>
                              </div>
                              <div class="user-detail text-center mb-3">
                                 <div class="" >
                                    
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class=""><?php if($clubInfo->name != 'Foundation') {echo "Club";} ?> Tunivisions <?php echo $clubInfo->name ?></h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                 <div class="social-links">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $clubInfo->email ?>"><img src="<?php echo base_url() ;  ?>images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                       </li>

       
                                    </ul>
                                 </div>
                                 <div class="social-info">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pl-3">
                                          <h6>Projet</h6>
                                          <p class="mb-0"><?php echo count($ProjectByClub) ?></p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Membres</h6>
                                          <p class="mb-0"><?php echo $membersCount ?></p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Points</h6>
                                          <p class="mb-0"><?php
                                          $s = 0 ;
                                           foreach ($scoreByClub as $scores ) {
                                               $s = $s + $scores->scores ;
                                                }
                                                echo $s ;
                                           ?></p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="user-tabing">
                              <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#timeline">Timeline</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#about">A Propos</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#friends">Membres</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#photos">Classement</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                           <div class="iq-card-body p-0">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <div class="iq-card">
                                       <div class="iq-card-body">
                                          <a href="#"><span class="badge badge-pill badge-primary font-weight-normal ml-auto mr-1"><i class="ri-star-line"></i></span> 27 Items for yoou</a>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Life Event</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();"> Create </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <div class="event-post position-relative">
                                                   <a href="javascript:void();"><img src="<?php echo base_url() ;  ?>images/page-img/07.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                                   <div class="job-icon-position">
                                                      <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
                                                   </div>
                                                   <div class="iq-card-body text-center p-2">
                                                      <h5>Started New Job at Apple</h5>
                                                      <p>January 24, 2019</p>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-sm-12">
                                                <div class="event-post position-relative">
                                                   <a href="javascript:void();"><img src="<?php echo base_url() ;  ?>images/page-img/06.jpg" alt="gallary-image" class="img-fluid rounded"></a>
                                                   <div class="job-icon-position">
                                                      <div class="job-icon bg-primary p-2 d-inline-block rounded-circle"><i class="ri-briefcase-line"></i></div>
                                                   </div>
                                                   <div class="iq-card-body text-center p-2">
                                                      <h5>Freelance Photographer</h5>
                                                      <p>January 24, 2019</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Photos</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                             
                                             <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="<?php echo base_url() ;  ?>images/page-img/g1.jpg" alt="gallary-image" class="img-fluid"></a></li>
                                            
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Membres</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();">Lien de parrainage</a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                             
                                                <?php 

                                                $i = 0;
                                                foreach($userRecords as $record ) { 
                                                    ?>
                                             <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                                <a href="javascript:void();">
                                                <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>" alt="gallary-image" class="profile-turtle4"></a>
                                                <h6 class="mt-2"><?php echo $record->name ?></h6>
                                             </li>
                                                <?php  if(++$i > 8) break; }
                                                    ?>
                                          
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-8">
                                   <?php foreach ($ProjectByClub as $PBC) {
                                        # code...
                                    ?>
                                    <div class="iq-card">
                                       <div class="iq-card-body">
                                          <div class="post-item">
                                             <div class="user-post-data p-3">
                                                <div class="d-flex flex-wrap">
                                                   <div class="media-support-user-img mr-3">
                                                      <img class="avatar" src="https://www.tunivisions.link/uploads/avatar/<?php echo $PBC->avatar ?>"  alt="">
                                                   </div>
                                                   <div class="media-support-info mt-2">
                                                      <h5 class="mb-0 d-inline-block"><a href="#" class=""><?php echo $PBC->name ?></a></h5>
                                                      <p class="ml-1 mb-0 d-inline-block">a ajouté un projet</p>
                                                      <p class="mb-0"><?php echo $PBC->endDate ?></p>
                                                   </div>
                                                   <div class="iq-card-post-toolbar">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                         <i class="ri-more-fill"></i>
                                                         </span>
                                                         <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-save-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Save Post</h6>
                                                                     <p class="mb-0">Add this to your saved items</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-pencil-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Edit Post</h6>
                                                                     <p class="mb-0">Update your post and saved items</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Hide From Timeline</h6>
                                                                     <p class="mb-0">See fewer posts like this.</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-delete-bin-7-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Delete</h6>
                                                                     <p class="mb-0">Remove thids Post on Timeline</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                                  <div class="data ml-2">
                                                                     <h6>Notifications</h6>
                                                                     <p class="mb-0">Turn on notifications for this post</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="user-post">
                                                <p class="comment-text">
                                                 <?php echo $PBC->description ?>
                                                </p>
                                                <a href="javascript:void();"><img src="https://www.tunivisions.link/uploads/projet/<?php echo $PBC->banner ?>" alt="post-image" class="img-fluid w-100"></a>
                                             </div>
                                             <div class="comment-area mt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                   <div class="like-block position-relative d-flex align-items-center">
                                                      <div class="d-flex align-items-center">
                                                         <div class="like-data">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                               <img src="images/icon/01.png" class="img-fluid" alt="">
                                                               </span>
                                                               <div class="dropdown-menu">
                                                                  <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="images/icon/01.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="images/icon/02.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="images/icon/03.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="images/icon/04.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="images/icon/05.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="images/icon/06.png" class="img-fluid" alt=""></a>
                                                                  <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="images/icon/07.png" class="img-fluid" alt=""></a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="total-like-block ml-2 mr-3">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                               140 Likes
                                                               </span>
                                                               <div class="dropdown-menu">
                                                                  <a class="dropdown-item" href="#">Max Emum</a>
                                                                  <a class="dropdown-item" href="#">Bill Yerds</a>
                                                                  <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                                  <a class="dropdown-item" href="#">Tara Misu</a>
                                                                  <a class="dropdown-item" href="#">Midge Itz</a>
                                                                  <a class="dropdown-item" href="#">Sal Vidge</a>
                                                                  <a class="dropdown-item" href="#">Other</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="total-comment-block">
                                                         <div class="dropdown">
                                                            <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                            20 Comment
                                                            </span>
                                                            <div class="dropdown-menu">
                                                               <a class="dropdown-item" href="#">Max Emum</a>
                                                               <a class="dropdown-item" href="#">Bill Yerds</a>
                                                               <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                               <a class="dropdown-item" href="#">Tara Misu</a>
                                                               <a class="dropdown-item" href="#">Midge Itz</a>
                                                               <a class="dropdown-item" href="#">Sal Vidge</a>
                                                               <a class="dropdown-item" href="#">Other</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="share-block d-flex align-items-center feather-icon mr-3">
                                                      <a href="javascript:void();"><i class="ri-share-line"></i>
                                                      <span class="ml-1">99 Share</span></a>
                                                   </div>
                                                </div>
                                                <hr>
                                                <ul class="post-comments p-0 m-0">
                                                   <li class="mb-2">
                                                      <div class="d-flex flex-wrap">
                                                         <div class="user-img">
                                                            <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                         </div>
                                                         <div class="comment-data-block ml-3">
                                                            <h6>Monty Carlo</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                               <a href="javascript:void();">like</a>
                                                               <a href="javascript:void();">reply</a>
                                                               <a href="javascript:void();">translate</a>
                                                               <span> 5 min </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="d-flex flex-wrap">
                                                         <div class="user-img">
                                                            <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                                         </div>
                                                         <div class="comment-data-block ml-3">
                                                            <h6>Paul Molive</h6>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                            <div class="d-flex flex-wrap align-items-center comment-activity">
                                                               <a href="javascript:void();">like</a>
                                                               <a href="javascript:void();">reply</a>
                                                               <a href="javascript:void();">translate</a>
                                                               <span> 5 min </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                </ul>
                                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                                   <input type="text" class="form-control rounded">
                                                   <div class="comment-attagement d-flex">
                                                      <a href="javascript:void();"><i class="ri-link mr-3"></i></a>
                                                      <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                                      <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                          
                                          
                                          
                                       </div>
                                    </div>

                                  <?php  } ?>  

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                          <li>
                                             <a class="nav-link active" data-toggle="pill" href="#basicinfo">Information Basic</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#family">Bureau Executif</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#work">Work and Education</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#lived">Places You've Lived</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#details">Details About You</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-9 pl-4">
                                       <div class="tab-content">
                                          <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                             <h4>Contact Information</h4>
                                             <hr>
                                             <div class="row">
                                                
                                                <div class="col-3">
                                                   <h6>Region</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $clubInfo->city ?></p>
                                                </div>
                                                
                                             </div>
                                             <h4 class="mt-3">Social</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Page Facebook</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><a href="<?php echo $clubInfo->email ?>">Club Tunivisions <?php echo $clubInfo->name ?></a></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Email</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $clubInfo->facebook ?></p>
                                                </div>
                                                
                                             </div>
                                             <h4 class="mt-3">Basic Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Fondé le</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $clubInfo->birthday ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Genre</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $clubInfo->senJen ?></p>
                                                </div>
                                                
                                             </div>
                                          </div>
                                          <div class="tab-pane fade" id="family" role="tabpanel">
                                             <h4 class="mb-3">Président</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                                                                <?php foreach ($bureauExe as $b ) {
                                          if($b->role == 'Président'){
                                    ?>


                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="https://www.tunivisions.link/uploads/avatar/<?php echo $b->avatar ?>" alt="story-img" class="rounded-circle profile-turtle2"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6><?php echo $b->Tname ?></h6>
                                                      <p class="mb-0"><?php echo $b->cellule ?></p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                          
                                           <?php
                                    } } ?>      
                                             </ul>
                                             <h4 class="mt-3 mb-3">Vice Président</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                
                                                <?php foreach ($bureauExe as $b ) {
                                                      if($b->role != 'Président'){
                                                ?>


                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="https://www.tunivisions.link/uploads/avatar/<?php echo $b->avatar ?>" alt="story-img" class="rounded-circle profile-turtle2"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6><?php echo $b->Tname ?></h6>
                                                      <p class="mb-0"><?php echo $b->cellule ?></p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                          
                                           <?php
                                    } } ?>      
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="work" role="tabpanel">
                                             <h4 class="mb-3">Work</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Work Place</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Themeforest</h6>
                                                      <p class="mb-0">Web Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>iqonicdesign</h6>
                                                      <p class="mb-0">Web Developer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>W3school</h6>
                                                      <p class="mb-0">Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mb-3">Professional Skills</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Professional Skills</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">College</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add College</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Lorem ipsum</h6>
                                                      <p class="mb-0">USA</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="lived" role="tabpanel">
                                             <h4 class="mb-3">Current City and Hometown</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Georgia</h6>
                                                      <p class="mb-0">Georgia State</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Atlanta</h6>
                                                      <p class="mb-0">Atlanta City</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Place</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="details" role="tabpanel">
                                             <h4 class="mb-3">About You</h4>
                                             <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                             <h4 class="mt-3 mb-3">Other Name</h4>
                                             <p>Bini Rock</p>
                                             <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>





                        <div class="tab-pane fade" id="friends" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Membres</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                       <li>
                                          <a class="nav-link active" data-toggle="pill" href="#all-friends">Tous</a>
                                       </li>
                                       <li>
                                          <a class="nav-link " data-toggle="pill" href="#Events">Evenementiel</a>
                                       </li>
                                       <li>
                                          <a class="nav-link " data-toggle="pill" href="#AF">Administration et finance</a>
                                       </li>
                                       <li>
                                          <a class="nav-link " data-toggle="pill" href="#GT">Gestion des talents</a>
                                       </li>

                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <?php foreach($userRecords as $record ) { 
                                                    ?>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>" alt="<?php echo $record->name ?>" class="profile-turtle3 ">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5><?php echo $record->name ?> </h5>
                                                               <p class="mb-0"><?php echo $record->cellule?></p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> <?php echo $record->role?>
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                  <a class="dropdown-item" href="#">Designer comme un VP</a>
                                                                  <a class="dropdown-item" href="#">Blocker</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                                 <?php   } ?>
                                                </div>
                                             </div>
                                          </div>

                                          <iv class="tab-pane fade show" id="Events" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>" alt="profile-img" class="profile-turtle3 ">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5><?php echo $record->name ?> </h5>
                                                               <p class="mb-0"></p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> <?php echo $record->role?>
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                 </div>


                                              
                                                </div>
                                             </div>
                                          </div>

                                         








                                       </div>
                                    </div>
                                 </div>
                              </div>
                           







                        <div class="tab-pane fade" id="photos" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Classement</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                       <li>
                                          <a class="nav-link active" data-toggle="pill" href="#photosofyou">Clasement des membres interClub</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                
                                      <?php
                                       $i = 1 ;
                                       foreach($RatingMembers as $record ) { ?>  

                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>"  class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> <?php echo $i ?> <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> <?php echo $record->scores ?> <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white">  <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                          <?php
                                                   }  ?>        
                                                
                                             </div>
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="<?php echo base_url() ;  ?>images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                  </div>
               </div>
            </div>
          </div>