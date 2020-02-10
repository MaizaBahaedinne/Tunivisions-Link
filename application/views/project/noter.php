
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
			
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://127.0.0.1/Tunivisions-Link/assets/vendors/prismjs/themes/prism.css">



        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0"> <?php echo $projectInfo->titre ; ?> <small><small> par <b>club Tunivisions <?php echo $projectInfo->ClubName ; ?>  </small></b> <small><small>#<?php echo $projectInfo->projectId ; ?></small></small> </small></h4>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Date du projet</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php $date = new DateTime($projectInfo->endDate); echo $date->format('d/m/Y');  ?></h4>              
                      </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Lieu</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->local;  ?></h4>              
                      </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Participant</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->capacite;  ?></h4>              
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Déclarer le</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->createdDate ;  ?></h4>              
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Type</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->type  ?></h4>                       
                      </div>
                    </div>
                    <br> 
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">cible</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->cible  ?></h4>                       
                      </div>
                    </div>

                     <br> 
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">prix</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->prix  ?> DT</h4>                       
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Evenement Facebook</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo if($projectInfo->eventFB !='' ) { ?> <a href="<?php echo $projectInfo->createdDate ; ?>" > Aller au facebook </a> <?php }  ?></h4>                       
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Note</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        
                          <div class="row">


                            <?php if ($SA == 1 ) { ?> 
                            <form method="post" action="<?php echo base_url()?>Score_club/noteProject/<?php echo $projectInfo->projectId ; ?>"  >
                         

                            <label> Titre  </label>
                            <select name="titre">
                              <option value="Participation : ">Participation</option>
                              <option value="Organisation : ">Organisation</option>
                            </select> 
                            <label> score </label>
                            <input class="form-control" type="number" name="scoreP" value="<?php echo $scoreClub->sc ?>" >
                            <label> Remarque </label>
                            <textarea class="form-control"  name="remarque"  value="<?php echo $scoreClub->remarque ?>" ></textarea>
                            <label>Badges</label>
                            <select name="badge">
                              <?php 
                              foreach ($BadgesRecords as $badge ) 
                              { 
                               ?>
                              <option value="<?php echo $badge->badgeId ?>" > <?php echo $badge->name ?> </option>
                              <?php 
                              }
                               ?>
                            </select>
                            <input type="submit" class="btn btn-primary" >
                            </form>
                          <?php } else { ?>
                            <h6> score </h6>
                            "<?php echo $scoreClub->sc ?>" 
                            <h6> Remarque :  </h6>
                            <?php echo $scoreClub->remarque ?>
                                   <?php 
                                 }
                               ?>

                            

                          </div>
                                             
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
            </div>
          </div>
        </div> <!-- row -->


       

        <div class="row">
          
        </div> <!-- row -->

        <div class="row">
          
          
        </div> <!-- row -->

        <div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"> <?php echo count($resource)?> Membres participants </h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm mr-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <?php foreach ($resource as $res ) {
                   ?>
                  <a href="#" class="d-flex align-items-center border-bottom pb-3">
                    <div class="mr-3">
                      <img src="<?php echo base_url() ?>Uploads/avatar/<?php echo $res->avatar ?>" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2"><?php echo $res->name ?></h6>
                        <p class="text-muted tx-12">
                        <?php for ($i=0 ; $i <$res->score ; $i++) { 
                        ?>
                         &#9733;
                        <?php
                        }
                        ?></p>
                      </div>
                      <p class="text-muted tx-13"><?php echo '' ?></p>
                    </div>
                  </a>
                  <?php 

                  } ?>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Marketing</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm mr-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                    <div class="row" >
                      
                    </div>
                    <div >
                      <a href="<?php echo $evaluations->album ; ?>">Album photo </a>
                      <br>
                     <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->album ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div  >
                       
                     <a href="<?php echo $evaluations->afterMovie ; ?>">After Movie </a>
                      <br>
                     <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->afterMovie ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                
                    </div>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->


