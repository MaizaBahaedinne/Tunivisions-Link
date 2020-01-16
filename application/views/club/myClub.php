<style type="text/css">
       .profile-turtle {
  object-fit: cover;
  object-position: 50% 50%;
  width: 40px;
  height: 40px;
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
                                        <img src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/69821656_880672415637786_7990683763971457024_o.png?_nc_cat=106&_nc_ohc=ZSbbBML7_bAAQn-smaSlN-7t5GFYkdOiVFaQqa5aQ8JLumCn4LjJ4d5jA&_nc_ht=scontent.ftun3-1.fna&oh=c89735e9bf57c3d076d757071ff04e65&oe=5EAB140C" class="img-fluid" alt="">
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
                                        <li class="header-link-item d-flex align-items-center active">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns mr-1 icon-md"><path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path></svg>
                                            <a class="pt-1px d-none d-md-block" href="<?php echo base_url()?>club/clubInfo">Timeline</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1 icon-md"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <a class="pt-1px d-none d-md-block" href="<?php echo base_url()?>club/about">About</a>
                                        </li>
                                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
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
                        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="card-title mb-0">Bureau</h6>
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

                                    




                                    <div class="row">
                                    <?php foreach ($bureauExe as $b ) {
                                    ?>
                                       <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo  $b->userId ?>">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                   <img class="img-xs profile-turtle rounded-circle"  src="https://www.tunivisions.link/uploads/avatar/<?php echo $b->avatar ?>" alt="<?php echo $b->Tname ?> ">                                                 
                                                    <div class="ml-2">
                                                        <p><?php  if($b->cellule==''){echo '<b>'.$b->Tname.'</b>' ;} else{ echo $b->Tname ;} ?> </p>
                                                        <p class="tx-11 text-muted"><small><?php echo $b->role ?> <?php echo $b->cellule ?><br> </small></p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       </a> 
                                       
                             
                                        
                                   
                                    <?php
                                    } ?>
                                     </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Fondé le:</label>
                                        <p class="text-muted"><?php echo $clubInfo->birthday ?></p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Region:</label>
                                        <p class="text-muted"><?php echo $clubInfo->city ?></p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                                        <p class="text-muted"><?php echo $clubInfo->facebook ?></p>
                                    </div>
                                    <div class="mt-3">
                                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Facebook:</label>
                                        <p class="text-muted"><a href="<?php echo $clubInfo->email ?>">Club Tunivisions <?php echo $clubInfo->name ?></a></p>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <!-- middle wrapper start -->
                        <div class="col-md-8 col-xl-6 middle-wrapper">
                            <div class="row">
                                 <div class="col-md-12">
                                    <?php foreach ($ProjectByClub as $PBC) {
                                        # code...
                                    ?>
                                    <div class="card rounded">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo  $PBC->userId ?>">
                                                <div class="d-flex align-items-center">
                                                    <img class="img-xs rounded-circle" src="https://www.tunivisions.link/uploads/avatar/<?php echo $PBC->avatar ?>" alt="">                                                 
                                                    <div class="ml-2">
                                                        <p><?php echo $PBC->name ?></p>
                                                        <p class="tx-11 text-muted"><?php echo $PBC->endDate ?></p>
                                                    </div>
                                                </div>
                                                </a>
                                                <div class="dropdown">
                                                    <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                        <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg> <span class="">Unfollow</span></a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2"><polyline points="10 9 15 4 20 9"></polyline><path d="M4 20h7a4 4 0 0 0 4-4V4"></path></svg> <span class="">Go to post</span></a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> <span class="">Partager</span></a>
                                                        <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> <span class="">Copy link</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="readMore mb-3 tx-14"><?php echo $PBC->description ?></p>
                                            <img class="img-fluid" src="https://www.tunivisions.link/uploads/projet/<?php echo $PBC->banner ?>" width="100%" alt="">
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex post-actions">
                                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    <p class="d-none d-md-block ml-2">Like</p>
                                                </a>
                                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                    <p class="d-none d-md-block ml-2">Comment</p>
                                                </a>
                                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share icon-md"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
                                                    <p class="d-none d-md-block ml-2">Share</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                     <?php  } ?>
                                     <script type="text/javascript">
                                         $(document).ready(function() {
                                            var max = 50;
                                            $(".readMore").each(function() {
                                                var str = $(this).text();
                                                if ($.trim(str).length > max) {
                                                    var subStr = str.substring(0, max);
                                                    var hiddenStr = str.substring(max, $.trim(str).length);
                                                    $(this).empty().html(subStr);
                                                    $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus</a>');
                                                    $(this).append('<span class="addText">' + hiddenStr + '</span>');
                                                }
                                            });
                                            $(".lire-plus").click(function() {
                                                $(this).siblings(".addText").contents().unwrap();
                                                $(this).remove();
                                            });

                                     </script>
                                     
                                </div>
                            </div>
                        </div>
                        <!-- middle wrapper end -->
                        <!-- right wrapper start -->
                        <div class="d-none d-xl-block col-xl-3 right-wrapper">
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">Statestiques </h6>
                                            <div class="latest-photos">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 class="text-uppercase"><span></span>Conférence :  </h6> <?php echo $conference ; ?>
                                                        <h6 class="ktext-uppercase"><span></span>Evenement : </h6> <?php echo $evenement ;  ?> 
                                                        <h6 class="text-uppercase"><span></span>Formation : </h6>  <?php echo $formation ; ?>

                                                        <hr>
                                                        <b>Finance</b>

                                                        <h6 class="text-uppercase"><span></span><br>Produit : </h6>   
                                                        <?php echo $finance->produits ?> DT<br>

                                                        <h6 class="text-uppercase"><span></span><br>Charge : </h6>
                                                        <?php echo $finance->charges ?> DT    


                                                        <h6 class="text-uppercase"><span></span><br>Solde Actuel : </h6>
                                                        <b><?php echo ($finance->produits - $finance->charges ) ?> DT</b>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h6 class="card-title">Historique des points</h6>

                                            <?php foreach ($scoreByClub as $scores ) {
                                                
                                           ?>
                                           
                                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                <div class="d-flex align-items-center hover-pointer">
                                                                                                     
                                                    <div class="ml-2">
                                                        <a href="<?php echo base_url() ?>Score_club/PNoter/<?php echo $scores->projectId ?>" >
                                                        <p></p>
                                                          </a>
                                                        <p class="tx-11 text-muted"><p><?php echo $scores->createdDate ?></p></p>
                                                    </div>
                                                </div>
                                                <p><?php echo $scores->scores ?> points</p>
                                            </div>
                                          
                                            <?php } ?>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right wrapper end -->
                    </div>
        </div>

           