<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                                            
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                  Bilan | <?php echo $count ;  ?>                            </h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Gestion                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            List                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        
                </div>
                    
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                                    <a href="<?php echo base_url(); ?>Finance/addNew" class="btn kt-subheader__btn-primary">
                        Ajouter un bilan &nbsp;
                        <!--<i class="flaticon2-calendar-1"></i>-->
                    </a>
                                
                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>                        <!--<i class="flaticon2-plus"></i>-->
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Subheader -->                    
                    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Bilan
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
    <div class="kt-portlet__head-actions">
        <div class="dropdown dropdown-inline">
            
            <div class="dropdown-menu dropdown-menu-right">
                <ul class="kt-nav">
                    <li class="kt-nav__section kt-nav__section--first">
                        <span class="kt-nav__section-text">Choose an option</span>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon la la-print"></i>
                            <span class="kt-nav__link-text">Print</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon la la-copy"></i>
                            <span class="kt-nav__link-text">Copy</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                            <span class="kt-nav__link-text">Excel</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                            <span class="kt-nav__link-text">CSV</span>
                        </a>
                    </li>
                    <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                            <span class="kt-nav__link-text">PDF</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    &nbsp;  &nbsp;
</div>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              
                              <div class="input-group-btn">
                               
                              </div>
                            </div>
                        </form>
                    </div>
      </div>
    </div>

    <div class="kt-portlet__body">
            

        <div class="row">
    <div class="col-sm-12">
    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table id="example" class="display" style="width:100%" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Titre</th>
                        <th>date de création</th>
                        <th>fait par</th>

                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($financeRecords))
                    {
                        foreach($financeRecords as $record)
                        {
                    ?>
                    <tr>

                        
                   

                        <td><?php echo $record->financeid ?></td>
                        <td>  <?php echo $record->titre ?> </td>
                        <td>  <?php echo $record->createdDate ?> </td>

                        
                        <td>  <?php echo $record->name ?> </td>
                        <td class="text-center">


<!--
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url().'editOld/'.$record->financeid; ?>"><i class="la la-edit"></i> Modifier</a>
                                <a class="dropdown-item" href="<?= base_url().'login-history/'.$record->financeid; ?>"><i class="la la-print"></i> Historique</a>
                            </div>
                        </span>
                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                          <i class="la la-edit"></i>
                        </a>

-->
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
                
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    
    </div>
<!-- end:: Content -->  
            </div>

             <!-- begin::Global Config(global config for global JS sciprts) -->

        <!-- end::Global Config -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <!--end::Page Scripts -->


<script>
$('table').dataTable( {

  paginate: true,
  
} );
</script>
