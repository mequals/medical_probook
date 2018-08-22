<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Add New Products</h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Productss</li>
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
                     <i class="icon dripicons-gear"></i> Manage Products
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
                  <h5 class="card-header">Product Information</h5>
                 
                 <form action="<?php echo base_url();?>master/users/user_add" method="POST">
                     <div class="card-body">
                        <div class="form-body">




                           <div class="row">

                              <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Code</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="la la-user-plus"></i></span>
                                       </div>
                                
                                       <input type="text" class="form-control" placeholder="User Id" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="item['Item_code']" readonly="" value="ITEM-0000<?php echo $Item_code; ?>">
                                    </div>
                                 </div>
                              </div> -->
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Name</label> <span class="text-danger">*</span>		 
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control" placeholder="User name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="item['Item_name']" required="">
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label">HSN Code</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control" placeholder="User name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="item['Hsn_code']" required="">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Units</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="units_id"  name="item['Units_id']" required=""> <?php
                                    if (!empty($Units)) {
                                        foreach ($Units as $unit) {
                                            ?>
                                            <option value="<?php echo $unit['id']; ?>" <?php echo ($unit['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($unit['unit_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Category</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="country_id"  name="item['Item_code']" required=""> <?php
                                    if (!empty($Category)) {
                                        foreach ($Category as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($category['category_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sub Category</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="country_id"  name="country_id" required=""> <?php
                                    if (!empty($Subcategory)) {
                                        foreach ($Subcategory as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($category['sub_cat_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sub Category</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="country_id"  name="country_id" required=""> <?php
                                    if (!empty($Supercategory)) {
                                        foreach ($Supercategory as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($category['super_cat_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Image</label>
                                    <span class="">
                                       <!-- <label class="btn-bs-file btn btn-lg btn-success" for="file">Choose a file :</label> -->
                                       <input type="file" id="file" class="form-control" name="profile_image" >
                                    </span>
                                 </div>
                              </div>


                              <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Email Address</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-email zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Email Address" aria-label="Icon Left" aria-describedby="basic-addon2" name="email_address">
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Mobile Number</label><span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="zmdi zmdi-smartphone-iphone zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Email Mobile Number" aria-label="Icon Left" aria-describedby="basic-addon2" name="mobile_number" required="">
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Phone Number</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-append">
                                          <span class="input-group-text" id="basic-addon2"><i class="la la-phone-square"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Phone Number" aria-label="Icon Left" aria-describedby="basic-addon2" name="phone_number">		
                                         							
                                    </div>
                                 </div>
                              </div> -->
                           </div>

                           <div class="row">
                              
                             <!--  <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">State</label><span class="text-danger">*</span>
                                    <select class="form-control"  id="state_id" name="state_id" required=""> -->
                                       <!-- <?php
                                    if (!empty($states)) {
                                        foreach ($states as $state) {
                                            ?>
                                            <option value="<?php echo $state['id']; ?>"><?php echo ucfirst($state['state_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?> -->
                                    <!-- </select>
                                 </div>
                              </div> -->
                              <!-- <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">City</label><span class="text-danger">*</span>
                                    <select class="form-control" id="city_id" name="city_id" required="">
                                       
                                    </select>
                                 </div>
                              </div> -->
                           </div>

                           <!-- <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Address Line 1</label><span class="text-danger">*</span>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address Line 1" rows="3" name="address_line_1" required=""></textarea>
                                    <div class="invalid-feedback">
                                       Please choose a Address Line.
                                    </div>
                                 </div>

                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Address Line 2</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Address Line 1" rows="3" name="address_line_2" required=""></textarea>
                                    <div class="invalid-feedback">
                                       Please choose a Address Line.
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Zipcode</label><span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="icon dripicons-location"></i></span>
                                       </div>
                                       <input type="text" class="form-control" placeholder="Enter Zipcode" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="zipcode" required="">
                                    </div>
                                 </div>
                              </div>
                           </div> -->

                           <!-- <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Profile Picture</label>
                                    <span class="">
                                       <label class="btn-bs-file btn btn-lg btn-success" for="file">Choose a file :</label>
                                       <input type="file" id="file" class="form-control" name="profile_image" >
                                    </span>
                                 </div>
                              </div>
                           </div> -->
                           <div class="row">
                              <div class="col-12">
                                 <h5 class="card-header">Sales Information
                                 </h5>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Sales-Price</label><span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                             </div>
                                             
                                             <input type="text" class="form-control" placeholder="User Name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Sales_price" required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="custom-control custom-checkbox form-check">
                                 <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                                 <label class="custom-control-label" for="customCheck2">Inclusive Of Tax</label>
                              </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Tax %</label><span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="icon la la-unlock"></i></span>
                                             </div>
                                             
                                             <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPasswordform" data-match-error="Whoops, these don't match" placeholder="Confirm" aria-describedby="basic-icon-addon1" required=""> <br>
                                          </div>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <h5 class="card-header">Purchase Information
                              </h5>
                              <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Cost</label><span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="icon la la-user"></i></span>
                                             </div>
                                             
                                             <input type="text" class="form-control" placeholder="User Name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Sales_price" required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="custom-control custom-checkbox form-check">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">Inclusive Of Tax</label>
                              </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Purchase Tax %</label><span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="icon la la-unlock"></i></span>
                                             </div>
                                             
                                             <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPasswordform" data-match-error="Whoops, these don't match" placeholder="Confirm" aria-describedby="basic-icon-addon1" required=""> <br>
                                          </div>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Prefered Supplier</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="country_id"  name="country_id" required=""> <?php
                                    if (!empty($Supercategory)) {
                                        foreach ($Supercategory as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($category['super_cat_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-4"></div>
                                 </div>
                                 
                           </div>

                        </div>
                        
                                <div class="form-group row">
                          <label class="control-label text-right col-md-3">Multi Select</label>
                          <div class="col-md-5">
                            <select class="form-control" id="s2_demo3" multiple="multiple">
                              <?php
                                    if (!empty($Category)) {
                                        foreach ($Category as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($category['category_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                            </select>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="control-label text-right col-md-3">Multi Select</label>
                          <div class="col-md-5">
                            <select class="form-control" id="s2_demo4" multiple="multiple">
                              <?php
                                    if (!empty($Units)) {
                                        foreach ($Units as $unit) {
                                            ?>
                                            <option value="<?php echo $unit['id']; ?>" <?php echo ($unit['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($unit['unit_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                            </select>
                          </div>
                        </div>
                              
                     </div>
                     </div>




                 
                  <div class="card-footer bg-light">                  
                     <button class="btn btn-success" type="submit">Submit</button>
                     <a href="/medical_probook/master/Categories/product" class="btn btn-accent">Cancel</a>
                  </div>
               
                  </form>
               </div>
            </div>
         </div>
   </div>
   </section>
</div>
</div>
</div>