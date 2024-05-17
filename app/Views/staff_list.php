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
                                Create Staff
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                            <?php foreach ($staffList as $key => $value) { ?>

                                <tr>
                                    <td> <?php echo $value['name'];  ?></td>
                                    <td><?php echo $value['email'];  ?></td>
                                    <td><?php echo $value['mobile_no'];  ?></td>
                                    <td><?php echo $value['role'];  ?></td>
                                    
                                    <td><a href="<?= base_url()."staff_edit?staff_id=".md5($value['staff_id']); ?>" ><i class='mdi mdi-pencil-outline mr-1'></i>Edit</a></td>
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
</script>