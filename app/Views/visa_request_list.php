<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
                       
    <div class="row">
        <div class="col-12">
            <div class="card" >
                <div class="card-body" style="padding: 0.5rem !important;">
                    <div class="text-center">
                        <div class="row">

                            <?php  foreach ($statusCount as $key => $value) { ?>

                                <div class="col-md-2 col-xl-2">
                                    <div class="py-1">
                                        <h3>
                                        <?= $value['status_count'];  ?>
                                        </h3>
                                        <p class="text-uppercase mb-1 font-13 font-weight-medium"><?= $value['status_value'];  ?></p>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" >
                        <thead class="bg-light">
                        <tr>
                            <th class="font-weight-medium">Requested By</th>
                            <th class="font-weight-medium">Req Created Date</th>
                            <th class="font-weight-medium">Traveller Name</th>
                            <th class="font-weight-medium">Passport No</th>
                            <th class="font-weight-medium">Country Of Visit</th>
                            <th class="font-weight-medium">Visa Type</th>
                            <th class="font-weight-medium">Statue</th>
                            <th class="font-weight-medium">Req Updated Date</th>
                            <!-- <th class="font-weight-medium">Action</th> -->
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($visaList as $key => $value) { ?>
                           
                            <tr  onclick="window.location.href='<?= base_url()."edit_visa_request?visa_request_id=".$value['visa_request_id']; ?>'" >

                            <td><b><?php echo $value['client_name'];  ?>-<?php echo $value['branch'];  ?>-<?php echo $value['agency'];  ?></b></td>
                            <td><?php echo date('d-M-Y', strtotime($value['created_at']));  ?></td>
                            <td><?php echo $value['traveller_name'];  ?></td>
                            <td><?php echo $value['passport_no'];  ?></td>
                            <td><?php echo $value['country_name'];  ?></td>
                            <td><?php echo $value['visa_type_name'];  ?></td>
                            <td><?php echo $value['status_value'];  ?></td>
                            <td><?php echo date('d-M-Y', strtotime($value['updated_at']));  ?></td>
                            <!-- <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="<?= base_url()."edit_visa_request?visa_request_id=".$value['visa_request_id']; ?>"><i class="mdi mdi-eye-outline mr-2 text-muted font-18 vertical-middle"></i> View </a>
                                            <a class="dropdown-item" href="<?= base_url()."public"; ?>"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        </div>
                                    </div>
                            </td> -->

                            </>  
                             
                        <?php } ?>
                           
                               
                              

                           
                          

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end col -->
    </div>
 



    </div> <!-- container -->

</div> <!-- content -->

    



<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<script>
   

  $(document).ready(function() {
    $('#datatable-buttons').DataTable({
     
      
      "ordering": false
    });
  });
</script>