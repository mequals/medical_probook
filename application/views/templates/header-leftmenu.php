		<!-- START MENU SIDEBAR WRAPPER -->
		<aside class="sidebar sidebar-left">
			<div class="sidebar-content">
				<div class="aside-toolbar">
					<ul class="site-logo">
						<li>
						<!-- START LOGO -->
							<a href="<?php echo base_url(); ?>dashboard/dashboard">
								<div class="logo">
			<img src="/medical_probook/assets/img/qt-logo.png" alt="" height="" style="width: 150px;margin-left: -45px;
    margin-top: -5px;
">
								</div>
								<span class="brand-text">Medical ProBook</span>
							</a>
						<!-- END LOGO -->
						</li>
					</ul>
					<ul class="header-controls">
						<li class="nav-item">
							<button type="button" class="btn btn-link btn-menu" data-toggle-state="mini-sidebar">
								<i class="la la-dot-circle-o"></i>
							</button>
						</li>
					</ul>
				</div>
				<nav class="main-menu">
					<ul class="nav metismenu">
						
						  
						<li class="sidebar-header"><span>NAVIGATION</span></li>
						

						<li class="<?php if($this->uri->uri_string()=='dashboard/dashboard'){echo 'active';}?>"><a href="<?php echo base_url(); ?>dashboard/dashboard"><i class="icon dripicons-meter"></i><span>Dashboard </span></a></li>
						
						<?php $permission=$this->session->userdata('menu_permission');
                              if (!empty($permission)) {
                                  
                                  foreach ($permission as $list) {
                                  	// if($list->module_id==2){
                                  	if($list['module_id']=="2"){
                                      ?>
                                  	

                                     
						<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/company' || $this->uri->uri_string()=='master/company/company_add' || $this->uri->uri_string()=='master/company/company_edit'|| $this->uri->uri_string()=='master/company/prefix_setting' || $this->uri->uri_string()=='master/company/company_edit'|| $this->uri->uri_string()=='master/branch/prefix_setting'|| $this->uri->uri_string()=='master/company/advanced_setting' || $this->uri->uri_string()=='master/location' || $this->uri->uri_string()=='master/location/state' || $this->uri->uri_string()=='master/location/city' ||$this->uri->uri_string()=='master/location/area' || $this->uri->uri_string()=='master/branch' || $this->uri->uri_string()=='master/branch/adding_branch' || $this->uri->uri_string()=='master/branch/editing_branch'|| $this->uri->uri_string()=='master/Unit' || $this->uri->uri_string()=='master/Gst'){echo 'active';}?>">
							<a class="has-arrow " href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/company'){echo 'true';}else{ echo 'false';}?>"><i class="icon dripicons-view-thumb"></i><span>Master </span></a>
							<ul class="collapse nav-sub" aria-expanded="false">

								<?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="2"){
                                      ?>
								
								<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/company'|| $this->uri->uri_string()=='master/company/company_edit' || $this->uri->uri_string()=='master/company/company_add' || $this->uri->uri_string()=='master/company/prefix_setting' || $this->uri->uri_string()=='master/company/prefix_setting' || $this->uri->uri_string()=='master/company/advanced_setting'){echo 'active';}?>">
										<a class="has-arrow " href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/company' || $this->uri->uri_string()=='master/company/prefix_setting' || $this->uri->uri_string()=='master/company/advanced_setting'){echo 'true';}else{ echo 'false';}?>"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
											Company
										</a>
										<ul class="collapse nav-sub" aria-expanded="false">
											<li class="<?php if($this->uri->uri_string()=='master/company' || $this->uri->uri_string()=='master/company/company_add' || $this->uri->uri_string()=='master/company/company_edit'){echo 'active';}?>">
												<a class="" href="<?php echo base_url(); ?>master/company/"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Manage Companies
												</a>
											</li>
											<li class="<?php if($this->uri->uri_string()=='master/company/prefix_setting'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/company/prefix_setting"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Prefix Setting
												</a>
											</li>
											<li class="<?php if($this->uri->uri_string()=='master/company/advanced_setting'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/company/advanced_setting"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Advanced Setting
												</a>
											</li>
									</ul>
								</li>
							<?php }}} if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="3"){?>
								<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/branch' || $this->uri->uri_string()=='master/branch/adding_branch' || $this->uri->uri_string()=='master/branch/editing_branch' || $this->uri->uri_string()=='master/branch/prefix_setting'){echo 'active';}?>"><a  href="<?php echo base_url(); ?>master/branch"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i> <span>Branch/Warehouse</span></a></li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {// if($list->module_id==2){
                                  	if($section_list['section_id']=="4"){?>
								
								<li class="<?php if($this->uri->uri_string()=='master/Unit'){echo 'active';}?>"><a href="<?php echo base_url(); ?>master/Unit/"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i> <span>Units</span></a></li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="5"){?>
								<li class="<?php if($this->uri->uri_string()=='master/Gst'){echo 'active';}?>"><a href="<?php echo base_url(); ?>master/Gst/"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i> <span>GST</span></a></li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="6"){?>
								
								<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/location' || $this->uri->uri_string()=='master/location/state' || $this->uri->uri_string()=='master/location/city' ||$this->uri->uri_string()=='master/location/area'){echo 'active';}?>">
										<a class="has-arrow" href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/location' || $this->uri->uri_string()=='master/location/state' || $this->uri->uri_string()=='master/location/city' ||$this->uri->uri_string()=='master/location/area'){echo 'true';}else{ echo 'false';}?>"> <i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
											Locations
										</a>
										<ul class="collapse nav-sub" aria-expanded="false">
											<li class="<?php if($this->uri->uri_string()=='master/location'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/location/"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Countries
												</a>
											</li>
											<li class="<?php if($this->uri->uri_string()=='master/location/state'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/location/state"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													States
												</a>
											</li>
											<li class="<?php if($this->uri->uri_string()=='master/location/city'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/location/city"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Cities
												</a>
											</li>
											<li class="<?php if($this->uri->uri_string()=='master/location/area'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/location/area"><i class="zmdi zmdi-caret-right zmdi-hc-fw"></i>
													Areas
												</a>
											</li>
									</ul>
								</li><?php } } }?>


							</ul>
						</li>

						 <?php
                              }
                          }
                      }

                              if (!empty($permission)) {
                                  
                                  foreach ($permission as $list) {
                              if($list['module_id']=="3"){
                              ?>



                                  	
						<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/users/user' || $this->uri->uri_string()=='master/users/add_user' || $this->uri->uri_string()=='master/users' || $this->uri->uri_string()=='master/users/edit_user') {echo 'active';}?>" >
							<a class="has-arrow" href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/users/user' || $this->uri->uri_string()=='master/users'){echo 'true';}else{ echo 'false';}?>"><i class="con dripicons-user"></i>Users 
							</a>
										
										<ul class="collapse nav-sub" aria-expanded="false">
											<?php if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="7"){?>
											<li class="<?php if($this->uri->uri_string()=='master/users/user' || $this->uri->uri_string()=='master/users/edit_user' || $this->uri->uri_string()=='master/users/add_user'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/users/user"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Manage Users
												</a>
											</li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="9"){?>
											<li class="<?php if($this->uri->uri_string()=='master/users'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/users"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Manage User Types
												</a>
											</li><?php } } } ?>
																						
									</ul>
								</li>

							<?php }
						}
					}

                              if (!empty($permission)) {
                                  
                                  foreach ($permission as $list) {
							if($list['module_id']=="4"){?>
						
							<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/categories/super_category' || $this->uri->uri_string()=='master/categories' || $this->uri->uri_string()=='master/categories/sub_category' ||$this->uri->uri_string()=='master/categories/product' || $this->uri->uri_string()=='master/Ventors'){echo 'active';}?>">
							<a class="has-arrow" href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/categories/super_category' ){echo 'true';}else{ echo 'false';}?>"><i class="con dripicons-medical"></i>Inventory Management
							</a>
										
										<ul class="collapse nav-sub" aria-expanded="false">
											<?php if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="10"){?>
											<li class="<?php if($this->uri->uri_string()=='master/categories/super_category'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/categories/super_category"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Material Type
												</a>
											</li ><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="11"){?>

											<li class="<?php if($this->uri->uri_string()=='master/categories'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/categories"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Categories
												</a>
											</li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="12"){?>
											<li class="<?php if($this->uri->uri_string()=='master/categories/sub_category'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/categories/sub_category"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Sub Categories
												</a>
											</li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="13"){?>
											<li class="<?php if($this->uri->uri_string()=='master/categories/product'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/categories/product"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Manage Products
												</a>
											</li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="14"){?>
											
											<li class="<?php if($this->uri->uri_string()=='master/Ventors'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/Ventors"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i> Ventor/Supplier
												</a></li><?php } } } ?>
																						
									</ul>
								</li>

							<?php }
						}
					}

                              if (!empty($permission)) {
                                  
                                  foreach ($permission as $list) {
							if($list['module_id']=="5"){?>

								<li class="nav-dropdown <?php if($this->uri->uri_string()=='master/customer' || $this->uri->uri_string()=='master/customer/customer'){echo 'active';}?>">
								<a class="has-arrow" href="#" aria-expanded="<?php if($this->uri->uri_string()=='master/customer' ){echo 'true';}else{ echo 'false';}?>"><i class="con dripicons-user-group"></i>Customer Management
										</a>
										<ul class="collapse nav-sub" aria-expanded="false">
											<?php if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="15"){?>
											<li class="<?php if($this->uri->uri_string()=='master/customer'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/customer/"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Customer Group
												</a>
											</li><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                  	if($section_list['section_id']=="16"){?>
											<li class="<?php if($this->uri->uri_string()=='master/customer/customer'){echo 'active';}?>">
												<a href="<?php echo base_url(); ?>master/customer/customer"><i class="zmdi zmdi-dot-circle-alt zmdi-hc-fw"></i>
													Manage Customer
												</a>
											</li><?php } } }?>											
									</ul>
								</li>
							<?php }
							}
                              }
                              ?>

						
						
					</ul>
				</nav>
			</div>
		</aside>
		<!-- END MENU SIDEBAR WRAPPER -->