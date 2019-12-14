<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 0%;

  width: 100px;
  height: 100px;
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


<?php if($bilancount < 1 ) { ?>
   <script type="text/javascript"> let timerInterval
    Swal.fire({
      title: 'alert !',
      html: 'votre club est suspendu pour le moment <br> if faut que le président ou le VP Administration et finance faire la déclaration du bilan financier ',
      <?php if($user->roleId == 1 || ($user->roleId == 3 &&  $user->cellule == 'Administration et finance' ) || $user->SA == 1  ) {?> 
      timer: 5000,
      <?php  } else { ?>
       timer: 3000,
       <?php     
      }
      ?>
      onBeforeOpen: () => {
        Swal.showLoading()
        timerInterval = setInterval(() => {
          Swal.getContent().querySelector('strong')
            .textContent = Swal.getTimerLeft()
        }, 100)
      },
      onClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.timer
      ) {
        <?php if($user->roleId == 1 || ($user->roleId == 3 &&  $user->cellule == 'Administration et finance' ) || $user->SA == 1  ) {?> 
        
         window.location.replace("<?php echo base_url() ;?>Finance/addNew");
        <?php } else { ?>
        window.location.replace("<?php echo base_url() ;?>logout");
        <?php } ?>
        console.log('Votre club est bloqué')
      }
    })</script>
       <?php } ?>



       



  



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
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">

</div>
<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-item">
              <img src="..." alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
              <img src="..." alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
          </div>
    </div>
    <div class="kt-portlet">
    <div class="kt-portlet__body  kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
           
            <div class="col-md-3">
                <!--begin::Total Profit-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                              <i class="flaticon2-user">  <a href="<?php echo base_url() ; ?>users">Tunimateurs</a></i>
                            </h4>
                            <span class="kt-widget24__desc">
                               
                            </span>
                        </div>

                        <span class="kt-widget24__stats kt-font-brand">
                             <?php echo $tunimateursApp ;?>


                             

                        </span>  
                    </div>       
                </div>
                <!--end::Total Profit-->
            </div>
         

            <div class="col-md-3">
                <!--begin::New Feedbacks-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                               <i class="flaticon2-safe"> Club Tunivisions</i>
                            </h4>
     
                        </div>

                        <span class="kt-widget24__stats kt-font-warning">
                           <?php echo $clubscount ; ?>
                        </span>  
                    </div> 


                           
                </div>              
                <!--end::New Feedbacks--> 
            </div>
            
            <div class="col-md-3">
                <!--begin::New Orders-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                                <i class="flaticon2-pie-chart-2"><a href="<?php echo base_url() ; ?>Project/projectListing"> Projet</a></i>
                            </h4>

                        </div>

                        <span class="kt-widget24__stats kt-font-danger">
                            <?php echo $projets ; ?>
                        </span>  
                    </div> 

                   

                            
                </div>              
                <!--end::New Orders--> 
            </div>
            
            <div class="col-md-3">
                <!--begin::New Users-->
                <div class="kt-widget24">
                    <div class="kt-widget24__details">
                        <div class="kt-widget24__info">
                            <h4 class="kt-widget24__title">
                             <i class="flaticon2-favourite "> Region</i> 
 
                            </h4>
                            <span class="kt-widget24__desc">
                              
                            </span>
                        </div>

                        <span class="kt-widget24__stats kt-font-success">
                            24 
                        </span>  
                    </div> 


                                               
                </div>              
                <!--end::New Users--> 
            </div>

        </div>
    </div>
</div>

  <div class="row"> 
    <div  class="col-md-12" >
     
        <?php  if (1){ ?>

                    <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       <i class="fa fa-star" > TFM 5.0 </i>
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <div >

                    <?php 
                    if ($TFMVALID   && $MyTFM == null  ) {
                  echo "<b>Contacter votre  président pour avoir plus d'informations sur le transport </b>";
                }

                else if ($TFMVALID && $MyTFM != null ) { ?>
 
                       
                        
                            <div><b> <?php echo $MyTFM->type ?> Bus N </b><?php echo $MyTFM->num ;?> de <?php echo $MyTFM->region ;?> </div>
                            &nbsp;
                            <li align="left" ><b>Depart : </b><?php echo $MyTFM->depart ;?> <b> de </b>   <?php echo $MyTFM->region ;?>  </li>&nbsp;
                            <li align="left" ><b>Arrivé : </b><?php echo $MyTFM->arrive ;?> <b> à </b>  Sousse</li>
                            &nbsp;
                            <div align="left"><b>Responsable : </b> 
                              <?php 
                              if($MyTFM->responsable != $name)
                                { echo  $MyTFM->responsable.'(<a href=tel:'.$MyTFM->contact.' >Appeler</a>)' ;
                                }

                              else {
                                ?> 
                                 Vous étes le responsable de cette bus <b>  <a class="btn btn-primary" href="<?php echo base_url(); ?>TFM/BusPartList/<?php echo  $MyTFM->id   ?>">la Liste des personnes</a> </b>  
                                <?php }
                               ;?> 
                             </div>
                              <br>
                          
                              <h3 class="alert alert-danger fade show">Dispatching du restaurant  </h3>
                              <div class="row">
                               

                               <div class="col-md-4">
                               
                                <h4>Du 12h00 à 12h40</h4>
                                <li>  ENIS  </li>
                                <li>  ISG </li>
                                <li>  IIT </li>
                                <li>  ISSAT KAS </li>
                                <li>  FSM </li>
                                <li>  IPEIM </li>
                                <li>  ISSAT SOUSSE  </li>
                                <li>  APAC  </li>
                                <li>  ENICARTHAGE </li>
                                <li>  FSG </li>
                                <li>  ISEGT </li>
                                <li>  ISIGK </li>
                                <li>  ISSIG </li>
                                <li>  CCU-GABES </li>
                                <li>  EPS </li>
                                <li>  ISEAH SBITLA  </li>
                                <li>  ISSBAT  </li>
                                <li>  FSEG MAHDIA </li>
                                <li>  ISAMS </li>
                                <li>  ISET JANDOUBA </li>
                                <li>  ISI KEF </li>
                                <li>  ISET COM  </li>
                                <li>  ISET GABES  </li>
                                <li>  ISI </li>
                                <li>  ISTEUB  </li>
                                <li>  ESSTST  </li>
                                <li>  FSEG SFAX </li>
                                <li>  ISFFSO  </li>
                                <li>  IMSET GABES </li>
                                <li>  ISLG  </li>
                                <li>  ENAU  </li>
                                <li>  ISLT  </li>
                                <li>  ISTMT </li>
                                <li>  ESIAT </li>
                                <li>  IHEC CARTHAGE </li>
                                <li>  ISBAT </li>
                                <li>  ISET SFAX </li>
                                <li>  ISGS  </li>
                                <li>  FSJEG JANDOUBA  </li>
                                <li>  ISET KAS  </li>
                                <li>  ISG GABES </li>
                                <li>  IHEC SFAX </li>
                                <li>  ISET KEF  </li>
                                <li>  ISSAT GABES </li>
                                </div>
                                <div class="col-md-4">
                                <h4>Du 12h40 à 13h00</h4>

                                <li>  sesame  </li>
                                <li>  ESSECT  </li>
                                <li>  IMSET </li>
                                <li>  ISET BEJA </li>
                                <li>  FST </li>
                                <li>  FSEG NABEUL </li>
                                <li>  ISG BIZERTE </li>
                                <li>  ISAAS </li>
                                <li>  ISET MAHDIA </li>
                                <li>  CENTRALE  </li>
                                <li>  IHEC SOUSSE </li>
                                <li>  ISET BIZERTE  </li>
                                <li>  ISSTE </li>
                                <li>  ISTL SOUSSE </li>
                                <li>  ISSIT </li>
                                <li>  ISGIS </li>
                                <li>  ISTIC </li>
                                <li>  IHET SIDI DHRIF </li>
                                  </div>
                                  <div class="col-md-4">
                                 <h4>Du 13h00 à 13h40</h4>

                                  <li> CSFMT Gammarh </li>
                                  <li>  ESC sfax  </li>
                                  <li>  ISET RADES  </li>
                                  <li>  ESPRIT GCEM </li>
                                  <li>  COLLEGE LA SALLE  </li>
                                  <li>  ESPRIT TIC  </li>
                                  <li>  ISBST </li>
                                  <li>  ISETN </li>
                                  </div>      


                             </div>

                          
    
   <?php } 
          
    else if ($TFMVALID == 0 )  { ?>
                                  A la prochaine ... 
                          <?php }  ?>              
                          </div>
                  </div>
                 </div>
                  
                </div>
            </div>
     

        <?php } ?>

    </div>


    <div class="col-md-12">        
      <style type="text/css">
        .alligator-turtle3 {
    object-fit: cover;
    object-position: 50% 50%;
    width: 100%;
    height: 300px;
      </style>
       <img src="https://scontent.ftun7-1.fna.fbcdn.net/v/t1.0-9/79385061_951733981864962_3787148526337654784_o.jpg?_nc_cat=107&_nc_ohc=Mt5N3DMSAmYAQlPwYmQvVrAHgYeLKemSNsrogyxR2evQsFXsRvih5q7JA&_nc_ht=scontent.ftun7-1.fna&oh=ee069c741a64e7bfb4c35e8f5844c824&oe=5E8955F4"  class="alligator-turtle3" >
     </div>
<div class="col-md-6">    
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       <i class="fa fa-star" > Classement des clubs</i>
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table id="Clubs" class="table" style="width: 100%" >
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th align="left" >Nom</th>
                                    <th align="left" >Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c= 1; 
                                foreach ($RateClub as $rc) {
                                 if ($rc->clubID == $MyclubID)
                                    {  echo '   <tr  bgcolor="#ADD8E6" > '; }
                                else{  echo '   <tr   > '; }
                                   if ($c== 1){ 
                                   echo  '  <td> <span class="kt-badge kt-badge--inline kt-badge--success"> '
                                            .$c.
                                            '</span> </td><td align="left" > <b>Club Tunivisions '
                                            .$rc->name.
                                            '</b></td><td align="right" >'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 2){ 
                                   echo  ' <tr> <td> <span class="kt-badge kt-badge--inline kt-badge--info">  '
                                            .$c.
                                            '</span></td><td align="left"  ><small><b>Club Tunivisions '
                                            .$rc->name.
                                            '</b></small> </td><td align="right">'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 3){ 
                                   echo  ' <tr> <td><span class="kt-badge kt-badge--inline kt-badge--warning"> '
                                            .$c.
                                            '</span> </td><td align="left"  ><small><b><b>Club Tunivisions '
                                            .$rc->name.
                                            '</b></small></td><td align="right">'. 
                                            $rc->scores
                                              ;
                                            }
                                   if($c> 3) { 
                                   echo  ' <tr> <td>'
                                            .$c.
                                            '</td><td align="left" ><small>Club Tunivisions '
                                            .$rc->name.
                                            '</small></td><td align="right" >'. 
                                            $rc->scores
                                              ;
                                            }

                                    else{echo  '</td> ' ;}    
                              $c++ ; 
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>




                        

                    
                </div>
            </div>
        </div>
        <!--end::Portlet-->
        </div>
        <div class="col-md-6">
       
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       <i class="fa fa-star" > Classement des membres</i>   
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <style type="text/css">
                       .alligator-turtle2 {
                  object-fit: cover;
                  object-position: 50% 0%;

                  width: auto;
                  height: 40px;
                  width: 40px ;
                }
                </style>
                <!--begin::Section-->
                <div class="kt-section">
                   <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table id="Members" class="table" style="width: 100%;overflow-y:hidden;" >
                            <thead>
                                <tr>
                                    <th width="5%" > </th>
                                    <th align="left" >Nom</th>
                                    <th align="right" >Score</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php $c= 1; 
                                foreach ($RateMember as $rc) {
                                    if ($rc->avatar ==''){$rc->avatar = 'usersDefault.jpg' ;}
                                 if ($rc->userID == $MyuserId)
                                    {  echo '   <tr  bgcolor="#ADD8E6" > '; }
                                else{  echo '   <tr   > '; }
                                   if ($c== 1){ 
                                    
                                    
                                            echo  '<td width="5%">  '
                                            .
                                            '</span> </td><td align="left" ><b> '
                                            .$rc->name.'</b><br><small>Club Tunivisions '.$rc->clubName.'</small>'.
                                            '</td><td align="right" >'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 2){ 
                                    echo  '<td width="5%"> '
                                            .
                                            '</span> </td><td align="left" ><b> '
                                            .$rc->name.'</b><br><small>Club Tunivisions '.$rc->clubName.'</small>'.
                                            '</td><td align="right" >'. 
                                            $rc->scores
                                              ;
                                            }
                                   if ($c== 3){ 
                                      echo  '<td width="5%"> '
                                            .
                                            '</span> </td><td align="left" ><b> '
                                            .$rc->name.'</b><br><small>Club Tunivisions '.$rc->clubName.'</small>'.
                                            '</td><td align="right" >'. 
                                            $rc->scores
                                              ;
                                            }
                                   if($c> 3 ) { 
                                    echo  '<td width="5%"> '
                                            .
                                            '</span> </td><td align="left" ><b> '
                                            .$rc->name.'</b><br><small>Club Tunivisions '.$rc->clubName.'</small>'.
                                            '</td><td align="right">'. 
                                            $rc->scores
                                              ;
                                            }
                                    

                                    else{echo  '</td> ' ;}    
                              $c++ ; 
                                    }

                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--end::Portlet-->


    </div>

<!-- end:: Content -->              
</div>
</div>
<!-- end:: row -->

</div>
</div>

<script>

</script>

