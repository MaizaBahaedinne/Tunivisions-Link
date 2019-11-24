<link href="<?php echo base_url(); ?>custom/apps/user/assets/css/demo12/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            <!-- begin:: Content Head -->

<!-- end:: Content Head -->                 
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="first">
    <!--begin: Form Wizard Nav -->
   
    <!--end: Form Wizard Nav -->

    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <!--begin: Form Wizard Form-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    
    <section class="kt-container">
    <br>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                   
                    <!-- form start -->
                    <?php $this->load->helper("form"); if ($auto->charte == 1 ){ ?>
                    <form role="form" id="addproject" action="<?php echo base_url()?>TFM/partanTfm" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">


<style type="text/css">
       .alligator-turtle {
  object-fit: cover;
  object-position: 50% 50%;

  width: 100%;
  height: 250px;
}</style>
<img src="<?php echo base_url() ?>uploads/projet/TFM50000.png" class="alligator-turtle" >
                            <hr>
                            <br>


                            <div class="row">

                            <?php if($role == 1 || $SA == 1  ){ ?>
                            <div class="col-md-6">
                                <h4 style="color: #d4af37">Club</h4>
                                <div class="col-md-12">
                                    <label> Mon club est fondé le </label>
                                    <input type="date" name="dateFonde" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label> Email du club  </label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label> Lien page facebook du club </label>
                                    <input type="text" name="facebook" class="form-control" required>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-md-12">
                            <div class="col-md-6">
                                <h4 style="color: #d4af37" ><br>Tunimateur</h4>
                                <label> Je suis un tunnimateur depuis </label>
                                <select class="form-control" name="annee">
                                    <option value="2016" >2016</option>
                                    <option value="2017" >2017</option>
                                    <option value="2018" >2018</option>
                                    <option value="2019" >2019</option>
                                </select>
                            </div>
                            

                            <div class="col-md-10">

                                <label> J'ai participé au : </label>
                               
                                <?php foreach ($tfmRecords  as $record ) { if ($record->tfmId<6){?>
                               <br>
                                <label class="kt-checkbox">
                                    <input type="checkbox" name="TFMS[]" value="<?php echo $record->tfmId ?>" ><?php echo $record->nom ?>
                                    <span></span>
                                </label>

                                <?php }  } ?>
                            </div>
                            <div class="col-md-6">
                                <label> J'utilise un smartphone  </label>
                                <select class="form-control" name="sys">
                                    <option value="Android" >Android</option>
                                    <option value="Apple" >Apple</option>
                                    <option value="Autre" >Autre</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <br><br>
                               <h2 style="color: #d4af37" > Formulaire d'inscription TFM 5.0 </h2>
                                <br><br>
                            </div>
                          <div class="col-md-6">


                                <div class="col-md-12">
                                     <h3  style="color: #d4af37" for="fname">Reglement Interieur TFM 5.0</h3>
                                </div>
                                <hr>


                                <div class="col-md-12">
                                     <p for="fname"><br><b>Chers participants,</b><br><br>
                                        Afin d’assurer le bon déroulement de notre séminaire TFM 5.0comportant ainsi 600 participants, nous avons procédés à la mise en place de ce règlement qui a pour but de favoriser toutes les conditions favorables à la bonne conduite de ce séminaire. Nous vous invitons à prendre conscience du présent règlement qui impose le respect des lieux, des normes de sécurité, des relations entre les Tunimateurs  et celui des formateurs. Les articles du présent règlement s’appliquent à chaque participant et doivent être lus et approuvés.
                                        </p>
                                </div>

        <div class="kt-portlet__body">
                <!--begin::Accordion-->
                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample5">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE I : Organisation
                            </div>
                        </div>
                        <div id="collapseOne5" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample5" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
                                     <h4 for="fname">I.1.   Respect du fonctionnement de la procédure d’inscription :</h4>
                                        <p>Afin de finaliser son inscription, chaque participant est demandé à :

                                    <li>   Effectuer son paiement</li>
                                    <li>   Lire, approuver et signer le présent règlement ci-dessous.</li>
                                    <li>   Se munir de sa carte d’identité le jour du séminaire</li>
                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>


                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">I.2.   Accès aux formations/workshop et conférences :</h4>
                                     <p>Pour accéder aux formations et aux conférences, chaque membre doit impérativement :

                                        <li>    Porter son badge</li>
                                        <li>   Se munir de son bloc note et son stylo.</li>
                                        <li>    Respecter le dress code(un document vous sera communiqué pour avoir une idée sur le dresscode)</li>
                                        
                                        <b style="color: red">Remarque :</b> Un bloc note, un stylo et votre badge vous seront soumis dès votre arrivée sous forme de welcome pack.


                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">I.3.   Conférences et formations/workshop :</h4>
                                     <p>
                                        <li>   Vous devez respecter la durée des formations et des conférences</li>
                                        <li>   L’absence et le retard ne sont pas tolérés et le fait de ne pas assister à l’intégralité du programme auquel vous êtes affecté risque de vous faire perdre un de vos droits.</li>
                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                <i class="flaticon2-notification"></i> ARTICLE II : Respect des lieux
                            </div>
                        </div>
                        <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo5" data-parent="#accordionExample5">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">II.1.   Locaux :</h4>
                                        <p>
                                            <li>   Ce séminaire étant réservé aux Tunimateurs, il est strictement interdit de faire introduire des personnes étrangères aux mouvement à l’espace de l’hôtel.</li>
                                            <li>   Chaque participant doit veiller à la propreté des salles.</li>
                                            <li>   Tout incident doit être signalé à un responsable (Membre du comité organisateur).</li>
                                            <li>   Chaque membre s’engage à ne rien faire qui puisse porter préjudice de quelque façon à l’intégrité de l’hôtel.</li>
                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>


                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">II.2.   Hygiène et sécurité :</h4>
                                        <p>
                                           Il est strictement interdit de prendre son repas, de fumer ou d’introduire des boissons alcoolisées dans les salles de formations (Seules sont autorisées les petites collations )

                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>

                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">II.3.   Vol</h4>
                                        <p>
                                           Vous êtes amenés à bien garder et surveiller vos affaires, la Fondation n’assumera aucune conséquence en cas de vol.

                                    </p>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                <i class="flaticon2-chart"></i> ARTICLE III : DISCIPLINE
                            </div>
                        </div>
                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample5">
                            <div class="card-body">
                                 <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                     <h4 for="fname">III.1.     Sanctions</h4>
                                        <p>
                                

                                    Tout manquement du participant à l’une des prescriptions du présent règlement intérieur pourra faire l’objet d’une sanction.<br>
                                    Constitue une sanction toute mesure, autre que les observations verbales, prises par le comité organisateur, à la suite d’un agissement du participant considéré comme fautif, que cette mesure soit de nature à affecter immédiatement ou non la présence de l’intéressé dans le séminaire ou à mettre en cause la continuité de la formation qu’il reçoit.<br>
                                     
                                    Selon la gravité du manquement constaté, la sanction pourra consister :

                                    <li>   Soit un avertissement.</li>
                                    <li>   Soit un blâme ou un rappel à l’ordre.</li>
                                    <li>   Soit une mesure d’exclusion temporaire ou définitive du séminaire.</li>
                                    <li>   Soit un retrait du certificat</li>
                                     <br>
                                    Plus particulièrement, les raisons pouvant motiver l’exclusion temporaire ou définitive d’un stagiaire sont, par exemple :
                                    <br>
                                    <li>   Le non-respect récurrent des règles de bon fonctionnement du séminaire telles que définies par le présent règlement intérieur.</li>
                                    <li>   Toute perturbation du bon déroulement d’une formation/conférence</li>
                                    <li>   Le non-respect récurrent des consignes pédagogiques dispensées par les formateurs</li>
                                    <li>   Les comportements pénalisant la progression des autres participants</li>
                                    <li>   Les comportements portant atteinte au respect moral ou physique des participants ou des formateurs.</li>
                                </p>
                                <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Accordion-->
            </div>
                           
         </div>
         <div class="col-md-6">
            <div class="col-md-12">
                <h2 class="label" style="color: #d4af37" >Programme</h2>
            </div>
            <hr>
            <div class="col-md-12" style="border:1px solid #d4af37;padding-left:20px;margin:0 0 10px 0;">
                <h4 style="color: #d4af37" >Jour 1 <small> | 15/12/2019</small>  :</h4>
                <li><b>8h -> 16h :</b> <small>travel + Check in</small> </li>
                <li><b>16h  -> 19h  :</b> <small>Ouverture </small></li>
                <li><b>19h -> 21h :</b> <small>Diner </small> </li>
                <li><b>20h -> 22h :</b> <small>Réunion des présidents </small></li>
                <li><b>22h :</b> <small>Soirée  avec BAND KHRAFA </small> </li>
             

            </div>
                         <div class="col-md-12" style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                <h4 style="color: #d4af37">Jour 2 <small> | 16/12/2019 </small>  :</h4>
                   <li><b>07h -> 09h :</b> Petit Déjeuner </li>
                   <li><b>09h -> 12h :</b> Team Building </li>
                   <li><b>12h -> 14h :</b> Déjeuner </li>
                   <li><b>14h -> 15h45 :</b> Light up you carrier </li>
                   <li><b>15h45 -> 16h15 :</b> Pause</li>
                   <li><b>16h15 -> 18h:</b> All About Digital </li>
                   <li><b>18h -> 19h :</b> show </li>
                   <li><b>19h-> 21h:</b>   Diner</li>
                   <li><b>20h30 -> 22h :</b> Réunion des présidents</li> 
                   <li><b>22h :</b> Soirée avec BAND ALLIANZA  </li>  
 

             

            </div>
              <div class="col-md-12" style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                <h4 style="color: #d4af37">Jour 3</h4> 
                      <li><b> 07h -> 09h :</b> Petit déjeuner 
                       <li><b>09h -> 11h :</b> <br> 
                        Formation des présidents :  <b>Leadership</b>  <br>
                        Formation  offerte  par Evolve </li>
                      <li><b> 11h.30 - > 12h.30:</b> Clôture       </li>
                       <li><b>12h.30 :</b> Déjeuner + Check Out </li>


              </div>



        </div>
        <div class="col-md-12">
            <div class="form-group">
                        <label>Comment vous allez au TFM 5.0 </label>
                        <div class="kt-radio-inline">
                            <label class="kt-radio">
                                <input type="radio" name="bus" value="1"> En Bus
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="bus" value="0"> ma voiture personnelle
                                <span></span>
                            </label>
                        </div>
                        <span class="form-text text-muted">Les frais de participation sont toujours fixées à 150 DT</span>
                    </div>
            
        </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <label class="kt-checkbox">
                                        <input type="checkbox" required>  Je suis <b style="color: #d4af37"><?php echo $name ;?></b> Membre du club j'accepte le regelemnt de participation au TFM 5.0
                                        <span></span>
                                 </label><br>
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Annuler" />
                            <br>
                            <br>
                        </div>
                    </form>
                <?php } else { ?>


                        
                       <h4 class=""> Votre club n'est pas autorisé pour participer au TFM 5.0</h4> 
                        <li>Formation charte</li>
                        <li>Declaration du  bilan financier </li>
         

                <?php }?>
                </div>
            </div>

        </div>  



  
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end:: Content -->              
</div>
