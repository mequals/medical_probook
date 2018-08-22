<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Add New User Type</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">User Types</li>
                  </ol>
               </nav>
            </div>
            <ul class="actions top-right">
               <li class="dropdown">
                  <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                  <i class="la la-ellipsis-h"></i>
                  </a>
                  <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(40px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                     <div class="dropdown-header">
                        Quick Actions
                     </div>
                     <a href="#" class="dropdown-item">
                     <i class="icon dripicons-clockwise"></i> Refresh
                     </a>
                     <a href="#" class="dropdown-item">
                     <i class="icon dripicons-gear"></i> Manage User Types
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
            <div class="col">
               <div class="card">
                  <h5 class="card-header">User Information  - <?php echo $user_type[0]['user_type_name'];?></h5>
                 
                 <!-- <form action="<?php echo base_url();?>master/users/user_add" method="POST"> -->
                     <div class="card-body">

                        <div class="panel-body">
        <?php echo form_open_multipart('master/users/user_permission/' . $user_type_id, 'name="user_permission" id="user_permission" class="form-horizontal"'); ?>
        <input type="hidden" name="user_type_id" id="user_type_id" value="<?php echo $user_type_id; ?>">
        <div class="row">
            
            <div class="form-group ">
                <div>
                <div class="checkbox " style="margin-right: 15px;">
                    <label>
                        <input type="checkbox" name="grand_all" class="grand_all "  value="1" <?php echo (isset($user_type[0]['grand_all']) && $user_type[0]['grand_all'] == 1) ? 'checked' : ''; ?>><span class="text-semibold">Grand All</span>
                    </label>
                </div>
            </div>
            </div>
        </div>
        <?php
        // echo "url is : ".$this->uri->uri_string();
        // echo "router class is : ".$this->router->class;
       
        $is_module_allowed = $this->config->item('user_modules');
        $is_section_allowed = $this->config->item('user_sections');
        ?>

        <fieldset class="content-group">
            <div class="table-responsive">
                <table  class="table table-bordered table-striped table-bordered">

                    <thead>
                        <tr>
                            <th>Module</th>
                            <th>Section</th>
                            <th>Enable Menu</th>
                            <th>View</th>
                            <th>Add</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($user_sections)) {
                            foreach ($user_sections as $key => $value) {
                                if (!empty($value['sections'])) {
                                    $k = 1;
                                    foreach ($value['sections'] as $section) {
                                        if (($section['user_section_key'] == 'user_modules' && $is_module_allowed) || ($section['user_section_key'] == 'user_sections' && $is_section_allowed) || (!in_array($section['user_section_key'], array('user_modules', 'user_sections')))) {
                                            $checked_all = (isset($user_permissions[$key][$section['id']]['acc_all']) && $user_permissions[$key][$section['id']]['acc_all'] == 1) ? 'checked' : '';
                                            $checked_view = (isset($user_permissions[$key][$section['id']]['acc_view']) && $user_permissions[$key][$section['id']]['acc_view'] == 1) ? 'checked' : '';
                                            $checked_add = (isset($user_permissions[$key][$section['id']]['acc_add']) && $user_permissions[$key][$section['id']]['acc_add'] == 1) ? 'checked' : '';
                                            $checked_edit = (isset($user_permissions[$key][$section['id']]['acc_edit']) && $user_permissions[$key][$section['id']]['acc_edit'] == 1) ? 'checked' : '';
                                            $checked_delete = (isset($user_permissions[$key][$section['id']]['acc_delete']) && $user_permissions[$key][$section['id']]['acc_delete'] == 1) ? 'checked' : '';
                                            ?>
                                            <tr class="danger">
                                                <td><strong><?php echo ($k == 1) ? ucfirst($value['user_module_name']) : ''; ?></strong></td>
                                                <td><?php echo ucfirst($section['user_section_name']); ?></td>
                                                <td><input type="checkbox" name="permissions[<?php echo $key; ?>][<?php echo $section['id']; ?>][acc_all]" class="menu_all" value="1" <?php echo $checked_all; ?> /></td>
                                                <?php if ($section['acc_view'] == 1): ?>
                                                    <td><input type="checkbox" name="permissions[<?php echo $key; ?>][<?php echo $section['id']; ?>][acc_view]" class="allow_access" value="1" <?php echo $checked_view; ?> /></td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_view'] == 0): ?>
                                                    <td>NA</td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_add'] == 1): ?>
                                                    <td><input type="checkbox" name="permissions[<?php echo $key; ?>][<?php echo $section['id']; ?>][acc_add]" class="allow_access" value="1" <?php echo $checked_add; ?> /></td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_add'] == 0): ?>
                                                    <td>NA</td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_edit'] == 1): ?>
                                                    <td><input type="checkbox" name="permissions[<?php echo $key; ?>][<?php echo $section['id']; ?>][acc_edit]" class="allow_access" value="1" <?php echo $checked_edit; ?> /></td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_edit'] == 0): ?>
                                                    <td>NA</td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_delete'] == 1): ?>
                                                    <td><input type="checkbox" name="permissions[<?php echo $key; ?>][<?php echo $section['id']; ?>][acc_delete]" class="allow_access" value="1" <?php echo $checked_delete; ?> /></td>
                                                <?php endif; ?>
                                                <?php if ($section['acc_delete'] == 0): ?>
                                                    <td>NA</td>
                                                <?php endif; ?>
                                            </tr>
                                            <?php
                                            $k++;
                                        }
                                    }
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-danger" onclick="window.location = '<?php echo base_url('master/users'); ?>'" style="float:left;"><i class="icon-arrow-left13 position-left"></i> Cancel</button>
                <button type="submit" class="btn btn-success submit" style="float:right;">Submit <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
                     </div>

                     </div>





                 
                 <!--  <div class="card-footer bg-light">                  
                     <button class="btn btn-success" type="submit">Submit</button>
                     <a href="/medical_probook/master/users/user" class="btn btn-accent">Cancel</a>
                  </div> -->
               
                  <!-- </form> -->
               </div>
            </div>
         </div>
   </div>
   </section>
</div>
</div>
</div>

