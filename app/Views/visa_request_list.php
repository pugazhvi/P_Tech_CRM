<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<style>
    #client_table tbody tr:hover {
        background-color: #cce5ff !important; /* Light blue color */
        cursor: pointer;
    }


    @media screen and (max-width: 767px) {
                .visa_status_count_view {
                    display: none; /* Hide the div on smaller screens */
                }
            }
    @media screen and (max-width: 767px) {
        
    }
    .select2-container .select2-selection--single{
        height: 36px;
        border:1px solid #ced4da;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        line-height: 36px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        top:4px;
    }
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
    

          
    
    <div class="row visa_status_count_view">
        <div class="col-12">
            <div class="card" >
                <div class="card-body status-option" style="padding: 0.5rem !important;">
                    <div class="text-center">
                        <div class="row">
                           <?php foreach ($status_master as $key => $value) {?>
                                <div class="col-md-2 col-xl-2 status">
                                <div class="py-1 status-box ">
                                    <h3 class="<?= strtolower(str_replace(' ', '_', $value['status_value'])); ?>">0</h3>
                                    <p class="text-uppercase mb-1 font-13 font-weight-medium"><?= $value['status_value'];  ?></p>
                                </div>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="client_list_old_data">

        <div id="categoryFilter" style="display: flex;width: 250px;">
            <select class="select2-dropdown" id="client_list" style="width:auto;">
                <option value="">Select Agent</option>
                <?php foreach ($client_list as $key => $value) { ?>
                    <option class="dropdown-item " href="#" value="<?= $value['client_id'] ?>"><?= $value['agency'] ?>-<?= $value['branch'] ?></option>
                <?php } ?>
            </select>
            
        </div>
        <div id="categoryFilter_11">
            <label class="form-control" style="border:1px solid white;margin-left: 5px;display:flex;" for=""><input style="height: 19px;width: 28px;" id="add_30days_old_dispatched_data" type="checkbox"><span> Include Archived Data</span></label>
        </div>
    </div>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body card-body-test">
                    <table id="client_table" class="table display table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" >
                        <thead class="bg-light">
                        <tr>
                            <th class="font-weight-medium">Agent</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
<script>

    $(document).ready(function() {
        $('.select2-dropdown').select2();

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

            $('.card-body-test').prepend($('#client_list_old_data'))

            $('#client_table_wrapper').find('.row').append($('.dt-buttons.btn-group.flex-wrap')[0]);
            $('#client_table_wrapper').find('.row').append($('#client_table_filter')[0]);
            $('.dt-buttons.btn-group.flex-wrap').addClass('col-3');
            $('.dt-buttons.btn-group.flex-wrap').css('display','contents');
            $('#client_table_filter').addClass('col-9');

            var client_list_ajax = '';
            var status_masters = <?php echo json_encode($status_master); ?>;

            $('#client_list').change(function () {
                var client_id = $(this).val();
                table.clear().draw();

                console.log("client_id");
                console.log(client_id);
                if(client_id){
                    $.ajax({
                        url: '<?php echo base_url() ?>getClientList/'+client_id, 
                        type: 'GET', // HTTP method
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response);
                            client_list_ajax= response;
                            if($('#add_30days_old_dispatched_data').prop('checked')){
                                append_visa_request_list(client_id, table,1);
                            }else{
                                append_visa_request_list(client_id, table);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', status, error);
                        }
                    });
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
                    var visaList = client_list_ajax; 

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
                        // Loop through filtered data and add rows to the DataTable
                        var docs_received = 0;
                        var submission_pending = 0;
                        var docs_pending = 0;
                        var submitted = 0;
                        var collected = 0;
                        var dispatched = 0;

                        var statusNames = ["docs_received", "submission_pending", "docs_pending", "submitted", "collected", "dispatched"];
                        var statusValues = [0, 0, 0, 0, 0, 0]; // Initialize all counts to 0

                        filteredVisaList.forEach(function (visa) {
                            var snakeCaseStr = visa.status_value.toLowerCase().replace(/\s+/g, '_');
                            var snakeCaseStr = visa.status_value.toLowerCase().replace(/\s+/g, '_');

                            var index = statusNames.indexOf(snakeCaseStr);
                                if (index !== -1) {
                                    statusValues[index]++;
                                }
                            var priorityIcon = visa.priority !== null ? '<span class="mdi mdi-star" style="color: gold; font-size: 14px;"></span> ' : '';
                            var formattedDate = moment(visa.created_at).format('DD-MMM-YYYY');
                            var row = [
                                visa.agency + '-' + visa.branch ,
                                visa.company_name,
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

                        console.log("statusValues");
                        console.log(statusValues);
                        if (filteredVisaList.length) {

                            status_masters.forEach(function (status_master) {
                                function spacesToUnderscores(str) {
                                        return str.replace(/\s+/g, '_').toLowerCase();
                                }
                                $('.'+spacesToUnderscores(status_master.status_value)).html(0);
                                statusNames.forEach(function (statusName, index) {
                                    $('.'+statusName).html(statusValues[index]);

                                });
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

