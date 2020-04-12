<div id="content-page" class="content-page">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">

                
                <div class="row ">
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
<!-- row -->
<?php  if ($countEval>0 && ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) ){ ?>
                    <a href=" <?php echo base_url() ; ?>Evaluation/evaluationListing ">

                        <div class="alert alert-primary fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text"><strong>Alerte :  </strong> Vous avez
                                <?php echo $countEval ?> évaluation à valider !</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
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
                    <?php $c=0 ; if(!empty($RateMember)){ foreach ($RateMember as $membre ) { ?>
                        <a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $membre->userId ?>" class="d-flex align-items-center border-bottom pb-3">
                            <div class="mr-3">
                                <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $membre->avatar ?>" class="rounded-circle wd-35 pro-turtle" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">

                                    <h6 class="text-body mb-2"><?php echo $membre->name ?></h6>

                                    <p class="text-muted tx-12">
                                        <?php echo $membre->scores ?> Points</p>
                                </div>
                                <p class="text-muted tx-13">Club Tunivisions
                                    <?php echo $membre->clubName ?>
                                </p>
                            </div>
                        </a>
                        <?php }  }else { echo "Il y a pas de données";} ?>
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
               <!--   <?php echo $LastRaitingClub->createdDate ; ?>  -->
                  </span>
                </div>
                <div class="table-responsive" style="height:600px ;overflow:auto;">
                    <table class="table table-hover mb-0" id="dtVerticalScrollExample">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Club</th>
                                <th class="pt-0">Score</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $c=0 ; if(!empty($RateClub)){ foreach ($RateClub as $club ) { ?>
                                <tr <?php if ($club->clubID == $MyclubID) { echo 'bgcolor="#ADD8E6" '; }?> >
                                    <td>
                                        <?php $c++ ; echo $c ?>
                                    </td>
                                    <td>
                                        <?php echo $club->name ?>
                                    </td>
                                    <td>
                                        <?php echo $club->scores ?>
                                    </td>
                                    <td></td>
                                </tr>
                                <?php } }else { echo "Il y a pas de données";} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->

<!-- row -->

            </div>
        </div>
    </div>
    <!-- row -->

</div>
</div>