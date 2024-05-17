<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
            
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">Create Staff</h4>
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
                    

                    <form method="post" 
                    <?php if(isset($staffData)){ ?>  action="<?= base_url()."staff_edit"; ?>"
                    <?php } else {  ?>   action="<?= base_url()."staff_create"; ?>" <?php } ?>
                     class="parsley-examples">


                     <?php if(isset($staffData)){ ?>
                            <input type="hidden" required   name="id" value="<?= $staffData->staff_id; ?>" id='id' >
                    <?php } ?>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="role">Role<span class="text-danger">*</span></label>
                            <select  class="form-control" id="selectize-select" name="role" id="role" parsley-trigger="change" required >
                            <?php if(isset($staffData)){ ?> <option value="<?= $staffData->role; ?>"> <?= $staffData->role; ?> </option>   <?php } ?>
                                <option >Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="staffName">Staff Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" value="<?php if(isset($staffData)){ echo $staffData->name; } ?>" parsley-trigger="change" required placeholder="Enter staff name" class="form-control" id="staffName">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="mobile">Mobile<span class="text-danger">*</span></label>
                            <input type="text" name="mobile_no" value="<?php if(isset($staffData)){ echo $staffData->mobile_no; } ?>" parsley-trigger="change" required placeholder="Enter Mobile" class="form-control" id="mobile">
                        </div>
                       
                    </div>

                    <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" value="<?php if(isset($staffData)){ echo $staffData->email; } ?>" parsley-trigger="change" required placeholder="Enter Email" class="form-control" id="email">
                            </div>
                            <?php if(!isset($staffData)){  ?>
                                <div class="form-group col-md-4">
                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                <input id="pass1" type="password"  placeholder="Password" required class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                <input data-parsley-equalto="#pass1" type="password" name="password" required placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <?php } ?>
                          

                    </div>


    
                   
                    
                        

                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
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

    



<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->