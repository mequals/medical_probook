<script>
   <?php
         if ($this->session->flashdata('user_success')) 
         {
            echo "var data = ' ".$this->session->flashdata('user_success')."';";
            echo "success(data);";
         }
   ?>
</script>
		<div class="content-wrapper">

			<div class="content">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Manage User</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Master</a></li>
										<li class="breadcrumb-item active" aria-current="page">Manage User</li>
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
											Manage User	
										</div>
										<div style="float: right;">
											<?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" && $section_list['acc_add']=="1"){
                                      ?>
											<a href="<?php echo base_url(); ?>/master/users/add_user" >
												<button class="btn btn-success btn-floating">Add New User</button>											
											</a><?php } } } ?>
										</div>

									</h5>
									<div class="card-body">
										<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
											<thead>
												<tr>
													<th>S.No</th>
													
													<?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
                              <th class="text-center">Action</th><?php } } }?>
													<th>Name</th>
													<th>User Type</th>
													<th>Email Address</th>
													<th>Mobile Number</th>
													<!-- <th>Shop Name</th> -->
													<th>Status</th>
													
												</tr>
											</thead>
											<tbody>
												<?php
            if (!empty($users)) {
                $s = 1;
                foreach ($users as $list) {
                    ?>
												<tr>
													<td><?php echo $s; ?></td><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" &&($section_list['acc_view']=="1" || $section_list['acc_edit']=="1" || $section_list['acc_delete']=="1")){?>
													<td class="text-center">
														<?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" && $section_list['acc_view']=="1"){
                                      ?>
														<a href="" class="btn btn-warning btn-sm"><i class="la la-cog" style="
														    font-size: 17px;
														    color:  white;
														"></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" && $section_list['acc_edit']=="1"){?>
														<a href="<?php echo base_url(); ?>master/users/edit_user?id=<?php echo $list['id']; ?>" class="btn btn-info btn-sm"><i class="zmdi zmdi-edit zmdi-hc-fw" style="
														    font-size: 17px;
														    color:  white;
														"></i></a><?php } } } if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="7" && $section_list['acc_delete']=="1"){?>
														<a  onclick="delete_user('<?php echo ucfirst($list['id']); ?>','<?php echo ucfirst($table_name); ?>')"
data-toggle="modal" data-target="#deletemodel" href="" class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete zmdi-hc-fw" style="
														    font-size: 17px;
														    color:  white;
														"></i></a><?php } } } ?>														
													</td><?php } } } ?>
                        <td><?php echo ucfirst($list['firstname']) ; ?></td>
                        <td><?php foreach($user_types as $type){ if($list['user_type_id']==$type['id'] ){echo ucfirst($type['user_type_name']); }}?></td>
                        <td><?php echo $list['email_address']; ?></td>
                        <td><?php echo $list['mobile_number']; ?></td>
                        
                        
                       <!--  <td><?php echo ($list['user_type_id'] != 1) ? (ucfirst($list['shop_name']) . ' (' . strtoupper($list['shop_type']) . ')') : 'N/A'; ?></td> -->
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

					<div class="modal fade" id="deletemodel" tabindex="-1" role="dialog"  aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="zmdi zmdi-close"></span>
            </button>
         </div>
         <form action="<?php echo base_url();?>master/users/delete" method="POST">
        
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
               <input type="hidden" name="url" value="<?php echo $this->router->class.'/'.$this->router->method; ?>">
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
				</div>

		</div>
	</div>	
<script type="text/javascript">
	      function delete_user(val,val1){
    $('.delete_id').val(val);
    $('.table_name').val(val1);
    //alert($('.delete_id').val(val));
   }
</script>
