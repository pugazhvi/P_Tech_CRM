<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<style>
    .status-option .status-box:hover, .status-option .status-box.active {
        background: #02a8b5;
        color: #fff;
        border-radius: 5px;
        box-shadow: 6px 5px 8px 0 #00000036;
        cursor: pointer;
    }
    .status-option .status-box:hover h3, .status-option .status-box.active h3{
        color: #fff;
    }
</style> 
<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
                       
    <div class="row">
        <div class="col-12">
            <div class="card" >
                <div class="card-body status-option" style="padding: 0.5rem !important;">
                    <div class="text-center">
                        <div class="row">
                        <?php  foreach ($statusCount as $key => $value) { ?>

                        <div class="col-md-2 col-xl-2 status">
                            <div class="py-1 status-box">
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
                            <th class="font-weight-medium">Branch</th>
                            <th class="font-weight-medium">Created Date</th>
                            <th class="font-weight-medium">Traveller</th>
                            <th class="font-weight-medium">Passport No</th>
                            <th class="font-weight-medium">Country</th>
                            <th class="font-weight-medium">Visa</th>
                            <th class="font-weight-medium">Statue</th>
                            <th class="font-weight-medium">Updated Date</th>
                            <!-- <th class="font-weight-medium">Action</th> -->
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($visaList as $key => $value) { ?>
                            <tr  onclick="window.location.href='<?= base_url()."view_visa_request?visa_request_id=".md5($value['visa_request_id']); ?>'" >
                            <td><b>UVS-<?php echo $value['branch_name'];  ?></b></td>
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
                                            <a class="dropdown-item" href="<?= base_url()."view_visa_request?visa_request_id=".$value['visa_request_id']; ?>"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>View Details</a>
                                        </div>
                                    </div>
                            </td> -->
                            </tr>    
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

  $(document).ready(function() {

        $('.status').on('click', function() {
            var statusValue = $(this).find('.font-weight-medium').text().trim();
            var table = $('#datatable-buttons').DataTable();
            
             // Remove active class from all other .status-box elements
             $('.status .status-box').removeClass('active');
           
            if (table.search() === statusValue) {
                $(this).find('.status-box').removeClass('active');
                // If current search term matches, clear the search
                table.search('').draw();
            } else {
                $(this).find('.status-box').addClass('active');
                // Otherwise, apply the new search term
                table.search(statusValue).draw();
            }
        });
     
     
    });
</script>