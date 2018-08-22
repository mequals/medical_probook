<script>
   <?php
         if ($this->session->flashdata('gst_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('gst_success')."';";
            echo "success(data);";
         }
   ?>
</script>

<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">GST</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">GST</li>
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
                        Manage GST	
                     </div>
                     <div style="float: right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="5" && $section_list['acc_add']=="1"){
                                      ?>
                        <button type="button" class="btn btn-success  btn-floating" data-toggle="modal" data-target="#addusertype">
                        Add New GST
                        </button><?php } } }?>
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
                                    if($section_list['section_id']=="5" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th style="width: 20%">Action</th><?php } } }?>
                              <th>State Code</th>
                              <th>Tax</th>
                              <th>CGST (%)</th>
                              <th>SGST (%)</th>
                              <th>IGST (%)</th>
                              <th>Status</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              if (!empty($Gst)) {
                                  $s = 1;
                                  foreach ($Gst as $list) {
                                      ?>
                           <tr>
                              <td ><?php echo $s; ?></td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="5" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <td class="text-center"> <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="5" && $section_list['acc_edit']=="1"){
                                      ?>                                
                                 <a href="#" onclick="
                                 edit_GST('<?php echo ucfirst($list['gst_id']); ?>',
                                          '<?php echo ucfirst($list['state_id']); ?>',
                                          '<?php echo ucfirst($list['cgst']); ?>',
                                          '<?php echo ucfirst($list['sgst']); ?>',
                                          '<?php echo ucfirst($list['igst']); ?>',
                                          '<?php echo ucfirst($list['tax_name']); ?>',
                                          '<?php echo ucfirst($list['description']); ?>',
                                          '<?php echo ucfirst($list['status']); ?>',
                                          )" id="usertypeedit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target="#editusertype"  style="
      
                                    color:  white;
                                    "></i></a> <?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="5" && $section_list['acc_delete']=="1"){?> 
                                 <a href="" onclick="delete_coutry('<?php echo ucfirst($list['gst_id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                  
                                    color:  white;
                                    "></i></a> <?php } } } ?>                                     
                              </td> <?php } } } ?>
                              <td class="s_no"><?php echo ucfirst($list['state_name']); ?></td>
                              <td><?php echo ucfirst($list['tax_name']); ?></td>
                              <td><?php echo ucfirst($list['cgst']); ?></td>
                              <td><?php echo ucfirst($list['sgst']); ?></td>
                              <td><?php echo ucfirst($list['igst']); ?></td>
                              <td><span class="badge badge-<?php echo ($list['gst_status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['gst_status'] == 1) ? 'Active' : 'In-Active'; ?></span></td>
                              
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
<!-- LOCATION RIGHT SIDE -->
<div id="addusertype" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" >
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">GST</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Add GST</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/gst/gst_add', $attributes);
                        ?> 
                     <div class="card-body" >
                        <div class="form-body">
                           <div class="row">
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">State Code</label> <span style="color:red">*</span>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                           <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                        </div>
                                   <select class="form-control company_state" name="gst[state_id]" id="exampleFormControlSelect1">
                                    <?php
                                       foreach ($state as $value) {           
                                          echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                                       }           
                                       ?>
                                    </select>
                                 </div>
                                 </div>
                              </div>   
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">GST Tax Name</label> <span style="color:red">*</span>                                    

                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a username.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter GST Tax Name" autofocus aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[tax_name]" required="">
                                    </div>
                                    
                                 </div>
                              </div>                           
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">CGST</label> <span style="color:red">*</span>
                                    
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter CGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[cgst]" required="" maxlength="2">
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">SGST</label> <span style="color:red">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter SGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[sgst]" required maxlength="2">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">IGST</label> <span style="color:red">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter IGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[igst]" required maxlength="2">
                                    </div>
                                 </div>
                              </div>                             
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                    <select class="form-control" name="gst[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" name="gst[description]" placeholder="Enter Description" rows="2"></textarea>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
<!-- Editing -->
<!-- LOCATION RIGHT SIDE -->
<div class="modal modal-right-side fade" id="editusertype" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" >
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">GST</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Edit GST</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/gst/gst_edit', $attributes);
                        ?> 
                     <div class="card-body" >
                        <div class="form-body">
                           <div class="row"> 
                              <input type="hidden" name="gst_id" class="gst_id" value="">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">State Code</label> <span style="color:red">*</span>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                   <select class="form-control state_id" name="gst[state_id]" id="exampleFormControlSelect1">
                           <?php
                              foreach ($state as $value) {           
                                 echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                              }           
                              ?>
                           </select>
                        </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">GST Tax Name <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control tax_name" autofocus placeholder="Enter GST Tax Name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[tax_name]" required="">
                                    </div>
                                    
                                 </div>
                              </div>                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">CGST</label>
                                   
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control cgst" placeholder="Enter CGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[cgst]" required="" maxlength="2">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">SGST</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control sgst" placeholder="Enter SGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[sgst]" required="" maxlength="2">
                                    </div>              
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">IGST</label>           
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control igst" placeholder="Enter IGST" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="gst[igst]" required="" maxlength="2">
                                    </div> 
                                 </div>
                              </div>
                              
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                    <select class="form-control status" name="gst[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control description" id="exampleFormControlTextarea1" name="gst[description]" placeholder="Enter Description" ></textarea>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success  submit">Save changes</button>
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
         <form action="<?php echo base_url();?>master/gst/delete" method="POST">
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
               <input type="hidden" name="url" value="gst">
               <input class="delete_id" type="hidden" name="gst_id">
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
<script type="text/javascript">
   function edit_GST(val,val1,val2,val3,val4,val5,val6,val7){
   	$('.gst_id').val(val);
   	$('.state_id').val(val1);		
   	$('.cgst').val(val2);
      $('.sgst').val(val3);
      $('.igst').val(val4); 
      $('.tax_name').val(val5); 
      $('.description').val(val6); 
      $('.status').val(val7);   
   }
   
   function delete_coutry(val,val1){
   	$('.delete_id').val(val);
   	$('.table_name').val(val1);
   	//alert($('.delete_id').val(val));
   }

   // basic
      // $(".company_state").select2();
      $(".company_state").select2({ dropdownParent: "#addusertype" });

</script>