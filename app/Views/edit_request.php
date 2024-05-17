    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <style>
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
        /* The container for the toggle button */
        .toggle-btn {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 25px;
        margin-left: 15px;
        margin-bottom: 0;
        }

        /* Hide the default checkbox */
        .toggle-btn input {
        opacity: 0;
        width: 0;
        height: 0;
        }

        /* The slider (circle) of the toggle button */
        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
        }

        /* Rounded sliders */
        .slider.round {
        border-radius: 34px;
        }

        /* The circle inside the slider */
        .slider.round::before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
        }

        /* Move the circle when toggled */
        input:checked + .slider {
        background-color: #1aa79c;
        }

        input:checked + .slider::before {
        transform: translateX(26px);
        }
        .toast-warning {
         background-color: #ffc107 !important; /* Change to the desired background color */
        }

       #is-visa-approve-display {
        display: flex;
       align-items: center;
       margin-top: 5px;
       }
       #notes{
        overflow-y: scroll;
        height: 363px;
        padding-right: 15px;
       }
       #notes::-webkit-scrollbar-track {
            background-color: #f5f5f5;
        }
        #notes::-webkit-scrollbar-thumb {
            background-color: #1aa79c;
            border-radius: 10px;
            height: 5px;
        }
        #notes::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            background-color: #f5f5f5;
        }

    </style>
    <div class="content-page">
        <!-- Start Content-->
        <div class="container-fluid">
                
              
  
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <!-- <div class="form-group row">
                        <div class="col-md-6">    
                            <p class="text-primary">#MN2048</p>
                        </div>
                        <div class="col-md-6">   
                        <button type="button" class="btn btn-secondary waves-effect float-right">Go Back</button>
                        </div>
                    </div> -->
                
                    

                


                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none text-muted"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class='mdi mdi-dots-horizontal font-18'></i>
                        </a>
                    
                        <div class="dropdown-menu dropdown-menu-right">
                           
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item" data-toggle="modal" data-target="#con-close-modal">
                                <i class='mdi mdi-pencil-outline mr-1'></i>Edit
                            </a>
                           
                            <?php if($visaData->file != null){ ?>
                            <a href="<?= base_url('download/' . urlencode($visaData->file)) ?>" class="dropdown-item">
                                <i class='mdi mdi-arrow-down'></i> Download file
                            </a> 
                            <?php } ?>

                             <!-- item-->
                             <a href="<?= base_url('visa_request_list'); ?>" class="dropdown-item">
                                <i class='mdi mdi-backspace-outline mr-1'></i>Back to list
                            </a>
                           
                           
                        </div>
                    </div>

                    <p class="text-primary">#<?= $visaData->request_id; ?></p>
                    <h4 class="mb-1"><?= $visaData->client_name; ?>-<?= $visaData->branch; ?>-<?= $visaData->agency; ?> <i class="ri-phone-line" title="<?= $visaData->client_mobile; ?>"></i> </h4>  
                    <!-- <p class="text-muted mb-1">Contact : <?= $visaData->client_email; ?> , <?= $visaData->client_mobile; ?></p> -->

                    <div class="text-muted mb-4">
                            <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                    <i class="ri-user-3-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Traveller</p>
                                        <h5 class="mt-0 text-truncate">
                                           <?= $visaData->traveller_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                        <i class="ri-passport-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Passport No</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->passport_no; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                       <i class="ri-map-pin-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Country</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->country_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                        <i class="ri-calendar-event-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Visa Type</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->visa_type_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>



                    <div class="form-group row mb-1">
                        <div class=" col-md-12">
                            <div class="border rounded">
                                <form id="save-notes" class="comment-area-box">
                                        <textarea rows="3" class="form-control border-0 resize-none notes-field" name="notes"  placeholder="Enter Notes..."></textarea>
                                        <div class="p-2 bg-light d-flex  ">
                                            <input type="hidden" name="visa_request_id" value="<?= $visaData->visa_request_id; ?>">
                                            
                                            <div class="form-group col-md-6 justify-content-between align-items-center m-0">
                                                <select class="select2-dropdown form-control"  name="status" id="status" required>
                                                    <option value="">Select status</option>
                                                    <?php foreach ($statusData as $key => $statusValue) { ?>
                                                        <option value="<?php echo $statusValue['status_id'];  ?>"  <?php echo ($statusValue['status_id'] ==  $visaData->status) ? 'selected' : ''; ?> ><?php echo $statusValue['status_value'];  ?></option>
                                                    <?php } ?>
                                                </select> 
                                            </div>

                                            <div class="form-group col-md-4 justify-content-start align-items-center m-0">

                                            <div style="display:none;" id="awb-display">
                                               <input type="text" class="form-control" name="awb_no" value="<?= $visaData->awb_no; ?>" id="awb_no" placeholder="AWB NO" >
                                            </div>
                                          
                                            <div style="display:none;" id="is-visa-approve-display">
                                                Visa Approved
                                                <label class="toggle-btn"> 
                                                    <input type="checkbox" value="<?= $visaData->is_visa_approved; ?>" class="form-control"  name="is_visa_approved" id="is_visa_approved">
                                                    <span class="slider round"></span>
                                                </label> 
                                                
                                               
                                                   
                                            </div>
                                            

                                            </div>

                                            <div class="form-group col-md-2 d-flex justify-content-start align-items-center m-0">
                                                <button type="submit" class="btn btn-sm btn-success "><i class='uil uil-message mr-1'></i>Submit</button>
                                                <img src="<?= base_url()."public"; ?>/assets/images/submit-spin.svg" width="19px" height="19px" class="ml-2" id="submit-spin" style="display:none;"></img>
                                            </div>
                                           
                                        </div>
                                </form>    
                            </div> 
                        </div>
                    </div>

                    
                </div>
            </div>

        
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body" id="notes-display">
                    <h4 class="mb-4 mt-0 font-16" id="notes-count">Notes (<?= count($visaNotesData)?>)</h4>
                   
                    <div class="clerfix"></div>
                    <div id="notes">
                    <?php foreach ($visaNotesData as $key => $notes) { 

                          if($notes['status'] == 5)
                          { 
                              $text = ($notes['is_visa_approved'] == 1 ) ? ' (Visa Approved)' : ' (Visa Rejected)';
                              $statusValue = $notes['status_value'].$text; 
                          }else if($notes['status'] == 6)
                          { 
                              $statusValue = $notes['status_value']." (AWB : ".$notes['awb_no'].")"; 
                          }else
                          { 
                              $statusValue = $notes['status_value']; 
                          } 
                          ?>

                    <div class="media mb-3 pb-3 border-bottom">
                        <div class="media-body">
                            
                            <h5 class="mt-0"><?php echo  $statusValue; ?><small class="text-muted float-right"></small></h5>
                            <?php echo $notes['notes']; ?>

                            <br/>

                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2">
                            <i class="mdi mdi-account-circle"></i> <?php echo $notes['created_by']; ?> 
                            </a>

                            <small class="text-muted float-right mt-2">
                            <i class="mdi mdi-calendar-clock"></i><?php echo date('d-M-Y h:i A', strtotime($notes['created_at'])); ?>
                            </small>

                        </div>
                    </div>

                    <?php } ?>
                    </div>
                   
                </div> <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>

    </div>

            
                
    </div> <!-- container -->
    </div> <!-- content -->
    </div>





    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Visa Request</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form id="update-request" enctype="multipart/form-data">
                    <div class="modal-body p-4">
                    
                        <input type="hidden" class="form-control" name="visa_request_id" value="<?= $visaData->visa_request_id; ?>">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="client">Client<span class="text-danger">*</span></label>
                                    <select class="select2-dropdown form-control"  name="client_id" required>
                                        <option value="">Select client</option>
                                        <?php foreach ($clientData as $key => $clientValue) { ?>
                                            <option value="<?php echo $clientValue['client_id'];  ?>" <?php echo ($clientValue['client_id'] ==  $visaData->client_id) ? 'selected' : ''; ?> ><?php echo $clientValue['org_name'];  ?>-<?php echo $clientValue['branch'];  ?>-<?php echo $clientValue['agency'];  ?></option>
                                        <?php } ?>
                                            
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Traveller Name</label>
                                    <input type="text" class="form-control" name="traveller_name" value="<?= $visaData->traveller_name; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Passport No</label>
                                    <input type="text" class="form-control" name="passport_no" value="<?= $visaData->passport_no; ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Country</label>
                                    <select class="select2-dropdown form-control"  name="country_of_visit" id="country_of_visit" required>
                                        <option value="">Select country</option>
                                        <?php foreach ($countryData as $key => $countryValue) { ?>
                                            <option value="<?php echo $countryValue['id'];  ?>"  <?php echo ($countryValue['id'] ==  $visaData->country_of_visit) ? 'selected' : ''; ?> ><?php echo $countryValue['country'];  ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Visa Type</label>
                                    <select class="select2-dropdown form-control"  name="visa_type" id="visa_type" required>
                                        <option value="">Select visa type</option>
                                        <?php foreach ($visaTypeData as $key => $visaTypeValue) { ?>
                                            <option value="<?php echo $visaTypeValue['id'];  ?>"  <?php echo ($visaTypeValue['id'] ==  $visaData->visa_type) ? 'selected' : ''; ?> ><?php echo $visaTypeValue['category'];  ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                            </div>

                           

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="client">Select new file</label>
                                    <input type="file" name="file" class="form-control" id="file"/>
                                </div>
                            </div>

                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
    </div><!-- /.modal -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>

    $(document).ready(function() {
        $('.select2-dropdown').select2({
            
        });
      
    });
  
    $(document).ready(function() {

        

        $('#save-notes').submit(function(e) {
            e.preventDefault(); 

            if($('#status').val() == 6 && $('#awb_no').val() == '')
            {
               // Display the warning toastr
               toastr.warning('Please Enter AWB NO.', 'Warning');
               return;
            }
            $('#submit-spin').show();
            // Serialize the form data
            var checkbox = document.getElementById("is_visa_approved");
            checkbox.value = checkbox.checked ? "1" : "0";
            var formData = $(this).serialize();
            console.log(formData);
            // Make an AJAX POST request
            $.ajax({
                url: '<?= base_url()."update_notes"; ?>',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if(checkbox.value == 1){ document.getElementById('is_visa_approved').checked = true; }
                    var count  = 'Notes ('+response.count+')';
                    $('#notes-count').empty();
                    $('#notes-count').append(count);
                    $('#notes').empty(); 
                    $('#notes').append(response.notes); 
                    $('#submit-spin').hide();
                   
                     $('.notes-field').val('');
                   
                    
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });


        $('#update-request').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
           
           // Create a FormData object
           var formData = new FormData(this);
           

            console.log(formData);
            // Make an AJAX POST request
            $.ajax({
                url: '<?= base_url()."edit_visa_request"; ?>',
                type: 'POST',
                data: formData,
                contentType: false, 
                processData: false, 
                success: function(response) {
                if(response){
                    toastr.success('Update Success.', 'Success');
                    window.location.reload();
                }else{
                    toastr.warning('Update Failed.', 'Warning');
                }
                    
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });


        $("#status").on("change", function() 
        {
            
            var statusValue = $(this).val();
            if(statusValue == 6)
            {
                $("#awb_no").val('');
                $("#awb-display").show();
                $("#is-visa-approve-display").hide();
            }
            else if(statusValue == 5)
            {
                document.getElementById('is_visa_approved').checked = false;
                $("#is-visa-approve-display").show();
                $("#awb-display").hide();
               
            }
            else
            {
                $("#is-visa-approve-display").hide();
                $("#awb-display").hide();
            }

          
        });


        $("#country_of_visit").on("change", function() 
        {
            var value = $(this).val();
            $.ajax({
                url: '<?= base_url("get_visa_type") ?>?country_id=' + value,
                    type: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        if (response.count > 0) {
                       
                        $('#visa_type option:not(:first)').remove();

                     
                        $.each(response.data, function(index, item) {
                            $('#visa_type').append($('<option>', {
                                value: item.id,
                                text: item.category
                            }));
                        });

                      
                    } else {
                        toastr.warning('Visa type data found.', 'Warning');
                    }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                        toastr.error('Failed to fetch data.', 'Error');
                    }
                });
        });




        StatusId = $('#status').val();
        if(StatusId == 6)
        {
            $("#awb-display").show();
            $("#is-visa-approve-display").hide();
        }
        else if(StatusId == 5)
        {
            is_visa_approved = <?= $visaData->is_visa_approved; ?>;
            if(is_visa_approved == 1){ document.getElementById('is_visa_approved').checked = true; }
            
            $("#is-visa-approve-display").show();
            $("#awb-display").hide();
        }
           

       


    });
</script>



