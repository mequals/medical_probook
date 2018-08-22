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
               <h1 class="separator">Add New User</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Manage User / Add New User</li>
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
                  <h5 class="card-header">User Information</h5>
                 
                 <form class="needs-validation" action="<?php echo base_url();?>master/users/user_add" method="POST" data-toggle="validator" role="form" enctype="multipart/form-data">
                     <div class="card-body">
                        <div class="form-body">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Name</label> <span class="text-danger">*</span>		 
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="firstname" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">User Code</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                
                                       <input type="text" class="form-control" placeholder="User Id" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="user_id" readonly="" value="<?php echo $Prefix[0]['user_prefix']; ?>-0000<?php echo $user_id; ?>">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label">DOB</label>
                                    <div class="input-group  date helper-datepicker">
                                       <span class="input-group-addon action">
                                       <i class="icon dripicons-calendar"></i>
                                       </span>
                                       <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="dob" id="tbDate">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Email Address</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Email Address" aria-label="Icon Left" aria-describedby="basic-addon2" name="email_address" minlength="10">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Mobile Number</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Mobile Number" aria-label="Icon Left" aria-describedby="basic-addon2" name="mobile_number" required="" pattern="[6-9]{1}[0-9]{9}" maxlength="10"
>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Phone Number</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Phone Number" aria-label="Icon Left" aria-describedby="basic-addon2" name="phone_number" maxlength="11">		
                                         							
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Country</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control company_country" id="country_id"  name="country_id" required=""><?php
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
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control company_state"  id="state_id" name="state_id" required="">
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
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">City</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-pin-drop zmdi-hc-fw"></i></span>
                                       </div>
                                    <select class="form-control company_city" id="city_id" name="city_id" required="">                                       
                                    </select>
                                 </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">

                                    <label class="col-form-label-lg control-label" for="largeInput">Address Line 1</label> <span class="text-danger">*</span>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                    <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address Line 1" name="address_line_1" required="" />
                                    <div class="invalid-feedback">
                                       Please choose a Address Line.
                                    </div>
                                 </div>
                                 </div>

                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Address Line 2</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-card zmdi-hc-fw"></i></span>
                                       </div>
                                    <input class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address Line 2" name="address_line_2" required="" />
                                 </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Pincode</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-location"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Pincode" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="zipcode" required=""  maxlength="6" pattern="[1-9]{1}[0-9]{5}">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Profile Picture</label>
                                    <span class="">
                                       <input type="file" id="profile_image" class="form-control" name="profile_image" >
                                    </span>
                                 </div>
                              </div>
                              <div class="col-md-6" style="margin-left: -55px;">
                                        <a href="javascript:void(0);"><img id="imagePreview" src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png" style="width: 75px; height: 75px; border: 2px #ccc solid;margin-top:0px;margin-left:55px;margin-top:6px; " alt="User profile picture" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png"></a>
                                    </div>
                           </div>
                           <div class="row">
                             
                                <h5 class="card-header">User Credential
                                 </h5>
                              <div class="col-12">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" style="padding-left: 9px;" for="largeInput">User Name</label> <span class="text-danger">*</span>
                                          <div class="input-group mb-3"  style="padding-left: 9px;">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="User Name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="username" required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Password</label> <span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-lock zmdi-hc-fw"></i></span>
                                             </div>
                                             
                                             <input type="password" data-minlength="6" class="form-control" id="inputPasswordform" placeholder="Password" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="password" required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Re-Password</label> <span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-lock zmdi-hc-fw"></i></span>
                                             </div>
                                             
                                             <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPasswordform" data-match-error="Whoops, these don't match" placeholder="Re-Password" aria-describedby="basic-icon-addon1" required=""> <br>
                                          </div>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                          <h5 class="card-header">User Role Information
                              </h5>
                           <div class="col-md-12">
                              <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">User Type</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="user_type_id" name="user_type_id" onchange="view_desp()" required=""><option>Select User Type</option>
                                       <?php
                                    if (!empty($user_types)) {
                                        foreach ($user_types as $type) {
                                            ?>
                                       <option value="<?php echo $type['id']; ?>"><?php echo ucfirst($type['user_type_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>
                                       <div class="col-md-4" id="description_view" style="display:none;">
                                             <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description <span style="color:red">*</span></label></label>
                                                <textarea class="form-control" id="description" placeholder="Enter Description" required="" name="user_type[description]" rows="3"></textarea>
                                             </div>
                                       </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                     




                 
                  <div class="card-footer bg-light">                  
                     <button class="btn btn-success" type="submit">Submit</button>
                     <a href="/medical_probook/master/users/user" class="btn btn-accent">Cancel</a>
                  </div>
               
                  </form>
               </div>
            </div>
 
  
   </section>
</div>
</div>
</div>
<script type="text/javascript">
   function view_desp(){
      id = $('#user_type_id').val();
      var data_string="id="+id;
      console.log(data_string);
        $.ajax({   
          url: "<?php echo base_url(); ?>master/Users/get_desp",
          async: false,
          type: "POST",    
          data: data_string, 
          dataType: "json", 
          success: function(data) { 
                
         if(data!=null){
            $("#description_view").show();
            $("#description").val(data[0]['description']);
            }
            else{
                 $("#description_view").hide();
                 $("#description").val("");
               }
      
    }
    });
   }
</script>