

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
           <?php echo $breadcrumbs; ?>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
        <form class="log-page"  />
		 
            <h3>Welcome __By:VZ</h3>    
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input id="L_username" class="input-xlarge" type="text" placeholder="Your Username"  />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input id="L_password" class="input-xlarge" type="password" placeholder="Your Password"  />
            </div>
            <div class="controls form-inline">
                <label class="checkbox"><input type="checkbox"  id="remember"/> Stay Signed in</label>
                <input type="button" class="btn-u pull-right" onclick="login();" value="Login" />
            </div>
            <hr />
            <h4>Forget your Password ?</h4>
            <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
        </form>
    </div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->

