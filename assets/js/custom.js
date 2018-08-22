    // JQuery To Add html Code To Another
    $('#menu_form').on('click', function(){               
        $('#form_div').append($( "#display_div" ).html());        
     });
    // Model Reset
    $('.modal').on('hidden.bs.modal', function(){
          $(this).find('form')[0].reset();
      }); 
    

    // Change Password
      $("#change_pwd").click(function(){
        alert("hi");

        var password = $('#password').val();
    	var n_password = $('#inputPassword').val();
    	var c_password = $('#inputPasswordConfirm').val();
    	var data_string="password="+password+"&n_password="+n_password+"&c_password="+c_password;
    	console.log(data_string);
    	$.ajax({   
          url: "Login/change_password",
          async: false,
          type: "POST", 
          data: data_string, 
          dataType: "json",
          cache:false, 

          success: function(data) {
          	alert(data);
          	 if(data==1){
        $(".form-group").addClass("has-error");
        $("#form_err").empty().prepend("invalid Old Password!");
      }
      else{
        $(".form-group").removeClass("has-error");
        $("#form_err").empty().prepend("");
        window.location.href=data;}
          }
          }); 
      });

      



      $('.grand_all').click(function () {
        

            if ($(".grand_all").prop('checked') == true) {
              
                $('input.allow_access,input.menu_all').prop('checked', true);
            } else { 
                $('input.allow_access,input.menu_all').prop('checked',false);
                

            }
        });


   
    $(document).ready(function () {
        $('.menu_all').click(function () {
            if ($(this).prop('checked') == true) {
                $(this).closest('tr').find('input.allow_access').prop('checked', true);
            } else {
                $(this).closest('tr').find('input.allow_access').prop('checked',false);
            }

            total_checkbox = Number($('input[type=checkbox].allow_access,input[type=checkbox].menu_all').length);
            checked_checkbox = Number($('input[type=checkbox].allow_access:checked,input[type=checkbox].menu_all:checked').length);
            if (total_checkbox == checked_checkbox) {
                $('input.grand_all').prop('checked', true);
            } else {
                $('input.grand_all').prop('checked',false);
            }
        });

        

        $('.allow_access').click(function () {
            length = Number($(this).closest('tr').find('input.allow_access:checked').length);
            if (length == 4 || length==1) {
                $(this).closest('tr').find('input.menu_all').prop('checked', true);
            } else {
                // $(this).closest('tr').find('input.menu_all').prop('checked',false);
            }
            total_checkbox = Number($('input[type=checkbox].allow_access,input[type=checkbox].menu_all').length);
            checked_checkbox = Number($('input[type=checkbox].allow_access:checked,input[type=checkbox].menu_all:checked').length);
            if (total_checkbox == checked_checkbox) {
                $('input.grand_all').prop('checked', true);
            } else {
                $('input.grand_all').prop('checked',false);
            }
        });
    });


    
        $('#profile_image').on('change', function () {
          
            var files = this.files;
            
            if (files && files[0]) {
                readImage(files[0], '#profile_image');
            } else { 
                default_src = $('#imagePreview').attr('default_src');
                $('#imagePreview').attr('src', default_src);
            }
        });
         function readImage(file, element) {
        error = 1;
        file_name = file.name;
        var exts = ['jpg', 'jpeg', 'png'];
        var get_ext = file_name.split('.');
        get_ext = get_ext.reverse();
        if ($.inArray(get_ext[0].toLowerCase(), exts) == -1) {
            $(element).val('');
            $(element).closest('div.form-group').find('.error_msg').text('File format not allowed').slideDown('500').css('display', 'inline-block');
            default_src = $('#imagePreview').attr('default_src');
            $('#imagePreview').attr('src', default_src);
            error = 0;
        } else {
            var reader = new FileReader();
            var image = new Image();
            reader.readAsDataURL(file);
            reader.onload = function (_file) {
                image.src = _file.target.result;
                image.onload = function () {
                    width = this.width;
                    height = this.height;
                    if (width < 150 || height < 150) {
                        $(element).closest('div.form-group').find('.error_msg').text('Image resolution should be higher than 150x150').slideDown('500').css('display', 'inline-block');
                        $(element).val('');
                        s
                        default_src = $('#imagePreview').attr('default_src');
                        $('#imagePreview').attr('src', default_src);
                        error = 0;
                    } else {
                        $('#imagePreview').attr('src', _file.target.result);
                        $(element).closest('div.form-group').find('.error_msg').text('').slideUp('500');
                    }
                }
            }
        }
        return error;
    }
  


