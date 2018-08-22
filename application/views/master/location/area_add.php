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
                     <li class="breadcrumb-item active" aria-current="page">Areas / Add Areas</li>
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
                  <h5 class="card-header">Add Area</h5>
                  <div class="card-body">
                     
                    <form action="<?php echo base_url(); ?>master/location/area_insert_data" method="post" data-toggle="validator" role="form">
                     <div class="form-row">


                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Country</label>
                     <div class="form-group">
                              <select class="form-control" id="country_id" name="area[country_id]">
                              <?php
                                 foreach ($country as $value) {            
                                    echo "<option value=".$value['id'].">".$value['country_name']."</option>";
                                 }           
                                 ?>
                              </select>
                           </div>   

                        </div>

                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">State</label>
                           <select class="form-control" name="area[state_id]" id="state_id">
                           <?php
                              foreach ($state as $value) {           
                                 echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                              }           
                              ?>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">City</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="city_id"  required="" name="area[city_id]">
                                       
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">

                          <div class="form-group" style="padding: 5px;">
                      <label for="inputName" class="control-label">Area Name</label>
                      <input type="text" class="form-control" id="area_name" placeholder="Area Name" name="area[area_name]" required>
                    </div>
                        </div>
                        
                        
                        <div class="form-group col-md-6">
                           <label for="exampleFormControlSelect1">Status</label>
                           <select class="form-control" name="area[status]" id="exampleFormControlSelect1">
                              <option value="1">Active</option>
                              <option value="2">Inactive</option>
                           </select>
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
                  <div class="card-footer bg-light ">
                     <button class="btn btn-success" type="submit">Submit</button>
                     <a href="<?php echo base_url(); ?>master/location/area" class="btn btn-accent">Cancel</a>
                  </div>
                   </form>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
</div>