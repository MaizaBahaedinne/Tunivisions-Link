
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
<!-- partial -->

        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 email-aside border-lg-right">
                    <div class="aside-content">
                      <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                          <span class="icon"><i data-feather="chevron-down"></i></span>
                        </button>
                        <span class="title text-muted font-weight-bold">Projet</span>
                        <p class="text-muted"></p>
                      </div>
                      <?php  if ($role ==1  ||  $role == 3) { ?>
                      <div class="aside-compose"><a class="btn btn-primary btn-block" href="<?php echo base_url() ; ?>Project/addNew">Nouveau projet</a></div>
                      <?php  } ?>
                      <div class="aside-nav collapse">
                        <ul class="nav">
                          <li class="active"><a href="<?php echo base_url() ; ?>Project/projectListingbyClub"><span class="icon"><i data-feather="inbox"></i></span>Nos projets<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                           <?php  if ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) { ?>
                          <li class=""><a href="<?php echo base_url() ; ?>Evaluation/evaluationListing"><span class="icon"><i data-feather="mail"></i></span>Evaluations</a></li>
                          <?php  } ?>
                        </ul>
                        
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-9 email-content">
                    <div class="email-head">
                      <div class="email-head-title d-flex align-items-center">
                        <span data-feather="edit" class="icon-md mr-2"></span>
                        Nos projet
                      </div>
                    </div>
                    <div class="container">
                      <?php
                      if(!empty($projectRecords))
                          {
                            foreach($projectRecords as $record)
                          {
                          ?>
                        
                     <div class="media d-block d-sm-flex">
                          <img src="https://www.tunivisions.link/uploads/projet/<?php echo $record->banner; ?>" class="wd-100p wd-sm-200 mb-3 mb-sm-0 mr-3" alt="...">
                          <div class="media-body">
                            <h5 class="mt-0"><?php 
                                    $string = strip_tags( $record->titre );
                                    if (strlen($string) > 30){

                                        // truncate string
                                        $stringCut = substr($string, 0, 30);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?> </h5>
                                     <small>
                                <?php if ($record->cible=='Publique' )
                                    { ?>
                                        <i class="flaticon-share"></i>
                                <?php }
                                    else if ( $record->cible=='Privé' ){ ?>
                                        <i class="flaticon2-user-outline-symbol"></i>
                                <?php } 
                                 
                                    else if ( $record->cible=='Only tunimateur' ){ ?>
                                        <i class="flaticon-users"></i>
                                <?php } ?>

                                <?php  echo $record->cible ?>
                              </small>
                              <h6>
                                <?php if ($record->ClubName !='Foundation') {echo 'club';} ?> Tunivisions <?php echo $record->ClubName ?>
                              </h6>
                            <p>
                              <?php 
                                    $string = strip_tags( $record->descP  );
                                    if (strlen($string) > 200){

                                        // truncate string
                                        $stringCut = substr($string, 0, 200);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?>
                                </p>
                                <span class="btn btn-danger "> 
                                        <?php $date = new DateTime($record->startDate) ; 
                                        echo $date->format('d').'-'.$date->format('M').'-20'.$date->format('y') ; ?>    
                                </span>
                                <div class="kt-widget__content">
                                    
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle"></span>
                                        <span class="kt-widget__value"><i class="fas fa-map-marker-alt"></i> &nbsp; <span> <b>Local  : </b><small><?php  echo $record->local; ?> </small> </span><span></span>
                                    </div>
                                    
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle"></span>
                                        <span class="kt-widget__value"><i class="fas fa-money-bill-wave"></i> &nbsp;<small> 
                                        <span> <b>Prix : </b> <?php if ($record->prix == 0){echo "Gratuit";}else{echo $record->prix.' DT';} ?> </small> </span><span></span>
                                    </div>
                                </div>
                          </div>
                        </div>
                        <hr>
                        <?php
                        }
                    }
                    ?>

                    </div>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>



