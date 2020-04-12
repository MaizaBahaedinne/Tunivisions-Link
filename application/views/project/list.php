
<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 50%;
  width: 100%;
  height: 150px;
}
</style>


<div class="header-for-bg">
            <div class="background-header position-relative">
               <img src="<?php echo base_url() ;  ?>images/page-img/profile-bg6.jpg" class="img-fluid w-100 rounded rounded" alt="profile-bg">
               <div class="title-on-header">
                  <div class="data-block">
                     <h2>Evenement</h2>
                  </div>
               </div>
            </div>
         </div>



<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">

                <?php if(!empty($projectRecords))
            {
              foreach($projectRecords as $record)
            {
            ?>
                  <div class="col-md-6 col-lg-4">
                     <div class="iq-card rounded iq-card-block iq-card-stretch iq-card-height">
                        <div class="event-images">
                           <a href="#">
                           <img src="https://www.tunivisions.link/uploads/projet/<?php echo $record->banner; ?>" class="alligator-turtle " alt="Responsive image">
                           </a>
                        </div>
                        <div class="iq-card-body">
                           <div class="d-flex">
                              <div class="date-of-event">
                                 <span><?php $date = new DateTime($record->startDate) ; 
                                        echo $date->format('M') ; ?></span>
                                 <h5><?php $date = new DateTime($record->startDate) ; 
                                        echo $date->format('d') ; ?></h5>
                              </div>
                              <div class="events-detail ml-3">
                                 <h5><?php 
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
                                     ?></h5>
                                 <small>par <a href=""><?php if ($record->ClubName !='Foundation') {echo 'club';} ?> Tunivisions <?php echo $record->ClubName ?>  </a></small>
                                 <p>
                                   
                                 </p>
                                 <div class="event-member">
                                    <div class="iq-media-group">

                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <?php if($record->eventFB!='' ) { ?>
                                            <a href="<?php  echo $record->eventFB; ?>"&nbsp; <span><small> <img src="<?php echo base_url() ?>images/icon/08.png" class="img-fluid rounded" alt="facebook"> </h6>
                                              <small></a>
                                        <?php } ?>
                                    </div>
                                  <div class="col-md-4">
                                  <i class="fas fa-map-marker-alt"></i> &nbsp; <h6>Local </h6><small><?php  echo $record->local; ?> </small> 
                                  </div>       
                                          
                                             
                                    <div class="col-md-4">             
                                  <i class="fas fa-money-bill-wave"></i> &nbsp;<small> <h6>Prix</h6><?php if ($record->prix == 0){echo "Gratuit";}else{echo $record->prix.' DT';} ?> </small> 
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
                  
               </div>
            </div>
         </div>
