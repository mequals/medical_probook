<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Add Branch  / Hub Details</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item">Branch  / Hub Details</li>
                     <li class="breadcrumb-item active" aria-current="page">Add Branch  / Hub Details</li>
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
                  <h5 class="card-header">Add Branch  / Hub</h5>
                  <div class="card-body">
                     <form action="<?php echo base_url(); ?>master/branch/adding_branch_insert" method="post" data-toggle="validator" role="form">
                        <div class="form-row">
                           <div class="form-group col-md-4 no-display">
                              <label for="exampleFormControlSelect1">Select Company</label>
                              <input type="text" name="branch[company_id]" value="<?php echo $company[0]['CompanyID']; ?>">
                           </div>
                           <div class="form-group col-md-4 no-display">
                              <label class="col-form-label-lg control-label" for="largeInput">Company</label> <span style="color:red">*</span>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                 </div>
                                 <input type="text" class="form-control" name="branch[contact_person]" id="inputName" placeholder="Enter Contact Person" value="1" required>
                              </div>
                           </div>
                           <div class="form-group col-md-4 text-center">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Choose Branch Type</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadioInline1" name="blank" class="custom-control-input" value="HUB-000<?php echo $hub_code; ?>" checked="" onclick="hub_activate()">
                                 <label class="custom-control-label" for="customRadioInline1">HUB</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadioInline2" name="blank" class="custom-control-input" value="BRANCH-000<?php echo $branch_code; ?>"  onclick="branch_activate()">
                                 <label class="custom-control-label" for="customRadioInline2">Branch</label>
                              </div>
                           </div>
                           <div id="hub_input" class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Hub Code</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="la la-slack"></i></span>
                                    </div>
                                    <input type="text" class="form-control hub_code_box" name="branch[hub_code]" value="" id="hub_input_val" placeholder="#" readonly>
                                 </div>
                              </div>
                           </div>
                           <div id="branch_input" class="form-group col-md-4 no-display">
                              <div class="form-group ">
                                 <label class="col-form-label-lg control-label" for="largeInput">Branch Code</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-slack"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="branch[branch_code]" value="" id="branch_input_val" placeholder="#" readonly>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group ">
                                 <label class="col-form-label-lg control-label" for="largeInput">Branch  / Hub Name</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="la la-building"></i></span>
                                    </div>
                                    <input type="text" class="form-control" autofocus name="branch[type_name]" id="inputName" placeholder="Enter Branch  / Hub Name" required>
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
                                    <input type="text" class="form-control" name="branch[contact_person]" id="inputName" placeholder="Enter Contact Person" required>
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
                                    <input type="text" class="form-control" name="branch[mobile]" id="inputName" placeholder="Enter Mobile Number" required  pattern="[6-9]{1}[0-9]{9}" maxlength="10">
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
                                    <input type="email" class="form-control" name="branch[email]" id="inputName" placeholder="Enter Email" required>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4" style="padding-top: 8px;">
                              <label for="exampleFormControlSelect1">Country</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                 </div>
                                 <select class="form-control company_country" name="branch[country_id]" id="country_id">
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
                           <div class="form-group col-md-4" style="padding-top: 8px;">
                              <label for="exampleFormControlSelect1">State</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text "  id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                 </div>
                                 <select class="form-control company_state" name="branch[state_id]" id="state_id">
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
                           <div class="form-group col-md-4" style="padding-top: 8px;">
                              <label for="exampleFormControlSelect1">City</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                 </div>
                                 <select class="form-control company_city" name="branch[city_id]" id="city_id">
                                    <option value="">Select City</option>
                                 </select>
                              </div>
                           </div>
                           
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="exampleFormControlTextarea1">Address 1</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="branch[address]" placeholder="Enter Address" required=""/>
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
                                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="branch[address2]" placeholder="Enter Address" required=""/>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4">
                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">Pincode</label> <span style="color:red">*</span>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="branch[pincode]" id="inputName" placeholder="Enter Pincode" required maxlength="6" pattern="[1-9]{1}[0-9]{5}">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-4 no-display" style="padding-top: 8px;">
                              <label for="exampleFormControlSelect1">Status</label>
                              <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                 <select class="form-control" name="branch[status]" id="exampleFormControlSelect1">
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group col-md-4 give_gst_form no-display" style="padding-top: 8px;">
                              <label for="exampleFormControlSelect1">GST Registration Type:</label>
                              <select class="form-control" id="gst_in" name="branch[gstType]">
                                 <option class="gstn_disable" >Select GST Types</option>
                                 <option class="gstn_enable" value="1">GST Registered - Regular</option>
                                 <option id="enable" class="gstn_enable" value="2">GST Registered - Composition</option>
                                 <option class="gstn_disable" value="3">GST Unregistered</option>
                                 <option class="gstn_disable" value="4">Consumer</option>
                              </select>
                           </div>
                           <div class="form-group col-md-4 give_gst_form no-display">

                              <div class="form-group">
                                 <label class="col-form-label-lg control-label" for="largeInput">GSTIN <span style="color:red">*</span></label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                    </div>
                                    <input class="form-control " aria-label="Icon Left" aria-describedby="basic-icon-addon1" style="width:10px;" id="gst_no_prefix" readonly placeholder="Enter the GSTIN" name="gst_no_prefix" type="text" value="">
                                    <input name="gst_no" class="gstin" placeholder="Enter the GSTIN" type="text" value="">
                                 </div>
                              </div>

                              <small id="textHelp1" class="form-text text-muted" ><strong style="color: #000;">Not yet GST registered? Register at <a href="https://www.gst.gov.in/" target="_blank">Here</strong></a>  </small> 
                           </div>
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
   window.onload = function() {
      
   };
   
   
   
   function hub_activate() {
   //alert('hub Activated');
   $('#hub_input').removeClass('no-display');
   $('#branch_input').addClass('no-display');
   $('#branch_input_val').val('');
   $('#hub_input_val').val('HUB-000<?php echo $hub_code; ?>');
   }
   function branch_activate() {
   //alert('Branch Activated');
   $('#branch_input').removeClass('no-display');
   $('#hub_input').addClass('no-display');
   $('#hub_input_val').val('');
   $('#branch_input_val').val('BRANCH-000<?php echo $branch_code; ?>');
   }
</script>
<script type="text/javascript">
   window.onload = function() {
   $('#state_id').change(function(){
   
   $('.give_gst_form').removeClass('no-display');
   $('.gstin').val('');
   if($('#state_id').val() == '1'){
   $('.give_gst_form').addClass('no-display');
   }
   id = $('#state_id').val();
   
   var data_string="id="+id;
   
   console.log(data_string);
   $.ajax({   
    url: "<?php echo base_url(); ?>master/Branch/get_statecode",
    async: false,
    type: "POST",    
    data: data_string, 
    dataType: "json", 
    success: function(data) { 
          
   if(data!=null){
      $("#statecode").text(data[0]['state_code']);
      $("#gst_no_prefix").val(data[0]['state_code']);     
     
   }
     
   }
   });
   
   
   
   });
   
   $(document).ready(function() {
      $('.hub_code_box').val('HUB-000<?php echo $hub_code; ?>');
   $('.gstin').prop( "disabled", true );
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
   });
   };
   
   
   //          function get_code(){
   //    id = $('#state_id').val();
   //    var data_string="id="+id;
   //    alert("hi");
   //    console.log(data_string);
   //      $.ajax({   
   //        url: "<?php echo base_url(); ?>master/Branch/get_statecode",
   //        async: false,
   //        type: "POST",    
   //        data: data_string, 
   //        dataType: "json", 
   //        success: function(data) { 
          
   //       if(data!=null){
   //          $("#statecode").text(data);
     
   
   //       }
     
   //  }
   //  });
   // }
</script>