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
        <div class="col-2"></div>
            <div class="col-8">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">
                        
                     <?php if(isset($countryData)){ echo 'Edit Country'; }else{ echo 'Create Country'; } ?>
                           
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
            <div class="col-2"></div>
        </div>     
        <!-- end page title -->  
 
 
        <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    

                <form method="post" 
                    <?php if(isset($countryData)){ ?>  action="<?= base_url()."country_edit"; ?>"
                    <?php } else {  ?>   action="<?= base_url()."country_create"; ?>" <?php } ?>
                     class="parsley-examples">


                     <?php if(isset($countryData)){ ?>
                            <input type="hidden" required   name="id" value="<?= $countryData->id; ?>" id='id' >
                    <?php } ?>

                   
                <div class="row">

                        <div class="form-group col-md-12">
                            <label for="country">Country<span class="text-danger">*</span></label>
                            <input type="text" name="country"  parsley-trigger="change" required  class="form-control" id="country" value="<?php if(isset($countryData)){ echo $countryData->country; } ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="c_code">Country Code<span class="text-danger">*</span></label>
                            <input type="text" name="c_code"  parsley-trigger="change" required  class="form-control" id="c_code" value="<?php if(isset($countryData)){ echo $countryData->c_code; } ?>">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="code">Code</label>
                            <input type="text" name="code"  parsley-trigger="change"   class="form-control" id="code" value="<?php if(isset($countryData)){ echo $countryData->code; } ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="no_of_workingdays">No Of Workingdays<span class="text-danger">*</span></label>
                            <input type="text" name="no_of_workingdays"  parsley-trigger="change" required  class="form-control" id="no_of_workingdays" value="<?php if(isset($countryData)){ echo $countryData->no_of_workingdays; } ?>">
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
        <div class="col-lg-2"></div>
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
                        if (response.count > 0) {
                       
                        $('#visa_type option:not(:first)').remove();

                     
                        $.each(response.data, function(index, item) {
                            $('#visa_type').append($('<option>', {
                                value: item.id,
                                text: item.category
                            }));
                        });

                        $('#vs_country_code').val(response.country_code);

                      
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