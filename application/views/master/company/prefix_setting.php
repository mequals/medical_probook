<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Prefix Settings  </h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Prefix Settings</li>
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
                  <h5 class="card-header" style="background: #1e5598;">
                     <div style="float: left;color: #fff;">
                       Common Prefix
                     </div>
                     <div style="float: right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?>
                        <div id="edit_fun">
                         <button  href="#" id="common_prefix" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" style="color:  white;"></i>
                           </button>
                        </div> <?php } } } ?>  
                           <div id="function_btn" class="no-display">
                              <button onclick="update_common_prefix()" type="button" class="btn btn-success  btn-sm">
                                 Update
                              </button>
                              <button id="Cancel_btn" type="button" class="btn btn-danger btn-sm">
                                 Cancel
                              </button>
                           </div>
                     </div>
                  </h5>
                  <div class="card-body">
                     <div class="card-body">
                        <div class="form-body">
                           <div id="success_notification" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="common_Prefix_form"> 
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">User Prefix <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control tax_name"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['user_prefix']; ?>" name="common_prefix[user_prefix]" required="" maxlength="20">
                                    </div>
                                    
                                 </div>
                              </div>                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Customer Prefix</label>
                                   
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control ccommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['customer_prefix']; ?>" name="common_prefix[customer_prefix]" required="" maxlength="20">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Employee Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['employee_prefix']; ?>" name="common_prefix[employee_prefix]" required="" maxlength="20">
                                    </div>              
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Item Prefix <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-italic zmdi-hc-fw"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a username.
                                       </div>
                                       <input type="text" class="form-control tax_name"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['item_prefix']; ?>" name="common_prefix[item_prefix]" required="" maxlength="20">
                                    </div>
                                    
                                 </div>
                              </div>                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Vendor Prefix</label>
                                   
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-account zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control ccommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['vendor_prefix']; ?>" name="common_prefix[vendor_prefix]" required="" maxlength="20">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Branch Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="la la-building"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $prefix_setting[0]['branch_prefix']; ?>" name="common_prefix[branch_prefix]" required="" maxlength="20">
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
      </section>

      <section class="page-content container-fluid">
         <div class="row">
            <div class="col-12">
                     
               <div class="card">
                  <h5 class="card-header" style="background: #1e5598;">
                     <div style="float: left;color: #fff;" >
                       Transaction Prefix
                     </div>
                     <div style="float: right;"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?>
                        <div id="edit_fun_transaction">
                         <button  href="#" id="update_transaction" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="modal" data-target="#editusertype" style="color:  white;"></i>
                           </button>
                        </div> <?php } } } ?>  
                           <div id="function_btn_transaction" class="no-display">
                              <button onclick="update_transaction_prefix()" type="button" class="btn btn-success  btn-sm">
                                 Update
                              </button>
                              <button id="Cancel_btn_transaction" type="button" class="btn btn-danger btn-sm">
                                 Cancel
                              </button>
                           </div>

                     </div>
                  </h5>
                  <div class="card-body">
                     <div class="card-body">
                        <div class="form-body">
                           <div id="success_notification_transaction" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="Transaction_Prefix"> 
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Invoice Prefix <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control tax_name"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['purchase_invoice']; ?>"  name="transaction_prefix[purchase_invoice]" required="" maxlength="20">
                                    </div>
                                    
                                 </div>
                              </div>                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sales Bill</label>
                                   
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control ccommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['sale_bill']; ?>"  name="transaction_prefix[sale_bill]" required="" maxlength="20">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Order Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['purchase_order']; ?>"  name="transaction_prefix[purchase_order]" required="" maxlength="20">
                                    </div>              
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sales Order Prefix <span style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <div class="invalid-feedback">
                                          Please choose a username.
                                       </div>
                                       <input type="text" class="form-control tax_name"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['sale_order']; ?>"  name="transaction_prefix[sale_order]" required="" maxlength="20">
                                    </div>
                                    
                                 </div>
                              </div>                              
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Purchase Return Prefix</label>
                                   
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control ccommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1"  value="<?php  echo $transaction_prefix[0]['purchase_return']; ?>"  name="transaction_prefix[purchase_return]" required="" maxlength="20">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Sales Return Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['sale_return']; ?>"  name="transaction_prefix[sale_return]" required="" maxlength="20">
                                    </div>              
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">DC/MEMO Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['dc_memo']; ?>"  name="transaction_prefix[dc_memo]" required="" maxlength="20">
                                    </div>              
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Expense Prefix</label>
                                     <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-receipt zmdi-hc-fw"></i></span>
                                       </div>
                                       <input type="text" class="form-control scommon_prefix"  aria-label="Icon Left" aria-describedby="basic-icon-addon1" value="<?php  echo $transaction_prefix[0]['expense']; ?>"  name="transaction_prefix[expense]" required="" maxlength="20">
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
      </section>
   </div>
</div>
</div>	
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

   function update_common_prefix(){

      var str = $("#common_Prefix_form input").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/prefix_setting_insert",  
          data: str, 
          success: function(value) {
            $("#success_notification").removeClass("no-display");
            time = new Date().getTime();
             function refresh() {
                   if(new Date().getTime() - time <= 7000) 
                        // window.location.href = baseurl+segment;
                        location.reload();
                   else 
                      setTimeout(refresh, 1500);
                }
                setTimeout(refresh, 1500);
          }
      });

   }

   function update_transaction_prefix(){

      var str = $("#Transaction_Prefix input").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/prefix_transaction_insert",  
          data: str, 
          success: function(value) {
            //alert(value);
            $("#success_notification_transaction").removeClass("no-display");
            time = new Date().getTime();
             function refresh() {
                   if(new Date().getTime() - time <= 7000) 
                        // window.location.href = baseurl+segment;
                        location.reload();
                   else 
                      setTimeout(refresh, 1500);
                }
                setTimeout(refresh, 1500);
          }
      });
   }   

   $( document ).ready(function() {

      $("input[type='text']").prop('disabled', true);
      // Common Prefix      

     $('#common_prefix').click(function(){ 
           $("#common_Prefix_form input[type='text']").prop('disabled', false);
           $('#edit_fun').addClass('no-display');
           $('#function_btn').removeClass('no-display');
      });

      $('#Cancel_btn').click(function(){
            $("#common_Prefix_form input[type='text']").prop('disabled', true);
            $('#edit_fun').removeClass('no-display');
            $('#function_btn').addClass('no-display');
      });

      // Transaction Prefix
      
      $('#update_transaction').click(function(){
         //alert();
            $("#Transaction_Prefix input[type='text']").prop('disabled', false);
            $('#edit_fun_transaction').addClass('no-display');
            $('#function_btn_transaction').removeClass('no-display');
      });

      $('#Cancel_btn_transaction').click(function(){
            $("#Transaction_Prefix input[type='text']").prop('disabled', true);
            $('#edit_fun_transaction').removeClass('no-display');
            $('#function_btn_transaction').addClass('no-display');
      });
      
   });


</script>