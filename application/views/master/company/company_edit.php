<script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1 class="separator">Edit Company</h1>
                    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Company / Edit Company </li>
                        </ol>
                    </nav>
                </div>
                <ul class="actions top-right">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                            <div class="dropdown-header">
                                Quick Actions
                            </div>
                            <a href="#" class="dropdown-item">
                            <i class="icon dripicons-clockwise"></i> Refresh
                            </a>
                            <a href="#" class="dropdown-item">
                            <i class="icon dripicons-gear"></i> Manage Widgets
                            </a>
                            <a href="#" class="dropdown-item">
                            <i class="icon dripicons-cloud-download"></i> Export
                            </a>
                            <a href="#" class="dropdown-item">
                            <i class="icon dripicons-help"></i> Support
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="page-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Edit Company</h5>
                        <div class="card-body">
                            <form class="needs-validation" action="<?php echo base_url(); ?>master/company/editing_company" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Company Name <span style="color:red">*</span></label>
                                            <input type="hidden" name="id" value="<?php echo $edit_company[0]['CompanyID']; ?>">
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-balance zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control CompanyName" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[CompanyName]" placeholder="Enter Company Name" required="" type="text">
                                            </div>                                            
                                         </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Contact Person <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control ContactPerson" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[ContactPerson]" placeholder="Enter Contact Person" required="" type="text">
                                            </div>                                            
                                         </div>
                                    </div>
                                    <div id="branch_input" class="form-group col-md-4 ">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Mobile Number <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control MobileNumber" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[MobileNumber]" placeholder="Enter Mobile Number" required="" type="text" pattern="[6-9]{1}[0-9]{9}" maxlength="10">
                                            </div>                                            
                                         </div>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Email <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control EmailAddress" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[EmailAddress]" placeholder="Enter the Email" required="" type="email">
                                            </div>                                            
                                         </div>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Phone Number</label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control PhoneNumber" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[PhoneNumber]" placeholder="Enter Phone Number" type="text" maxlength="11">
                                            </div>                                            
                                         </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="col-form-label-lg control-label" for="largeInput">Company Logo</label>
                                                <span class="">
                                                <input type="file" id="profile_image" class="form-control" name="CompanyLogo" >
                                                <input type="hidden" value="<?php echo $edit_company[0]['CompanyLogo']; ?>" name="old_file_name">
                                                </span>                                            
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <a href="javascript:void(0);">
                                              <?php 
                                              if($edit_company[0]['CompanyLogo'] != NULL){
                                                $img = $edit_company[0]['CompanyLogo'];}
                                              else{ 
                                                $img = "default_profile_image.png";} 
                                                ?>
                                                <img id="imagePreview" src="<?php echo base_url(); ?>attachments/company_logo/<?php echo $img; ?>" style="width: 75px; height: 75px; border: 2px #ccc solid; " alt="Company Logo" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png">
                                                <?php
                                                  
                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="exampleFormControlTextarea1">Address 1</label> <span style="color:red">*</span>
                                            <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="company[Address1]" rows="3" placeholder="Enter Address" required="" value="<?php echo $edit_company[0]['Address1']; ?>" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="exampleFormControlTextarea1">Address 2</label>
                                            <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                            <input type="text" class="form-control" id="exampleFormControlTextarea2" name="company[Address2]" placeholder="Enter Address" value="<?php echo $edit_company[0]['Address2']; ?>" />
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Pincode <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                               <input class="form-control Zip_code " aria-label="Icon Left" aria-describedby="basic-icon-addon1" maxlength="6" pattern="[1-9]{1}[0-9]{5}" name="company[Zip_code]" placeholder="Enter the PinCode" required="" type="text">
                                            </div>                                            
                                         </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4" style="padding-top: 7px;">
                                        <label for="exampleFormControlSelect1">Country</label>
                                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                        <select class="form-control Country custom-select company_country" name="company[Country]" id="country_id">
                                          <option>Select Country</option>
                                            <?php
                                                if (!empty($countries)) {
                                                    foreach ($countries as $country) {
                                                        ?>
                                            <option value="<?php echo ucfirst($country['id']); ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                                }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-top: 7px;">
                                        <label for="exampleFormControlSelect1">State</label>
                                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                        <select class="form-control state company_state" name="company[StateID]" id="state_id"><option>Select State</option>
                                            <?php
                                                if (!empty($states)) {
                                                    foreach ($states as $state) {
                                                        ?>
                                            <option value="<?php echo $state['id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                                }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4" style="padding-top: 7px;">
                                        <label for="exampleFormControlSelect1">City</label>
                                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                        <select class="form-control CityID company_city" name="company[CityID]" id="city_id"><option>Select City</option>
                                           <?php
                                                if (!empty($city)) {
                                                    foreach ($city as $values) {
                                                        ?>
                                            <option value="<?php echo $values['id']; ?>"><?php echo ucfirst($values['city_name']); ?></option>
                                            <?php
                                                }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    </div>


                                    <?php 

                                      if($edit_company[0]['GSTINNumber'] != NULL){ ?>
                                        
                                        <div class="form-group col-md-4" style="padding-top: 8px;">
                                        <label for="exampleFormControlSelect1">GST Registration Type:</label>
                                        <div class="input-group mb-3">
                                        <select class="form-control GSTN_type" id="gst_in" name="company[GSTN_type]">
                                            <option class="gstn_disable" value="0">Select Sub Category</option>
                                            <option class="gstn_enable" value="1">GST Registered - Regular</option>
                                            <option id="enable" class="gstn_enable" value="2">GST Registered - Composition</option>
                                            <option class="gstn_disable" value="3">GST Unregistered</option>
                                            <option class="gstn_disable" value="4">Consumer</option>
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">GSTIN<span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control gstin GSTINNumber" aria-label="Icon Left" aria-describedby="basic-icon-addon1"  maxlength="15" pattern="^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9]{1})+$" type="text" style="text-transform: uppercase;"> 
                                               
                                            </div>  
                                            <small id="textHelp1" class="form-text text-muted" ><strong style="color: #000; padding-top: 12px;">Not yet GST registered? Register at <a href="https://www.gst.gov.in/">Here</strong></a>  </small>                                         
                                         </div>
                                    </div>
<script>
  $(document).ready(function() {
  $('.gstin').prop( "disabled", true );
    $('select#gst_in').change(function() {
      var selectedText = $(this).find('option:selected').val();     
      if(selectedText == '1' || selectedText == '2' ){
      $('.gstin').prop( "disabled", false );
      $('.gstin').attr('required','required');   
      $('.GSTINNumber').val('<?php echo $edit_company[0]['GSTINNumber']; ?>');
      }
      else {
        $('.gstin').prop( "disabled", true );
        $('.gstin').removeAttr('required');
        $('.gstin').val('');
      }
    });
    $('select#gst_in').ready(function() {
      var selectedText = $(this).find('option:selected').val();     
      if(selectedText == '1' || selectedText == '2' ){
      $('.gstin').prop( "disabled", false );
      $('.gstin').attr('required','required');   
      $('.GSTINNumber').val('<?php echo $edit_company[0]['GSTINNumber']; ?>');
      }
      else {
        $('.gstin').prop( "disabled", true );
        $('.gstin').removeAttr('required');
        $('.gstin').val('');
      }
    });
});
</script>
                                    <?php  }else{

                                      }

                                     ?>
                                    



                                     <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Website Link</label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-link zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control WebsiteLink" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[WebsiteLink]" placeholder="Enter the Website Link" type="text">
                                            </div>                                            
                                         </div>
                                     </div>    
                                    <div class="form-group col-md-4 " style="padding-top: 8px;">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                        <select class="form-control" name="company[CompanyStatus]" id="exampleFormControlSelect1">
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer bg-light ">
                            <button class="btn btn-success" type="submit">Submit</button>
                            <a href="<?php echo base_url(); ?>master/company/" class="btn btn-accent">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>




<script type="text/javascript">
            $('.CompanyID').val('<?php echo $edit_company[0]['CompanyID']; ?>');
            $('.Company_type').val('<?php echo $edit_company[0]['Company_type']; ?>');
            $('.CompanyName').val('<?php echo $edit_company[0]['CompanyName']; ?>');
            // $('.CompanyLogo').val('<?php //echo $edit_company[0]['CompanyLogo']; ?>');
            $('.ContactPerson').val('<?php echo $edit_company[0]['ContactPerson']; ?>');
            $('.MobileNumber').val('<?php echo $edit_company[0]['MobileNumber']; ?>');
            $('.PhoneNumber').val('<?php echo $edit_company[0]['PhoneNumber']; ?>');
            $('.EmailAddress').val('<?php echo $edit_company[0]['EmailAddress']; ?>');
            $('.Country').val('<?php echo $edit_company[0]['Country']; ?>');
            $('.state').val('<?php echo $edit_company[0]['StateID']; ?>');
            $('.CityID').val('<?php echo $edit_company[0]['CityID']; ?>');
            $('.GSTINNumber').val('<?php echo $edit_company[0]['GSTINNumber']; ?>');
            $('.GSTN_type').val('<?php echo $edit_company[0]['GSTN_type']; ?>');
            $('.credit_days').val('<?php echo $edit_company[0]['credit_days']; ?>');
            $('.WebsiteLink').val('<?php echo $edit_company[0]['WebsiteLink']; ?>');
            $('.Remarks').val('<?php echo $edit_company[0]['Remarks']; ?>');
            $('.CompanyStatus').val('<?php echo $edit_company[0]['CompanyStatus']; ?>');
            $('.createdon').val('<?php echo $edit_company[0]['createdon']; ?>');
            $('.updatedon').val('<?php echo $edit_company[0]['updatedon']; ?>');
            $('.Zip_code').val('<?php echo $edit_company[0]['Zip_code']; ?>');

</script>