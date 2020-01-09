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
                          <li class="active"><a href="<?php echo base_url() ; ?>Reclamation/reclamationListing/<?php echo $MyUserId ?>"><span class="icon"><i data-feather="inbox"></i></span>Boites<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                          <li class=""><a href="#"><span class="icon"><i data-feather="mail"></i></span>Envoyées</a></li>

                        </ul>
                        <span class="title">Labels</span>
                        
                      </div>
                    </div>
                  </div>
                  
           

                    
                    <div class="col-lg-9 email-content">
                      <div class="email-head">
                        <div class="email-head-subject">
                          <div class="title d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                              <a class="active" href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star text-primary-muted"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span></a> 
                              <span><?php echo  $reclamRecords->Sujet ?></span>
                            </div>
                            <div class="icons">
                              <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share text-muted hover-primary-muted" data-toggle="tooltip" title="" data-original-title="Forward"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg></a>
                              <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer text-muted" data-toggle="tooltip" title="" data-original-title="Print"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg></a>
                              <a href="#" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash text-muted" data-toggle="tooltip" title="" data-original-title="Delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <img src="<?php echo base_url() ; ?>uploads/avatar/<?php echo $reclamRecords->avatar ?>" alt="Avatar" class="rounded-circle user-avatar-md">
                            </div>
                            <div class="sender d-flex align-items-center">
                              <a href="#"><?php echo $reclamRecords->faitpar  ?></a> <span>à</span><a href="<?php echo base_url() ?>">moi</a>
                              <div class="actions dropdown">
                                <a class="icon" href="#" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="#">Mark as read</a>
                                  <a class="dropdown-item" href="#">Mark as unread</a>
                                  <a class="dropdown-item" href="#">Spam</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item text-danger" href="#">Delete</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="date"><?php echo $reclamRecords->createdDate  ?></div>
                        </div>
                      </div>
                      <div class="email-body">
                        <?php echo $reclamRecords->Text ; ?>
                      </div>
                      <div class="email-attachments">
                        <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Réponse</label>
                                       <textarea class="form-control" id="summernote" name="response" rows="20"></textarea>
                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#summernote').summernote({
                                        height: "500px"
                                    });
                                });
                                var postForm = function() {
                                    var content = $('textarea[name="description"]').html($('#summernote').code());
                                }
                                </script>
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
