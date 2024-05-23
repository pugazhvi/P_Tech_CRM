<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
       


<div class="row">


    <div class="col-lg-1 col-xl-1">
       
    </div>



    
    <div class="col-lg-10 col-xl-10">
        <div class="card">
            <div class="card-body">


                    <div class="tab-pane show active" id="settings">
                        <form id="update-profile" >
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            <input type="text" class="form-control"  id="staff_id" name="staff_id" value="<?php echo $staff->staff_id; ?>" hidden>   
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $staff->name; ?>">
                                    </div>
                                </div>      
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile_no">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $staff->mobile_no; ?>">
                                    </div>
                                </div>                 
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="useremail">Email Address</label>
                                        <input type="email" class="form-control" id="email"  name="email"  value="<?php echo $staff->email; ?>">
                                    </div>
                                </div>  
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: 28px;">
                                        <button type="submit" class="btn btn-primary" style="float: inline-end;" >Update</button>
                                    </div>
                                </div>                        
                            </div>
                           
        
                        </form>
                    </div>
                    <!-- end settings content-->


                    <div class="text-left mt-3">

                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Change Password</h5>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="old_password">Old Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="old_password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-eye" id="toggleOldPassword"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  

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
                                <button type="submit" class="btn btn-primary" id="submit_password" style="float: inline-end;" onclick="changePassword(this)">Submit</button>
                            </div>
                        </div>
                    </div>


            </div>
        </div>

    </div>


    <div class="col-lg-1 col-xl-1">
       
    </div>


</div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


  $(document).ready(function() {
        $('#update-profile').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
            
            // Serialize the form data
            var formData = $(this).serialize();
            console.log(formData);
            // Make an AJAX POST request
            $.ajax({
                url: '<?= base_url()."staff_profile"; ?>',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if(response){
                      window.location.reload();
                    }else{

                    }
                   
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });


    function changePassword(params) {

        var staff_id = $('#staff_id').val();
        
        var formData = {
            old_password: $('#old_password').val(),
            new_password: $('#new_password').val(),
            confirm_password: $('#confirm_password').val()
        };

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()."change_staff_password/"?>' + staff_id, 
            data: formData,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status == 'error') {
                    toastr.warning(response.message, 'Warning');
                }else{
                    toastr.success(response.message, 'Success');

                    window.location.href = "<?php echo base_url().'staff_logout' ?>";
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
    var oldPasswordField = document.getElementById("old_password");
    var toggleOldPassword = document.getElementById("toggleOldPassword");

    var newPasswordField = document.getElementById("new_password");
    var toggleNewPassword = document.getElementById("toggleNewPassword");

    var confirmField = document.getElementById("confirm_password");
    var toggleConfirmPassword = document.getElementById("toggleConfirmPassword");

    toggleOldPassword.addEventListener("click", function() {
        togglePasswordVisibility(oldPasswordField, toggleOldPassword);
    });

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

