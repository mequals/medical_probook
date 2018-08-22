		<div class="content-wrapper">
			<!-- START LOGO WRAPPER -->
			<nav class="top-toolbar navbar navbar-mobile navbar-tablet">
				<ul class="navbar-nav nav-left">
					<li class="nav-item">
						<a href="javascript:void(0)" data-toggle-state="aside-left-open">
							<i class="icon dripicons-align-left"></i>
						</a>
					</li>
				</ul>
				
				<ul class="navbar-nav nav-right">
					<li class="nav-item">
						<a href="javascript:void(0)" data-toggle-state="mobile-topbar-toggle">
							<i class="icon dripicons-dots-3 rotate-90"></i>
						</a>
					</li>
				</ul>
			</nav>


			<!-- END LOGO WRAPPER -->
			<!-- START TOP TOOLBAR WRAPPER -->
			<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
				<!-- START LEFT DROPDOWN MENUS -->
				
				<!-- END LEFT DROPDOWN MENUS -->
				<!-- START RIGHT TOOLBAR ICON MENUS -->
				<ul class="navbar-nav nav-right">
					<li class="nav-item">
						<a href="javascript:void(0)" class="open-search-button" data-q-action="open-site-search">
							<i class="icon dripicons-search" style="color: white;"></i>
						</a>
					</li>
					<li class="nav-item dropdown dropdown-menu-lg">
						<a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="icon dripicons-view-apps" style="color: white;"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right p-0">
							<div class="dropdown-menu-grid">
								<div class="menu-grid-row">
									<div><a class="dropdown-item  border-bottom border-right" href="apps.mail.html"><i class="icon dripicons-mail"></i><span>Mail</span></a></div>
									<div><a class="dropdown-item  border-bottom" href="apps.messages.html"><i class="icon dripicons-message"></i><span>Messages</span></a></div>
								</div>
								<div class="menu-grid-row">
									<div><a class="dropdown-item  border-right" href="apps.contacts.html"><i class="icon dripicons-archive"></i><span>Contacts</span></a></div>
									<div> <a class="dropdown-item" href="apps.calendar.html"><i class="icon dripicons-calendar"></i><span>Calendar</span></a></div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-notifications dropdown-menu-lg">
						<a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="icon dripicons-bell" style="color: white;"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="card card-notification">
								<div class="card-header">
									<h5 class="card-title">Notifications</h5>
									<ul class="actions top-right">
										<li>
											<a href="javascript:void(0);" data-q-action="open-notifi-config">
												<i class="icon dripicons-gear"></i>
											</a>
										</li>
									</ul>
								</div>
								
								<div class="card-body">
									<div class="card-container-wrapper">
										<div class="card-container">
											<div class="timeline timeline-border">
												<div class="timeline-list">
													<div class="timeline-info">
														<div>Prep for bi-weekly meeting with <a href="javascript:void(0)"><strong>Steven Weinberg</strong></a> </div>
														<small class="text-muted">07/05/18, 2:00 PM</small>
													</div>
												</div>
												<div class="timeline-list timeline-border timeline-primary">
													<div class="timeline-info">
														<div>Skype call with development team</div>
														<small class="text-muted">07/07/18, 1:00 PM</small>
													</div>
												</div>
												<div class="timeline-list  timeline-border timeline-accent">
													<div class="timeline-info">
														<div>Programming control system</div>
														<small class="text-muted">07/09/18, 10:00 AM - 6:00 PM</small>
													</div>
												</div>
												<div class="timeline-list  timeline-border timeline-success">
													<div class="timeline-info">
														<div>Lunch with Peter Higgs</div>
														<small class="text-muted">07/10/18, 12:00 PM</small>
													</div>
												</div>
												<div class="timeline-list  timeline-border timeline-warning">
													<div class="timeline-info">
														<div><a href="#"><strong>Approve Request</strong></a> for new training material by</div>
														<small class="text-muted">07/11/18, 9:00 AM</small>
													</div>
												</div>
												<div class="timeline-list  timeline-border timeline-info">
													<div class="timeline-info">
														<div><a href="#"><strong>RSVP</strong></a> for this year's hackathon.</div>
														<small class="text-muted">07/11/18, 1:30 PM</small>
													</div>
												</div>
											</div>
										</div>
										<div class="card-container">
											<h6 class="p-0 m-0">
												Show notifications from:
											</h6>
											<div class="row m-b-20 m-t-30">
												<div class="col-10"><span class="title"><i class="icon dripicons-calendar"></i>Calendar</span></div>
												<div class="col-2"><input type="checkbox" class="js-switch" checked /></div>
											</div>
											<div class="row m-b-20">
												<div class="col-10"><span class="title"><i class="icon dripicons-mail"></i>Email</span></div>
												<div class="col-2"><input type="checkbox" class="js-switch" checked/></div>
											</div>
											<div class="row m-b-20">
												<div class="col-10"><span class="title"><i class="icon dripicons-message"></i>Messages</span></div>
												<div class="col-2"><input type="checkbox" class="js-switch" /></div>
											</div>
											<div class="row m-b-20">
												<div class="col-10"><span class="title"><i class="icon dripicons-stack"></i>Projects</span></div>
												<div class="col-2"><input type="checkbox" class="js-switch" checked/></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php if($this->session->userdata('Profile')!=''){?>
							<img src="<?php echo base_url(); ?>attachments/users_image/<?php echo $this->session->userdata('Profile');?>" class="w-35 rounded-circle" alt="Albert Einstein"><?php }else{?>
								<img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="w-35 rounded-circle" alt="Albert Einstein"><?php }?>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
							<div class="dropdown-header pb-3">
								<div class="media d-user">
									<?php if($this->session->userdata('Profile')!=''){?>
							<img src="<?php echo base_url(); ?>attachments/users_image/<?php echo $this->session->userdata('Profile');?>" class="w-35 rounded-circle" alt="Albert Einstein"><?php }else{?>
								<img src="<?php echo base_url(); ?>assets/img/avatars/1.jpg" class="w-35 rounded-circle" alt="Albert Einstein"><?php }?>
									<div class="media-body">
										<h5 class="mt-0 mb-0"> <?php echo ucfirst($this->session->userdata('UserTypeName'));?></h5>
										<!-- <span>support@authenticgoods.co</span> -->
									</div>
								</div>
							</div>							
						<a class="dropdown-item" href="pages.profile.html"><i class="icon dripicons-user"></i> Profile</a>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal"><i class="icon dripicons-gear" ></i> Account Settings </a>
							<div class="dropdown-divider"></div>							
							<a class="dropdown-item" href="<?php echo base_url('login/logout')?>"><i class="icon dripicons-lock-open"></i> Sign Out</a>

						</div>
					</li>
					<!-- <li class="nav-item">
						<a href="javascript:void(0)" data-toggle-state="aside-right-open">
							<i class="icon dripicons-align-right"></i>
						</a>
					</li> -->
				</ul>
				<!-- END RIGHT TOOLBAR ICON MENUS -->
				<!--START TOP TOOLBAR SEARCH -->
				<form role="search" action="http://www.authenticgoods.co/themes/quantum-pro/demos/demo1/pages.search.html" class="navbar-form">
					<div class="form-group">
						<input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
						<i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
					</div>
					<button type="submit" class="d-none">Submit</button>
				</form>
				<!--END TOP TOOLBAR SEARCH -->
			</nav>
			<!-- END TOP TOOLBAR WRAPPER -->

			<!-- SIDEBAR QUICK PANNEL WRAPPER -->
			
			<!-- END SIDEBAR QUICK PANNEL WRAPPER -->


		<!-- Model For Changing password -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ModalTitle1">Change Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="zmdi zmdi-close"></span>
						</button>
					</div>
					<div class="modal-body">
						<form  data-toggle="validator" role="form">							
							<div class="form-group">
								<label for="inputEmail4" class="help-block">Old Password</label>
								<input type="text" class="form-control" name="password" id="password" required>
							</div>	
							<span id="form_err" style="color:red;"></span>
							<div class="form-group ">
								<label for="inputEmail4" class="help-block">New Password</label>
								<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
								<input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url(); ?>">
								<div class="help-block">Minimum of 6 characters</div>
							</div>
							<div class="form-group ">
								<label for="inputEmail4" class="help-block">Conform Password</label>
								<input type="password" class="form-control" name="c_password" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
								<div class="help-block with-errors"></div>
							</div>						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
						  <div>
						    <button type="button" class="btn btn primary " id="change_pwd" >Submit</button>
						  </div>
					</div>
					</form>
				</div>
			</div>
		</div>
