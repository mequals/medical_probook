<script>
   <?php
         if ($this->session->flashdata('product_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('product_success')."';";
            echo "success(data);";
         }
   ?>
</script>
	<div class="content-wrapper">

			<div class="content">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Manage Products</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Inventory Management</a></li>
										<li class="breadcrumb-item active" aria-current="page">Manage Products</li>
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
											Manage Products	 
										</div> 

										<div style="float: right;">
                      
                        <div class="btn-group dropdown" style="float:right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="13" && $section_list['acc_add']=="1"){
                                      ?>
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addproduct">Add New Product</button>
												<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Import Product</a>
													
												</div>
                        <?php } } } ?>
											</div>
                     </div>

									</h5>
									<div class="card-body">
										<div style="overflow-x: scroll;">
										<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
											<thead>
												<tr>
													<th>S.No</th>
                          <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="13" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th class="text-center" style="width:18%">Action</th><?php } } }?>
                          <th>Item Code</th>
													<th>Name</th>
													<th>HSN Code</th>
													<th>Material</th>
													<th>Category</th>
													<th>Sub Category</th>
													<!-- <th>Unit</th> -->
													<th>Cost</th>
													<th>Sales Price</th>
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
												<?php
            if (!empty($Products)) {
                $s = 1;
                foreach ($Products as $list) {
                    ?>
												<tr>
													<td><?php echo $s; ?></td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="13" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                          <td class="text-center" style="width:18%">
                            
                            <!-- <a href="" class="btn btn-warning btn-sm"><i class="la la-cog" style="
                                font-size: 18px;
                                color:  white;
                            "></i></a> -->
                            <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="13" && $section_list['acc_edit']=="1"){
                                      ?>
                            <a href="#" onclick="edit_product('<?php echo ucfirst($list['Product_type']) ; ?>','<?php echo ucfirst($list['Product_id']) ; ?>','<?php echo ucfirst($list['Item_code']) ; ?>','<?php echo ucfirst($list['Product_image']) ; ?>','<?php echo ucfirst($list['Item_name']) ; ?>','<?php echo ucfirst($list['Hsn_code']) ; ?>','<?php echo ucfirst($list['Category_id']) ; ?>','<?php echo ucfirst($list['Sub_cat_id']) ; ?>','<?php echo ucfirst($list['Material_type_id']) ; ?>','<?php echo ucfirst($list['Product_units']) ; ?>','<?php echo ucfirst($list['Description']) ; ?>','<?php echo ucfirst($list['Sales_price']) ; ?>','<?php echo ucfirst($list['S_inclusive_of_tax']) ; ?>','<?php echo ucfirst($list['Tax']) ; ?>','<?php echo ucfirst($list['Cost']) ; ?>','<?php echo ucfirst($list['P_inclusive_of_tax']) ; ?>','<?php echo ucfirst($list['Purchase_tax']) ; ?>','<?php echo ucfirst($list['Product_suppliers']) ; ?>','<?php echo ucfirst($list['Product_image']) ; ?>','<?php echo ucfirst($list['Inventory_tracking']) ; ?>')" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editproduct"><i class="zmdi zmdi-edit zmdi-hc-fw" style="
                                font-size: 17px;
                                color:  white;                               
                            "></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="13" && $section_list['acc_delete']=="1"){?>
                            <a href="" onclick="delete_product('<?php echo ucfirst($list['Product_id']); ?>','<?php echo ucfirst($table_name); ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemodel"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
                                    font-size: 17px;
                                    color:  white;
                                    "></i></a><?php } } } ?>                            
                          </td><?php } } } ?>
                          <td><?php echo ucfirst($list['Item_code']) ; ?> </td>
                        <td><?php echo ucfirst($list['Item_name']) ; ?></td>
                       <td><?php echo $list['Hsn_code']; ?></td>
                        <td><?php if (!empty($Supercategory)) {
                                        foreach ($Supercategory as $category) { if($list['Material_type_id']==$category['id']){echo $category['super_cat_name']; }}}?></td>
                        <td><?php if (!empty($Category)) {
                                        foreach ($Category as $category) { if($list['Category_id']==$category['id'] ){echo ucfirst($category['category_name']); }}}?></td>

                                        <td><?php if (!empty($Subcategory)) {
                                        foreach ($Subcategory as $category) { if($list['Sub_cat_id']==$category['id'] ){echo ucfirst($category['sub_cat_name']); }}}?></td>
                                        <td><?php echo $list['Cost']; ?></td>
                                        <td><?php echo $list['Sales_price']; ?></td>
                        <!-- <td><?php echo ($list['user_type_id'] != 1) ? (ucfirst($list['shop_name']) . ' (' . strtoupper($list['shop_type']) . ')') : 'N/A'; ?></td> -->
                        <td><span class="badge badge-<?php echo ($list['Status'] == 1) ? 'success' : 'danger'; ?>"><?php echo ($list['Status'] == 1) ? 'Active' : 'In-Active'; ?></span></td> 
													
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

						<!-- Model Execution -->
<!-- LOCATION RIGHT SIDE Add New Product -->

<div id="addproduct" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
<!-- <div class="modalscroll" style="overflow-y: scroll;"> -->
   <div class="modal-dialog" role="document" >
      <div class="modal-content" style="overflow-y: scroll;">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Manage Products</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Add Product</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator','enctype'=>'multipart/form-data','class' => 'needs-validation');
                        echo form_open('master/Categories/product_add', $attributes );
                        ?> 
                     <div class="card-body">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Product Type</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="Product_type"  name="Product_type" required=""><option>Select Product Type</option> 
                                      <option value="1">Non-Inventory</option>
                                      <option value="2">Inventory</option>
                                      <option value="3">Service</option>
                                    
                                    </select>
                                 </div>
                              </div>

                            
                            <div class="col-md-6">
                                         <div class="custom-control custom-checkbox form-check" style="margin-top: 40px;"> 
                                       <input type="checkbox" class="custom-control-input" id="tracking" checked="" name="Inventory_tracking" value="1">
                                       <label class="custom-control-label" for="tracking" >Turn Inventory Tracking</label>
                                      </div>
                                        </div>

                          </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Code</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-dns zmdi-hc-fw"></i></span>
                                       </div>
                                
                                       <input type="text" class="form-control" placeholder="User Id" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Item_code" readonly="" value="<?php echo $Prefix[0]['item_prefix']; ?>-0000<?php echo $Item_code; ?>">
                                    </div>
                                 </div>
                              </div>
                             <!--  -->  
                              <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Image</label>
                                    <span class="">
                                       <!-- <label class="btn-bs-file btn btn-lg btn-success" for="file">Choose a file :</label> -->
                                       <input type="file" style="width:153%;"  name="Product_image" class="form-control" id="profile_image" >
                                    </span>
                                 </div>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="javascript:void(0);"><img id="imagePreview" src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png" style="width: 100px; height: 100px; border: 2px #ccc solid;margin-top:0px;margin-left:55px; " alt="User profile picture" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png"></a>
                                    </div>
                                </div>
                                <!-- <span class="error_msg"></span> -->
                            <!-- </div> -->
                              </div>  
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Name</label> <span class="text-danger">*</span>		 
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control" autofocus placeholder="Item name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Item_name" id="Item_name" required="">
                                    </div>
                                 </div>
                              </div>                         
                              <div class="col-md-6">
                                 
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label">HSN Code</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-dns zmdi-hc-fw"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control" placeholder="HSN Code" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Hsn_code" >
                                    </div>
                                    <small id="textHelp1" class="form-text text-muted"><strong style="color: #000;">Not sure about HSN code ? <a href="https://www.gst.gov.in/" target="_blank">Look up here</a></strong>  </small> 
                                 
                              </div>
                              </div>
                              
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Material Type</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-sort-amount-asc zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control" id="Material_id"  name="Material_type_id" required=""><option>Select Material Type</option> <?php
                                    if (!empty($Supercategory)) {
                                        foreach ($Supercategory as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" ><?php echo ucfirst($category['super_cat_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                               </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Category</label> <span class="text-danger">*</span>
                                     <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-sort-amount-asc zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control custom-select" id="category_id"  name="Category_id" required=""> <option >Select Category</option><?php
                                    if (!empty($Category)) {
                                        foreach ($Category as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" ><?php echo ucfirst($category['category_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                               </div>
                              </div>                             
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sub Category</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-subject zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control" id="sub_category_id"  name="Sub_cat_id" required=""> <option >Select Sub Category</option><?php
                                    if (!empty($Subcategory)) {
                                        foreach ($Subcategory as $category) {
                                            ?>
                                            <option value="<?php echo $category['id']; ?>" ><?php echo ucfirst($category['sub_cat_name']); ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                 </div>
                               </div>
                              </div>

                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Units</label> <span class="text-danger">*</span>
                                    <select class="form-control s2_demo3 custom-select"  id="product_units" multiple="multiple" data-placeholder="<-Select Units->" style="width:100%;"  name="Units_id[]" onchange="change()" required="">
                                      <option >Select Units</option> 
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

                              
                              <div class="col-md-6">
                                 <!-- <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Units</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="s2_demo3" multiple="multiple"  name="item['Units_id']" required=""> <?php
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
                              </div> -->
                              </div>

                              <div class="row">
                              <!-- 	<div class="col-md-12">
                                    <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" name="gst[description]" rows="2"></textarea>
                                    </div> -->
                              	</div>
                              	
                         	 </div>
                         	 <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Units</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-subject zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control " id="Purchase_units"  name="Purchase_units" required=""><option>Select Purchase Unit</option> <?php
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
                              	<div class="col-md-6">
                                    <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control" placeholder="Enter Description" id="exampleFormControlTextarea1" name="Description" rows="2"></textarea>
                                    </div>
                              	</div>
                              	
                         	 </div>
                          
                              <div class="row">
	                              	<div class="col-12">
	                                 <!-- <h5 class="card-header">Sales Information
	                                 </h5> -->
                                   <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="sales" checked="" name="customcheckboxInline1" class="custom-control-input sales_information" >
                      <label style="color:red;" class="custom-control-label" for="sales" >Sales Information</label>
                    </div>
                    <hr style="color:black;"/>
	                                 <div class="row">
	                                    <!-- <div class="col-md-6">
	                                       <div class="form-group">
	                                          <label class="col-form-label-lg control-label" for="largeInput">Sales-Price</label> <span class="text-danger">*</span>
	                                          <div class="input-group mb-3">
	                                             <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
	                                             </div>
	                                             
	                                             <input type="text" class="form-control" placeholder="Sales Price" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Sales_price" required="">
	                                          </div>
	                                       </div>
	                                    </div> -->
	                                    <div class="col-md-6">
	                                       <div class="custom-control custom-checkbox form-check" style="   margin-top: 40px;">
			                                 <input type="checkbox" class="custom-control-input" id="customCheck2" checked="" name="S_inclusive_of_tax" value="1">
			                                 <label class="custom-control-label" for="customCheck2" >Inclusive Of Tax</label>
			                              	</div>
		                                    </div>
		                                    <div class="col-md-6">
		                              		<div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Tax</label> <span class="text-danger">*</span>
		                                    <select class="form-control" id="country_id"  name="Tax" required=""> <option >Select Tax</option><?php
		                              		if (!empty($Gst)) {
		                                  $s = 1;
		                                  foreach ($Gst as $list) {
		                                      ?>
		                                            <option value="<?php echo $list['gst_id']; ?>" <?php echo ($list['id'] == 1) ? 'selected' : ''; ?>> <?php
                                              echo $list['state_name'];?> - <?php echo ucfirst($list['tax_name']); ?></option>
		                                            <?php
		                                        }
		                                    }
		                                    ?>
		                                    </select>
                                 		</div>
                              			</div>
                                 	</div>
                              		</div>
                           		</div><br/>

                           <div class="row">
                           		<div class="col-md-12">

                           				<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" id="customcheckboxInline2" name="customcheckboxInline2" class="custom-control-input purchase_information" onclick="enablepurchase()">
											<label style="color:red;" class="custom-control-label" for="customcheckboxInline2" onclick="enablepurchase()">Purchase Information</label>
										</div>
										<hr style="color:black;"/>
                              <!-- <h5 class="card-header">Purchase Information -->
                              <!-- </h5> -->
                              		<div class="row purchaseaction" id="purchaseaction" style="display:none;" >
                                    <!-- <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Cost</label> <span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                             </div>
                                             
                                             <input type="text" class="form-control" placeholder="Cost" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Cost" id="cost">
                                          </div>
                                       </div>
                                    </div> -->


                                    <div class="col-md-6">
				                               <div class="custom-control custom-checkbox form-check" style="   margin-top: 40px;">
				                                 <input type="checkbox" name="P_inclusive_of_tax" class="custom-control-input" id="customCheck1" value="1">
				                                 <label class="custom-control-label" for="customCheck1">Inclusive Of Tax</label>
				                              </div>
                                    </div>

                                    <div class="col-md-6">
		                              		<div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Tax</label> <span class="text-danger">*</span>
		                                    <select class="form-control" id="country_id"  name="Purchase_tax" required=""> 
                                          <option >Select Tax</option><?php
		                              		if (!empty($Gst)) {
		                                  $s = 1;
		                                  foreach ($Gst as $list) {
		                                      ?>
		                                            <option value="<?php echo $list['gst_id']; ?>" <?php echo ($list['id'] == 1) ? 'selected' : ''; ?>> <?php
                                              echo $list['state_name'];?> - <?php echo ucfirst($list['tax_name']); ?></option>
		                                            <?php
		                                        }
		                                    }
		                                    ?>
		                                    </select>
                                 		</div>
                              			</div>

                                    <div class="col-md-12">
		                                <div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Prefered Supplier</label>
		                                    <select class="form-control prefered_supplier" id="s2_demo4" multiple="multiple" style="width:100%;"  name="Prefered_supplier_id[]" > <option >Select Suppliers</option><?php
                                        if (!empty($Suppliers)) {
                                            foreach ($Suppliers as $supplier) {
                                                ?>
                                                <option value="<?php echo $supplier['id']; ?>" <?php echo ($supplier['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($supplier['Ventor_name']); ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
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
<!-- </div> -->
					</section>

          <div class="modal fade" id="deletemodel" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <form action="<?php echo base_url();?>master/categories/delete" method="POST">
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

<div id="editproduct" class="modal modal-right-side fade" data-backdrop="static" tabindex="-1" role="dialog"  aria-hidden="true">
<!-- <div class="modalscroll" style="overflow-y: scroll;"> -->
   <div class="modal-dialog" role="document" >
      <div class="modal-content" style="overflow-y: scroll;">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <div class="modal-body" style="overflow-y: scroll;">
            <div class="row">
               <div class="col">
                  <div class="card">
                     <h5 class="card-header">Edit Product</h5>
                     <?php
                        $attributes = array('id' => 'login_form','data-toggle' => 'validator','enctype'=>'multipart/form-data','class' => 'needs-validation');
                        echo form_open('master/Categories/product_edit', $attributes);
                        ?> 
                     <div class="card-body">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Product Type</label> <span class="text-danger">*</span>
                                    <select class="form-control Product_type"   name="Product_type" required=""><option>Select Product Type</option> 
                                      <option value="1">Non-Inventory</option>
                                      <option value="2">Inventory</option>
                                      <option value="3">Service</option>
                                    
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                         <div class="custom-control custom-checkbox form-check" style="margin-top: 40px;"> 
                                       <input type="checkbox" class="custom-control-input Inventory_tracking" id="tracking_edit"  name="Inventory_tracking" value="1">
                                       <label class="custom-control-label" for="tracking_edit" >Turn Inventory Tracking</label>
                                      </div>
                                        </div>
                     

                          </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Code</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend" >
                                          <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-dns zmdi-hc-fw"></i></span>
                                       </div>
                                
                                       <input type="text" class="form-control Item_code" placeholder="User Id" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Item_code" readonly="" value="ITEM-0000<?php echo $Item_code; ?>">
                                       <input type="hidden" class="form-control Product_id"  name="Product_id" readonly="" >
                                    </div>
                                 </div>
                              </div>
                             <!--  -->  
                              <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Image</label>
                                    <span class="">
                                       <!-- <label class="btn-bs-file btn btn-lg btn-success" for="file">Choose a file :</label> -->
                                       <input type="file" style="width:153%;"  name="Product_image" class="form-control" id="profile_image" >
                                       <input class="old_file_name" type="hidden" name="old_file_name" value="">
                                    </span>
                                 </div>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="javascript:void(0);"><img class="editimagePreview" id="imagePreview" src="" style="width: 100px; height: 100px; border: 2px #ccc solid;margin-top:0px;margin-left:55px; " alt="User profile picture" default_src="<?php echo base_url(); ?>attachments/users_image/default_profile_image.png"></a>
                                    </div>
                                </div>
                                <!-- <span class="error_msg"></span> -->
                            <!-- </div> -->
                              </div>  
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Name</label> <span class="text-danger">*</span>		 
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control Item_name" autofocus placeholder="Item name" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Item_name" id="Item_name" required="">
                                    </div>
                                 </div>
                              </div>                         
                              <div class="col-md-6">
                                 
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label">HSN Code</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-dns zmdi-hc-fw"></i></span>
                                       </div>
                                      
                                       <input type="text" class="form-control Hsn_code" placeholder="HSN Code" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Hsn_code" >
                                    </div>
                                    <small id="textHelp1" class="form-text text-muted"><strong style="color: #000;">Not sure about HSN code ? <a href="https://www.gst.gov.in/">Look up here</a></strong>  </small>  
                                 
                              </div>
                              </div>
                              
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Material Type</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-sort-amount-asc zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control Material_type_id" id="Material_id"  name="Material_type_id" required=""> <?php
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
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Category</label> <span class="text-danger">*</span>
                                     <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-sort-amount-asc zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control Category_id" id="category_id"  name="Category_id" required=""> <?php
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
                              </div>                             
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sub Category</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-subject zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control Sub_cat_id" id="sub_category_id"  name="Sub_cat_id" required=""> <?php
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
                              </div>

                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Units</label> <span class="text-danger">*</span>
                                    <select class="form-control Product_units" id="Units_id" data-placeholder="<-Select Units->" multiple="multiple" style="width:100%;"  name="Units_id[]" onchange="change()" required=""> <?php
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

                              
                              <div class="col-md-6">
                                 <!-- <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Units</label> <span class="text-danger">*</span>
                                    <select class="form-control" id="s2_demo3" multiple="multiple"  name="item['Units_id']" required=""> <?php
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
                              </div> -->
                              </div>

                              	
                         	 </div>
                         	 <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Units</label> <span class="text-danger">*</span>
                                    <div class="input-group mb-3">
                                               <div class="input-group-prepend">
                                                  <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-subject zmdi-hc-fw"></i></span>
                                               </div>
                                    <select class="form-control Purchase_units" id="Purchase_units"  name="Purchase_units" required=""> <?php
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
                              </div>
                              	<div class="col-md-6">
                                    <div class="form-group">
                                       <label for="exampleFormControlTextarea1">Description</label>
                                       <textarea class="form-control Description" id="exampleFormControlTextarea1" name="Description" rows="2"></textarea>
                                    </div>
                              	</div>
                              	
                         	 </div>
                          
                              <div class="row">
	                              	<div class="col-12">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" id="salesedit" checked="" name="customcheckboxInline1" class="custom-control-input purchase_information" >
                      <label style="color:red;" class="custom-control-label" for="salesedit" onclick=>Sales Information</label>
                    </div>
                    <hr style="color:black;"/>
	                                 <!-- <h5 class="card-header">Sales Information
	                                 </h5> -->
	                                 <div class="row">
	                                    <!-- <div class="col-md-6">
	                                       <div class="form-group">
	                                          <label class="col-form-label-lg control-label" for="largeInput">Sales-Price</label> <span class="text-danger">*</span>
	                                          <div class="input-group mb-3">
	                                             <div class="input-group-prepend">
	                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
	                                             </div>
	                                             
	                                             <input type="text" class="form-control Sales_price" placeholder="Sales Price" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Sales_price" required="">
	                                          </div>
	                                       </div>
	                                    </div> -->
	                                    <div class="col-md-6">
	                                       <div class="custom-control custom-checkbox form-check" style="   margin-top: 40px;">
			                                 <input type="checkbox" class="custom-control-input S_inclusive_of_tax" id="s_inclusiveedit" checked="" name="S_inclusive_of_tax" value="1">
			                                 <label class="custom-control-label" for="s_inclusiveedit" >Inclusive Of Tax</label>
			                              	</div>
		                                    </div>
		                                    <div class="col-md-6">
		                              		<div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Tax</label> <span class="text-danger">*</span>
		                                    <select class="form-control Tax" id="country_id"  name="Tax" required=""> <option>Select Tax</option><?php
		                              		if (!empty($Gst)) {
		                                  $s = 1;
		                                  foreach ($Gst as $list) {
		                                      ?>
		                                            <option value="<?php echo $list['gst_id']; ?>" > <?php
                                              echo $list['state_name'];?> - <?php echo ucfirst($list['tax_name']); ?></option>
		                                            <?php
		                                        }
		                                    }
		                                    ?>
		                                    </select>
                                 		</div>
                              			</div>
                                 	</div>
                              		</div>
                           		</div><br/>

                           <div class="row">
                           		<div class="col-md-12">

                           				<div class="custom-control custom-checkbox custom-control-inline">
											<input type="checkbox" id="purchaseedit" name="customcheckboxInline1" class="custom-control-input purchase_information" onclick="enablepurchase()">
											<label style="color:red;" class="custom-control-label" for="purchaseedit" onclick="enablepurchase()">Purchase Information</label>
										</div>
										<hr style="color:black;"/>
                              <!-- <h5 class="card-header">Purchase Information -->
                              <!-- </h5> -->
                              		<div class="row purchaseaction" id="purchaseaction" >
                                    <!-- <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-form-label-lg control-label" for="largeInput">Cost</label> <span class="text-danger">*</span>
                                          <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-icon-addon1"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                             </div>
                                             
                                             <input type="text" class="form-control Cost" placeholder="Cost" aria-label="Icon Left" aria-describedby="basic-icon-addon1" name="Cost" id="cost">
                                          </div>
                                       </div>
                                    </div> -->


                                    <div class="col-md-6">
				                               <div class="custom-control custom-checkbox form-check" style="   margin-top: 40px;">
				                                 <input type="checkbox" name="P_inclusive_of_tax" class="custom-control-input P_inclusive_of_tax" id="p_inclusiveedit" value="1">
				                                 <label class="custom-control-label" for="p_inclusiveedit">Inclusive Of Tax</label>
				                              </div>
                                    </div>

                                    <div class="col-md-6">
		                              		<div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Tax</label> <span class="text-danger">*</span>
		                                    <select class="form-control Purchase_tax" id="country_id"  name="Purchase_tax" required=""><option>Select Tax</option> <?php
		                              		if (!empty($Gst)) {
		                                  $s = 1;
		                                  foreach ($Gst as $list) {
		                                      ?>
		                                            <option value="<?php echo $list['gst_id']; ?>" > <?php
                                              echo $list['state_name'];?> - <?php echo ucfirst($list['tax_name']); ?></option>
		                                            <?php
		                                        }
		                                    }
		                                    ?>
		                                    </select>
                                 		</div>
                              			</div>

                                    <div class="col-md-12">
		                                <div class="form-group">
		                                    <label class="col-form-label-lg control-label" for="largeInput">Prefered Supplier</label>
		                                    <select class="form-control Product_suppliers ko" id="prefered_supplier" multiple="multiple" style="width:100%;"  name="Prefered_supplier_id[]" > <?php
		                                    if (!empty($Suppliers)) {
		                                        foreach ($Suppliers as $supplier) {
		                                            ?>
		                                            <option value="<?php echo $supplier['id']; ?>" <?php echo ($supplier['id'] == 1) ? 'selected' : ''; ?>><?php echo ucfirst($supplier['Ventor_name']); echo $supplier['id'];?></option>
		                                            <?php
		                                        }
		                                    }
		                                    ?>
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

				</div>

		</div>
	</div>	
	<script type="text/javascript">

       function edit_product(val,val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11,val12,val13,val14,val15,val16,val17,val18,val19){ 
      var base_url = window.location.origin+'/'+window.location.pathname.split("/")[1];
      $('.editimagePreview').attr('src', base_url+'/attachments/Products_image/'+val18);
      $(".old_file_name").val(val18);
      //alert(val);
      $(".Product_type").val(val);
      $(".Product_id").val(val1);
      $(".Item_code").val(val2);
      $(".Image").val(val3);
      $(".Item_name").val(val4);
      $(".Hsn_code").val(val5);
      $(".Category_id").val(val6);
      $(".Sub_cat_id").val(val7);
      $(".Material_type_id").val(val8);
      $(".Description").text(val10);
      $(".Sales_price").val(val11);
      var purchasetax = JSON.parse("[" + val17 + "]");
      $('.Product_suppliers').select2().val(purchasetax).trigger('change');
      $(".S_inclusive_of_tax").val(val12);
      $(".Tax").val(val13);
      $(".Cost").val(val14);
      $(".P_inclusive_of_tax").val(val15);
      $(".Purchase_tax").val(val16);
      var salestax = JSON.parse("[" + val9 + "]");
      if(val19==1){ $('input.Inventory_tracking').prop('checked', true);}else{$('input.Inventory_tracking').prop('checked', false);}
      $('.Product_units').select2().val(salestax).trigger('change');
   
   }


			function enablepurchase(){
				if ($(".purchase_information").prop('checked') == true) {
            	$('#purchaseaction').show();
            	$('#cost').attr('required', 'required');
              
                // $('input.allow_access,input.menu_all').prop('checked', true);
            } else { 
            	$('#purchaseaction').hide();
            	$('#cost').removeAttr('required');
                // $('input.allow_access,input.menu_all').prop('checked',false);
                

            }
			
        }

   function delete_product(val,val1){
    $('.delete_id').val(val);
    $('.table_name').val(val1);
    //alert($('.delete_id').val(val));
   }


        


	</script>
	<script type="text/javascript">
		 
	</script>
	
