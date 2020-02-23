 <?php $this->load->helper("form"); 

         function age($date) {
        $age = date('Y') - date('Y', strtotime($date));
        if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
        }
        return $age;
}

     if (age($pres->birthday) > 18  || $pres->cin != ''  ){ ?>
                    <form role="form" id="addproject" action="<?php echo base_url()?>TFM/partanTfm" method="post" role="form"  enctype="multipart/form-data">


            <style type="text/css">
                   .alligator-turtle {
              object-fit: cover;
              object-position: 50% 50%;

              width: 100%;
              height: 250px;
            }</style>

<div class="row" >



<div class="card col-md-12" >
    <!-- form start -->
   
        <div class=card-header>
                   <img src="https://tunivisions.link/uploads/projet/COVER.jpg" class="alligator-turtle" >
        </div>
        <div class=card-body>
                        <div class="col-md-12">
                         <?php if($role == 1 || $SA == 1  ){ ?>
                           
                                <h4 >Club</h4>
                                <div class="col-md-12">
                                    <label> Mon club est fondé le </label>
                                    <input type="date" name="dateFonde" class="form-control" value="<?php echo $auto->birthday ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label> Email du club  </label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $auto->facebook ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label> Lien page facebook du club </label>
                                    <input type="url" name="facebook" class="form-control" value="<?php echo $auto->email ?>" required>
                                </div>
                           
                            <?php } ?>
                            </div>
                            <div class="col-md-12">
                                <label> J'utilise un smartphone  </label>
                                <select class="form-control" name="sys">
                                    <option value="Android" >Android</option>
                                    <option value="Apple" >Apple</option>
                                    <option value="Autre" >Autre</option>
                                </select>
                            </div>

<div class="row">
                             <div class="col-md-12">
                                <br><br>
                               <h2  > Formulaire d'inscription TFM 2020 </h2>
                                <br><br>
                            </div>


                            <!--programe -->
                            <div class="col-md-6">
            <div class="col-md-12">
                <h2 class="label"  >Programme</h2>
            </div>
            <hr>
            <div class="col-md-12" style="border:1px solid #d4af37;padding-left:20px;margin:0 0 10px 0;">
                <h4  >Jour 1 <small> </small>  :</h4>
                <hr>
                    <li><b>15h :</b>cérémonie d'ouverture sous la thématique : la jeunesse et les relations diplomatique 
                    <li><b>18h → 19h :</b> Show
                    <li><b>19h → 21h :</b> Dîner
                    <li><b>20h :</b> Réunion des présidents
                    <li><b>21h :</b> Départ vers  l’écovillage
                    <li><b>22h :</b> Tunivisions experience avec rebellion show case 

             

            </div>
                         <div class="col-md-12" style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                <h4 >Jour 2 <small> </small>  :</h4>
                   <hr>
                    <li><b>7h → 9h :</b> Petit déjeuner
                    <li><b>9h30 :</b> Départ vers l’eniso 
                    <li><b>10h30 :</b> Arrivé
                    <li><b>11h→13h :</b>
                        <div  style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                    <h4>Forum d'entreprise ‘OMNIPRENEUR’</h4>
                    <b>1 - exposition des startups</b> 
                    <br><b>2 - Sharing desk </b>
                    <br><b>3 - Compétition Tunivisions prize</b>
                    <br><h4>panels de discussions :</h4>
                    <b>1 - how to startup !</b>
                    <br><b>2 -les portes de la carriere</b> 

                    <br><b>3 - formations pour les VP RH </b>
                    </div>

                    <li><b>13h →14h :</b>
                    Déjeuner
                    pause musicale
                    Announcement du startup gagnante


                    <li><b>14h →17h :</b> <h4>cycle de Formation</h4>
                        <div  style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                            Créer votre entreprise pourquoi pas ?
                            <br>MORAINE
                            <br>Piching 
                            <br>BMC (business model canvas)
                            <br>Rédaction CV
                            <br>leadership
                            <br>travail en équipe
                            <br>innovation créativité
                            <br>communication
                            <br>estime de soi
                            <br>L'Intelligence Collective
                            <br>Personal Branding
                            <br>Vision stratégique à la vie professionnelle
                            <br>Expression vocale corporelle
                            <br>Atelier Design Thinking*
                            <br>Comment financer votre projet?
                            <br>Mieux se connaitre pour mieux manager
                            <br>Marketing de soi
                            <br>Réalisez vos objectifs avec la PNL
                            <br>Intelligence Emotionnelle
                            <br>statut étudiant entrepreneur

                        </div>




                    <li><b>17h :</b> Retour à l’hôtel
                    <li><b>19h→21h :</b></b> Dîner
                    <li><b>20h :</b> Réunion des présidents
                    <li><b>21h :</b> Départ vers  l’écovillage
                    <li><b>22h : </b>Tunivisions experience avec Alianza 

                     

                                 

                                </div>
                                  <div class="col-md-12" style="border:1px solid #d4af37 ;padding-left:20px;margin:0 0 10px 0;">
                                    <h4 style="color: #d4af37">Jour 3</h4> 
                                    <hr>
                                          
                    <li><b>7h →9h :</b>Petit déjeuner
                    <li><b>9h→10h :</b> Check out
                    <li><b>10h :</b> Départ à l’écovillage 
                    <li><b>11h→14h30 :</b>
                    Team building
                    Déjeuner
                    <li><b>15h :</b> Départ



              </div>



        </div>
        <div>



        </div>


                            <div class="col-md-6">


                                <div class="col-md-12">
                                     <h3   for="fname">Reglement Interieur TFM 2020 </h3>
                                </div>
                                <hr>


                                <div class="col-md-12">
                                     <p for="fname"><br><b>Chers participants,</b><br><br>
                                        Afin d’assurer le bon déroulement de notre séminaire TFM 2020 comportant ainsi 1200 participants, nous avons procédés à la mise en place de ce règlement qui a pour but de favoriser toutes les conditions favorables à la bonne conduite de ce séminaire. Nous vous invitons à prendre conscience du présent règlement qui impose le respect des lieux, des normes de sécurité, des relations entre les Tunimateurs  et celui des formateurs. Les articles du présent règlement s’appliquent à chaque participant et doivent être lus et approuvés.
                                        </p>
                                </div>

                <div class="kt-portlet__body">
                <!--begin::Accordion-->
                 <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE I :  Introduction au règlement intérieur et processus d’inscription 


                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
               
                                  
                                    
                                        
                                        <p>
                                            Le présent règlement est établi par Tunivisions Foundation pour assurer le bon déroulement du séminaire. Il s’applique à tous les tunimateurs et ex-tunimateurs participants et ce pour toute la durée du séminaire. <br>
                                            Afin de participer au TFM , le membre doit : 
                                            <li>Remplir le formulaire d’inscription sur T-Link</li>
                                            <li>Effectuer le paiement des frais </li>
                                            <li>Lire, approuver et signer le présent règlement ci-dessous</li>
                                            Tunivisions Foundation a le droit de refuser une demande de participation dans les cas notés ci-dessous : <br>
                                            <li>Inactivité/indiscipline du membre ( Note T-Link ) </li>
                                            <li>La non validation de la formation Charte Tunivisions</li>
                                            <li>Paiement après la date limite</li><br>
                                            <b style="color: red">Remarque : Tout paiement après la date limite exige un frais supplémentaire qui est déterminé par le bureau national et dépend de la durée du retard 
                                            </b>
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

                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE II :  Règles de bases


                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne5" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
                                        
                                        <p>
                                            Pendant toute la durée du séminaire , chaque participant doit impérativement : 
<li>Être présent dans tous les activités du programme. Tout membre absent sera sanctionné sévèrement. </li>
<li>Respecter le dress code dans les conférences/formations/cérémonies.</li>
<li>Porter toujours son badge dans toutes les activités. </li>
<li>Respecter tous les autres participants.</li>
<li>Respecter les consignes de la comité d’organisation.</li> 
<li>Mettre en considération les règles de sécurité et discipline mise par l’administration de l’hôtel. </li>

                                                

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


                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE III :   Règles du teambuilding et des conférences/formations/workshops


                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
                                        
                                            Pour accéder aux formations et aux conférences, chaque membre est demandé à : 
    <li>Respecter la durée de la formation/conférence</li>
    <li>e munir de son badge , son bloc note et son stylo</li>
    <li>Respecter les consignes pédagogiques dispensées par les formateurs</li><br>
    <b style="color: red" > Remarque :Un bloc note, un stylo et votre badge vous seront soumis dès votre arrivée sous forme de welcome pack. 
    </b><br>
                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>




                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE III :   Sécurité



                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >

                                        <li>Vous êtes amenés à bien garder et surveiller vos affaires, la Fondation n’assumera aucune conséquence en cas de vol.</li>
                                        <li>Chaque participant doit veiller à la propreté des salles.</li>
                                        <li>Tout incident doit être signalé à un responsable (Membre du comité organisateur).</li>
                                        <li>Chaque participant s’engage à ne rien faire qui puisse porter préjudice de quelque façon à l’intégrité de l’hôtel.</li>


                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>

                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE IV :   Discipline 



                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >

                                        Il est formellement interdit aux participants : 
    <li>D’introduire des boissons alcoolisées dans l’hôtel.</li>
    <li>De se présenter aux formations en état d’ébriété.</li>
    <li>De prendre son repas, de fumer ou d’introduire des  boissons alcoolisées dans les salles  de formations.</li>
    <li>De faire introduire des personnes étrangères au mouvement à l’espace de l’hôtel.</li>



                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>


                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE V :   Discipline en dehors de l’hôtel




                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >

  Lors des activités en dehors du lieu de logement, chaque participant est demandé de :<br>
<li>Respecter le temps du départ et le temps du retour au lieu de logement.</li>
<li>Ne pas porter des boissons alcoolisés.</li>
<li>Porter toujours son badge et signaler tout incident à un responsable (Membre du comité organisateur)</li>

<br><b style="color: red">NB : Toute tentative de s'abstenir à une activité en dehors de l’hôtel peut être sanctionné par un blâme/exclusion temporaire du séminaire.</b>



                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>


                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE VII :   Sanctions 




                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
    Tout manquement du participant à l’une des prescriptions du présent règlement intérieur pourra faire l’objet d’une sanction.<br>
    Constitue une sanction toute mesure, autre que les observations verbales, prises par le comité organisateur, à la suite d’un agissement du participant considéré comme fautif, que cette mesure soit de nature à affecter immédiatement ou non la présence de l’intéressé dans le séminaire ou à mettre en cause la continuité de la formation qu’il reçoit.

    <br>
    Le comité d’organisation peut juger que le comportement du participant ne correspond pas à l’exécution normale du séminaire et constitue une faute.<br>
    Peuvent notamment être considérés comme fautifs :<br>
    <li>le non-respect des règles de discipline fixées par le règlement intérieur ou par la comité organisateur au cours du séminaire.</li>
    <li>le refus de se conformer à un ordre de la comité organisateur ;</li>
    <li>Les comportements portant atteinte au respect moral ou physique des participants ou des formateurs.</li>
    <li>Toute perturbation du bon déroulement d’une formation/conférence</li>
    <li>Le non-respect récurrent des consignes pédagogiques dispensées par les formateurs</li>


    Selon la gravité du manquement constaté, la sanction pourra consister :
    <li>Soit un retrait des points T-Link du son compte.</li>
    <li>Soit un avertissement verbal.</li>
    <li>Soit un blâme.</li>
    <li>Soit une mesure d’exclusion temporaire ou définitive du séminaire.</li>
    <li>Soit un retrait du certificat de participation.</li>






                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
             






            </div>


            <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample6">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                                <i class="flaticon-pie-chart-1"></i> ARTICLE VIII :   Dress code




                            </div>
                        </div>
                        <div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6" style="">
                            <div class="card-body">
                                <div class="col-md-12" style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >
   


Tout participant est obligé de porter une tenue professionnelle pendant la cérémonie d’ouverture<br>
Les tenues sportives ne sont pas tolérés et peuvent être une raison d’un avertissement/blâme

<br>


                                    <label class="kt-checkbox">
                                        <input type="checkbox" required>  Lu et approuvé
                                        <span></span>
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>






            </div>

                           
         </div>

         <div class="col-md-12">
            <div class="form-group">
                        <label>Comment vous allez au TFM 2020 </label>
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
                        <span class="form-text text-muted">Les frais de participation sont toujours fixées à 150 DT </span>
                    </div>
            
        </div>
                               
                            <br>
                            <br>
                        </div>


    </div>
        <div class=card-footer>
                 <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Annuler" />
        </div>    
</div>

</div>
<?php  } else { echo "Inscription Intedite ! ";} ?>