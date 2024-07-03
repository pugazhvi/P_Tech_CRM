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
            <div class="col-6">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">   <?php if(isset($staffData)){ echo 'Edit Staff'; }else{ echo 'Create Staff'; } ?> </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li> -->
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <button style="float: right;color:#fff !important;background-color:#6c757d !important;border-color:#6c757d !important;" class="btn  waves-effect waves-light mr-1" href="#" onclick="window.history.back()">Back to List</button>

            </div>
        </div>     
        <!-- end page title -->  

 
        <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    

                    <form method="post"
                        <?php if(isset($staffData)){ ?>  action="<?= base_url("staff_edit"); ?>"
                        <?php } else {  ?>   action="<?= base_url("staff_create"); ?>" <?php } ?>
                        class="parsley-examples">

                        <?php if(isset($staffData)){ ?>
                            <input type="hidden" required name="id" value="<?= $staffData->staff_id; ?>" id='id'>
                        <?php } ?>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="branch_id">Branch<span class="text-danger">*</span></label>
                                <select class="select2-dropdown form-control" name="branch_id" id="branch_id" required>
                                    <option value="">Select branch</option>
                                    <?php foreach ($branchData as $key => $branchValue) { ?>
                                        <option value="<?= $branchValue['id']; ?>" 
                                            <?= old('branch_id', isset($staffData) ? $staffData->branch_id : '') == $branchValue['id'] ? 'selected' : ''; ?>>
                                            <?= $branchValue['branch']; ?>
                                        </option>
                                    <?php } ?>
                                </select>   
                            </div>

                            <div class="form-group col-md-4">
                                <label for="role">Role<span class="text-danger">*</span></label>
                                <select class="select2-dropdown form-control" name="role" id="role" parsley-trigger="change" required>
                                    <option value="">Select Role</option>
                                    <option value="Admin" <?= old('role', isset($staffData) ? $staffData->role : '') == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                                    <option value="Staff" <?= old('role', isset($staffData) ? $staffData->role : '') == 'Staff' ? 'selected' : ''; ?>>Staff</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="staffName">Staff Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" value="<?= old('name', isset($staffData) ? $staffData->name : '') ?>" parsley-trigger="change" required placeholder="Enter staff name" class="form-control" id="staffName">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="user_name">User Name<span class="text-danger">*</span></label>
                                <input type="text" name="user_name" value="<?= old('user_name', isset($staffData) ? $staffData->user_name : '') ?>" parsley-trigger="change" required placeholder="Enter User Name" class="form-control" id="user_name">
                            </div>
                            
                            <?php if(!isset($staffData)){  ?>
                                <div class="form-group col-md-4">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" name="password" placeholder="Password" required class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1" type="password" name="password_confirm" required placeholder="Password" class="form-control" id="passWord2">
                                </div>
                            <?php } ?>
                        </div>

                        <div class="form-group text-right m-b-0">
                            <button id="staff_form_submit" class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>

                    <?php if (isset($staffData)) { ?>
                    <div class="text-left mt-3">

                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Change Password</h5>

                        <div class="row">                            

                            <div class="col-md-4">
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

                            <div class="col-md-4">
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
                                <button type="submit" class="btn btn-primary" id="submit_password" style="float: inline-end;" onclick="changeStaffPassword(this)">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div> <!-- end card -->
        </div>
        <!-- end col -->

    </div>


    </div> <!-- container -->

</div> <!-- content -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        console.log("hello");
        <?php if (session()->getFlashdata('error')): ?>
            console.log("1111111111111111111");

            toastr.warning("<?= session()->getFlashdata('error') ?>");
        <?php endif; ?>
        $('.select2-dropdown').select2();
    });
    </script>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<script>
    function changeStaffPassword(params) {

        var staff_id = $('#id').val();

        var formData = {
            new_password: $('#new_password').val(),
            confirm_password: $('#confirm_password').val()
        };

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()."change_staff_password/"?>' + staff_id + '/' + 'admin', 
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

    // $('#staff_form_submit').click(function (event) {
    //     event.preventDefault();
    //     var user_name = $('#user_name').val();
    //     $.ajax({
    //         type: 'GET',
    //         url: '<?php echo base_url()."user_name_check/"?>'. user_name, 
    //         dataType: 'json',
    //         success: function(response) {
    //             console.log(response);

    //             if (response) {
    //                 window.location.reload();
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             // Handle error response here
    //             console.error(xhr.responseText);
    //         }
    //     })
    // })
</script>