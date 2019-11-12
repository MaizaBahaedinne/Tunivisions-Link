<style>
  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 100%;
    max-height: 100%;
    margin: 0 auto;
  }

  .fc-title{
    color : white ;
  }

</style>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->

<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">

</div>
    <div class="row">
    <div class="col-xl-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Les reservations 
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <link href='../packages/core/main.css' rel='stylesheet' />
                <link href='<?php echo base_url() ?>vendor/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
                <link href='<?php echo base_url() ?>vendor/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
                <link href='<?php echo base_url() ?>vendor/fullcalendar/packages/list/main.css' rel='stylesheet' />
                <script src='<?php echo base_url() ?>vendor/fullcalendar/packages/core/main.js'></script>
                <script src='<?php echo base_url() ?>vendor/fullcalendar/packages/interaction/main.js'></script>
                <script src='<?php echo base_url() ?>vendor/fullcalendar/packages/daygrid/main.js'></script>
                <script src='<?php echo base_url() ?>vendor/fullcalendar/packages/timegrid/main.js'></script>
                <script src='<?php echo base_url() ?>vendor/fullcalendar/packages/list/main.js'></script>

        <script>

          document.addEventListener('DOMContentLoaded', function() {
            var initialLocaleCode = 'fr';
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
              plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
              height: '',
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
              },
              defaultView: 'timeGridWeek',
              defaultDate: new Date(),
              locale: initialLocaleCode,
              navLinks: true, // can click day/week names to navigate views
              editable: false,
              eventLimit: true, // allow "more" link when too many events
              events: [
              <?php foreach ($reservationRecords as $record ) { ?>
                
                {
                  title: '<?php echo $record->type   ?> -  club Tunivisions <?php echo $record->clubName ?> ',
                  start: '<?php echo $record->startDate ?> <?php echo $record->inTime ?>',
                  end:  '<?php echo $record->startDate ?> <?php echo $record->outTime ?>',
                  color: 'Lavender',   // an option!
                  borderColor : 'red',
                },

               <?php                
                }
               ?> 
                
              ]
            });

            calendar.render();
          });

        </script>




  <div id='calendar-container'>
    <div id='calendar'></div>
  </div>



        

        </div>
        <!--end::Portlet-->

    </div>
  </div>
<!-- end:: Content -->              
</div>
  
</div>
</div>













































        



