<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->



<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
        <!-- start page title -->
        <div class="row">
        <div class="col-2"></div>
            <div class="col-4">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title"> <?php if(isset($clientData)){ echo 'Edit Client'; }else{ echo 'Create Client'; } ?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li> -->
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-4">
            <!-- <button style="float: right;color:#fff !important;background-color:#6c757d !important;border-color:#6c757d !important;" class="btn waves-effect waves-light mr-1" href="#" onclick="window.history.back()">Back to List</button> -->

            </div>
            <div class="col-2"></div>
        </div>     
        <!-- end page title -->  
 
 
        <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    

                    <form method="post" 
                        <?php if(isset($clientData)){ ?>  action="<?= base_url()."client_edit"; ?>"
                        <?php } else {  ?>   action="<?= base_url()."client_create"; ?>" <?php } ?>
                        class="parsley-examples">

                        <?php if(isset($clientData)){ ?>
                                <input type="hidden" required   name="id" value="<?= $clientData->client_id; ?>" id='id' >
                        <?php } ?>
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Client Info</h5>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="agency">Client Name<span class="text-danger">*</span></label>
                                <input type="text" name="agency" value="<?php if(isset($clientData)){ echo $clientData->agency; } ?>" parsley-trigger="change" required  class="form-control" id="agency">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="branch">Location<span class="text-danger">*</span></label>
                                <input type="text" name="branch" value="<?php if(isset($clientData)){ echo $clientData->branch; } ?>" parsley-trigger="change" required  class="form-control" id="branch">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">Email<span class="text-danger">*</span><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;(You can add multiple email IDs separated by commas)</span></label>
                                <textarea name="email" parsley-trigger="change" required placeholder="Enter Email" class="form-control" id="email"><?php if(isset($clientData)){ echo $clientData->email; } ?></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="user_name">User Name<span class="text-danger">*</span></label>
                                <input type="text" name="user_name" value="<?php if(isset($clientData)){ echo $clientData->user_name; } ?>" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="user_name">
                            </div>

                            <?php if(!isset($clientData)){  ?>
                            <div class="form-group col-md-12">
                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                <input id="pass1" type="password"  placeholder="Password" required class="form-control">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                <input data-parsley-equalto="#pass1" type="password" name="password" required placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <?php }else{ ?>
                            <div class="form-group col-md-12">
                            </div>
                            <?php } ?>
                            

                    
                    

                        </div>
                   
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Submit
                            </button>
                            <!-- <button type="reset" onclick="window.history.back()" class="btn btn-secondary waves-effect">
                                Cancel
                            </button> -->
                        </div>

                    </form>

                    <?php if (isset($clientData)) {?>
                    <div class="text-left mt-3">

                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Change Password</h5>

                        <div class="row">                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="new_password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-eye" id="toggleNewPassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="confirm_password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-eye" id="toggleConfirmPassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top: 27px;">
                            
                            </div>
                            <div class="col-md-6" style="margin-top: 27px;">
                                <button type="submit" class="btn btn-primary" id="submit_password" style="float: inline-end;" onclick="changeClientPassword(this)">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div> <!-- end card -->
        </div>
        <div class="col-lg-2"></div>
        <!-- end col -->

    </div>


    </div> <!-- container -->

</div> <!-- content -->

    



<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<script>
    function changeClientPassword(params) {

        var client_id = $('#id').val();

        var formData = {
            old_password: $('#old_password').val(),
            new_password: $('#new_password').val(),
            confirm_password: $('#confirm_password').val()
        };

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()."change_client_password/"?>' + client_id, 
            data: formData,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status == 'error') {
                    toastr.warning(response.message, 'Warning');
                }else{
                    toastr.success(response.message, 'Success');

                    // window.location.href = "<?php echo base_url().'staff_logout' ?>";
                }

            },
            error: function(xhr, status, error) {
                // Handle error response here
                console.error(xhr.responseText);
            }
        });

    }
</script>

<script>

    var newPasswordField = document.getElementById("new_password");
    var toggleNewPassword = document.getElementById("toggleNewPassword");

    var confirmField = document.getElementById("confirm_password");
    var toggleConfirmPassword = document.getElementById("toggleConfirmPassword");


    toggleNewPassword.addEventListener("click", function() {
        togglePasswordVisibility(newPasswordField, toggleNewPassword);
    });

    toggleConfirmPassword.addEventListener("click", function() {
        togglePasswordVisibility(confirmField, toggleConfirmPassword);
    });

    function togglePasswordVisibility(field, toggle) {
        if (field.type === "password") {
            field.type = "text";
            toggle.className = "fa fa-eye-slash";
        } else {
            field.type = "password";
            toggle.className = "fa fa-eye";
        }
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var newPasswordField = document.getElementById('new_password');
        var confirmPasswordField = document.getElementById('confirm_password');
        var submitButton = document.getElementById('submit_password');

        // Add an event listener to the "Confirm Password" field
        confirmPasswordField.addEventListener('input', function() {
            // Check if the passwords match
            if (newPasswordField.value === confirmPasswordField.value) {
                // Enable the submit button
                submitButton.disabled = false;
            } else {
                // Disable the submit button
                submitButton.disabled = true;
            }
        });
    });
</script>