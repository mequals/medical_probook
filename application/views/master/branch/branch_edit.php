<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Branch  / Hub Edit Details</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Branch  / Hub Edit Details</li>
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
                  <h5 class="card-header">Edit Branch  / Hub</h5>
                  <div class="card-body">
                     <form action="<?php echo base_url(); ?>master/branch/updating_branch" method="post" data-toggle="validator" role="form">
                        
                        <div class="form-row">
                           <input type="hidden" name="branch_id" value="<?php echo $branch[0]['id']; ?>">
                          
                           <div class="form-group col-md-4">
                              <?php 
                                 if($branch[0]['hub_code'] != NULL){
                              ?>
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Hub Code</label> <span style="color:red">*</span>
                                 <input type="text" class="form-control" name="branch[hub_code]" value="<?php echo $branch[0]['hub_code'] ?>" id="inputName" placeholder="#" readonly="" required>
                              </div>
                              <?php  }else{ ?>                          
                              <div class="form-group ">
                                 <label class="col-form-label-lg control-label" for="largeInput">Branch Code</label> <span style="color:red">*</span>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-slack"></i></span>
                                    </div>
                                 <input type="text" class="form-control" name="branch[branch_code]" value="<?php echo $branch[0]['branch_code'] ?>" id="inputName" placeholder="#" readonly="" required>
                               </div>
                              </div>                          

                              <?php } ?>                              
                           </div>
                           <div class="form-group col-md-4  ">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Branch  / Hub Name</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="la la-building"></i></span>
                                    </div>
                                 <input type="text" class="form-control"  autofocus name="branch[type_name]" id="inputName" placeholder="Enter Hub/Branch Name" value="<?php echo $branch[0]['type_name']; ?>" required>
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Mobile Number</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                    </div>
                                 <input type="text" class="form-control" name="branch[Mobile]" id="inputName" pattern="[6-9]{1}[0-9]{9}" maxlength="10" placeholder="Enter Mobile Number" value="<?php echo $branch[0]['mobile']; ?>" required>
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Contact Person</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                   <div class="input-group-prepend">
                                      <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                   </div>
                                 <input type="text" class="form-control" name="branch[contact_person]" id="inputName" placeholder="Enter Contact Person" value="<?php echo $branch[0]['contact_person']; ?>" required>
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Email</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                    </div>
                                 <input type="text" class="form-control" name="branch[email]" id="inputName" placeholder="Enter Email" value="<?php echo $branch[0]['email']; ?>" required>
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4" style="padding-top: 7px;">
                              <label for="exampleFormControlSelect1">Country</label>
                              <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                              <select class="form-control country_val company_country" name="branch[country_id]" id="country_id"><option>Select Country</option>
                               <?php
                                    if (!empty($countries)) {
                                        foreach ($countries as $country) {
                                            ?>
                                            <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                              </select>
                            </div>
                           </div>
                           <div class="form-group col-md-4">
                              <label for="exampleFormControlSelect1">State</label>
                              <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                              <select class="form-control state_val company_state" name="branch[state_id]" id="state_id" ><option>Select State</option>
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
                           <div class="form-group col-md-4">
                              <label for="exampleFormControlSelect1">City</label>
                              <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                              <select class="form-control city_val company_city" name="branch[city_id]" id="city_id" >
                                <option>Select City</option>
                                 <?php
                                    if (!empty($states)) {
                                        foreach ($city as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo ucfirst($value['city_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                              </select>
                            </div>
                           </div>
                           <div class="form-group col-md-4" style="margin-top:  -7px;">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Pincode</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                 <input type="text" class="form-control" name="branch[Pincode]" id="inputName" placeholder="Enter Pincode" value="<?php echo $branch[0]['pincode']; ?>" required maxlength="6" pattern="[1-9]{1}[0-9]{5}">
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="exampleFormControlTextarea1">Address</label>
                                 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                 <input type="text" class="form-control" id="exampleFormControlTextarea1" name="branch[address]" placeholder="Enter Address"  required="" value="<?php echo $branch[0]['address']; ?>" />
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
                                 <input type="text" class="form-control" id="exampleFormControlTextarea1" name="branch[address]" placeholder="Enter Address"  required="" value="<?php echo $branch[0]['address']; ?>" />
                               </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4" style="padding-top: 7px;">
                              <label for="exampleFormControlSelect1">Status</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                              <select class="form-control status" name="branch[status]" id="exampleFormControlSelect1">
                                 <option value="1">Active</option>
                                 <option value="2">Inactive</option>
                              </select>
                            </div>
                           </div>

                           <?php
                              if($branch[0]['gst_no'] != NULL){                               
                           ?>
                               <div class="form-group col-md-4 give_gst_form " style="padding-top: 8px;">
                                       <label for="exampleFormControlSelect1">GST Registration Type:</label>
                                       <select class="form-control gstType" id="gst_in" name="branch[gstType]">
                                          <option class="gstn_disable" >Select GST Types</option>
                                          <option class="gstn_enable" value="1">GST Registered - Regular</option>
                                          <option id="enable" class="gstn_enable" value="2">GST Registered - Composition</option>
                                          <option class="gstn_disable" value="3">GST Unregistered</option>
                                          <option class="gstn_disable" value="4">Consumer</option>
                                       </select>
                                    </div>
                                    
                                    <div class="form-group col-md-4 give_gst_form">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">GSTIN <span style="color:red">*</span></label>
                                          
                                             <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                                </div>
                                                <input class="form-control gstin" aria-label="Icon Left" aria-describedby="basic-icon-addon1" placeholder="Enter the GSTIN" name="branch[gst_no]" type="text"></div>
                                             </div>
                                             <small id="textHelp1" class="form-text text-muted" ><strong style="color: #000;">Not yet GST registered? Register at <a href="https://www.gst.gov.in/">Here</strong></a>  </small> 
                                    </div> 
                           <?php
                              }else{
                               
                              }                           
                           ?>

                                    
                        </div>
                  </div>
                  <div class="card-footer bg-light ">
                  <button class="btn btn-success" type="submit">Submit</button>
                  <a href="<?php echo base_url(); ?>master/branch/" class="btn btn-accent">Cancel</a>
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
   function hub_activate() {
      //alert('hub Activated');
      $('#hub_input').removeClass('no-display');
      $('#branch_input').addClass('no-display');
   }

   function branch_activate() {
      //alert('Branch Activated');
      $('#branch_input').removeClass('no-display');
      $('#hub_input').addClass('no-display');
   }

   window.onload = function() {
     $('.company').val('<?php  echo $branch[0]['company_id']; ?>');
     $('.status').val('<?php  echo $branch[0]['status']; ?>');
     $('.branch_code').val('<?php  echo $branch[0]['branch_code']; ?>');
     $('.hub_code').val('<?php  echo $branch[0]['status']; ?>');
     $('.country_val').val('<?php  echo $branch[0]['country_id']; ?>');
     $('.state_val').val('<?php  echo $branch[0]['state_id']; ?>');
     $('.gstType').val('<?php  echo $branch[0]['gstType']; ?>');
     $('.gstin').val('<?php  echo $branch[0]['gst_no']; ?>');

     // No Display For Gstin Code
     $('#state_id').change(function(){
       $('.give_gst_form').removeClass('no-display');
       $('.gstin').val('');
       if($('#state_id').val() == '1'){
       $('.give_gst_form').addClass('no-display');
       }
     });

     // When Page Load Box Disabled
     
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
   };

</script>