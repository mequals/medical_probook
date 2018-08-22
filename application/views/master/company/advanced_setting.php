<div class="content-wrapper">
   <div class="content">
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1 class="separator">Advanced Settings  </h1>
               <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard"><i class="icon dripicons-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard/dashboard">Master</a></li>
                     <li class="breadcrumb-item">Company</li>
                     <li class="breadcrumb-item active" aria-current="page">Advanced Settings</li>
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
            <div class="col-lg-12" style="margin-bottom: -31px;">
               <div class="card" style="background: #1e5598;">
                  <h5 class="card-header">
                     <div style="float: left; color: #fff;">
                       Accounting Settings
                     </div>                     
                  </h5>
               </div>
            </div>
            <!-- account -->
            <div class="col-lg-6">              
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                       Accounting Setting
                     </div>
                     <div style="float: right;">
                        <div id="edit_fun">
                            <?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?> 
                         <button  href="#" id="accounting_prefix" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" style="color:  white;"></i>
                           </button><?php } } } ?>
                        </div>   
                           <div id="function_btn" class="no-display">
                              <button onclick="update_account_setting()" type="button" class="btn btn-success  btn-sm">
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
                           <div id="success_notification_accounting" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="accounting_form">
                              <div class="col-md-12">
                                 <div class="form-group ">
                                       <label class="col-form-label-lg control-label" for="largeInput">First Month of Financial Year</label>
                                       <div>
                                       <div class="input-group mb-3">   
                                          <div class="input-group-prepend">
                                             <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i></span>
                                          </div>
                                          <select class="form-control financial_year" name="advanced[financial_year]" id="s2_demo1">
                                             <option value="January">January</option>
                                             <option value="February">February</option>
                                             <option value="March">March</option>
                                             <option value="April" selected="">April</option>
                                             <option value="May">May</option>
                                             <option value="June">June</option>
                                             <option value="July">July</option>
                                             <option value="August">August</option>
                                             <option value="September">September</option>
                                             <option value="October">October</option>
                                             <option value="November">November</option>
                                             <option value="December">December</option>
                                          </select>
                                       </div>   
                                       </div>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">First Month of Tax Year</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i></span>
                                       </div>
                                       <select class="form-control tax_year" name="advanced[tax_year]" id="exampleFormControlSelect1">
                                            <option value="April" selected="">Same As Financial Year</option>
                                            <option value="January">January</option>

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
            <!-- currency -->
            <div class="col-lg-6">              
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                       Currency Setting
                     </div>
                     <div style="float: right;">
                        <div><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?> 
                         <button  href="#" id="currency_edit_but" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-money zmdi-hc-fw" style="color:  white;"></i>
                           </button>
                        <?php } } } ?>
                        </div>   
                           <div id="currency_function_btn" class="no-display">
                              <button onclick="currency_form_update()" type="button" class="btn btn-success btn-sm">
                                 Update
                              </button>
                              <button id="currency_cancel_btn" type="button" class="btn btn-danger btn-sm">
                                 Cancel
                              </button>
                           </div>
                     </div>
                  </h5>
                  <div class="card-body">
                     <div class="card-body">
                        <div class="form-body">
                           <div id="success_notification_currency" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="currency_form"> 
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Currency</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-money zmdi-hc-fw"></i></span>
                                       </div>
                                       <select class="form-control inr" name="currency[currency]" id="exampleFormControlSelect1">
                                          <option value="INR">INR</option>
                                        </select>
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Language</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="la la-language"></i></span>
                                       </div>
                                       <select class="form-control language" name="currency[language]" id="exampleFormControlSelect1">
                                          <option value="English">English</option>
                                          <option value="Russia">Russia</option>
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
      </section>

      <section class="page-content container-fluid">
         <div class="row">
            <div class="col-lg-12" style="margin-bottom: -31px;">
               <div class="card" style="    background: #1e5598;">
                  <h5 class="card-header">
                     <div style="float: left; color: #fff;">
                       Other Preferences 
                     </div>                     
                  </h5>
               </div>
            </div>
            <!-- date and Number -->
            <div class="col-lg-6">              
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                       Date & Number Setting
                     </div>
                     <div style="float: right;">
                        <div><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?> 
                         <button  href="#" id="date_number_edit_btn" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" style="color:  white;"></i>
                           </button><?php } } } ?>
                        </div>   
                           <div id="date_number_update" class="no-display">
                              <button onclick="date_number_form_update()" type="button" class="btn btn-success  btn-sm">
                                 Update
                              </button>
                              <button id="date_number_cancel" type="button" class="btn btn-danger btn-sm">
                                 Cancel
                              </button>
                           </div>
                     </div>
                  </h5>
                  <div class="card-body">
                     <div class="card-body">
                        <div class="form-body">
                           <div id="date_number_success_notification" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="date_number_form"> 
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Date</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i></span>
                                       </div>
                                       <select class="form-control date" name="datenum[date_format]" id="exampleFormControlSelect1">
                                            <option value="dd/MM/yyyy">dd/MM/yyyy</option>
                                            <option value="MM/dd/yyyy">MM/dd/yyyy</option>
                                            <option value="yyyy/MM/dd">yyyy/MM/dd</option>
                                            <option value="dd-MM-yyyy">dd-MM-yyyy</option>
                                            <option value="MM-dd-yyyy">MM-dd-yyyy</option>
                                            <option value="yyyy-MM-dd">yyyy-MM-dd</option>
                                            <option value="dd.MM.yyyy">dd.MM.yyyy</option>
                                            <option value="MM.dd.yyyy">MM.dd.yyyy</option>
                                            <option value="yyyy.MM.dd">yyyy.MM.dd</option>
                                        </select>
                                    </div>
                                    
                                 </div>
                              </div> 
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Number Format</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-format-list-numbered zmdi-hc-fw"></i></span>
                                       </div>
                                       <select class="form-control number" name="datenum[number_format]" id="exampleFormControlSelect1">
                                            <option value="1,23,456.00">1,23,456.00</option>
                                            <option value="123,456.00">123,456.00</option>
                                            <option value="123456.00">123456.00</option>
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
            <!-- signout setting -->
            <div class="col-lg-6">              
               <div class="card">
                  <h5 class="card-header">
                     <div style="float: left;">
                       Signout Setting
                     </div>
                     <div style="float: right;">
                        <div id="edit_fun"><?php $sectionpermission=$this->session->userdata('section_permission');
                              if (!empty($sectionpermission)) {
                                  foreach ($sectionpermission as $section_list) {
                                    if($section_list['section_id']=="2" && $section_list['acc_edit']=="1"){
                                      ?> 
                         <button  href="#" id="signout_edit" class="btn btn-info btn-sm editusertype"><i class="zmdi zmdi-edit zmdi-hc-fw" style="color:  white;"></i>
                           </button><?php } } } ?>
                        </div>   
                           <div id="signout_fun" class="no-display">
                              <button onclick="signout_update()" type="button" class="btn btn-success  btn-sm">
                                 Update
                              </button>
                              <button id="signout_cancel" type="button" class="btn btn-danger btn-sm">
                                 Cancel
                              </button>
                           </div>
                     </div>
                  </h5>
                  <div class="card-body">
                     <div class="card-body" style="height: 201px;">
                        <div class="form-body">
                           <div id="signout_success_notification" class="alert alert-success alert-dismissible fade show no-display" role="alert">
                                 <strong>Successfully Updated</strong><a href="#" class="alert-link"></a>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" class="la la-close"></span>
                                 </button>
                              </div>
                           <div class="row" id="signout_form"> 
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label class="col-form-label-lg control-label" for="largeInput">Auto Logout in-active user accounts after</label>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text " id="basic-icon-addon1"><i class="zmdi zmdi-time zmdi-hc-fw"></i></span>
                                       </div>
                                       <select class="form-control signout" name="signout[signout_time]" id="exampleFormControlSelect1">
                                             <option value="1">1 Hour</option>
                                             <option value="2">2 Hour</option>
                                             <option value="3">3 Hour</option>
                                             <option value="4">4 Hour</option>
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
      </section>
   </div>
</div>
</div>	
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

   function update_account_setting(){

      var str = $("#accounting_form select").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/account_setting",  
          data: str, 
          success: function(value) {            
            $("#success_notification_accounting").removeClass("no-display");
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

      function currency_form_update(){

      var str = $("#currency_form select").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/currency_setting",  
          data: str, 
          success: function(value) {
            $("#success_notification_currency").removeClass("no-display");
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

      function date_number_form_update(){

      var str = $("#date_number_form select").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/date_num_setting",  
          data: str, 
          success: function(value) {
            //alert(value);
            $("#date_number_success_notification").removeClass("no-display");
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

   function signout_update(){

      var str = $("#signout_form select").serialize();
      $.ajax({           
          type: "POST",  
          url: "<?php echo base_url(); ?>master/company/signout_setting",  
          data: str, 
          success: function(value) {            
            $("#signout_success_notification").removeClass("no-display");
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

      $("select").prop('disabled', true);
      // Common Prefix      

   // Accounting Setting
     $('#accounting_prefix').click(function(){ 
           $("#accounting_form select").prop('disabled', false);
           $('#edit_fun').addClass('no-display');
           $('#function_btn').removeClass('no-display');
      });

      $('#Cancel_btn').click(function(){
            $("#accounting_form select").prop('disabled', true);
            $('#edit_fun').removeClass('no-display');
            $('#function_btn').addClass('no-display');
      });

      $('.financial_year').val('<?php echo $account[0]['financial_year']; ?>');
      $('.tax_year').val('<?php echo $account[0]['tax_year']; ?>');

      
      $('#currency_edit_but').click(function(){ 
         //alert();
            $("#currency_form select").prop('disabled', false);
            $('#currency_edit_but').addClass('no-display');
            $('#currency_function_btn').removeClass('no-display');
      });

      $('#currency_cancel_btn').click(function(){
            $("#currency_form select").prop('disabled', true);
            $('#currency_edit_but').removeClass('no-display');
            $('#currency_function_btn').addClass('no-display');
      });

      $('.inr').val('<?php echo $currency[0]['currency']; ?>');
      $('.language').val('<?php echo $currency[0]['language']; ?>');

      

      // Date And Number Format
      $('#date_number_edit_btn').click(function(){ 
         //alert();
            $("#date_number_form select").prop('disabled', false);
            $('#date_number_update').removeClass('no-display');
            $('#date_number_edit_btn').addClass('no-display');
      });

      $('#date_number_cancel').click(function(){
            $("#date_number_form select").prop('disabled', true);
            $('#date_number_edit_btn').removeClass('no-display');
            $('#date_number_update').addClass('no-display');
      });

      $('.date').val('<?php echo $datenum[0]['date_format']; ?>');
      $('.number').val('<?php echo $datenum[0]['number_format']; ?>');

      // signout Setting
      $('#signout_edit').click(function(){ 
         //alert();
            $("#signout_form select").prop('disabled', false);
            $('#signout_fun').removeClass('no-display');
            $('#signout_edit').addClass('no-display');
      });

      $('#signout_cancel').click(function(){
            $("#signout_form select").prop('disabled', true);
            $('#signout_edit').removeClass('no-display');
            $('#signout_fun').addClass('no-display');
      });
      $('.signout').val('<?php echo $signout[0]['signout_time']; ?>');

   

     
   });


</script>