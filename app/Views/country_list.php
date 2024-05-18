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
                                Create Country
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
                        
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($countryList as $key => $value) { ?>
                           
                            <tr  onclick="window.location.href='<?= base_url()."country_edit?id=".$value['id']; ?>'" >

                            <td><?php echo $value['country'];  ?></td>
                            <td><?php echo $value['c_code'];  ?></td>
                            <td><?php echo $value['code'];  ?></td>
                            <td><?php echo $value['no_of_workingdays'];  ?></td>
                

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
</script>