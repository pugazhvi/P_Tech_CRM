    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <style>
          @media (min-width: 992px) {
        body[data-layout-mode=horizontal] .content-page {
            padding: calc(15px + 70px) 12px 65px 12px;
         }
        }
       #is-visa-approve-display {
        display: flex;
       align-items: center;
       margin-top: 5px;
       }
       #notes{
        overflow-y: scroll;
        height: 363px;
        padding-right: 15px;
       }
       #notes::-webkit-scrollbar-track {
            background-color: #f5f5f5;
        }
        #notes::-webkit-scrollbar-thumb {
            background-color: #1aa79c;
            border-radius: 10px;
            height: 5px;
        }
        #notes::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            background-color: #f5f5f5;
        }
      
    </style>
    <div class="content-page">
        <!-- Start Content-->
        <div class="container-fluid">
                
              
  
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <!-- <div class="form-group row">
                        <div class="col-md-6">    
                            <p class="text-primary">#MN2048</p>
                        </div>
                        <div class="col-md-6">   
                        <button type="button" class="btn btn-secondary waves-effect float-right">Go Back</button>
                        </div>
                    </div> -->
                
                    

                

                    <div class="dropdown float-right">

                  

                    <a href="<?= base_url('client_home'); ?>"  title="Close" style="font-size: 22px;" >
                    <i class='mdi mdi-window-close mr-1'></i>
                    </a>

                    </div>

                    <p class="text-primary"><?= $visaData->request_id; ?></p>
                    <h4 class="mb-1"><?= $visaData->agency; ?>-<?= $visaData->branch; ?> 
                    <span class="mdi mdi-information-outline" style="color: green;font-size: 15px;" data-toggle="modal" data-target="#centermodal"></span>
                    </h4>  
                 

                    <div class="text-muted mb-4">
                            <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                    <i class="ri-user-3-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Traveller</p>
                                        <h5 class="mt-0 text-truncate">
                                           <?= $visaData->traveller_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                        <i class="ri-passport-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Passport No</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->passport_no; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                       <i class="ri-map-pin-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Country</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->country_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                           
                           
                            <div class="col-lg-3 col-sm-6">
                                <div class="media mt-3">
                                    <div class="mr-2 align-self-center">
                                        <i class="ri-calendar-event-line h2 m-0 text-muted"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <p class="mb-1">Visa Type</p>
                                        <h5 class="mt-0 text-truncate">
                                        <?= $visaData->visa_type_name; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            </div>


                            <div class="row">

                                <div class="col-lg-3 col-sm-6">
                                    <div class="media mt-3">
                                        <div class="mr-2 align-self-center">
                                       
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <p class="mb-1">Trip Approval No</p>
                                            <h5 class="mt-0 text-truncate">
                                            <?= $visaData->trip_approval_no; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="col-lg-3 col-sm-6">
                                    <div class="media mt-3">
                                        <div class="mr-2 align-self-center">
                                       
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <p class="mb-1">Request Created At</p>
                                            <h5 class="mt-0 text-truncate">
                                            <?php echo date('d-M-Y h:i A', strtotime( $visaData->created_at )); ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="media mt-3">
                                        <div class="mr-2 align-self-center">
                                        
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <p class="mb-1">Current Status</p>
                                            <h5 class="mt-0 text-truncate">
                                            <?= $visaNotesData[0]['status_value']; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="media mt-3">
                                        <div class="mr-2 align-self-center">
                                      
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <p class="mb-1">Request Updated At</p>
                                            <h5 class="mt-0 text-truncate">
                                            <?php echo date('d-M-Y h:i A', strtotime( $visaNotesData[0]['updated_at'] )); ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                </div>

                                <div class="row">

                               

                                </div>

                            
                    </div>



                

                    
                </div>
            </div>

        
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body" id="notes-display">
                    <h4 class="mb-4 mt-0 font-16" id="notes-count">Notes (<?= count($visaNotesData)?>)</h4>
                   
                    <div class="clerfix"></div>
                    <div id="notes">
                    <?php foreach ($visaNotesData as $key => $notes) {

                        if($notes['status'] == 5)
                        { 
                            $text = ($notes['is_visa_approved'] == 1 ) ? ' (Visa Approved)' : ' (Visa Rejected)';
                            $statusValue = $notes['status_value'].$text; 
                        }else if($notes['status'] == 6)
                        { 
                            $statusValue = $notes['status_value']." (AWB : ".$notes['awb_no'].")"; 
                        }else
                        { 
                            $statusValue = $notes['status_value']; 
                        } 
                        ?>

                    <div class="media mb-3 pb-3 border-bottom">
                        <div class="media-body">
                            
                            <h5 class="mt-0"><?php echo  $statusValue; ?><small class="text-muted float-right"></small></h5>
                            <?php echo $notes['notes']; ?>

                            <br/>

                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2">
                            <i class="mdi mdi-account-circle"></i> <?php echo $notes['created_by']; ?> 
                            </a>

                            <small class="text-muted float-right mt-2">
                            <i class="mdi mdi-calendar-clock"></i><?php echo date('d-M-Y h:i A', strtotime($notes['created_at'])); ?>
                            </small>

                        </div>
                    </div>

                    <?php } ?>
                    </div>
                   
                </div> <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>

    </div>

            
                
            </div> <!-- container -->

    </div> <!-- content -->

        

    </div>
  <!-- Center modal content -->
  <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Client Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h5>Agency-Location</h5>
                    <p ><?= $reqClientData->agency; ?>-<?= $reqClientData->branch; ?>-</p>
                                      
                    <h5>Email</h5>
                    <p ><?= $reqClientData->email; ?></p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

   
