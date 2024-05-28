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

    #client_table_filter{
        /* margin-top: -36px; */
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
                            <?php $client_id= 0;?>
                            <?php if($client_id){ foreach ($statusCount as $key => $value) { ?>

                                <div class="col-md-2 col-xl-2 status">
                                    <div class="py-1 status-box ">
                                        <h3>
                                        <?= $value['status_count'];  ?>
                                        </h3>
                                        <p class="text-uppercase mb-1 font-13 font-weight-medium"><?= $value['status_value'];  ?></p>
                                    </div>
                                </div>

                            <?php } }else{ foreach ($statusCount as $key => $value) {?>
                                <div class="col-md-2 col-xl-2 status">
                                <div class="py-1 status-box ">
                                    <h3 class="<?= strtolower(str_replace(' ', '_', $value['status_value'])); ?>">0</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium"><?= $value['status_value'];  ?></p>
                                </div>
                            </div>
                            <?php }}?>

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
                    <div id="datatable-toolbar" class="d-flex justify-content-between align-items-center mb-3" style="margin-top: -37px;margin-left: 198px;">
                        <div id="categoryFilter" style="display: flex;">
                            <select class="form-control" id="client_list" style="width:auto;">
                                <option value="">Select Client</option>
                                <?php foreach ($client_list as $key => $value) { ?>
                                    <option class="dropdown-item " href="#" value="<?= $value['client_id'] ?>"><?= $value['org_name'] ?>-<?= $value['branch'] ?>-<?= $value['agency'] ?></option>
                                <?php } ?>
                            </select>
                            <div>
                            <label class="form-control" style="border:1px solid white;margin-left: 5px;" for=""><input style="height: 19px;width: 28px;" id="add_30days_old_dispatched_data" type="checkbox"> View Old Data</label>
                            </div>
                        </div>
                    </div>
                    <table id="client_table" class="table display table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" >
                        <thead class="bg-light">
                        <tr>
                            <th class="font-weight-medium">Client</th>
                            <th class="font-weight-medium">Created Date</th>
                            <th class="font-weight-medium">Traveller</th>
                            <th class="font-weight-medium">Passport No</th>
                            <th class="font-weight-medium">Country</th>
                            <th class="font-weight-medium">Visa</th>
                            <th class="font-weight-medium">Status</th>
                            <th class="font-weight-medium">Updated Date</th>
                            <!-- <th class="font-weight-medium">Action</th> -->
                        </tr>
                        </thead>

                        <tbody class="font-14" id="tbody">
                       
                            <?php foreach ($visaList as $key => $value) { ?>
                            
                                <!-- <tr  onclick="window.location.href='<?= base_url()."edit_visa_request?visa_request_id=".md5($value['visa_request_id']); ?>'" >

                                <td><b><?php echo $value['client_name'];  ?>-<?php echo $value['branch'];  ?>-<?php echo $value['agency'];  ?></b></td>
                                <td><?php echo date('d-M-Y', strtotime($value['created_at']));  ?></td>
                                <td><?php if($value['priority'] != null){ echo '<span class="mdi mdi-star" style="color: gold;font-size: 14px;"></span>';} echo $value['traveller_name'];  ?></td>
                                <td><?php echo $value['passport_no'];  ?></td>
                                <td><?php echo $value['country_name'];  ?></td>
                                <td><?php echo $value['visa_type_name'];  ?></td>
                                <td><?php echo $value['status_value'];  ?></td>
                                <td><?php echo date('d-M-Y', strtotime($value['updated_at']));  ?></td> -->


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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {

        $('.status').on('click', function() {
            console.log("1111111111111111111111");
            var statusValue = $(this).find('.font-weight-medium').text().trim();
            var table = $('#client_table').DataTable();
            
            

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
        
        // console.log($('#datatable-buttons_wrapper'));

    });



    $(document).ready(function () {
            // Initialize DataTable
            var table = $('#client_table').DataTable({
                dom: 'fBrtip',
                buttons: [
                    'copy', 'print', 'pdf',
                ]
            });

            $('.dt-buttons.btn-group.flex-wrap').after('<div class="row"></div>')

            $('#client_table_wrapper').find('.row').append($('.dt-buttons.btn-group.flex-wrap')[0]);
            $('#client_table_wrapper').find('.row').append($('#client_table_filter')[0]);
            $('.dt-buttons.btn-group.flex-wrap').addClass('col-6');
            $('#client_table_filter').addClass('col-6');
            setTimeout(() => {
                $('.dt-buttons.btn-group.flex-wrap').append($("#categoryFilter")[0]);
            }, 500);

            $('#client_list').change(function () {
                var client_id = $(this).val();
                console.log(client_id);
                var visaList = <?php echo json_encode($visaList); ?>; // Make sure $visaList is an array of objects
                var status_masters = <?php echo json_encode($status_master); ?>;

                var statusCount = <?php echo json_encode($statusCount_client_id); ?>;
                // Clear existing table content
                table.clear().draw();

                if (client_id) {
                    append_visa_request_list(client_id, table);
                    
                }else{
                    status_masters.forEach(function (status_master) {
                            function spacesToUnderscores(str) {
                                    return str.replace(/\s+/g, '_').toLowerCase();
                            }
                            $('.'+spacesToUnderscores(status_master.status_value)).html(0);
                        });
                }
            });

            var client_id = <?php echo json_encode(session()->get('client_id')); ?>;

            // console.log("client_id");
            // console.log(client_id);

            if(client_id){
                $('#client_list').val(client_id).trigger('change');
            }


        $('#add_30days_old_dispatched_data').click(function (params) {
                table.clear().draw();

            if($(this).prop('checked')){
                append_visa_request_list($('#client_list').val(), table,1);

            }else{

                append_visa_request_list($('#client_list').val(), table);
            }
        })


        function append_visa_request_list(client_id,table, dispatched=0) {
                var visaList = <?php echo json_encode($visaList); ?>; // Make sure $visaList is an array of objects
                var status_masters = <?php echo json_encode($status_master); ?>;

                var statusCount = <?php echo json_encode($statusCount_client_id); ?>;
                var filteredVisaList = visaList.filter(function (visa) {
                        var currentDate = new Date();
                        var createdAt = new Date(visa.created_at);
                        var thirtyDaysAgo = new Date(currentDate.setDate(currentDate.getDate() - 30));
                        if (dispatched == 0) {
                            if (visa.status_value == 'Dispatched' && createdAt < thirtyDaysAgo ) {
                                
                            }else{
                                return visa.client_id == client_id ;
                            }
                        } else {
                            return visa.client_id == client_id ;
                        }
                    });

                    var filteredStatusCountList = statusCount.filter(function (status_count) {
                        return status_count.client_id == client_id;
                    });
                    // Loop through filtered data and add rows to the DataTable
                    filteredVisaList.forEach(function (visa) {
                        var priorityIcon = visa.priority !== null ? '<span class="mdi mdi-star" style="color: gold; font-size: 14px;"></span> ' : '';
                        var formattedDate = moment(visa.created_at).format('DD-MMM-YYYY');
                        var row = [
                            visa.client_name + '-' + visa.branch + '-' + visa.agency,
                            formattedDate,
                            priorityIcon + visa.traveller_name,
                            visa.passport_no,
                            visa.country_name,
                            visa.visa_type_name,
                            visa.status_value,
                            moment(visa.updated_at).format('DD-MMM-YYYY')
                        ];
                        var rowNode = table.row.add(row).draw(false).node();
                        // Add class to the row
                        $(rowNode).addClass('custom-row-class');
                        // Add onclick event
                        $(rowNode).attr('onclick', 'window.location.href=\'<?= base_url()."edit_visa_request?visa_request_id="; ?>' + CryptoJS.MD5(visa.visa_request_id).toString() + '\'');
                    });

                    if (filteredStatusCountList.length) {

                        status_masters.forEach(function (status_master) {
                            function spacesToUnderscores(str) {
                                    return str.replace(/\s+/g, '_').toLowerCase();
                            }
                            $('.'+spacesToUnderscores(status_master.status_value)).html(0);
                        });
                        filteredStatusCountList.forEach(function (status_count) {
                            console.log("status_count");
                            function spacesToUnderscores(str) {
                                    return str.replace(/\s+/g, '_').toLowerCase();
                            }
                            $('.'+spacesToUnderscores(status_count.status_value)).html(status_count.status_count);
                        });
                    }else{
                        
                        status_masters.forEach(function (status_master) {
                            function spacesToUnderscores(str) {
                                    return str.replace(/\s+/g, '_').toLowerCase();
                            }
                            $('.'+spacesToUnderscores(status_master.status_value)).html(0);
                        });
                    }
        }
    })

</script>

