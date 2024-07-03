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
        #is-visa-approve-display {
        display: flex;
       align-items: center;
       margin-top: 14px;
       }
</style>
<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">Create Visa Request</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>     
        <!-- end page title -->  
 
 
        <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    

                    <form id="request_create_form" method="post" action="<?= base_url()."create_visa_request"; ?>" enctype="multipart/form-data" class="parsley-examples">

                        <div class="row">
                            

                                <div class="form-group col-md-3">
                                    <label for="agent">Agent<span class="text-danger">*</span></label>
                                    <select class="select2-dropdown form-control"  name="client_id" id="client_id" required>
                                        <option value="">Select Agent</option>
                                        <?php foreach ($clientData as $key => $clientValue) { ?>
                                            <option value="<?php echo $clientValue['client_id'];  ?>"><?php echo $clientValue['agency'];  ?>-<?php echo $clientValue['branch'];  ?></option>
                                        <?php } ?>
                                            
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="company">Company<span class="text-danger">*</span></label>
                                    <i type="button" class="fe-plus-circle" id="addCompanyeModalButton" style="font-size: 18px;" data-toggle="modal" data-target="#addCompanyModal" title="Add Company"></i>

                                    <select class="select2-dropdown form-control"  name="company_id" id="company_id" required>
                                        <option value="">Select Company</option>
                                        <?php if(isset($companyData)){ foreach ($companyData as $key => $companyValue) { ?>
                                            <option value="<?php echo $companyValue['company_id'];  ?>"><?php echo $companyValue['company_name']; ?></option>
                                        <?php } }?>
                                            
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="passport_no">Passport No<span class="text-danger">*</span></label>
                                    <input type="text" name="passport_no"  parsley-trigger="change" required  class="form-control" id="passport_no" onchange="validatePassportNumber()">
                                    <span id="error-message" style="color:red;display:none;">Invalid passport number.</span>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="traveller_name">Traveller Name<span class="text-danger">*</span></label>
                                    <input type="text" name="traveller_name"  parsley-trigger="change" required  class="form-control" id="traveller_name">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="country_of_visit">Country Of Visit<span class="text-danger">*</span></label>
                                    <select class="select2-dropdown form-control" name="country_of_visit" id="country_of_visit"  required>
                                        <option value="">Select country</option>
                                        <?php foreach ($countryData as $key => $countryValue) { ?>
                                            <option value="<?php echo $countryValue['id'];  ?>"><?php echo $countryValue['country'];  ?></option>
                                        <?php } ?>
                                            
                                    </select>   
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="visa_type">Visa Type<span class="text-danger">*</span></label>
                                    <select class="select2-dropdown form-control"  name="visa_type" id="visa_type" required>
                                        <option value="">Select visa type</option>
                                    
                                            
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="trip_approval_no">Trip Approval No</label>
                                    <input type="text" name="trip_approval_no"  parsley-trigger="change"   class="form-control" id="trip_approval_no">
                                </div>

                            
                            
                                <div class="form-group col-md-3">
                                    <label for="status">Status<span class="text-danger">*</span></label>
                                    <select class="select2-dropdown form-control"  name="status" required>
                                        
                                        <?php foreach ($statusData as $key => $statusValue) { ?>
                                            <option value="<?php echo $statusValue['status_id'];  ?>"><?php echo $statusValue['status_value'];  ?></option>
                                        <?php } ?>
                                            
                                    </select>   
                                </div>

                                <div class="form-group col-md-3">
                                    <!-- <label for="priority">Priority</label>
                                    <select class="select2-dropdown form-control" id="priority" name="priority" parsley-trigger="change" >
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                        <option value="high">High</option>
                                        <option value="urgent">Urgent</option>
                                        <option value="critical">Critical</option>
                                    </select> -->
                                    <label></label><br>
                                    <div id="is-visa-approve-display">
                                    Priority
                                    <label class="toggle-btn"> 
                                        <input type="checkbox"  class="form-control"  name="priority" id="priority">
                                        <span class="slider round"></span>
                                    </label> 
                                    </div>
                                </div>

                            

                                <div class="form-group col-md-6">
                                    <label for="notes">Notes</label>
                                    <textarea id="textarea" name="notes" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="notes">File Upload</label>
                                    <input type="file" name="file" class="form-control" id="file"/>
                                </div>
                            
                    
                            
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button id="submitBtn" class="btn btn-primary waves-effect waves-light mr-1" type="submit" onclick="preventDoubleSubmit()">
                                Submit
                            </button>
                            <button type="reset" onclick="window.history.back()" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div> <!-- end card -->
        </div>
        <!-- end col -->

    </div>


    </div> <!-- container -->

</div> <!-- content -->

<div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCompanyModalLabel">Add New Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form >
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <label for="company_name" class="col-form-label">Company Name</label>
                            <input class="form-control" name="company_name" id="company_name" type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <button style="float: right;" class="btn btn-rounded btn-primary" onclick="submitCompny(event)">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function submitCompny(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        if($('#client_id').val() == ''){
            toastr.warning('Select First Agent');
            return ;
        }
        // Get the value of the Make Name input field
        var companyName = $('#company_name').val();

        // Check if Make Name is empty
        if (companyName === '') {
            // Display error message
            toastr.error('Please enter a Company Name.', 'Error');
            return; // Stop further execution of the function
        }
        var formData = {
            company_name: $('#company_name').val(),
            client_id: $('#client_id').val()
        };
    
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()."create_company"?>', 
            data: formData,
            dataType: 'json',
            success: function(response) {
                // console.log(response);
                if (response == "failed") {
                    toastr.warning(response, 'Warning');
                }else{
                    $('#addCompanyModal').modal('hide');
                    $('#company_name').val('');
                    toastr.success(response.data, 'Success');

                    $('#company_id').empty();

                    $('#company_id').append('<option value="0">Select Company</option>');

                    response.companyData.forEach(function(company) {
                        $('#company_id').append('<option value="' + company.company_id + '">' + company.company_name + '</option>');
                    });

                    $('#company_id').val(response.dataSelect).trigger('change');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response here
                console.error(xhr.responseText);
            }
        });
    }


    $(document).ready(function() {
        $('#client_id').change(function () {
            console.log($(this).val());
            $.ajax({
                url: '<?= base_url("get_company_list/") ?>'+$(this).val(),
                    type: 'GET',
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        if (response.status == false) {
                            toastr.warning('Visa type data found.', 'Warning');
                        } else {
                            $('#company_id').empty();
                            $('#company_id').append('<option value="">Select Company</option')
                            $.each(response.data, function(index, item) {
                                $('#company_id').append($('<option>', {
                                    value: item.company_id,
                                    text: item.company_name
                                }));
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                        toastr.error('Failed to fetch data.', 'Error');
                    }
                });
        });
    });


    function convertToUpperCase() {
        var inputField = document.getElementById("passport_no");
        inputField.value = inputField.value.toUpperCase();
    }

    // Attach the function to the input field using an event listener
    document.getElementById("passport_no").addEventListener("input", convertToUpperCase);

    function validatePassportNumber() {
            var passportNumber = document.getElementById("passport_no").value;
            var errorMessage = document.getElementById("error-message");

            // Example regex: Adjust according to the format you need to validate
            var regex = /^[A-Za-z0-9]{6,9}$/;

            if (regex.test(passportNumber)) {
                errorMessage.style.display = "none";
               
            } else {
                errorMessage.style.display = "inline";
               
            }
        }

        // $('#submitBtn').click(function (e) {
        //     e.preventDefault();
        //     $('#request_create_form').submit();
        // })
  
   
</script>  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {

        $('.select2-dropdown').select2();

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


    });





    </script>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->