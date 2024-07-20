<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <!-- Start Content-->
    <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
         <div class="col-1"></div>
                <div class="col-10">
                    <div class="page-title-box page-title-box-alt">
                        <h4 class="page-title">Visa Info</h4>
                        <div class="page-title-right">
                            <a  href="<?= base_url('visa_summary_create'); ?>" class="btn btn-primary waves-effect waves-light">
                                Create New
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>     
            <!-- end page title -->  
            
                       
    
    <div class="row">
    <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" >
                        <thead class="bg-light">
                        <tr>
                        <th>Action</th>
                        <th>Country</th>
                        <th>Category</th>
                        <th>VS Type</th>
                        <th>VS Processing</th>
                        <th>VS Stay</th>
                        <th>VS Entry</th>
                        <th>VS Validity</th>
                        <th>VS Fee</th>
                        <th>VS Fee Child</th>
                        <th>VS Fee Currency</th>
                        <th>VS VFS Fee</th>
                        <th>VS VFS Fee Currency</th>
                        <th>VS UVS Fee</th>
                        <th>VS SGST</th>
                        <th>VS CGST</th>
                        <th>VS IGST</th>
                        <th>VS Total Fee</th>
                       
                        </tr>
                        </thead>

                        <tbody class="font-14">
                       
                        <?php foreach ($visaSummaryList as $key => $value) { ?>
                           
                            <tr >
                            <td > <a href='<?= base_url()."visa_summary_edit?vs_id=".$value['vs_id']; ?>'><i class='mdi mdi-pencil-outline mr-1'></i> Edit</a></td>
                            <td><?php echo $value['country_name'];  ?> - <?php echo $value['vs_country_code'];  ?></td>
                            <td><?php echo $value['category_name'];  ?></td>
                            <td><?php echo $value['vs_type'];  ?></td>
                            <td><?php echo $value['vs_processing'];  ?>&nbsp;<?php echo $value['vs_processing_base'];  ?></td>
                            <td><?php echo $value['vs_stay'];  ?>&nbsp;<?php echo $value['vs_stay_base'];  ?></td>
                            <td><?php echo $value['vs_entry'];  ?></td>
                            <td><?php echo $value['vs_validity'];  ?>&nbsp;<?php echo $value['vs_validity_base'];  ?></td>
                            <td><?php echo $value['vs_fee'];  ?></td>
                            <td><?php echo $value['vs_fee_child'];  ?></td>
                            <td><?php echo $value['vs_fee_currency'];  ?></td>
                            <td><?php echo $value['vs_vfs_fee'];  ?></td>
                            <td><?php echo $value['vs_vsf_fee_currency'];  ?></td>
                            <td><?php echo $value['vs_uvs_fee'];  ?></td>
                            <td><?php echo $value['vs_sgst'];  ?></td>
                            <td><?php echo $value['vs_cgst'];  ?></td>
                            <td><?php echo $value['vs_igst'];  ?></td>
                            <td><?php echo $value['vs_total_fee'];  ?></td>


                            

                        </tr>  
                             
                        <?php } ?>
                           
                               
                              

                           
                          

                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-1"></div>   
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