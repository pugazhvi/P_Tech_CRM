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
                        <h4 class="page-title">Staff List</h4>
                        <div class="page-title-right">
                            <a  href="<?= base_url('staff_create'); ?>" class="btn btn-primary waves-effect waves-light">
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

                
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Branch</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                            <?php foreach ($staffList as $key => $value) { ?>

                                <tr>
                                    <td> <?php echo $value['branch_name'];  ?></td>
                                    <td> <?php echo $value['name'];  ?></td>
                                    <td><?php echo $value['email'];  ?></td>
                                    <td><?php echo $value['mobile_no'];  ?></td>
                                    <td><?php echo $value['role'];  ?></td>
                                    <td><?php if($value['is_active'] == 1): ?>
                                                <span style="color:green">Active</span>
                                            <?php else: ?>
                                                <span style="color:red">Inactive</span>
                                            <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?= base_url()."staff_edit?staff_id=".md5($value['staff_id']); ?>" ><i class='mdi mdi-pencil-outline mr-1'></i>Edit</a>
                                                <?php if($value['is_active'] == 1): ?>
                                                    <a class="dropdown-item" data-id="<?php echo $value['staff_id']; ?>" data-is_active="<?php echo $value['is_active']; ?>" title="Deactivate" onclick="statusChange(this)" ><i class="mdi mdi-account-outline" style="font-size:20px"></i><i class="fa fa-times mr-1" style="font-size: x-small;"></i>Deactivate</a>
                                                <?php else: ?>
                                                    <a class="dropdown-item" data-id="<?php echo $value['staff_id']; ?>" data-is_active="<?php echo $value['is_active']; ?>" title="Activate" onclick="statusChange(this)" ><i class="mdi mdi-account-outline mr-1" style="font-size:20px"></i>Activate</a>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            <?php } ?>
                               
                           
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
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


    function statusChange(params) {
        var status = params.getAttribute('data-is_active');
        var staff_id = params.getAttribute('data-id');
        if(status == 1){
            var is_active= 0;
        }else{
            var is_active= 1;
        }

        var formData = {
                staff_id: staff_id,
                is_active: is_active 
            };
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()."status_staff"?>', 
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