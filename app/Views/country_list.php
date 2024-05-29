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
                        <h4 class="page-title">Country List</h4>
                        <div class="page-title-right">
                            <a  href="<?= base_url('country_create'); ?>" class="btn btn-primary waves-effect waves-light">
                               Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>     
            <!-- end page title -->  
            
                       
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" >
                        <thead class="bg-light">
                        <tr>
                        <th>Country</th>
                        <th>Country Code</th>
                        <th>Code</th>
                        <th>No Of Workingdays</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($countryList as $key => $value) { ?>
                           
                            <tr  onclick="window.location.href='<?= base_url()."country_edit?id=".$value['id']; ?>'" >

                            <td><?php echo $value['country'];  ?></td>
                            <td><?php echo $value['c_code'];  ?></td>
                            <td><?php echo $value['code'];  ?></td>
                            <td><?php echo $value['no_of_workingdays'];  ?></td>
                            <td><?php if($value['active'] == 1): ?>
                                                <span style="color:green">Active</span>
                                            <?php else: ?>
                                                <span style="color:red">Inactive</span>
                                            <?php endif; ?>
                            </td>
                            <td>
                                <?php if($value['active'] == 1): ?>
                                    <a class="dropdown-item" data-id="<?php echo $value['id']; ?>" data-is_active="<?php echo $value['active']; ?>" title="Deactivate" onclick="statusChange(event,this)" ><i class="mdi mdi-account-outline" style="font-size:20px"></i><i class="fa fa-times mr-1" style="font-size: x-small;"></i>Deactivate</a>
                                <?php else: ?>
                                    <a class="dropdown-item" data-id="<?php echo $value['id']; ?>" data-is_active="<?php echo $value['active']; ?>" title="Activate" onclick="statusChange(event, this)" ><i class="mdi mdi-account-outline mr-1" style="font-size:20px"></i>Activate</a>
                                <?php endif; ?>
                            </td>

                        </tr>  
                             
                        <?php } ?>
                           
                               
                              

                           
                          

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end col -->
    </div>
 



    </div> <!-- container -->

</div> <!-- content -->

    



<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


<script>
   

  $(document).ready(function() {
    $('#datatable-buttons').DataTable({
      "ordering": false
    });
  });


  function statusChange(event,params) {
        event.stopPropagation();

        var status = params.getAttribute('data-is_active');
        var id = params.getAttribute('data-id');
        if(status == 1){
            var active= 0;
        }else{
            var active= 1;
        }

        var formData = {
                id: id,
                active: active 
            };
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()."status_country"?>', 
                data: formData,
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    if (response.status == "success") {
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error response here
                    console.error(xhr.responseText);
                }
            });


    }


</script>