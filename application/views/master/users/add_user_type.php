	<div class="content-wrapper">

				<div class="content">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Add User Type</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Master </a></li>
										<li class="breadcrumb-item active" aria-current="page">User Types</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</header>

					<section class="page-content container-fluid">
						<div class="row">
							<div class="col">
									<div class="card">
										<h5 class="card-header">Add User Type</h5>
										 <?php
 $attributes = array('id' => 'login_form','data-toggle' => 'validator');
 echo form_open('master/users/user_type_add', $attributes);
?> 
								
											<div class="card-body">										
													<div class="form-body">
														<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-form-label-lg control-label" for="largeInput">User Type Name</label>
																		<input type="text" class="form-control" name="user_type[user_type_name]" id="inputName" placeholder="Username" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-form-label-lg" for="largeInput">Status</label>
																		<select class="form-control" name="user_type[status]" id="defaultSelect" required="">
																			<option value="1">Active</option>
																			<option value="2">In-Active</option>
																		</select>
																	</div>
																</div>
														</div>
													</div>										
											</div>
											<div class="card-footer bg-light">
												<div class="form-actions">
													<div class="row">
														<div class="col-md-12">
															<div class="row">
																<div class=" col-md-12 text-center">	
																	
																		<button class="btn btn-danger btn-rounded" onclick="window.location = '<?php echo base_url(); ?>master/users/'" type="button">Cancel</button>
																	
																	<button class="btn btn-success btn-rounded submit" type="submit">Submit</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
						</div>
					</section>
		
				</div>

		</div>
	</div>	

