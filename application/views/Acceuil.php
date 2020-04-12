
<style type="text/css">
   #upload{
    display:none
}
</style>



<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-sm-12">
                        <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Créer une publication </h4>
                              </div>
                           </div>
                           <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <img src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>" alt="userimg" class="avatar-60 rounded-circle">
                                 </div>
                                 <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input type="text" name="postText" class="form-control rounded" placeholder="Que voulez-vous dire, <?php echo $name ?> ? " style="border:none;">
                                 </form>
                              </div>
                              <hr>
                              
                              <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3">
                                    
                                 </li>
                                 <!--
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</li>
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</li>
                                 <li class="iq-bg-primary rounded p-2 pointer">
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" id="post-option" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                             <a class="dropdown-item" href="#">Check in</a>
                                             <a class="dropdown-item" href="#">Live Video</a>
                                             <a class="dropdown-item" href="#">Gif</a>
                                             <a class="dropdown-item" href="#">Watch Party</a>
                                             <a class="dropdown-item" href="#">Play with Friend</a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>-->
                              </ul>
                                  
                           </div>
                           <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                              <form action="<?php echo base_url()?>Posts/addNewP" method="post" >
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <div class="user-img">
                                             <img src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                          </div>

                                       <h5 class="modal-title" id="post-modalLabel">Créer une publication</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          


                                          
                                        <textarea id="textarea"  class="form-control rounded" name="postText" placeholder="Que voulez-vous dire, <?php echo $name ?> ? " row="10"; style="resize: none;" required ></textarea>
                                          
                                          
                                       </div>
                                       <hr>

                                       <br>
                                          Je veux joinde
                                          <input type="radio" name="r1"id="r1"> une photo
                                          <input type="radio" name="r1" id="r2"> un lien

                                      
                                       <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                           <li class="col-md-12 mb-3" id="lien" style="display: none;"> 
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3">
                                                <a href="#"></a>
                                                 <input type="url" class="form-control" name=""  placeholder="integrer un lien " >
                                              </div>
                                          </li>
                                          <li class="col-md-12 mb-3" id="tof" style="display: none;">
                                             <div class="form-group">
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="customFile">
                                                   <label class="custom-file-label" for="customFile">Choisir un fichier</label>
                                                </div>
                                             </div>
                                          </li>
                                      
                                         
                                          <!--
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/10.png" alt="icon" class="img-fluid"> Check in</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/11.png" alt="icon" class="img-fluid"> Live Video</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/12.png" alt="icon" class="img-fluid"> Gif</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/13.png" alt="icon" class="img-fluid"> Watch Party</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/14.png" alt="icon" class="img-fluid"> Play with Friends</div>
                                          </li>-->
                                       </ul>
                                       
                                       <hr>
                                       
                                       <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           </div>
                        </div>
                     </div>


                     <?php   if (!empty($postRecords)) {    foreach ($postRecords as $record ) {  ?>

                     <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>"  alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="#" class=""><?php echo $record->name?></a></h5>
                                       <p class="mb-0 d-inline-block">a mise à jour son statut</p>
                                       <p class="mb-0 text-primary"><?php echo $record->DatePosted?></p>
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
                                                   <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Hide Post</h6>
                                                      <p class="mb-0">See fewer posts like this.</p>
                                                   </div>
                                                </div>
                                             </a>
                                             <a class="dropdown-item p-3" href="#">
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-user-unfollow-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Unfollow User</h6>
                                                      <p class="mb-0">Stop seeing posts but stay friends.</p>
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
                              <div class="mt-3">
                                 <p><?php echo $record->Content ?></p>
                                 
                              </div>
                              
                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="like-block position-relative d-flex align-items-center">
                                       <div class="d-flex align-items-center">
                                          <div class="like-data">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="<?php echo base_url() ;  ?>images/icon/01.png" class="img-fluid" alt="">
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="ml-2 mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="<?php echo base_url() ;  ?>images/icon/01.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="<?php echo base_url() ;  ?>images/icon/02.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Happy"><img src="<?php echo base_url() ;  ?>images/icon/03.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="HaHa"><img src="<?php echo base_url() ;  ?>images/icon/04.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Think"><img src="<?php echo base_url() ;  ?>images/icon/05.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sade"><img src="<?php echo base_url() ;  ?>images/icon/06.png" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lovely"><img src="<?php echo base_url() ;  ?>images/icon/07.png" class="img-fluid" alt=""></a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="total-like-block ml-2 mr-3">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                 j'aime
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="#"></a>
                                                   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-comment-block">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                              Commentaires
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"></a>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--
                                    <div class="share-block d-flex align-items-center feather-icon mr-3">
                                       <a href="javascript:void();"><i class="ri-share-line"></i>
                                       <span class="ml-1">99 Share</span></a>
                                    </div>
                                    -->
                                 </div>
                                 <hr>
                                 <ul class="post-comments p-0 m-0">
                                    <!--
                                    <li class="mb-2">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img class="actu-turtle"  alt="item-image">
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6>Monty Carlo</h6>
                                             <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="javascript:void();">like</a>
                                                <a href="javascript:void();">reply</a>
                                               
                                                <span> 5 min </span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    -->
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
                     <?php } } ?>
                     
                     
                     
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Actualité</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <style type="text/css">
                                    .actu-turtle {
                                                    object-fit: cover;
                                                    object-position: 50% 50%;
                                                    width: 100%;
                                                    height: 50px;
                                                  }
                             </style>

                              <?php foreach ($ActuRecords as $record ) { ?>
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="https://www.tunivisions.link/uploads/Actu/<?php echo $record->image ?>" class="actu-turtle">
                                 <div class="stories-data ml-3">
                                    <h5><?php echo $record->titre ?></h5>
                                    <p class="mb-0">
                                                      <?php 
                                                        $string = strip_tags( $record->description  );
                                                        if (strlen($string) > 55){

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 55);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '... ';
                                                            }

                                                         echo $string ;
                                                         ?>  

                                    </p>
                                 </div>
                              </li>
                              <?php } ?>
                              
                           </ul>
                           <a href="#" class="btn btn-primary d-block mt-3">Voir plus</a>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Evenement</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="<?php echo base_url() ?>project/projectListing" ><i class="ri-eye-fill mr-2"></i>Voir plus</a>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <?php foreach ($projectRecords as $projets ) { ?>
                              <li class="d-flex mb-4 align-items-center ">
                                 <img src="https://www.tunivisions.link/uploads/projet/<?php echo $projets->banner ?>" class="actu-turtle"  alt="item-image">
                                 <div class="stories-data ml-3">
                                    <h5><?php echo $projets->titre ?></h5>
                                    <p class="mb-0"><?php          $date = new DateTime($projets->startDate);
                                                                   echo $date->format('d/m/Y');?> </p>
                                    <p class="mb-0"><small> par : Club Tunivisions <?php echo $projets->ClubName ?> </small> </p>
                                 </div>
                              </li>
                               <?php } ?>
                           </ul>
                        </div>
                     </div>
                     <
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upcoming Birthday</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Sthesia</h5>
                                    <p class="mb-0">Today</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Paul Molive</h5>
                                    <p class="mb-0">Tomorrow</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Suggested Pages</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="suggested-page-story m-0 p-0 list-inline">
                              <li class="mb-3">
                                 <div class="d-flex align-items-center mb-3">
                                    <img src="<?php echo base_url() ;  ?>images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Iqonic Studio</h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="<?php echo base_url() ;  ?>images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                              <li class="">
                                 <div class="d-flex align-items-center mb-3">
                                    <img src="<?php echo base_url() ;  ?>images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Cakes &amp; Bakes </h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="<?php echo base_url() ;  ?>images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="<?php echo base_url() ;  ?>images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                  </div>
               </div>
            </div>
         </div>



<script>
$(document).ready(function(){


  $("#r1").click(function(){
    $("lien").hide();
    $("tof").show();
  });
  $("#r2").click(function(){
    $("lien").show();
    $("tof").hide();
  });
});
</script>