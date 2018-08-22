<script>
   <?php
         if ($this->session->flashdata('area_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('area_success')."';";
            echo "success(data);";
         }
   ?>
</script>
<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Areas</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Location</li>
                     <li class="breadcrumb-item active" aria-current="page">Areas</li>
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
         <?php
            // echo "<pre>";
            //    print_r($area);
            // echo "</pre>";
         ?>
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                        Manage Areas	
                     </div>
                     <div style="float: right;">
                        <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" && $section_list['acc_add']=="1"){
                                      ?>
                        <button type="button" class="btn btn-success  btn-floating" data-toggle="modal" data-target="#areaaddmodel" >
                        Add New Area
                        </button><?php } } }?>
                        
                     </div>
                  </h5>
                  <div class="card-body">
                  			<?php
                  				// echo "<pre>";
                  				// 	print_r($city);
                  				// echo "</pre>";
                  			?>
                     <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th style="width: 20%">Action</th><?php } } }?>
                              <th>Area Name</th>
                              <th>City Name</th>
                              <th>State Name</th>
                              <th>Country Name</th>
                              <th>Status</th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              if (!empty($area)) {
                                  $s = 1;
                                  foreach ($area as $list) {
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
                                 <a id="usertypeedit" class="btn btn-info btn-sm editusertype" onclick="areaedit(<?php echo ucfirst($list['country_id']); ?>,<?php echo ucfirst($list['state_id']); ?>,<?php echo ucfirst($list['city_id']); ?>,'<?php echo ucfirst($list['area_name']); ?>',<?php echo ucfirst($list['status']); ?>)"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target="#areaeditmodel"  style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i>
                                 </a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="6" && $section_list['acc_delete']=="1"){?>
                                 <a href="" onclick="delete_coutry('<?php echo ucfirst($list['area_id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                    font-size: 17x;
                                    color:  white;
                                    "></i></a><?php } } } ?>                                      
                              </td><?php } } } ?>
                              <td class="s_no"><?php echo ucfirst($list['area_name']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['city_name']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['state_name']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['country_name']); ?></td>
                              <td><span class="badge badge-<?php echo ($list['status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['status'] == 1) ? 'Active' : 'In-Active'; ?></span></td>
                              
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


<!-- ADD AREA -->
<div id="areaaddmodel" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" >
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Area</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                                 <h5 class="card-header">Add Area</h5>   
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
            <div >
               <div>
                  
                  <div class="card-body">
                     
                    <form action="<?php echo base_url(); ?>master/location/area_insert_data" method="post" data-toggle="validator" role="form">
                     <div class="form-row">


                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Country</label>
                     <div class="form-group">
                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                              <select class="form-control" id="country_id" name="area[country_id]">
                              <?php
                                 foreach ($country as $value) {            
                                    echo "<option value=".$value['id'].">".$value['country_name']."</option>";
                                 }           
                                 ?>
                              </select>
                           </div>   
</div>
                        </div>

                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">State</label>
                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                           <select class="form-control" name="area[state_id]" id="state_id">
                           <?php
                              foreach ($state as $value) {           
                                 echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                              }           
                              ?>
                           </select>
                        </div>
                     </div>
                        <div class="form-group col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">City</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control" id="city_id"  required="" name="area[city_id]">
                                       
                                    </select>
                                 </div>
                              </div>
                              </div>
                              <div class="form-group col-md-6">

                          <div class="form-group" style="padding: 5px;">
                      <label for="inputName" class="control-label">Area Name</label>
                      <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                      <input type="text" class="form-control" id="area_name" autofocus placeholder="Area Name" name="area[area_name]" required>
                    </div>
                 </div>
                        </div>
                        
                        
                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Status</label>
                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                       </div>
                           <select class="form-control" name="area[status]" id="exampleFormControlSelect1">
                              <option value="1">Active</option>
                              <option value="2">Inactive</option>
                           </select>
                        </div>
                     </div>
                     </div>
                     <!-- <div class="row">
                       <h5 class="card-header" style="padding-left: 15px;">User Defined Fields
                           </h5>
                        <div class="col-12"> 
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 1</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 1" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_1]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 2</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 2" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_2]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 3</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 3" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_3]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 4</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 4" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_4]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 5</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 5" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_5]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 6</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 6" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_6]" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                    
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
<!-- AREA END -->


<!-- EDIT AREA -->
<div id="areaeditmodel" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" >
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Area</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                                    
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <h5 class="card-header">Edit Area</h5>
                  <div class="card-body">
                     
                    <form action="<?php echo base_url(); ?>master/location/area_insert_data" method="post" data-toggle="validator" role="form">
                     <div class="form-row">


                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Country</label>
                     <div class="form-group">
                        <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                              <select class="form-control country" id="country_id" name="area[country_id]">
                              <?php
                                 foreach ($country as $value) {            
                                    echo "<option value=".$value['id'].">".$value['country_name']."</option>";
                                 }           
                                 ?>
                              </select>
                           </div>   
</div>
                        </div>

                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">State</label>
<div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                           <select class="form-control state" name="area[state_id]" id="state_id">
                           <?php
                              foreach ($state as $value) {           
                                 echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                              }           
                              ?>
                           </select>
                        </div>
                     </div>
                        <div class="form-group col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">City</label> <span class="text-danger">*</span>
<div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control city" id="city_id"  required="" name="area[city_id]">
                                       <?php
                              foreach ($all_city as $value) {           
                                 echo "<option value=".$value['id'].">".$value['city_name']."</option>";
                              }           
                              ?>
                                    </select>
                                 </div>
                              </div>
                              </div>
                              <div class="form-group col-md-6">

                          <div class="form-group" style="padding: 5px;">
                      <label for="inputName" class="control-label">Area Name</label>
<div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                      <input type="text" class="form-control area" id="area_name" autofocus placeholder="Area Name" name="area[area_name]" required>
                    </div>
                        </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Status</label>
                           <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-equalizer zmdi-hc-fw"></i></span>
                                       </div>
                           <select class="form-control status" name="area[status]" id="exampleFormControlSelect1">
                              <option value="1">Active</option>
                              <option value="2">Inactive</option>
                           </select>
                        </div>
                     </div>
                     </div>
                     <!-- <div class="row">
                       <h5 class="card-header" style="padding-left: 15px;">User Defined Fields
                           </h5>
                        <div class="col-12"> 
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 1</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 1" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_1]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 2</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 2" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_2]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 3</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 3" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_3]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 4</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 4" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_4]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 5</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 5" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_5]" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">UDF 6</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-view-thumb"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a Udf.
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter UDF 6" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="area[udf_6]" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                    
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
<!-- AREA END -->

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
               
               <input type="hidden" name="url" value="<?php echo $this->router->method; ?>">
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
  
   function delete_coutry(val,val1){
   	$('.delete_id').val(val);
   	$('.table_name').val(val1);
   	//alert($('.delete_id').val(val));
   }

   function areaedit(country,state,city,area,status) {
      // alert(country);
      // body...
      $('.country').val(country);
      $('.state').val(state);
      $('.city').val(city);
      $('.area').val(area);
      $('.status').val(status);
    }
</script>