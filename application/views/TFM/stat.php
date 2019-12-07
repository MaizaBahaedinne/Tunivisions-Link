<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<style type="text/css">
     .container {
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
}

.chart {
  width: auto; 
  height:  auto;
  
}
.row {
  margin:0 !important;
}
</style>


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											
<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">Statistique TFM 5</h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <span class="kt-subheader__desc"></span>

          
            <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
               

                                   
                

            </div>
        </div>
    </div>
</div>
<!-- end:: Content Head -->					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Dashboard 1-->
<div class="row">
    <div class="col-md-4">
    <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   Nombre de participant par region :  <?php echo count($partParReg)?>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                
            </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="container">
        <table class = "display">
            <thead>
                <th>
                    Region
                </th>
                <th>
                    nombre
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
<div class="col-md-8">
    <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   Nombre de participant par region 
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                
            </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="container">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                      var data = new google.visualization.DataTable();
                      data.addColumn('string', 'Region');
                      data.addColumn('number', 'Nombre de participant');

                      data.addRows([
                     <?php foreach ($partParReg as $reg ) {
                                    ?>
                        ['<?php echo $reg->city ?>' , <?php echo $reg->countPart ?>],
                                        <?php
                }?>
                        ]);

                      var options = {
                        title: '',

                       
                      };

                      var chart = new google.visualization.ColumnChart(
                        document.getElementById('chart_div'));

                      chart.draw(data, options);
    }
    </script>
    <div id="chart_div" class="chart"></div>
        </div>
    </div>
    </div>
</div>



   

<!--End::Row-->
<!--End::Dashboard 1-->	</div>


<!--begin::Dashboard 2--> 

<div class="row">
    <div class="col-md-4">
    <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   Nombre de participant par Club :  <?php echo count($partParclub)?>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                
            </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="container">
        <table class = "display">
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
<div class="col-md-8">
    <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   Nombre de participant par region 
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                
            </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="container">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                      var data = new google.visualization.DataTable();
                      data.addColumn('string', 'club');
                      data.addColumn('number', 'Nombre de participant');

                      data.addRows([
                     <?php foreach ($partParclub as $reg ) {
                                    ?>
                        ['<?php echo $reg->name ?>' , <?php echo $reg->countPart ?>],
                                        <?php
                }?>
                        ]);

                      var options = {
                        title: '',

                       
                      };

                      var chart = new google.visualization.ColumnChart(
                        document.getElementById('chart_div2'));

                      chart.draw(data, options);
    }
    </script>
    <div id="chart_div2" class="chart"></div>
        </div>
    </div>
    </div>
</div>



   

<!--End::Row-->
<!--End::Dashboard 1--> </div>






<!-- end:: Content -->				</div>
</div>

<script>
$('table').dataTable( {

  paginate: true,
  
} );
</script>
