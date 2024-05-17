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
                    <h4 class="page-title">Create Client</h4>
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
                    <?php if(isset($clientData)){ ?>  action="<?= base_url()."client_edit"; ?>"
                    <?php } else {  ?>   action="<?= base_url()."client_create"; ?>" <?php } ?>
                     class="parsley-examples">


                     <?php if(isset($clientData)){ ?>
                            <input type="hidden" required   name="id" value="<?= $clientData->client_id; ?>" id='id' >
                    <?php } ?>

                    <div class="form-row">

                       

                        <div class="form-group col-md-3">
                            <label for="staffName">Organization Name<span class="text-danger">*</span></label>
                            <input type="text" name="org_name" value="<?php if(isset($clientData)){ echo $clientData->org_name; } ?>" parsley-trigger="change" required  class="form-control" id="orgName">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="branch">Branch<span class="text-danger">*</span></label>
                            <input type="text" name="branch" value="<?php if(isset($clientData)){ echo $clientData->branch; } ?>" parsley-trigger="change" required  class="form-control" id="branch">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="agency">Agency<span class="text-danger">*</span></label>
                            <input type="text" name="agency" value="<?php if(isset($clientData)){ echo $clientData->agency; } ?>" parsley-trigger="change" required  class="form-control" id="agency">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="mobile">Mobile<span class="text-danger">*</span></label>
                            <input type="text" name="mobile_no" value="<?php if(isset($clientData)){ echo $clientData->mobile_no; } ?>" parsley-trigger="change" required placeholder="Enter Mobile" class="form-control" id="mobile">
                        </div>
                       
                  

                        <div class="form-group col-md-12">
                            <label for="email">Email<span class="text-danger">*</span><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;(You can add multiple email IDs separated by commas)</span></label>
                            <input type="email" name="email" value="<?php if(isset($clientData)){ echo $clientData->email; } ?>" parsley-trigger="change" required placeholder="Enter Email" class="form-control" id="email">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="user_name">User Name<span class="text-danger">*</span></label>
                            <input type="text" name="user_name" value="<?php if(isset($clientData)){ echo $clientData->user_name; } ?>" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="user_name">
                        </div>

                        <?php if(!isset($clientData)){  ?>
                            <div class="form-group col-md-4">
                            <label for="pass1">Password<span class="text-danger">*</span></label>
                            <input id="pass1" type="password"  placeholder="Password" required class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                            <input data-parsley-equalto="#pass1" type="password" name="password" required placeholder="Password" class="form-control" id="passWord2">
                        </div>
                        <?php }else{ ?>
                        <div class="form-group col-md-6">
                        </div>
                        <?php } ?>
                          

                   
                        
                        <div class="form-group col-md-8">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="<?php if(isset($clientData)){ echo $clientData->address; } ?>" parsley-trigger="change"  placeholder="Enter Address" class="form-control" id="address">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="city">City</label>
                            <input type="text"  value="<?php if(isset($clientData)){ echo $clientData->city; } ?>" placeholder="Enter City" name="city"  class="form-control"  id="city">
                        </div>

                  
                        
        
                        <div class="form-group col-md-4">
                            <label for="state">State </label>
                            <input type="text" name="state"  value="<?php if(isset($clientData)){ echo $clientData->state; } ?>" placeholder="Enter State" class="form-control" id="state">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="country">Country</label>
                            <input type="text"   name="country" value="<?php if(isset($clientData)){ echo $clientData->country; } ?>" placeholder="Enter country" class="form-control"  id="country">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="pin_code">PIN </label>
                            <input type="text" name="pin_code"  value="<?php if(isset($clientData)){ echo $clientData->pin_code; } ?>" placeholder="Enter PIN" class="form-control" id="pin_code">
                        </div>

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