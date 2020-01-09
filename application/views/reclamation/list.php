<link rel="stylesheet" href="<?php echo base_url() ; ?>assets/vendors/select2/select2.min.css">
  <!-- plugin css for this page -->
<link rel="stylesheet" href="<?php echo base_url() ; ?>assets/vendors/simplemde/simplemde.min.css">
  <!-- end plugin css for this page -->

        
        <!-- partial -->

        <div class="row inbox-wrapper">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 email-aside border-lg-right">
                    <div class="aside-content">
                      <div class="aside-header">
                        <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                          <span class="icon"><i data-feather="chevron-down"></i></span>
                        </button>
                        <span class="title text-muted font-weight-bold">Reclamation</span>
                        <p class="text-muted"></p>
                      </div>
                      <div class="aside-compose"><a class="btn btn-primary btn-block" href="<?php echo base_url() ; ?>Reclamation/addNew">Nouvelle recclamation</a></div>
                      <div class="aside-nav collapse">
                        <ul class="nav">
                          <li class="active"><a href="<?php echo base_url() ; ?>Reclamation/reclamationListing/<?php echo $MyUserId ?>"><span class="icon"><i data-feather="inbox"></i></span>Boites<span class="badge badge-danger-muted text-white font-weight-bold float-right"><?php echo $count ?></span></a></li>
                          <li class=""><a href="#"><span class="icon"><i data-feather="mail"></i></span>Envoyées</a></li>

                        </ul>
                        <span class="title">Labels</span>
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-9 email-content">
                    <div class="email-inbox-header">
                      <div class="row align-items-center">
                        <div class="col-lg-6">
                          <div class="email-title mb-2 mb-md-0"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg></span> Boite <span class="new-messages">(<?php echo count($reclamationRecords); ?> new messages)</span> </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="email-search">
                            <div class="input-group input-search">
                              <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                              <button class="btn btn-outline-secondary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="email-list" style="height: 650px  ; overflow: auto">

                    <?php
                       if(!empty($reclamationRecords))
                    {
                        foreach($reclamationRecords as $record)
                        {
                    ?>
                      <div class="email-list-item email-list-item<?php if($record->staut == 'En Attend'){ echo'--unread' ;} ?>" >
                        <div class="email-list-actions">
                          <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            <i class="input-frame"></i></label>
                          </div>
                          <a class="favorite" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></a>
                        </div>
                        <a href="<?php echo base_url() ;?>Reclamation/editreclam/<?php echo $record->reclamId ; ?>" class="email-list-detail">
                          <div>
                            <span class="from"><?php echo $record->Sujet ?></span>
                            <p class="msg"><?php echo $record->faitpar ?> <small><br> Club Tunivisions <?php echo $record->clubName ?></p>
                          </div>
                          <span class="date">
                            <span class="icon"> </span>
                            <?php echo $record->createdDate  ?>
                          </span>
                        </a>
                      </div>
                      <?php
                       } } ?>
                      
                      
                      
                      
                      
                      </div>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>

      


<script src="<?php echo base_url() ; ?>assets/vendors/select2/select2.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/vendors/simplemde/simplemde.min.js"></script>
 

  <!-- plugin js for this page -->
  <script src="<?php echo base_url() ; ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src=".<?php echo base_url() ; ?>assets/vendors/simplemde/simplemde.min.js"></script>
  <script src="<?php echo base_url() ; ?>assets/vendors/ace-builds/src-min/ace.js"></script>
  <script src="<?php echo base_url() ; ?>assets/vendors/ace-builds/src-min/theme-chaos.js"></script>
  <!-- end plugin js for this page -->



 <script type="text/javascript" >
   
   $(function() {
      'use strict'
      if ($(".compose-multiple-select").length) {
        $(".compose-multiple-select").select2();
      }
    });


   $(function() {
  'use strict';

  //Tinymce editor
    if ($("#tinymceExample").length) {
      tinymce.init({
        selector: '#tinymceExample',
        height: 400,
        theme: 'silver',
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
        image_advtab: true,
        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
          },
          {
            title: 'Test template 2',
            content: 'Test 2'
          }
        ],
        content_css: []
      });
    }
    
  });





</script>
