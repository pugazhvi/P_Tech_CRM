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
                    <h4 class="page-title">
                        
                     <?php if(isset($visaSummaryData)){ echo 'Edit Visa Info'; }else{ echo 'Create Visa info'; } ?>
                           
                  </h4>
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
                    <?php if(isset($visaSummaryData)){ ?>  action="<?= base_url()."visa_summary_edit"; ?>"
                    <?php } else {  ?>   action="<?= base_url()."visa_summary_create"; ?>" <?php } ?>
                     class="parsley-examples">


                     <?php if(isset($visaSummaryData)){ ?>
                            <input type="hidden" required   name="vs_id" value="<?= $visaSummaryData->vs_id; ?>" id='vs_id' >
                    <?php } ?>

                   
                <div class="row">

                        <div class="form-group col-md-2">
                            <label for="vs_country">Country<span class="text-danger">*</span></label>
                            <select class="select2-dropdown form-control" name="vs_country" id="country_of_visit"  required>
                                <option value="">Select country</option>
                                <?php foreach ($countryData as $key => $countryValue) { ?>
                                    <option value="<?php echo $countryValue['id'];  ?>"  <?php if(isset($visaSummaryData)){ echo ($countryValue['id'] ==  $visaSummaryData->vs_country) ? 'selected' : ''; } ?> ><?php echo $countryValue['country'];  ?></option>
                                <?php } ?>
                                    
                            </select>   
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_country_code">Country Code<span class="text-danger">*</span></label>
                            <input type="text" name="vs_country_code"  parsley-trigger="change" required  class="form-control" id="vs_country_code" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_country_code; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_category">Category<span class="text-danger">*</span></label>
                            <select class="select2-dropdown form-control"  name="vs_category" id="visa_type" required>
                                <option value="">Select Category</option> 
                                <?php  foreach ($visaCategoryData as $key => $visaTypeValue) { ?>
                                            <option value="<?php echo $visaTypeValue['id'];  ?>"  <?php if(isset($visaSummaryData)){ echo ($visaTypeValue['id'] ==  $visaSummaryData->vs_category) ? 'selected' : ''; } ?> ><?php echo $visaTypeValue['category'];  ?></option>
                                <?php }  ?>
                            </select>
                        </div>


                        <div class="form-group col-md-2">
                            <label for="vs_type">VS Type<span class="text-danger">*</span></label>
                           
                            <select class="select2-dropdown form-control" id="vs_type" name="vs_type" parsley-trigger="change" >
                                <option value="normal" <?php if(isset($visaSummaryData)){ echo ('normal' ==  $visaSummaryData->vs_type) ? 'selected' : ''; } ?> >Normal</option>
                                <option value="urgent" <?php if(isset($visaSummaryData)){ echo ('urgent' ==  $visaSummaryData->vs_type) ? 'selected' : ''; } ?> >Urgent</option>
                                <option value="NA" <?php if(isset($visaSummaryData)){ echo ('NA' ==  $visaSummaryData->vs_type) ? 'selected' : ''; } ?> >NA</option>
                               
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_processing">VS Processing<span class="text-danger">*</span></label>
                            <input type="text" name="vs_processing"  parsley-trigger="change" required  class="form-control" id="vs_processing" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_processing; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_processing_base">VS Processing Base<span class="text-danger">*</span></label>
                            <input type="text" name="vs_processing_base"  parsley-trigger="change" required  class="form-control" id="vs_processing_base" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_processing_base; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_stay">VS Stay<span class="text-danger">*</span></label>
                            <input type="text" name="vs_stay"  parsley-trigger="change" required  class="form-control" id="vs_stay" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_stay; } ?>">
                        </div>
                         
                        <div class="form-group col-md-2">
                            <label for="vs_stay_base">VS Stay Base<span class="text-danger">*</span></label>
                            <input type="text" name="vs_stay_base"  parsley-trigger="change" required  class="form-control" id="vs_stay_base" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_stay_base; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_entry">VS Entry<span class="text-danger">*</span></label>
                            <input type="text" name="vs_entry"  parsley-trigger="change" required  class="form-control" id="vs_entry" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_entry; } ?>">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label for="vs_validity">VS Validity<span class="text-danger">*</span></label>
                            <input type="text" name="vs_validity"  parsley-trigger="change" required  class="form-control" id="vs_validity" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_validity; } ?>">
                        </div>
    
                        <div class="form-group col-md-2">
                            <label for="vs_validity_base">VS Validity Base<span class="text-danger">*</span></label>
                            <input type="text" name="vs_validity_base"  parsley-trigger="change" required  class="form-control" id="vs_validity_base" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_validity_base; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_fee">VS Fee<span class="text-danger">*</span></label>
                            <input type="text" name="vs_fee"  parsley-trigger="change" required  class="form-control" id="vs_fee" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_fee; } ?>">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label for="vs_fee_child">VS Fee Child<span class="text-danger">*</span></label>
                            <input type="text" name="vs_fee_child"  parsley-trigger="change" required  class="form-control" id="vs_fee_child" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_fee_child; } ?>">
                        </div>
                         
                        <div class="form-group col-md-2">
                            <label for="vs_fee_currency">VS Fee Currency<span class="text-danger">*</span></label>
                            <input type="text" name="vs_fee_currency"  parsley-trigger="change" required  class="form-control" id="vs_fee_currency" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_fee_currency; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_vfs_fee">VS VFS Fee<span class="text-danger">*</span></label>
                            <input type="text" name="vs_vfs_fee"  parsley-trigger="change" required  class="form-control" id="vs_vfs_fee" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_vfs_fee; } ?>">
                        </div>
                        
                        <div class="form-group col-md-2">
                            <label for="vs_vsf_fee_currency">VS VFS Fee Currency<span class="text-danger">*</span></label>
                            <input type="text" name="vs_vsf_fee_currency"  parsley-trigger="change" required  class="form-control" id="vs_vsf_fee_currency" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_vsf_fee_currency; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_uvs_fee">VS UVS Fee<span class="text-danger">*</span></label>
                            <input type="text" name="vs_uvs_fee"  parsley-trigger="change" required  class="form-control" id="vs_uvs_fee" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_uvs_fee; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_sgst">VS SGST<span class="text-danger">*</span></label>
                            <input type="text" name="vs_sgst"  parsley-trigger="change" required  class="form-control" id="vs_sgst" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_sgst; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_cgst">VS CGST<span class="text-danger">*</span></label>
                            <input type="text" name="vs_cgst"  parsley-trigger="change" required  class="form-control" id="vs_cgst" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_cgst; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_igst">VS IGST<span class="text-danger">*</span></label>
                            <input type="text" name="vs_igst"  parsley-trigger="change" required  class="form-control" id="vs_igst" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_igst; } ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="vs_total_fee">VS Total Fee<span class="text-danger">*</span></label>
                            <input type="text" name="vs_total_fee"  parsley-trigger="change" required  class="form-control" id="vs_total_fee" value="<?php if(isset($visaSummaryData)){ echo $visaSummaryData->vs_total_fee; } ?>">
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
                    
                        $('#vs_country_code').val(response.country_code);

                      
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