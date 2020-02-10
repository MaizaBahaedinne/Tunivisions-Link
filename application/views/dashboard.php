


 <link rel="stylesheet" href="<?php echo base_url() ?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/owlcarousel/assets/owl.theme.default.min.css">

    <script src="<?php echo base_url() ?>assets/vendors/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/owlcarousel/owl.carousel.js"></script>

      <?php  if ($countEval>0 && ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) ){ ?>
<a href=" <?php echo base_url() ; ?>Evaluation/evaluationListing "  >

<div class="alert alert-danger fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text"><strong>Alerte :  </strong> Vous avez <?php echo $countEval ?> évaluation à valider !</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
</a>
<?php } ?>


        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0"></h4>
          </div>
          
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Clubs Senior</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $clubscountS ; ?></h3>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Clubs Junior</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $clubscountJ ; ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Tunimateurs</h6>
                      <div class="dropdown mb-2">
                       
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $tunimateursApp ;?></h3>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                          <div id="sparklinePie"></div>
                      </div>
                       
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Tunimateurs Junior</h6>
                      <div class="dropdown mb-2">
                       
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $tunimateursAppJ ;?></h3>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                          <div id="sparklinePie"></div>
                      </div>
                       
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Membre Alumni</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $tunimateursAppA ; ?></h3>
                      </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Projets</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $projets ; ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              

            </div>
          </div>
        </div> <!-- row -->



        

        <style type="text/css">
               .actu-turtle {
          object-fit: cover;
          object-position: 50% 50%;
          width: 100%;
          height: 200px;
        }
        </style>

        <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Actualités</h6>
                  <div class="owl-carousel owl-theme">
                    <?php foreach ($ActuRecords as $actu ) { ?>
                                      
                  <div class="item">
                    <img src="https://www.tunivisions.link/uploads/Actu/<?php echo $actu->image ?>" class="actu-turtle"  alt="item-image">
                    <br>
                    <span style="align-content: center;"><b><?php echo $actu->titre ?></b></span>
                    <small>
                    <br>
                    <span>par : <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $actu->userId ?>"><?php echo $actu->name ?></a> </span>
                    
                    <span>le : <?php echo $actu->createdDate ?> </span>
                    </small>
                  </div>
                  <?php } ?>
                  </div>
          

              </div>
            </div>
          </div>
        
        <script type="text/javascript">
          
          var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:2,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1500,
                autoplayHoverPause:true
            });
            

        </script>
        </div> <!-- row -->

        <div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">10 Top Members</h6>
                  <div class="dropdown mb-2">

                    
                  </div>
                </div>

                <style type="text/css">
                       .pro-turtle {
                  object-fit: cover;
                  object-position: 50% 50%;
                  width: 40px;
                  height: 40px;
                }
                </style>
                <div class="d-flex flex-column">
                  <?php $c=0 ; foreach ($RateMember as $membre ) { ?>
                  <a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $membre->userId ?>" class="d-flex align-items-center border-bottom pb-3">
                    <div class="mr-3">
                      <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $membre->avatar ?>" class="rounded-circle wd-35 pro-turtle" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        
                         <h6 class="text-body mb-2"><?php echo $membre->name ?></h6>
                       
                        <p class="text-muted tx-12"><?php echo $membre->scores ?> Points</p>
                      </div>
                      <p class="text-muted tx-13">Club Tunivisions <?php echo $membre->clubName ?></p>
                    </div>
                  </a>
                 <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Classement des clubs </h6>
                  <span class="text-muted"><b> Dernière mise à jour : </b>
                  <?php echo $LastRaitingClub->createdDate ; ?>
                  </span>
                </div>
                <div class="table-responsive" style="height:600px ;overflow:auto;">
                  <table class="table table-hover mb-0" id="dtVerticalScrollExample"  >
                    <thead>
                      <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Club</th>
                        <th class="pt-0">Score</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                      <?php $c=0 ; foreach ($RateClub as $club ) { ?>
                      <tr  <?php if ($club->clubID == $MyclubID) {  echo 'bgcolor="#ADD8E6"  '; }?> >
                        <td><?php $c++ ; echo $c ?></td>
                        <td><?php echo $club->name ?></td>
                        <td><?php echo $club->scores ?></td>
                        <td></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->

<br>

        <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Projet à venir</h6>
                  <div class="owl-carousel owl-theme">
                    <?php foreach ($projectRecords as $projets ) { ?>
                                      
                  <div class="item">
                    <img src="https://www.tunivisions.link/uploads/projet/<?php echo $projets->banner ?>" class="actu-turtle"  alt="item-image">
                    <br>
                    <span style="align-content: center;"><b><?php echo $projets->titre ?></b></span>
                    <br>
                    <span>par : Club Tunivisions <?php echo $projets->ClubName ?> </span>
                    <br>
                    <span>le : <?php

                      $date = new DateTime($projets->startDate);
                      echo $date->format('d/m/Y');

                     ?> 

                     à : <?php

                      $date = new DateTime($projets->endDate);
                      echo $date->format('d/m/Y');

                     ?>
                      </span>
                  </div>
                  <?php } ?>
                  </div>
          

              </div>
            </div>
          </div>
        
        <script type="text/javascript">
          
          var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:3,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true
            });
            

        </script>
        </div> <!-- row -->

     
        <!-- plugin js for this page -->
        <script src="<?php echo base_url() ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
        
        <!-- end plugin js for this page -->

 