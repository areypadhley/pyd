<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['']))
{
	 if(isset($_SESSION['user_info']) && is_array($_SESSION['user_info']))	{
	 $_SESSION['check']='1';
	 }
}
?>
<!DOCTYPE html>
    <head>
        
            
        
        
        <title>Login Form</title>
        
       
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
		<style type="text/css">
		a:link {color: #ffffff}
		a:visited {color: #ffffff}
		a:hover {color: #ffffff}
		a:active {color: #ffffff}
            </head>
            
              <body background="bg2.jpg">
	
<?php
	$error = '';
	if(isset($_POST['is_login'])){
$sql = "SELECT * FROM ".$SETTINGS["USERS"]." WHERE email = '".mysql_real_escape_string($_POST['email'])."' AND password = '".mysql_real_escape_string($_POST['password'])."'";
		$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysql_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
		}
		else{
			$error = 'Wrong email or password.';
		}
	}
	
?>
<?php if(isset($_SESSION['user_info']))	{
$_SESSION['userName'] = 'Root';		$_COOKIE['varname'] = 9;	header("Location:index.php");?>
	  
	<?php } else { ?>
	    <form id="login-form" class="d" name="form1" method="post" action="index.php">
            
              <center>
            <div > <br><a align="" href="index.php">Home
                </a></div></center>
            
	    	<input type="hidden" name="is_login" value="1">
            
	        <div class="hh1">Login</div>
	        <div id="form-content">
                
                
                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 ">
						<input id="email" name="email" class="input100" type="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
                <?php if($error) { ?>
                            <em><label for="email" generated="true" class="errr" style="display: block;">Please enter a valid email address.</label></em>
                <?php } ?>
                
               
                
                
                
                
                 <div class="p-t-31 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 ">
						<input id="password" name="password" class="input100" type="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
                
                
	         
	            <?php if($error) { ?>
	                <em>
						<label class="errr" for="password" generated="true" style="display: block;"><?php echo $error ?></label>
					</em>
				<?php } ?>
                
                
               
                <br>
             <center>  <div align="center" class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							<input class="but"  name="submit" type="submit" value="Submit"/>
						</button>
                 </div></center>
                <BR><center>>
                <div > <a align="" href="register.php">REGISTER NOW...?
                    </a></div></center>
                
                
        
                </BR>
	          
	        </div>
	        <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
	    </form>
	<?php } ?>   
    </body>
</html>
