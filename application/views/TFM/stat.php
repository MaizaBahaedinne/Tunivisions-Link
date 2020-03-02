<div class="row">
          <div class="col-lg-5 col-xl-6 grid-margin grid-margin-xl-0 stretch-card">
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
          <div class="col-lg-7 col-xl-6 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Classement des clubs </h6>
                </div>
                <div class="table-responsive" style="height:600px ;overflow:auto;">


                   
                     
                          <h6 class="card-title">Donut chart</h6>
                          <div id="apexDonut"></div>
                     
    


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


  <script defer src="<?php echo base_url() ?>assets/vendors/apexcharts/apexcharts.min.js"></script>


  <script type="text/javascript">
 

  $(function() {
  'use strict';
    var chart = new ApexCharts(document.querySelector("#apexDonut"), options);
        
        chart.render();
        // Apex Donut chart start
        
        // Apex Pie chart end
        var options = {
          chart: {
            height: 300,
            type: "pie"
          },
          colors: ["#f77eb9", "#7ee5e5","#4d8af0","#fbbc06"],
          legend: {
            position: 'top',
            horizontalAlign: 'center'
          },
          stroke: {
            colors: ['rgba(0,0,0,0)']
          },
          dataLabels: {
            enabled: false
          },
          series: [44, 55, 13, 33]
        };
        });
  </script>