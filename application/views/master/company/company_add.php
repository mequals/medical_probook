<div class="content-wrapper">
    <div class="content">
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1 class="separator">Add New Company </h1>
                    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Company Details / Add New Company </li>
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
                        <h5 class="card-header">Add Company </h5>
                        <div class="card-body">
                            <form class="needs-validation" action="<?php echo base_url(); ?>master/company/adding_company" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Company Name <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-balance zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control tax_name text-capitalize
                                              " aria-label="Icon Left" autofocus aria-describedby="basic-icon-addon1" name="company[CompanyName]" placeholder="Enter Company Name" required="" type="text">
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
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[ContactPerson]" placeholder="Enter Contact Person" required="" type="text">
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
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[MobileNumber]"   pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Mobile Number" required="" type="text">
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
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[EmailAddress]" placeholder="Enter the Email" required="" type="email">
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
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[PhoneNumber]" maxlength="11" placeholder="Enter the Phone Number" type="text">
                                            </div>                                            
                                         </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Company logo </label>
                                            <span class="">
                                            <input type="file" id="profile_image" class="form-control" name="CompanyLogo">
                                            </span>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <a href="javascript:void(0);">
                                                <img id="imagePreview" src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png" style="width: 100px; height: 100px;margin-left:50px; border: 2px #ccc solid; " alt="User profile picture" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png">
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
                                            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="company[Address1]" placeholder="Enter Address" required=""/>
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
                                            <input type="text" class="form-control" id="exampleFormControlTextarea2" name="company[Address2]" rows="3" placeholder="Enter Address"/>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">PinCode <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" maxlength="6" pattern="[1-9]{1}[0-9]{5}" name="company[Zip_code]" placeholder="Enter the PinCode" required="" type="text">
                                            </div>                                            
                                         </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4" style="padding-top: 7px;">
                                        <label for="exampleFormControlSelect1">Country</label>
                                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                        <select class="form-control custom-select company_country" name="company[Country]" id="country_id" required>
                                          <option value="">Select Country</option>
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
                                        <select class="form-control custom-select company_state" name="company[StateID]" id="state_id" required>
                                          <option value="">Select State</option>

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
                                        <select class="form-control custom-select company_city" name="company[CityID]" id="city_id" required>
                                            <option value="">Select City</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group col-md-4" style="padding-top: 8px;">
                                        <label for="exampleFormControlSelect1">GST Registration Type:</label>
                                        <div class="input-group mb-3">
                                               <!-- <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                               </div> -->
                                        <select class="form-control" id="gst_in" name="company[GSTN_type]">
                                            <option class="gstn_disable" selected="">Select GST Types</option>
                                            <option class="gstn_enable" value="1">GST Registered - Regular</option>
                                            <option class="gstn_enable" value="2">GST Registered - Composition</option>
                                            <option class="gstn_disable" value="4" >GST Unregistered</option>
                                            <option class="gstn_disable" value="5">Consumer</option>
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">GSTIN <span style="color:red">*</span></label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control gstin" aria-label="Icon Left" aria-describedby="basic-icon-addon1" style="text-transform: uppercase;" maxlength="15" pattern="^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9]{1})+$" placeholder="Enter the GSTIN" name="company[GSTINNumber]" type="text">
                                            </div> 
                                            <small id="textHelp1" class="form-text text-muted" ><strong style="color: #000;">Not yet GST registered? Register at <a href="https://www.gst.gov.in/">Here</strong></a>  </small>                                           
                                         </div>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label class="col-form-label-lg control-label" for="largeInput">Website Link</label>
                                            <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-link zmdi-hc-fw"></i></span>
                                               </div>
                                               <input class="form-control tax_name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="company[WebsiteLink]" placeholder="Enter the Website Link" type="text">
                                            </div>                                            
                                         </div>
                                     </div>    
                                    <div class="form-group col-md-4 no-display" style="padding-top: 8px;">
                                        <label for="exampleFormControlSelect1">Status</label>
                                        <select class="form-control" name="company[CompanyStatus]" id="exampleFormControlSelect1">
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                        </select>
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
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.gstin').prop( "disabled", true );
    });
      $('select#gst_in').change(function() {
        var selectedText = $(this).find('option:selected').val();     
        if(selectedText == '1' || selectedText == '2' ){
        $('.gstin').prop( "disabled", false );
        $('.gstin').attr('required','required');        
        }
        else {
          $('.gstin').prop( "disabled", true );
        $('.gstin').removeAttr('required');
        }
      });
</script>