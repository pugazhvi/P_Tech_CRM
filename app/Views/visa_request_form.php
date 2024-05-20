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
                    

                    <form method="post" action="<?= base_url()."create_visa_request"; ?>" enctype="multipart/form-data" class="parsley-examples">

                   
                <div class="row">
                       

                        <div class="form-group col-md-3">
                            <label for="client">Client<span class="text-danger">*</span></label>
                            <select class="select2-dropdown form-control"  name="client_id" required>
                                <option value="">Select client</option>
                                <?php foreach ($clientData as $key => $clientValue) { ?>
                                    <option value="<?php echo $clientValue['client_id'];  ?>"><?php echo $clientValue['org_name'];  ?>-<?php echo $clientValue['branch'];  ?>-<?php echo $clientValue['agency'];  ?></option>
                                <?php } ?>
                                    
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
                            <label for="priority">Priority</label>
                            <select class="select2-dropdown form-control" id="priority" name="priority" parsley-trigger="change" >
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                                <option value="high">High</option>
                                <option value="urgent">Urgent</option>
                                <option value="critical">Critical</option>
                            </select>
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

<script>
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


  
   
</script>  


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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