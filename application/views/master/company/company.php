<script>
   <?php
         if ($this->session->flashdata('company_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('company_success')."';";
            echo "success(data);";
         }
   ?>
</script>
<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Companys  </h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Companys</li>
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
                        Manage Company 	
                     </div>
                     <div style="float: right;">
                        <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_add']=="1"){
                                      ?>
                         <a href="<?php echo base_url(); ?>master/company/company_add">
                        <button type="button" class="btn btn-success  btn-floating">
                        Add New Company 
                        </button>
                        </a>
                     <?php } } }?>
                     </div>
                  </h5>
                  <div class="card-body">
                     <div style="overflow-x: scroll;">
                     <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th style="width: 2%">S.No</th><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th style="width: 18%">Action</th><?php } } }?>
                              <th style="width: 25%">Company</th>
                              <th style="width: 15%">Email</th>
                              <th style="width: 10%">Mobile</th>
                              <th style="width: 20%">Address</th>
                              <!-- <th>GSTIN</th> -->
                              <!-- <th>Website</th> -->
                              <th style="width: 5%">Status</th>                             
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              if (!empty($company)) {
                                  $s = 1;
                                  foreach ($company as $list) {
                                      ?>
                           <tr>
                              <td ><?php echo $s; ?></td>
                              <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <td style="width: 18%" >  <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_view']=="1"){
                                      ?>  
                                 <a href="#" id="viewcompany" onclick="view_Company('<?php echo ucfirst($list['CompanyID']); ?>','<?php echo ucfirst($list['CompanyName']); ?>','<?php echo ucfirst($list['EmailAddress']); ?>','<?php echo ucfirst($list['MobileNumber']); ?>','<?php echo ucfirst($list['PhoneNumber']); ?>','<?php echo ucfirst($list['ContactPerson']); ?>','<?php echo ucfirst($list['Address1'])."<br>".$list['Address2']."<br>".$list['Zip_code']; ?>','<?php echo ucfirst($list['country_name']); ?>','<?php echo ucfirst($list['state_name']); ?>','<?php echo ucfirst($list['city_name']); ?>','<?php echo ucfirst($list['GSTN_type']); ?>','<?php echo ucfirst($list['GSTINNumber']); ?>','<?php echo ucfirst($list['WebsiteLink']); ?>','<?php echo ucfirst($list['CompanyLogo']); ?>')" class="btn btn-primary btn-sm editusertype"><i class="la la-eye" data-toggle="modal" data-target=".viewcompany"  style="
                                    font-size: 17px;
                                    color:  white;
                                    " data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></a> <?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){?> 
                                 <a href="<?php echo base_url(); ?>master/company/prefix_setting" id="usertypeedit" class="btn btn-warning btn-sm editusertype"><i class="zmdi zmdi-settings zmdi-hc-fw" data-toggle="modal" data-target="#editusertype"  style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a> <?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){?>
                                 <a href="<?php echo base_url(); ?>master/company/company_edit?id=<?php echo ucfirst($list['CompanyID']); ?> " id="usertypeedit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a> <?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_delete']=="1"){?> 
                                 <a href="" onclick="delete_Company('<?php echo ucfirst($list['CompanyID']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a>  <?php } } } ?>                                    
                              </td><?php } } } ?>
                              <td class="s_no"><?php echo ucfirst($list['CompanyName']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['EmailAddress']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['MobileNumber']); ?></td>
                              <td class="s_no"><?php echo ucfirst($list['Address1']); ?>,<?php echo ucfirst($list['Address2']); ?>,<br><?php echo ucfirst($list['Zip_code']); ?>.</td>
                              
                              
                              <td><span class="badge badge-<?php echo ($list['CompanyStatus'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['CompanyStatus'] == 1) ? 'Active' : 'In-Active'; ?></span></td>
                              
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
         </div>
      </section>
   </div>
</div>
</div>	
<!-- Model Execution -->
<!-- LOCATION RIGHT SIDE -->
<div id="addusertype" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 506px;">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Company</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Add Company</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/Company/Company__add', $attributes);
                        ?> 
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-">
                                    <label class="col-form-label-lg control-label" for="largeInput">Company Name <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" autofocus name="Company[Company__name]" id="inputName" placeholder="Company  Name" required>
                                    <div class="invalid-feedback">
                                       Please choose a username.
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <select class="form-control" name="Company[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                                   <div class="form-">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" name="Company[description]" rows="3"></textarea>
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
      <div class="modal-content" style="width: 506px;">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Company</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Edit Company Name</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator');
                        echo form_open('master/Company/Company__edit', $attributes);
                        ?>
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-">
                                    <label class="col-form-label-lg control-label" for="largeInput">Company  Name <span style="color:red">*</span></label>
                                    <input type="hidden" class="Company_id" name="Company__id" >
                                    <input type="text" class="form-control Company_name" name="Company[Company__name]" id="inputName" placeholder="Company Name" required >
                                    <div class="invalid-feedback">
                                       Please choose a username.
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-">
                                    <label class="col-form-label-lg" for="largeInput">Status</label>
                                    <select class="form-control status" name="Company[status]" id="defaultSelect" required="">
                                       <option value="1">Active</option>
                                       <option value="2">In-Active</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                                   <div class="form-">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control description" id="exampleFormControlTextarea1" name="Company[description]" rows="3"></textarea>
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


<!-- Start View Company Modal -->
         <div class="modal fade viewcompany" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title text-danger" id="ModalTitle2">View Company</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" class="zmdi zmdi-close"></span>
                  </button>
               </div>
              <form action="#" method="POST">
               <div class="modal-body" style="overflow-y: scroll;">
                     <div class="form-row">



                                 <div class="row" >
                                   
                                    <div class="col-md-12" >
                                        <a href="javascript:void(0);"><img id="imagePreview" src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png" style="width: 150px; height: 150px; border: 2px #ccc solid;margin-top:0px;margin-left:55px; " alt="User profile picture" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png"></a>
                                    </div>

                                 </div>
                                 <div class="row" style="margin-top: 20px;">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Company Id</label>
                                       </div>
                                       <div class="col-1">
                                           <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                           <label for="field-1" class="control-label company_code" id="label-company_code"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Company Name</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label company_name" id="label-company_name"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Email</label>
                                       </div>
                                       <div class="col-1">
                                          <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">                                          
                                       <label for="field-1" class="control-label email" id="label-email"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Mobile</label>
                                       </div>
                                       <div class="col-1">
                                           <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                           <label for="field-1" class="control-label mobile" id="label-mobile"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Phone</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label phone" id="label-phone"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Contact Person</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label contact_person" id="label-contact_person"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Address</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label address" id="label-address"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Country</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label country" id="label-country"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Ctate</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label state" id="label-state"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">City</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label city" id="label-city"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">GST Reg Type</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label gst_type" id="label-gst_type"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">GST No</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label gst" id="label-gst"></label>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                           <div class="form-row">
                                       <div class="col-4">
                                         <label for="field-1" class="control-label text-danger">Website</label>
                                       </div>
                                       <div class="col-1">
                                            <label for="field-1" class="control-label">:</label>
                                       </div>
                                       <div class="col-7">
                                          <label for="field-1" class="control-label website" id="label-website"></label>
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
<!-- End View Company Modal -->
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
         <form action="<?php echo base_url();?>master/Company/delete" method="POST">
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
               <input type="hidden" name="url" value="Company">
               <input class="delete_id" type="hidden" name="CompanyID">
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
   function edit_Company(val,val1,val2,val3){
   	$('.Company_id').val(val);
   	$('.Company_name').val(val1);		
      $('.status').val(val2);
   	$('.description').val(val3);
   
   }
   
   function delete_Company(val,val1){
   	$('.delete_id').val(val);
   	$('.table_name').val(val1);
   	//alert($('.delete_id').val(val));
   }

   function view_Company(val,val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11,val12,val13,val14){
      
      $('#label-company_code').text(val);
      $('#label-company_name').text(val1);     
      $('#label-email').text(val2);
      $('#label-mobile').text(val3);
      $('#label-phone').text(val4);
      $('#label-contact_person').text(val5);
      $('#label-address').text(val6);
      $('#label-country').text(val7);
      $('#label-state').text(val8);
      $('#label-city').text(val9);
      if(val10==1){gst="GST Registered-Regular";}else if(val10==2){gst="GST Registered-Composite";}else if(val10==3){gst="GST Unregistered";}else if(val10==4){gst="Consumer";}
      $('#label-gst_type').text(gst);
      $('#label-gst').text(val11);
      $('#label-website').text(val12);
      $('#imagePreview').attr('src','asc');

   }
</script>