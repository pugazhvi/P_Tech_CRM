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
                        <h4 class="page-title">Category List</h4>
                        <div class="page-title-right">
                            <a  href="<?= base_url('category_create'); ?>" class="btn btn-primary waves-effect waves-light">
                                Create Category
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
                        <th>category</th>
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($categoryList as $key => $value) { ?>
                           
                            <tr  onclick="window.location.href='<?= base_url()."category_edit?id=".$value['id']; ?>'" >

                            <td><?php echo $value['category'];  ?></td>
                           
                

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