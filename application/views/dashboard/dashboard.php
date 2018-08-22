<script>
	function login_success() { 
	window.onload = function() {           
Command: toastr["success"]("Login Successfully")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "1500",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
  	}
  }
   <?php
   	   if ($this->session->flashdata('login_success')) 
   	   {
       		echo "login_success();";
   		}
   ?>

</script>



<div class="content-wrapper">
   <!-- END TOP TOOLBAR WRAPPER -->
   <div class="content">
      <!--START PAGE HEADER -->
      <header class="page-header">
         <div class="d-flex align-items-center">
            <div class="mr-auto">
               <h1>Dashboard</h1>
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
      <!--END PAGE HEADER -->
      <!--START PAGE CONTENT -->
      <section class="page-content container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="row m-0 col-border-xl">
                     <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                           <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                              <i class="icon dripicons-graph-bar"></i>
                           </div>
                           <h5 class="card-title m-b-5 counter" data-count="5627">0</h5>
                           <h6 class="text-muted m-t-10">
                              Active Sessions
                           </h6>
                           <div class="progress progress-active-sessions mt-4" style="height:7px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small class="text-muted float-left m-t-5 mb-3">
                           Change
                           </small>
                           <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="72">
                           0
                           </small>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                           <div class="icon-rounded icon-rounded-accent float-left m-r-20">
                              <i class="icon dripicons-cart"></i>
                           </div>
                           <h5 class="card-title m-b-5 append-percent counter" data-count="67">0</h5>
                           <h6 class="text-muted m-t-10">
                              Add to Cart
                           </h6>
                           <div class="progress progress-add-to-cart mt-4" style="height:7px;">
                              <div class="progress-bar bg-accent" role="progressbar" style="" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small class="text-muted float-left m-t-5 mb-3">
                           Change
                           </small>
                           <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="67">
                           0
                           </small>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                           <div class="icon-rounded icon-rounded-info float-left m-r-20">
                              <i class="icon dripicons-mail"></i>
                           </div>
                           <h5 class="card-title m-b-5 counter" data-count="337">0</h5>
                           <h6 class="text-muted m-t-10">
                              Newsletter Sign Ups
                           </h6>
                           <div class="progress progress-new-account mt-4" style="height:7px;">
                              <div class="progress-bar bg-info" role="progressbar" style="" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small class="text-muted float-left m-t-5 mb-3">
                           Change
                           </small>
                           <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="83">
                           0
                           </small>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="card-body">
                           <div class="icon-rounded icon-rounded-success float-left m-r-20">
                              <i class="la la-dollar f-w-600"></i>
                           </div>
                           <h5 class="card-title m-b-5 prepend-currency counter" data-count="37873">0</h5>
                           <h6 class="text-muted m-t-10">
                              Total Revenue
                           </h6>
                           <div class="progress progress-total-revenue mt-4" style="height:7px;">
                              <div class="progress-bar bg-success" role="progressbar" style="" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small class="text-muted float-left m-t-5 mb-3">
                           Change
                           </small>
                           <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="77">
                           0
                           </small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-7 col-xxl-9">
               <div class="card">
                  <h5 class="card-header">
                     Monthly budget
                  </h5>
                  <div class="card-body">
                     <div id="monthly-budget">
                        <div id="monthly-budget-content" style="height: 350px">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-xxl-3">
               <div class="card">
                  <div class="card-header">
                     Audit Log
                     <div class="actions top-right">
                        <div class="dropdown">
                           <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="la la-ellipsis-h"></i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right animation">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="timeline timeline-border">
                        <div class="timeline-list">
                           <div class="timeline-info">
                              <div class="d-inline-block">Server pending</div>
                              <small class="float-right text-muted">Now</small>
                           </div>
                        </div>
                        <div class="timeline-list timeline-border timeline-primary">
                           <div class="timeline-info">
                              <div class="d-inline-block">Delivery complete</div>
                              <small class="float-right text-muted">10min.</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-accent">
                           <div class="timeline-info">
                              <div class="d-inline-block">Delivery processing</div>
                              <small class="float-right text-muted">1hr.</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-success">
                           <div class="timeline-info">
                              <div class="d-inline-block">Payment recorded</div>
                              <small class="float-right text-muted">11:22am</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-warning">
                           <div class="timeline-info">
                              <div class="d-inline-block">Order complete</div>
                              <small class="float-right text-muted">9:30AM</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-info">
                           <div class="timeline-info">
                              <div class="d-inline-block">Product quantities updated</div>
                              <small class="float-right text-muted">9:27am</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-info">
                           <div class="timeline-info">
                              <div class="d-inline-block">Ticket #627 Closed</div>
                              <small class="float-right text-muted">8:02am</small>
                           </div>
                        </div>
                        <div class="timeline-list  timeline-border timeline-info">
                           <div class="timeline-info">
                              <div class="d-inline-block">Cache cleared</div>
                              <small class="float-right text-muted">6:00am</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12">
               <div class="card-deck m-b-30">
                  <div class="card">
                     <h5 class="card-header border-none">Users</h5>
                     <div class="card-body p-0">
                        <h4 class="card-title text-info p-t-10 p-l-15">67,325  <i class="zmdi zmdi-trending-up text-info"></i></h4>
                        <div class="h-200">
                           <canvas id="usersChart"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <h5 class="card-header border-none">Bounce Rate</h5>
                     <div class="card-body p-0">
                        <h4 class="card-title text-warning p-t-10 p-l-15">3.69% <i class="zmdi zmdi-trending-down text-warning"></i></h4>
                        <div class="h-200">
                           <canvas id="bounceRateChart"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <h5 class="card-header border-none">Session Duration</h5>
                     <div class="card-body p-0">
                        <h4 class="card-title text-primary p-t-10 p-l-15">13m 36s  <i class="zmdi zmdi-trending-up text-primary"></i></h4>
                        <div class="h-200">
                           <canvas id="sessionDuration"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 col-xl-7">
               <div class="card">
                  <div class="card-header">
                     Recent Transactions
                     <ul class="actions top-right">
                        <li><a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a></li>
                     </ul>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="recent-transaction-table" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>TRANSACTION ID</th>
                                 <th>DATE</th>
                                 <th>AMOUNT</th>
                                 <th>STATUS</th>
                                 <th class="no-sort">RECEIPT</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>440-23423</td>
                                 <td>06/25/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-29384</td>
                                 <td>06/25/18</td>
                                 <td>$550</td>
                                 <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-23423</td>
                                 <td>06/25/18</td>
                                 <td>$550</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-23444</td>
                                 <td>06/24/18</td>
                                 <td>$950</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-243453</td>
                                 <td>06/24/18</td>
                                 <td>$250</td>
                                 <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-23434</td>
                                 <td>06/23/18</td>
                                 <td>$900</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-23423</td>
                                 <td>06/23/18</td>
                                 <td>$830</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-6786</td>
                                 <td>06/21/18</td>
                                 <td>$230</td>
                                 <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-36354</td>
                                 <td>06/21/18</td>
                                 <td>$1,034</td>
                                 <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-34533</td>
                                 <td>06/21/18</td>
                                 <td>$5,300</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-678655</td>
                                 <td>06/19/18</td>
                                 <td>$627</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-343535</td>
                                 <td>06/19/18</td>
                                 <td>$350</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-796777</td>
                                 <td>06/19/18</td>
                                 <td>$600</td>
                                 <td><span class="badge badge-pill badge-danger">Reversed</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-4534646</td>
                                 <td>06/17/18</td>
                                 <td>$900</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-35565</td>
                                 <td>06/17/18</td>
                                 <td>$950</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-547345645</td>
                                 <td>06/16/18</td>
                                 <td>$800</td>
                                 <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-3464345</td>
                                 <td>06/16/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-346455</td>
                                 <td>06/16/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-345677</td>
                                 <td>06/15/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-3456467</td>
                                 <td>06/15/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-75433</td>
                                 <td>06/15/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-danger">Canceled</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-4575456</td>
                                 <td>06/14/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-34645</td>
                                 <td>06/14/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>440-67867</td>
                                 <td>06/14/18</td>
                                 <td>$650</td>
                                 <td><span class="badge badge-pill badge-success">Paid</span></td>
                                 <td>
                                    <a href="javascript:void(0)"><i class="icon dripicons-download"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-xl-5">
               <div class="card">
                  <div class="card-header">
                     <span class="m-t-10 d-inline-block">Employee Report</span>
                     <ul class="nav nav-pills nav-pills-primary float-right" id="pills-demo-sales" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-month-tab" data-toggle="tab" href="#sales-month-tab" role="tab">Month</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-year-tab" data-toggle="tab" href="#sales-year-tab" role="tab">Year</a>
                        </li>
                     </ul>
                  </div>
                  <div class="card-body p-0">
                     <div class="tab-content" id="pills-tabContent-sales">
                        <div class="tab-pane fade show active" id="sales-month-tab" role="tabpanel" aria-labelledby="sales-month-tab">
                           <table class="table v-align-middle">
                              <thead class="bg-light">
                                 <tr>
                                    <th class="p-l-20">Name</th>
                                    <th>Earnings</th>
                                    <th>Quota</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/27.jpg" alt="">
                                       <strong class="nowrap">Robert Norris</strong>
                                    </td>
                                    <td>$37,000</td>
                                    <td><span class="badge badge-pill badge-success">Above</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/47.jpg" alt="">
                                       <strong class="nowrap">Shawna Cohen</strong>
                                    </td>
                                    <td>$27,600</td>
                                    <td><span class="badge badge-pill badge-info">Met</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/24.jpg" alt="">
                                       <strong class="nowrap">Darrin Todd</strong>
                                    </td>
                                    <td>$23,200</td>
                                    <td><span class="badge badge-pill badge-info">Met</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/01.jpg" alt="">
                                       <strong class="nowrap">Michelle White</strong>
                                    </td>
                                    <td>$19,300</td>
                                    <td><span class="badge badge-pill badge-info">Met</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/09.jpg" alt="">
                                       <strong class="nowrap">Josh Lynch</strong>
                                    </td>
                                    <td>$18,500</td>
                                    <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/26.jpg" alt="">
                                       <strong class="nowrap">Jason Kendall</strong>
                                    </td>
                                    <td>$16,300</td>
                                    <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/11.jpg" alt="">
                                       <strong class="nowrap">Aaron	Elliott</strong>
                                    </td>
                                    <td>$8,300</td>
                                    <td><span class="badge badge-pill badge-danger">Danger</span></td>
                                 </tr>
                                 <tr>
                                    <td class="border-none"><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/21.jpg" alt="">
                                       <strong class="nowrap">Rebecca Harris</strong>
                                    </td>
                                    <td class="border-none">$4,000</td>
                                    <td class="border-none"><span class="badge badge-pill badge-danger">Danger</span> </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="sales-year-tab" role="tabpanel" aria-labelledby="sales-year-tab">
                           <table class="table v-align-middle">
                              <thead class="bg-light">
                                 <tr>
                                    <th>Name</th>
                                    <th>Earnings</th>
                                    <th>Quota</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/02.jpg" alt="">
                                       <strong class="nowrap">Mike Jones </strong>
                                    </td>
                                    <td>$587,000</td>
                                    <td><span class="badge badge-pill badge-success">Above</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/6.jpg" alt="">
                                       <strong class="nowrap">Leslie	Chapman</strong>
                                    </td>
                                    <td>$427,600</td>
                                    <td><span class="badge badge-pill badge-success">Above</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/7.jpg" alt="">
                                       <strong class="nowrap">Taylor Collier</strong>
                                    </td>
                                    <td>$323,200</td>
                                    <td><span class="badge badge-pill badge-success">Above</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/35.jpg" alt="">
                                       <strong class="nowrap">Dominic Shaw</strong>
                                    </td>
                                    <td>$321,000</td>
                                    <td><span class="badge badge-pill badge-info">Met</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/38.jpg" alt="">
                                       <strong class="nowrap">Josh Lynch</strong>
                                    </td>
                                    <td>$293,500</td>
                                    <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                 </tr>
                                 <tr>
                                    <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="<?php echo base_url(); ?>assets/img/avatars/30.jpg" alt="">
                                       <strong class="nowrap">Angelo	Parker</strong>
                                    </td>
                                    <td>$87,300</td>
                                    <td><span class="badge badge-pill badge-danger">Danger</span> </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--END PAGE CONTENT -->
   </div>
</div>
</div>	

