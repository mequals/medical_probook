<script>
   <?php
         if ($this->session->flashdata('users_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('users_success')."';";
            echo "success(data);";
         }
   ?>
</script>
<div class="content-wrapper">
    <div class="content">
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1 class="separator">Manage User Type</h1>
                    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage User Type</li>
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
                                Manage User Type
                            </div>
                            <div style="float: right;">
                                <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" && $section_list['acc_add']=="1"){
                                      ?>
                                <button type="button" class="btn btn-success  btn-floating" data-toggle="modal" data-target="#addusertype">
																Add New User Type
														</button><?php } } } ?>
                            </div>

                        </h5>
                        <div class="card-body">
                            <table id="itemtable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                         <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th class="text-center">Action</th><?php } } }?>
                                        <th>User Type Name</th>
                                        <th>Description</th>
                                        <th>User Mode</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            if (!empty($user_types)) {
                $s = 1;
                foreach ($user_types as $list) {
                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $s; ?>
                                            </td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                                            <td class="text-center"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" && $section_list['acc_view']=="1"){
                                      ?>
                                                <a href="<?php echo base_url(); ?>master/users/user_permission/<?php echo $list['id']; ?>" class="btn btn-warning btn-sm"><i class="la la-cog" style="
                                                            font-size: 17px;
                                                            color:  white;
                                                        "></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" && $section_list['acc_edit']=="1"){?>
                                                <a href="#" onclick="edit_usertype('<?php echo ucfirst($list['id']); ?>','<?php echo ucfirst($list['user_type_name']); ?>','<?php echo ucfirst($list['status']); ?>','<?php echo ucfirst($list['description']); ?>')" id="usertypeedit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target="#editusertype"  style="
                                                            font-size: 17px;
                                                            color:  white;
                                                        "></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="9" && $section_list['acc_delete']=="1"){?>
                                                        
                                                        <a href="" onclick="delete_usertype('<?php echo ucfirst($list['id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel" <?php 
                                                        if($list['status'] != 2 ){
                                                        ?> style ="pointer-events: none;cursor: default;" <?php }?> >
                                                            <i class="zmdi zmdi-delete zmdi-hc-fw" style="font-size: 17px;color:  white; "></i>
                                                        </a><?php } } } ?>
                                    
                                            </td><?php } } } ?>
                                            <td class="s_no">
                                                <?php echo ucfirst($list['user_type_name']); ?>
                                            </td>
                                            <td class="s_no">
                                                <?php echo ucfirst($list['description']); ?>
                                            </td>
                                            <td><span class="badge badge-<?php echo ($list['status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['status'] == 1) ? 'Primary User' : 'Secondary User'; ?></span></td>
                                            
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
<div id="addusertype" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel6">Add New User Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="zmdi zmdi-close"></span>
						</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Add User Type</h5>

                            <?php echo form_open_multipart('master/users/user_type_add', 'name="add_user" id="add_user" class="form-horizontal" data-toggle="validator"'); ?>

                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label-lg control-label" for="largeInput">User Type Name <span style="color:red">*</span></label>
                                                 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i></span>
                                       </div>
                                                <input type="text" class="form-control" name="user_type[user_type_name]" id="inputName" placeholder="User Type Name" required>
                                            </div>
                                        </div>
                                    </div>

                                        <!-- <div class="col-md-12">
																	<div class="form-group">
																		<label class="col-form-label-lg" for="largeInput">Status</label>
																		<select class="form-control" name="user_type[status]" id="defaultSelect" required="">
																			<option value="1">Active</option>
																			<option value="2">In-Active</option>
																		</select>
																	</div>
																</div> -->

                                        <div class="col-md-12 form-group">
                                           <label class="col-form-label-lg control-label" for="largeInput">User Mode <span style="color:red">*</span></label><div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="user_type[status]" class="custom-control-input" value="1" checked>
                                                <label class="custom-control-label" for="customRadioInline1">Primary User</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="user_type[status]" class="custom-control-input" value="2">
                                                <label class="custom-control-label" for="customRadioInline2">Secondary User</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description <span style="color:red">*</span></label></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Description" required="" name="user_type[description]" rows="3"></textarea>
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
<div class="modal modal-right-side fade" id="editusertype" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel6">Edit User Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="zmdi zmdi-close"></span>
						</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Edit User Type</h5>
                            <?php
 $attributes = array('id' => 'login_form','data-toggle' => 'validator');
 echo form_open('master/users/user_type_edit', $attributes);
?>

                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label-lg control-label" for="largeInput">User Type Name <span style="color:red">*</span></label>
                                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i></span>
                                       </div>
                                                    <input type="hidden" class="user_type_id" name="user_type_id">
                                                    <input type="text" class="form-control user_type_name" name="user_type[user_type_name]" id="inputName" placeholder="User Type Name" required>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label-lg control-label" for="largeInput">User Mode <span style="color:red">*</span></label>
                                                <div>
                                                <div class="custom-control custom-radio form-check custom-control-inline">
                                                    <input type="radio" id="customRadio1" name="user_type[status]" class="custom-control-input primaryuser" value="1">
                                                    <label class="custom-control-label" for="customRadio1">Primary User</label>
                                                </div>
                                                <div class="custom-control custom-radio form-check custom-control-inline">
                                                    <input type="radio" id="customRadio2" name="user_type[status]" class="custom-control-input secondaryuser" value="2">
                                                    <label class="custom-control-label" for="customRadio2">Secondary User</label>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Description <span style="color:red">*</span></label>
                                                    <textarea class="form-control description" id="description" name="user_type[description]" required="" placeholder="Enter Description" rows="3"></textarea>
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

<div class="modal fade" id="deletemodel" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <form action="<?php echo base_url();?>master/users/delete" method="POST">
        
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

<script type="text/javascript">
    function edit_usertype(val, val1, val2, val3) {
        // alert(val2);
        $('.user_type_id').val(val);
        $('.user_type_name').val(val1);
        if (val2 == 1) {
            $(".primaryuser").attr('checked', 'checked');
        } else if (val2 == 2) {
            $(".secondaryuser").attr('checked', 'checked');
        }
        $('.status').val(val2);
        $('.description').text(val3);

    }
      function delete_usertype(val,val1){
    $('.delete_id').val(val);
    $('.table_name').val(val1);
    //alert($('.delete_id').val(val));
   }

</script>
