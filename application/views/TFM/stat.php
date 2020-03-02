<div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"> Nombre de participant par region | <?php echo count($partParReg)?> region </h6>
                  <div class="dropdown mb-2">

                    
                  </div>
                </div>       
                <div class="d-flex flex-column">
                  
                   <table class="table-responsive" >
                      <thead>
                          <th>
                              Region
                          </th>
                          <th>
                              Nombre
                          </th>
                      </thead>
                      <tbody>
                          <?php foreach ($partParReg as $reg ) {
                          ?>
                          <tr>
                              <td>
                                  <?php echo $reg->city ?>
                              </td>
                              <td>
                                  <?php echo $reg->countPart ?>
                              </td>
                          </tr>
                          <?php
                          }?>
                      </tbody>

                  </table>

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

                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->