
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script src="https://www.google.com/recaptcha/api.js" async defer ></script>
<script type="application/x-javascript"> /*addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } */</script>
<script src="js/jquery.min.js"></script>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					/*$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});*/
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>User Registration</h1>
		<div class="register">
			<form name="registration" method="post" id="captcha_form" action="../signup_script.php" enctype="multipart/form-data" >
								<div class="form-group">
								<div class="row">
								<div class="col-md-6">
								<p>First Name <span class="text-danger">*</span></p>
								<input type="text" class="text" id="first_name" value=""  name="fname" required >
								
								<span id="fname_error" class="text-danger"></span>
								</div>
								<div class="col-md-6">
								<p>Last Name <span class="text-danger">*</span></p>
								<input type="text" class="text" id="last_name" value="" name="lname"  required >
								<span id="lname_error" class="text-danger"></span>
								</div>
								</div>
								</div>
								<div class="form-group">
								<p>Email Address <span class="text-danger">*</span> </p>
								<input type="text" class="text" id="e-mail" value="" name="email"  >
								<span id="e-mail_error" class="text-danger"></span>
								</div>
								<div class="form-group">
								<p>Password <span class="text-danger">*</span></p>
								<input type="password" id="password" value="" name="password" required>
								<span id="pwd_error" class="text-danger"></span>
								</div>
								<div class="form-group">	
										<p>Contact No.<span class="text-danger">*</span> </p>
								<input type="text" id="contactno" value="" name="contact"  required>
								<span id="cno_error" class="text-danger"></span>
								</div>
								<br/>
								<div class="form-group">
								<div class="g-recaptcha" data-sitekey="6LdxivwUAAAAAGxdRtAp2rjRkVPo6sOWxrSQ1CkG"></div>
								<span id="captcha_error" class="text-danger"></span>
								</div>
								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="signup"  value="Sign Up" id="register">
									<div class="clear"> </div>
								</div>
							</form>

						</div>
				</div>					 					 
				
</body>
</html>

<script>
$(document).ready(function(){
	$('#captcha_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"../home.php";
			method:"POST";
			data:$(this).serialize(),
			dataType:"json",
			beforeSend:function(){
				$('#register').attr('disabled',false);
				if(data.success)
				{
					$('#captcha_form')[0].reset();
					$('#fname_error').text('');
					$('#lname_error').text('');
					$('e-mail_error').text('');
					$('pwd_error').text('');
					$('cno_error').text('');
					$('#captcha_error').text('');
					grecaptcha.reset();
					alert('Form Successfully Validated');
				}
				else{
					$('#fname_error').text(data.fname_error);
					$('#lname_error').text(data.lname_error);
					$('#e-mail_error').text(data.e-mail_error);
					$('#pwd_error').text(data.pwd_error);
					$('#cno_error').text(data.cno_error);
					$('#captcha_error').text(data.captcha_error);


				}
			}

		})
	}

})
</script>