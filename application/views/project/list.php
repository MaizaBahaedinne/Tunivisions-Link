<div class="card-deck">
    
   <?php if(!empty($projectRecords))
            {
              foreach($projectRecords as $record)
            {
            ?>

    <div class="card"> 
        <img src="https://www.tunivisions.link/uploads/projet/<?php echo $record->banner; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4><a href="" class="kt-widget__title">
                                  

                                    <?php 
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
                                     ?>
                                </a>
            </h4>

            <p>
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
                                </p>
                                <h6 class="kt-widget__desc">
                                                        par 
                                                    <?php if ($record->ClubName !='Foundation') {echo 'club';} ?> Tunivisions <?php echo $record->ClubName ?>  

                                </h6>
                              <p class="card-text">
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
                                        <span class="kt-widget__value"><i class="fas fa-map-marker-alt"></i> &nbsp; <span><h6>Local </h6><small><?php  echo $record->local; ?> </small> </span><span></span>
                                    </div>
                                
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__subtitle"></span>
                                        <span class="kt-widget__value"><i class="fas fa-money-bill-wave"></i> &nbsp;<small> <span><h6>Prix</h6><?php if ($record->prix == 0){echo "Gratuit";}else{echo $record->prix.' DT';} ?> </small> 
                                    </div>

                                </div>

        
        <?php
                        }
                    }
                    ?>

  </div>