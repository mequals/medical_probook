<script>
   <?php
         if ($this->session->flashdata('vendor_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('vendor_success')."';";
            echo "success(data);";
         }
   ?>
</script>
<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Ventors / Suppliers  </h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Inventory Management</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Ventors / Suppliers</li>
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
            <div class="col-12">
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                        Manage Ventors / Suppliers	
                     </div>
                     <div style="float: right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="14" && $section_list['acc_add']=="1"){
                                      ?>
                        <button type="button" class="btn btn-success  btn-floating" data-toggle="modal" data-target=".addnewventor">
                                             Add New Ventors / Suppliers
                                          </button><?php } } } ?>
                     </div>
                  </h5>
                  <div class="card-body">
                     <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="14" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th class="text-center">Action</th><?php } } }?>
                              <th>Ventors Name</th>
                              <th>Ventors Type</th>
                              <th>Company Name</th>
                              <th>Email</th>
                              <th>Mobile no</th>                              
                              <th>Status</th>                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              if (!empty($Ventors)) {
                                  $s = 1;
                                  foreach ($Ventors as $list) {
                                      ?>
                           <tr>
                              <td ><?php echo $s; ?></td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="14" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <td class="text-center">  <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="14" && $section_list['acc_edit']=="1"){
                                      ?>                               
                                 <a href="#" onclick="edit_ventors('<?php echo ucfirst($list['Supplier_type_id']); ?>','<?php echo ucfirst($list['id']); ?>','<?php echo ucfirst($list['Ventor_code']); ?>','<?php echo ucfirst($list['Ventor_name']); ?>','<?php echo ucfirst($list['Company_name']); ?>','<?php echo ucfirst($list['Mobile_number']); ?>','<?php echo ucfirst($list['Email_id']); ?>','<?php echo ucfirst($list['Phone_number']); ?>','<?php echo ucfirst($list['Gst_reg_type']); ?>','<?php echo ucfirst($list['Gstin']); ?>','<?php echo ucfirst($list['Branch_id']); ?>','<?php echo ucfirst($list['S_address1']); ?>','<?php echo ucfirst($list['S_address2']); ?>','<?php echo ucfirst($list['S_country_id']); ?>','<?php echo ucfirst($list['S_state_id']); ?>','<?php echo ucfirst($list['S_city_id']); ?>','<?php echo ucfirst($list['S_pincode']); ?>','<?php echo ucfirst($list['B_address1']); ?>','<?php echo ucfirst($list['B_address2']); ?>','<?php echo ucfirst($list['B_country_id']); ?>','<?php echo ucfirst($list['B_state_id']); ?>','<?php echo ucfirst($list['B_city_id']); ?>','<?php echo ucfirst($list['B_pincode']); ?>','<?php echo ucfirst($list['Notes']); ?>','<?php echo ucfirst($list['Attatchments']); ?>')" id="usertypeedit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target=".editventor"  style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a> <?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="14" && $section_list['acc_delete']=="1"){?> 
                                 <a href="" onclick="delete_customer('<?php echo ucfirst($list['id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a><?php } } }?>                                      
                              </td><?php } } }?>
                              <td class="s_no"><?php echo ucfirst($list['Ventor_name']); ?></td>
                              
                              <td class="s_no"><?php
                                    if (!empty($Supplier_type)) {
                                        foreach ($Supplier_type as $value) {
                                          if($value['id']==$list['Supplier_type_id']){echo $value['Supplier_type'];}}}
                                            ?>
                                         
                                    </td>
                                    <td class="s_no"><?php echo ucfirst($list['Company_name']); ?></td>
                                    <td class="s_no"><?php echo ucfirst($list['Email_id']); ?></td>
                                    <td class="s_no"><?php echo ucfirst($list['Mobile_number']); ?></td>
                              
                                         
                              <td><span class="badge badge-<?php echo ($list['Status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['Status'] == 1) ? 'Active' : 'In-Active'; ?></span></td>
                              
                           </tr>
                           <?php
                              $s++;
                              }
                              }
                              ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
</div>	
<!-- Model Execution -->

<div class="modal fade addnewventor" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content" >
               <div class="modal-header">
                  <h5 class="modal-title" id="ModalTitle2">Add New Ventors / Suppliers</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" class="zmdi zmdi-close"></span>
                  </button>
               </div>
              <form action="<?php echo base_url();?>master/Ventors/ventors_add" method="POST">
               <div class="modal-body" style="overflow-y: scroll;">
                     <div class="form-row">
                                    <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Ventor/Supplier Code</label>
                                          <input type="text" class="form-control" id="Ventor_code" name="ventors[Ventor_code]" disabled  value="<?php echo $Prefix[0]['vendor_prefix'];?>-0000<?php echo $Ventor_code; ?>">
                                       
                                       </div>
                                       
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Ventor / Supplier Type</label>
                                       <select class="form-control" required=""  name="ventors[Supplier_type_id]" id="Supplier_type_id">
                                          <option>Select GST Type</option>
                                          <?php
                                    if (!empty($Supplier_type)) {
                                        foreach ($Supplier_type as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($value['Supplier_type']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                          
                                       </select>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label    for="exampleFormControlSelect1">Ventors / Suppliers Name</label> <span class="text-danger">*</span>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[Ventor_name]" id="inputName" placeholder="Ventor Name" required="">

                                       <input type="hidden"  id="Ventor_code" name="ventors[Ventor_code]"  value="<?php echo $Prefix[0]['vendor_prefix'];?>-0000<?php echo $Ventor_code; ?>">
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Company Name</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-balance zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[Company_name]" id="inputName" placeholder="Company Name" required="">
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Mobile No</label> <span class="text-danger">*</span>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[Mobile_number]" id="inputName" placeholder="Mobile Number" pattern="[6-9]{1}[0-9]{9}" maxlength="10" >
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Email Id</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[Email_id]" id="inputName" placeholder="Email Address" >
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Phone No</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[Phone_number]" id="inputName" placeholder="Phone Number" maxlength="11">
                                       </div>
                                       
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">GST Registration Type</label>
                                       <select class="form-control Gst_reg_type" onchange="enablegstn()" name="ventors[Gst_reg_type]" id="gst_reg_type">
                                          <option>Select GST Type</option>
                                          <option value="1" class="gstn_enable">GST Registered - Regular</option>
                                          <option value="2" class="gstn_enable">GST Registered - Composition</option>
                                          <option value="3" class="gstn_disable">GST Unregistered</option>
                                          <option value="4" class="gstn_disable">Consumer</option>
                                       </select>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">GSTIN</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control gstin " name="ventors[Gstin]" id="GSTIN"  placeholder="GSTIN" maxlength="15" pattern="^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9]{1})+$">
                                       </div>
                                       <small id="textHelp1" class="form-text text-muted text-center">Not yet GST registered? Register at <a href="https://www.gst.gov.in/" target="_blank">Here</a>  </small>  
                                    </div>
                                    
                                          
                                       
                                       <!-- <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Branch Name <b style="color:red">*</b>:</label>
                                       <select class="form-control branch_name" name="ventors[Branch_id]" id="exampleFormControlSelect1">
                                          <option>Select Branch Name</option>
                                          <?php
                                    if (!empty($branch)) {
                                        foreach ($branch as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($value['type_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                       </div> -->
                                    </div>
                                    <div class="tab-panel">
                              <ul class="nav nav-tabs primary-tabs">
                                 <li class="nav-item" role="presentation"><a href="#tab-3" class="nav-link active show" data-toggle="tab" aria-expanded="true">Address</a></li>
                                 
                                 <li class="nav-item" role="presentation"><a href="#tab-4" class="nav-link " data-toggle="tab" aria-expanded="true">Notes</a></li>
                                 
                                 <li class="nav-item" role="presentation"><a href="#tab-5" class="nav-link " data-toggle="tab" aria-expanded="true">Attachment</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fadeIn active show" id="tab-3">
                                 
                                 <div class="row">
                     <div class="col-md-6">
                        <div class="card">
                           <h5 class="card-header">Billing Address</h5>
                           
                              <div class="card-body">
                                 <div class="form-row">
                                 
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 1</label>
                                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" id="validationCustom02" placeholder="Address 1" name="ventors[B_address1]" >
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 2</label>
 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" id="validationCustom02" placeholder="Address 2" name="ventors[B_address2]"  >
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">Country</label>
                                       <select class="form-control " name="ventors[B_country_id]" id="country_id">
                                          <?php
                                    if (!empty($country)) {
                                        foreach ($country as $country) {
                                            ?>
                                            <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                    </div>


                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">State</label>
                                       <select class="form-control " name="ventors[B_state_id]" id="state_id">
                                          <?php
                                    if (!empty($state)) {
                                        foreach ($state as $state) {
                                            ?>
                                            <option value="<?php echo $state['state_id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                    </div>
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">City</label>
                                       <select class="form-control " name="ventors[B_city_id]" id="city_id">
                                          <?php
                                             foreach ($cities as $value) {     ?>    
                                                <option value="<?php echo $value['city_id']; ?>" <?php echo ($value['city_id'] == 1) ? 'selected' : ''; ?> > 
                                                   <?php echo $value['city_name']; ?>
                                                </option>
                                                         
                                          <?php } ?>
                                          
                                       </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">PinCode</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[B_pincode]" id="validationCustom02" maxlength="6" pattern="[1-9]{1}[0-9]{5}" placeholder="Enter Pincode"   >
                                    </div>
                                 </div>
                                 </div>
                                 
                                 
                              </div>
                              
                           
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <h5 class="card-header">Shipping Address <div class="custom-control custom-checkbox mb-3" style="float: right;">
                                    <input type="checkbox" checked class="custom-control-input shipping_address1" onclick="set_address()" value="1" name="ventors[same_as_billing]" id="add_shipping" >
                                    <label class="custom-control-label" for="add_shipping" style="font-size: 10px !important;">Same as Billing Address</label>
                                    
                                 </div></h5>
                                    
                              <div class="card-body">
                                 <div class="form-row" id="shippingcard_add" style="display:none;">
                                 
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 1</label>
 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" id="validationCustom02" placeholder="Address 1"  name="ventors[S_address1]">
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 2</label>
 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" id="validationCustom02" placeholder="Address 2"   name="ventors[S_address2]">
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">Country</label>
                                       <select class="form-control country_id" name="ventors[S_country_id]" >
                                          
                                          <!-- <?php
                                    if (!empty($country)) {
                                        foreach ($country as $country) {
                                            ?>
                                            <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?> -->
                                       </select>
                                    </div>

                                    
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">State</label>
                                       <select class="form-control state_id" name="ventors[S_state_id]" >
                                          <!-- <?php
                                    if (!empty($state)) {
                                        foreach ($state as $state) {
                                            ?>
                                            <option value="<?php echo $state['id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?> -->
                                       </select>
                                    </div>
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">City</label>
                                       <select class="form-control city_id" name="ventors[S_city_id]" >
                                          
                                          
                                       </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">PinCode</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="ventors[S_pincode]" id="validationCustom02" maxlength="6" pattern="[1-9]{1}[0-9]{5}" placeholder="Enter Pincode"  >
                                    </div>
                                 </div>
                              </div>
                                 
                                 
                              </div>
                              
                           
                        </div>
                     </div>
                  </div>
                                 
                                       </div>
                                 <div class="tab-pane fadeIn " id="tab-4">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Notes" rows="5" name="ventors[Notes]" ></textarea>   </div>
                                    <div class="tab-pane fadeIn " id="tab-5">
                                    <textarea class="form-control" id="exampleFormControlTextarea11" placeholder="Attachment" rows="5" name="ventors[Attatchments]" ></textarea>   </div>
                                 </div>
                           </div>
               </div>
               <div class="modal-footer">
            
              <div class="form-group">
               <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success  submit">Save changes</button>
              </div>  
         </div>
            </form>
            </div>
         </div>
      </div>

      <div class="modal fade editventor" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="ModalTitle2">Edit Ventors / Suppliers</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" class="zmdi zmdi-close"></span>
                  </button>
               </div>
              <form action="<?php echo base_url();?>master/Ventors/ventors_edit" method="POST">
               <div class="modal-body" style="overflow-y: scroll;">
                     <div class="form-row">
                                     <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Ventor / Supplier Code</label>
                                          <input type="text" class="form-control Ventor_code"  id="Ventor_code" name="ventors[Ventor_code]" disabled  >
                                       
                                       </div>
                                       
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Ventor / Supplier Type</label>
                                       <select class="form-control Supplier_type_id" required=""  name="ventors[Supplier_type_id]" id="Supplier_type_id">
                                          <option>Select Type</option>
                                           <?php
                                    if (!empty($Supplier_type)) {
                                        foreach ($Supplier_type as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($value['Supplier_type']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                          <!-- <option value="1" >Supplier</option>
                                          <option value="2" >Manufacturer</option> -->
                                          
                                       </select>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label    for="exampleFormControlSelect1">Ventors / Suppliers Name</label> <span class="text-danger">*</span>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control Ventor_name" name="ventors[Ventor_name]" id="inputName" placeholder="Customer Name" required="">

                                       <input type="hidden" class="Ventor_id" id="Ventor_id" name="Ventor_id"  value="">
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Company Name</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-balance zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control Company_name" name="ventors[Company_name]" id="inputName" placeholder="Company Name" required="">
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Mobile No</label> <span class="text-danger">*</span>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control Mobile_number" name="ventors[Mobile_number]" id="inputName" placeholder="Mobile Number" pattern="[6-9]{1}[0-9]{9}" maxlength="10">
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Email Id</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control Email_id" name="ventors[Email_id]" id="inputName" placeholder="Email Address" >
                                       </div>
                                    </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Phone No</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control Phone_number" name="ventors[Phone_number]" id="inputName" placeholder="Phone Number" maxlength="11">
                                       </div>
                                    </div>
                                       
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">GST Registration Type
                                          </label>
                                       <select class="form-control Gst_reg_type" onchange="enablegstn()" name="ventors[Gst_reg_type]" id="gst_reg_type">
                                          <option>Select GST Type</option>
                                          <option value="1" class="gstn_enable">GST Registered - Regular</option>
                                          <option value="2" class="gstn_enable">GST Registered - Composition</option>
                                          <option value="3" class="gstn_disable">GST Unregistered</option>
                                          <option value="4" class="gstn_disable">Consumer</option>
                                       </select>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">GSTIN</label>
                                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>

                                       <input type="text" class="form-control gstin Gst_number" name="ventors[Gstin]" id="GSTIN"  placeholder="GSTIN" maxlength="15" pattern="^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9]{1})+$">
                                       </div>
                                       <small id="textHelp1" class="form-text text-muted text-center">Not yet GST registered? Register at <a href="https://www.gst.gov.in/">Here</a>  </small>  
                                    </div>
                                       
                                       
                                      <!--  <div class="form-group col-md-4">
                                          <label for="exampleFormControlSelect1">Branch Name <b style="color:red">*</b>:</label>
                                       <select class="form-control Branch_id branch_name" name="ventors[Branch_id]" id="exampleFormControlSelect1">
                                          <option>Select Branch Name</option>
                                          <?php
                                    if (!empty($branch)) {
                                        foreach ($branch as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>" <?php echo ($value['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($value['type_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                       </div> -->
                                    </div>
                                    <div class="tab-panel">
                              <ul class="nav nav-tabs primary-tabs">
                                 <li class="nav-item" role="presentation"><a href="#tab-31" class="nav-link active show" data-toggle="tab" aria-expanded="true">Address</a></li>
                                 
                                 <li class="nav-item" role="presentation"><a href="#tab-6" class="nav-link " data-toggle="tab" aria-expanded="true">Notes</a></li>
                                 
                                 <li class="nav-item" role="presentation"><a href="#tab-7" class="nav-link " data-toggle="tab" aria-expanded="true">Attachment</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fadeIn active show" id="tab-31">
                                 
                                 <div class="row">
                     <div class="col-md-6">
                        <div class="card">
                           <h5 class="card-header">Billing Address</h5>
                           
                              <div class="card-body">
                                 <div class="form-row">
                                 
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 1</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control B_address1" id="validationCustom02" placeholder="Address 1" name="ventors[B_address1]" >
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 2</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control B_address2" id="validationCustom02" placeholder="Address 2" name="ventors[B_address2]"  >
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">Country</label>
                                       <select class="form-control B_country_id " name="ventors[B_country_id]" id="country_id">
                                          <?php
                                    if (!empty($country)) {
                                        foreach ($country as $country) {
                                            ?>
                                            <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                    </div>


                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">State</label>
                                       <select class="form-control B_state_id" name="ventors[B_state_id]" id="state_id">
                                          <?php
                                    if (!empty($state)) {
                                        foreach ($state as $state) {
                                            ?>
                                            <option value="<?php echo $state['state_id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                       </select>
                                    </div>
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">City</label>
                                       <select class="form-control B_city_id" name="ventors[B_city_id]" id="city_id">
                                          <?php
                                             foreach ($cities as $value) {     ?>    
                                                <option value="<?php echo $value['city_id']; ?>" <?php echo ($value['city_id'] == 1) ? 'selected' : ''; ?> > 
                                                   <?php echo $value['city_name']; ?>
                                                </option>
                                                         
                                          <?php } ?>
                                          
                                       </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">PinCode</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control B_pincode" name="ventors[B_pincode]" id="validationCustom02" maxlength="6" pattern="[1-9]{1}[0-9]{5}" placeholder="Enter Pincode"  >
                                    </div>
                                 </div>
                              </div>
                                 
                                 
                              </div>
                              
                           
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <h5 class="card-header">Shipping Address <div class="custom-control custom-checkbox mb-3" style="float: right;">
                                    <input type="checkbox" checked class="custom-control-input shipping_address" onclick="set_address1()" value="1" name="ventors[same_as_billing]" id="shipping" >
                                    <label class="custom-control-label" for="shipping" style="font-size: 10px !important;">Same as Billing Address</label>
                                    
                                 </div></h5>
                                    
                              <div class="card-body">
                                 <div class="form-row" id="shippingcard_edit" style="display:none;">
                                 
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 1</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control S_address1" id="validationCustom02" placeholder="Address 1"  name="ventors[S_address1]">
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">Address 2</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control S_address2" id="validationCustom02" placeholder="Address 2"   name="ventors[S_address2]">
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">Country</label>
                                       <select class="form-control S_country_id" name="ventors[S_country_id]" >
                                          
                                          <!-- <?php
                                    if (!empty($country)) {
                                        foreach ($country as $country) {
                                            ?>
                                            <option value="<?php echo $country['id']; ?>" <?php echo ($country['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($country['country_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?> 
                                       </select>
                                    </div>

                                    
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">State :</label>
                                       <select class="form-control S_state_id" name="ventors[S_state_id]" >
                                          <!-- <?php
                                    if (!empty($state)) {
                                        foreach ($state as $state) {
                                            ?>
                                            <option value="<?php echo $state['id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?> -->
                                       </select>
                                    </div>
                                       <div class="col-md-6">
                                       <label for="exampleFormControlSelect1">City</label>
                                       <select class="form-control S_city_id" name="ventors[S_city_id]" >
                                          
                                          
                                       </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label for="validationCustom01">PinCode</label>
                                       <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control S_pincode" name="ventors[S_pincode]" id="validationCustom02" maxlength="6" pattern="[1-9]{1}[0-9]{5}" placeholder="Enter Pincode"  >
                                    </div>
                                 </div>
                              </div>
                                 
                                 
                              </div>
                              
                           
                        </div>
                     </div>
                  </div>
                                 
                                       </div>
                                 <div class="tab-pane fadeIn " id="tab-6">
                                    <textarea class="form-control Notes" id="exampleFormControlTextarea1" placeholder="Notes" rows="5" name="ventors[Notes]" ></textarea>   </div>
                                    <div class="tab-pane fadeIn " id="tab-7">
                                    <textarea class="form-control Attatchments" id="exampleFormControlTextarea11" placeholder="Attachment" rows="5" name="ventors[Attatchments]" ></textarea>   </div>
                                 </div>
                           </div>
               </div>
               <div class="modal-footer">
            
              <div class="form-group">
               <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success  submit">Save changes</button>
              </div>  
         </div>
            </form>
            </div>
         </div>
      </div>

<!-- BASIC MODAL DEMO -->
<div class="modal fade" id="deletemodel" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <form action="<?php echo base_url();?>master/ventors/delete" method="POST">
            <div class="modal-body">
               <div class="swal2-header">
                  <ul class="swal2-progresssteps" style="display: none;"></ul>
                  <div class="swal2-icon swal2-error" style="display: none;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
                  <div class="swal2-icon swal2-question" style="display: none;"><span class="swal2-icon-text">?</span></div>
                  <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"><span class="swal2-icon-text">!</span></div>
                  <div class="swal2-icon swal2-info" style="display: none;"><span class="swal2-icon-text">i</span></div>
                  <div class="swal2-icon swal2-success" style="display: none;">
                     <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                     <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                     <div class="swal2-success-ring"></div>
                     <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                     <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                  </div>
                  <img class="swal2-image" style="display: none;">
                  <h2 class="swal2-title text-center" id="swal2-title">Are you sure?</h2>
                  <button type="button" class="swal2-close" style="display: none;">×</button>
               </div>
               <!-- Hiiden Values -->
               <input type="hidden" name="url" value="<?php echo $this->router->class; ?>">
               <input class="delete_id" type="hidden" name="delete_id">
               <input class="table_name" type="hidden" name="table_name">						
            </div>
            <div class="delete-footer">
               <button type="submit" class="btn btn-primary">Yes, delete it!</button>
               <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Cancel</button>						
            </div>
         </form>
      </div>
   </div>
</div>
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
   function edit_ventors(val0,val,val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11,val12,val13,val14,val15,val16,val17,val18,val19,val20,val21,val22,val23){
   	$('.Ventor_id').val(val);
   	$('.Ventor_code').val(val1);
      $('.Supplier_type_id').val(val0);		
      $('.Ventor_name').val(val2);
   	$('.Company_name').val(val3);
      $('.Mobile_number').val(val4);      
      $('.Email_id').val(val5);
      $('.Phone_number').val(val6);
      $('.Gst_reg_type').val(val7);     
      $('.Gst_number').val(val8);
      $('.Branch_id').val(val9);
      $('.S_pincode').val(val15);
      $('.S_address1').val(val10);
      $('.S_address2').val(val11);
      $('.S_country_id').val(val2);
      $('.B_pincode').val(val21);
      $('.Notes').val(val22);      
      $('.Attatchments').val(val23);
      $('.B_address1').val(val16);      
      $('.B_address2').val(val17);
      $('.S_state_id').val(val13);      
      $('.S_city_id').val(va114);
      $('.B_country_id').val(val18);
      $('.B_state_id').val(val19);      
      $('.B_city_id').val(val20);
      
      
   
   }

         function set_address(){
           
            if ($(".shipping_address1").prop('checked') == true) {
               $('#shippingcard_add').hide();
            } else { 
               $('#shippingcard_add').show();
               
            }

         
        }

         function set_address1(){
            if ($(".shipping_address").prop('checked') == true) {
               $('#shippingcard_edit').show();
            } else { 
              
               $('#shippingcard_edit').show();  
            }
         }

   
   function delete_customer(val,val1){
   	$('.delete_id').val(val);
   	$('.table_name').val(val1);
   	//alert($('.delete_id').val(val));
   }

function click(){
   alert("hi");
}

$(document).ready(function() {
  
   var cust_type = $('.Customer_group_id').val();
   var gst_type = $('.Gst_reg_type').val();
   
   if(cust_type=="1"){$('.branch_name').prop( "disabled", false);}else{$('.branch_name').prop( "disabled", true);}
   if(gst_type == '1' || selectedText == '2' ){
         $('.gstin').prop( "disabled", false );
         $('.gstin').attr('required','required');        
      }
      else {
         $('.gstin').prop( "disabled", true );
         $('.gstin').removeAttr('required');
      }
   $('.gstin').prop( "disabled", true );
   // $('.branch_name').prop( "disabled", true );
    $('select.Gst_reg_type').change(function() {
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

$('select.Customer_group_id').change(function() {

   var selectedText = $(this).find('option:selected').val();
   if(selectedText == '1' ){
      $('.branch_name').prop( "disabled", false );
      $('.branch_name').attr('required','required');
   }
   else {
         $('.branch_name').prop( "disabled", true );
         $('.branch_name').removeAttr('required');
         $('.branch_name').val('');
      }

});


</script>