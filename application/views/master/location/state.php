<script>
   <?php
         if ($this->session->flashdata('state_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('state_success')."';";
            echo "success(data);";
         }
   ?>
</script>
<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">States</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Location</a></li>
                     <li class="breadcrumb-item active" aria-current="page">States</li>
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
                        Manage States
                     </div>
                     <div style="float: right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" && $section_list['acc_add']=="1"){
                                      ?>
                        <button type="button" class="btn btn-success  btn-floating" data-toggle="modal" data-target="#addusertype">
                        Add New State
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
                                    if($section_list['section_id']=="6" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th style="width: 20%">Action</th><?php } } }?>
                              <th>Country Name</th>
                              <th>State Name</th>
                              <th>State Code</th>
                              <th>Status</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              if (!empty($state)) {
                                  $s = 1;
                                  foreach ($state as $list) {
                                      ?>
                           <tr>
                              <td ><?php echo $s; ?></td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <td class="text-center"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" && $section_list['acc_edit']=="1"){
                                      ?>                                
                                 <a href="#" onclick="edit_state('<?php echo ucfirst($list['state_id']); ?>','<?php echo ucfirst($list['state_name']); ?>','<?php echo ucfirst($list['status']); ?>','<?php echo ucfirst($list['country_id']); ?>','<?php echo ucfirst($list['state_code']); ?>')" id="stateedit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target="#editusertype"  style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" && $section_list['acc_delete']=="1"){?>
                                    <a href="" onclick="delete_coutry('<?php echo ucfirst($list['state_id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a><?php } } } ?>                                         
                              </td><?php } } } ?>
                              <td class="s_no"><?php echo ucfirst($list['country_name']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['state_name']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['state_code']); ?></td>
                              <td><span class="badge badge-<?php echo ($list['status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['status'] == 1) ? 'Active' : 'Inactive'; ?></span></td>
                              
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
            <h5 class="modal-title" id="exampleModalLabel6">States</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Add State</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/location/state_add', $attributes);
                        ?> 
                  <form action="<?php echo base_url(''); ?>/master/location/state_add" data-toggle='validator' method="post" onsubmit="return duplicate_check();"> 
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Country</label>
                                                               <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control " name="state[country_id]" id="defaultSelect" required="">
                                    <?php
                                       foreach ($country as $value) {
                                          echo '<option value="'.$value['id'].'">'.$value['country_name'].'</option>';
                                       }
                                       ?>
                                    </select>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State Name <span style="color:red">*</span></label>
                                                               <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <input type="text" class="form-control check_data" autofocus name="state[state_name]" id="inputName" placeholder="State Name" required>
                                    <div class="text-center duplicate-occur no-display">
                                       <code>This State Name Is Already Used in Some Page</code>
                                    </div>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State Code <span style="color:red">*</span></label>
                                                               <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <input type="text" class="form-control" name="state[state_code]" id="inputName" placeholder="State Code" required>
                                 </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                    <select class="form-control" name="state[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
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
<!-- Editing -->
<!-- LOCATION RIGHT SIDE -->
<div class="modal modal-right-side fade" id="editusertype" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" >
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Edit User Type</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Edit States</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/location/state_edit', $attributes);
                        ?> 
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Country</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control country_id" name="state[country_id]" id="defaultSelect" required="" >
                                    <?php
                                       foreach ($country as $value) {
                                          echo '<option value="'.$value['id'].'">'.$value['country_name'].'</option>';
                                       }
                                    ?>
                                    </select>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State Name <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <input type="hidden" class="state_id" name="state_id" >
                                    <input type="text" class="form-control state_name" autofocus name="state[state_name]" id="inputName" placeholder="State Name" required >
                                 </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State Code <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <input type="text" class="form-control state_code" name="state[state_code]" id="inputName" placeholder="State Code" required>
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                 </div>
                                    <select class="form-control status" name="state[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
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
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         
         <form action="<?php echo base_url();?>master/location/delete" method="POST">
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
                <input type="hidden" name="url" value="state">
               <input class="delete_id" type="hidden" name="country_id">
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
   function edit_state(val,val1,val2,val3,val4){
   	
   	$('.state_id').val(val);
   	$('.state_name').val(val1);
    $('.status').val(val2);
   	$('.country_id').val(val3);
      $('.state_code').val(val4);
   
   }
      function delete_coutry(val,val1){
   	$('.delete_id').val(val);
   	$('.table_name').val(val1);
   	//alert($('.delete_id').val(val));
   }


      function duplicate_check() {

      var check_data = $('.check_data').val();
      var result = '';
         $.ajax({
           type: "POST",
           url: "<?php echo base_url(); ?>master/location/duplicate_check",
           data: {data: check_data,table_name: 'mpro_states',colum: 'state_name'},
           cache: true,
           async: false,
           success: function(data){
            result = data;
           }
         });
         if(result == 1){
            $('.duplicate-occur').removeClass('no-display');
            return false;
        }else{
            $('.duplicate-occur').addClass('no-display');
            return true;
        }
         
   }
</script>