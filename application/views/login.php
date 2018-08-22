<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical ProBook</title>
    <link rel="icon" type="image/jpg" href="" />
        <!-- Global stylesheets -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/colors.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login/core.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/layouts/vertical/themes/theme-a.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- /global stylesheets -->
</head>
<body class="login-container bg-slate-800">
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <style type="text/css">
                    .material-icons {
                        font-family: 'Material Icons';
                        font-weight: normal;
                        font-style: normal;
                        font-size: 24px;
                        /* Preferred icon size */
                        display: inline-block;
                        line-height: 1;
                        text-transform: none;
                        letter-spacing: normal;
                        word-wrap: normal;
                        white-space: nowrap;
                        direction: ltr;

                        /* Support for all WebKit browsers. */
                        -webkit-font-smoothing: antialiased;
                        /* Support for Safari and Chrome. */
                        text-rendering: optimizeLegibility;

                        /* Support for Firefox. */
                        -moz-osx-font-smoothing: grayscale;

                        /* Support for IE. */
                        font-feature-settings: 'liga';
                    }

                    .error_msg {
                        font-size: 14px;
                        border-color: rgba(208, 101, 101, 0.9);
                        font-family: inherit;
                        font-size: 14px;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                    }

                    .p {
                        color: red;
                    }

                    .powered_by_text {
                        text-align: center;
                    }

                    .powered_link:hover,
                    .powered_link:visited {
                        color: #84c3e0;
                    }

                    .text-muted{
                        color: #999999;
                    } 
                    .while-hoverable{
                        color: #4885ed;
                    }

                </style>
                <!-- Content area -->
                <div class="content">
                    <!-- Advanced login -->
                    <form class="sign-in-form login_div" name="login_form" id="login_form" action="Login/validate" method="post">
                        <div class="panel panel-body login-form log-bor">
                            <div class="text-center">
                                
                                <div class="icon-object border-warning-400 text-warning-400"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" height="120"></i>
                                </div>
                               
                               <!--  <h1 class="thin">Medical Probook</h1>-->
                                <h5 class="content-group-lg" style="margin-top:0px">Login to your account <small class="display-block">Enter your credentials</small></h5>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" name="username" id="user" class="login_input form-control required" placeholder="Username" />
                                <div class="form-control-feedback">
                                    <i class="material-icons text-muted" style="padding-top: 8px; font-size: 18px;">person</i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" name="password" id="pwd" class="login_input form-control required" placeholder="Password" />
                                <div class="form-control-feedback">
                                   <i class="material-icons text-muted" href="<?php echo base_url(); ?>/user1.png" style="padding-top: 8px; font-size: 18px;">lock</i>
                                </div>
                            </div>
                            <span id="form_err" style="color:red;"></span>
                            <div class="form-group">
                            	<button class="btn btn-success  btn-floating btn-lg btn-block" id="login_btn" type="button">Sign In</button>                               
                            </div>
                            <div class="powered_by_text">
                                <span style="display: block;">&copy; 2018 Medical Probook, All rights reserved.</span> Powered by <a href="<?php echo base_url(); ?>/#" target="_blank" style="color: #4885ed">MEQUALS</a>
                            </div>
                        </div>
                    </form>
                    <!-- /advanced login -->
                </div>
                <!-- /content area -->                
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    </div>
    <!-- /page container -->


</body>
</html>

<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    $("#login_btn").click(function(){    
    var username = $('#user').val();
    var password = $('#pwd').val();
    var data_string="username="+username+"&password="+password;
    // alert(data_string);
    console.log(data_string);
        $.ajax({   
          url: "<?php echo base_url(); ?>login/validate",
          async: false,
          type: "POST", 	
          data: data_string, 
          dataType: "json", 
          success: function(data) {            
      if(data==1){
        $(".form-group").addClass("has-error");
        $("#form_err").empty().prepend("Username or Password Incorrect!");
      }
      else{
        $(".form-group").removeClass("has-error");
        // $("#form_err").empty().prepend("Login Success!");
        window.location.href=data;}
    }
    }); 
    });

    var input = document.getElementById("pwd");
	input.addEventListener("keyup", function(event) {
	    event.preventDefault();
	    if (event.keyCode === 13) {
	        document.getElementById("login_btn").click();
	    }
	});
</script>
