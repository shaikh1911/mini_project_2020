



<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="application/x-javascript"> /*addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }*/ </script>
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
<div class="logi">
   <form name="login" id="loginForm" action="../login_script.php" method="post">
       <input type="text" class="text" name="email" value="" placeholder="Enter your registered email"  ><a href="#" class=" icon email"></a>

       <input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>
       <div class="g-recaptcha" data-sitekey="6LdxivwUAAAAAGxdRtAp2rjRkVPo6sOWxrSQ1CkG"></div>      
       <div class="p-container">
       
           <div class="submit two">
           <input type="submit" name="login" value="LOG IN" >
           <input type="submit" name="fp" value="Forget Password?" >

           </div>
           <div class="clear"> </div>
       </div>

   </form>
                </div>
              
</body>	
	</html>