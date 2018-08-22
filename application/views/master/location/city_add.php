<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Add Cities</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Location</li>
                     <li class="breadcrumb-item active" aria-current="page">Cities / Add Cities</li>
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
                  <h5 class="card-header">Add City</h5>
                  <div class="card-body">
                     <form action="<?php echo base_url(); ?>master/location/city_insert_data" method="post" data-toggle="validator" role="form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Country</label>
                              <div class="form-group">
                                 <select class="form-control" id="exampleFormControlSelect1" name="city[country_id]">
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
                              <select class="form-control" name="city[state_id]" id="exampleFormControlSelect1">
                              <?php
                                 foreach ($state as $value) {
                                 echo "<option value=".$value['state_id'].">".$value['state_name']."</option>";
                                 }
                                 ?>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <div class="form-group">
                                 <label for="inputName" class="control-label">City Name</label>
                                 <input type="text" class="form-control" id="inputName" autofocus placeholder="City Name" name="city[city_name]" required>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Status</label>
                              <select class="form-control" name="city[status]" id="exampleFormControlSelect1">
                                 <option value="1">Active</option>
                                 <option value="2">Inactive</option>
                              </select>
                           </div>
                        </div>
                        <!-- <div class="row">
                           <h5 class="card-header" style="Padding-left: 9px;">User Credential
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
                                          <input type="text" class="form-control" placeholder="Enter UDF 1" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="city[udf_1]" >
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
                                          <input type="text" class="form-control" placeholder="Enter UDF 2" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="city[udf_2]" >
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
                                          <input type="text" class="form-control" placeholder="Enter UDF 3" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="city[udf_3]" >
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div> -->
                  </div>
                  <div class="card-footer bg-light ">
                  <button class="btn btn-success" type="submit">Submit</button>
                  <a href="<?php echo base_url(); ?>master/location/city" class="btn btn-accent">Cancel</a>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
</div>