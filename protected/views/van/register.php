<!--=== Content Part ===-->
<div class="body">
	<div class="breadcrumbs margin-bottom-50">
    	<div class="container">
            <h1 class="color-green pull-left">Register</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li><a href="">Pages</a> <span class="divider">/</span></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->

	<div class="container">		
		<div class="row-fluid margin-bottom-10">
        	<form class="reg-page" />
            	<h3>Register a new account</h3>
                <div class="controls">    
                    <label>Username</label>
                    <input  id="reg_username" type="text" class="span12"  placeholder="Register Username"  value="admin123"/>
                
                    <label>Email Address <span class="color-red">*</span></label>
                    <input id="reg_email" type="text" class="span12" placeholder="Email Address" value="12@qq.com"/>
                </div>
                <div class="controls">
                    <div class="span6">
                        <label>Password <span class="color-red">*</span></label>
                        <input id="reg_password" type="password" class="span12" placeholder="First Password" value="admin123" />
                    </div>
                    <div class="span6">
                        <label>Confirm Password <span class="color-red">*</span></label>
                        <input id="reg_repassword" type="password" class="span12" placeholder="Confirm Password" value="admin123"/>
                    </div>
                </div>
                <div class="controls form-inline">
                    <label class="checkbox"><input id="reg_term" type="checkbox" onchange="reg_read();" />&nbsp; I read <a href="">Terms and Conditions</a></label>
                    <input id="reg_send" class="btn-u pull-right" type="button" value="Register"  onclick="Register();"/>
					
                </div>
                <hr />
				<p>Already Signed Up? Click <a href="<?php echo Yii::app()->createUrl('Van/Login');  ?>" class="color-green">Sign In</a> to login your account.</p>
            </form>
			
			<!-- CONTENT END -->
    	     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/themes/VZ_Default/js/VZV_Reg.js"></script>	 
    <script>	
	
$("#reg_send").attr('disabled', true);

function reg_read() {
    if ($("#reg_term").attr("checked")) {
        $("#reg_send").attr('disabled', false);
    }
    else {
        $("#reg_send").attr('disabled', true);
    }
}
function Register() {
    var host = "http://" + window.location.host + "/index.php";
    if (!CheckReg())
        return

    //ajax «Î«Û
    $.ajax({
        url: host + "/Van/register",
        type: "POST",
        dataType: "html",
        data: {
            "reg_form":
                {
                    "username": $("#reg_username").val(),
                    "password": $("#reg_password").val(),
                    "e_mail": $("#reg_email").val()

                }
        },
        beforeSend: function () {
            alert(121);
        },
        success: function (data) {

            if (data == 'NONE') {
                alert('Thanks!\nRegister successfully!\nSystem will go to the logon page.\nBy:VZ ');
                window.location.href = host + "/Van/login";
            }
            else {
                alert(data);
            }
        },
        error: function () {
            alert('An Error In The Web!!');
        }
    });
}
    </script>
			
			
        </div><!--/row-fluid-->
	</div><!--/container-->		
</div><!--/body-->
<!--=== End Content Part ===-->