<div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"> Nombre de participant par region | <?php echo count($partParReg)?> region </h6>
                  <div class="dropdown mb-2">

                    
                  </div>
                </div>       
                <div class="d-flex flex-column">
                  
                   <table class="table dataTable no-footer" style="width: cover" >
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Classement par sexe </h6>
                </div>
                  <div class="table-responsive">
                            <canvas id="chartjsPie"></canvas>
                            
                </div>
                 <div class="table-responsive">
                          
                            <canvas id="chartjsPie"></canvas>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->








<div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"> Nombre de participant par region | <?php echo count($partParReg)?> region </h6>
                  <div class="dropdown mb-2">

                    
                  </div>
                </div>       
                <div class="d-flex flex-column">
                  
                   <table class="table dataTable no-footer" style="width: cover" >
                     <thead>
                                  <th>
                                      Region
                                  </th>
                                  <th>
                                      Homme
                                  </th>
                                  <th>
                                      Femme
                                  </th>
                                  <th>
                                      nombre
                                  </th>
                              </thead>
                              <tbody>
                                  <?php foreach ($partParclub as $reg ) {
                                  ?>
                                  <tr>
                                      <td>
                                          <?php echo $reg->name ?>
                                      </td>
                                      <td>
                                          <?php echo $reg->homme ?>
                                      </td>
                                     <td>
                                          <?php echo $reg->femme ?>
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Taux de paiement </h6>
                </div>
                <div class="table-responsive" style="height:600px ;overflow:auto;">
                            <canvas id="chartjsGroupedBar"></canvas>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->













                    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
      $(document).ready( function () {
    $('table').DataTable();
} );
  </script>


  


  <script defer src="<?php echo base_url() ?>assets/vendors/chartjs/Chart.min.js"></script>

  <script  >
    $(function() {
  'use strict';

     if($('#chartjsPie').length) {
        new Chart($('#chartjsPie'), {
          type: 'pie',
          data: {
            labels: ["Homme", "Femme"],
            datasets: [{
              label: "Sexe (H/F)",
              backgroundColor: ["#7ee5e5","#f77eb9"],
              data: [<?php echo $partParsexeH->hommec ;?>,<?php echo $partParsexeF->femmec ;?>]
            }]
          }
        });
      }




     

    });
  </script>





