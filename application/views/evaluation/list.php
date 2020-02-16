
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/simplemde/simplemde.min.css">
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
                        <span class="title text-muted font-weight-bold">Projet</span>
                        <p class="text-muted"></p>
                      </div>
                      <div class="aside-compose"><a class="btn btn-primary btn-block" href="<?php echo base_url() ; ?>Project/addNew">Nouveau projet</a></div>
                      <div class="aside-nav collapse">
                        <ul class="nav">
                          <li><a href="<?php echo base_url() ; ?>Project/projectListingbyClub"><span class="icon"><i data-feather="inbox"></i></span>Nos projets<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                          <li c class="active"><a href="<?php echo base_url() ; ?>Evaluation/evaluationListing"><span class="icon"><i data-feather="mail"></i></span>Evaluations</a></li>

                        </ul>
                        
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-9 email-content">
                    <div class="email-head">
                      <div class="email-head-title d-flex align-items-center">
                        <span data-feather="edit" class="icon-md mr-2"></span>
                        Nos evaluations
                      </div>
                    </div>
                    <div class="container">
                      <!--begin: Datatable -->
        <table id="example" class="display" style="width:100%" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Titre</th>
                        <th>faite </th>
                        
                        

                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($evaluationRecords))
                    {
                        foreach($evaluationRecords as $record)
                        {
                    ?>
                    <tr>

                        
                   

                        <td><?php echo $record->evaluationId ?></td>
                        <td>  <?php echo $record->titre ?> </td>
                        <td> <?php if($record->name !=''){ ?> Le <b> <?php echo $record->doDate ?> </b> par <b> <?php echo $record->name ?></b><?php } ?> </td>

                 
                        <td class="text-center">



                        <?php if ($record->statut == 'En Attend') {
                            
                        ?>
                        <a href="<?php echo base_url() ?>Evaluation/doEvaluation/<?php echo $record->evaluationId ?>" >
                            <i data-feather="edit" width="20px" ></i>faire
                        </a>
                        <?php 
                        }else if($clubID == 0 ){
                          ?>
                            <a href="<?php echo base_url() ?>Evaluation/doEvaluationF/<?php echo $record->evaluationId ?>" c title="View">
                          <i data-feather="edit-2"></i>
                        </a>
                          <?php  
                        }

                        ?>

                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>

                    </div>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>


            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script>
     $(document).ready( function () {
    $('table').DataTable();
} );
  </script>



