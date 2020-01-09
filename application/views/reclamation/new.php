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
                          <li><a href="<?php echo base_url() ; ?>Reclamation/reclamationListing/<?php echo $MyUserId ?>"><span class="icon"><i data-feather="inbox"></i></span>Boites<span class="badge badge-danger-muted text-white font-weight-bold float-right"><?php echo $count ?></span></a></li>
                          <li class=""><a href="#"><span class="icon"><i data-feather="mail"></i></span>Envoyées</a></li>

                        </ul>
                        
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-9 email-content">
                    <div class="email-head">
                      <div class="email-head-title d-flex align-items-center">
                        <span data-feather="edit" class="icon-md mr-2"></span>
                        New message
                      </div>
                    </div>
                    <form  action="<?php echo base_url() ?>Reclamation/addNewReclamation" method="post" role="form" enctype="multipart/form-data" >
                    <div class="email-compose-fields">
                      <div class="reciver">
                        <div class="form-group row py-0">
                          <label class="col-md-1 control-label">To:</label>
                          <div class="col-md-11">
                              <div class="form-group">
                                <select name="reciver" class="compose-multiple-select form-control w-100" multiple="multiple" size="1" >
                                  <?php foreach ($bureauExe as $b ) { ?>                         
                                    <option value="<?php echo $b->userId ?>"><small><?php echo $b->role ?> <?php echo $b->cellule ?> : <small> <b> <?php echo $b->Tname ?> </b> </option>
                                  <?php } ?>
                                </select>
                              </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="subject">
                        <div class="form-group row py-0">
                          <label class="col-md-1 control-label">Sujet</label>
                          <div class="col-md-11">
                            <input class="form-control" type="text" name="sujet" >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="email editor">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label sr-only" for="tinymceExample">Texte </label>
                          <textarea class="form-control" name="tinymce" id="tinymceExample" rows="10"></textarea>
                        </div>
                      </div>
                      <div class="email action-send">
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Send</button>
                            <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
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
