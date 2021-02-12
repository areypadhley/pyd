<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['']))
{
	 if(isset($_SESSION['email']) && is_array($_SESSION['email']))	{
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
            
             body{width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  
  padding: 15px;
  
  background-position:center;
  background-size:cover;
  background-repeat: no-repeat;
    }
            .errr{
                color:floralwhite;
font-size: 18px;

padding: 13px;
    font-weight: bold;
                 font-family: Montserrat-SemiBold;
                
            }
            
            .login{width: 680px;
  background:transparent;
  border-radius: 10px;
  position: relative;
                
                
            }
            .textbox{
                
                width: 100%;
  position: relative;
  background-color: #f7f7f7;
  border: 0px solid #e6e6e6;
  border-radius: 10px;
            }
            
            .input100 {
  font-family: Poppins-Regular;
  color: #333333;
                  border: 0px solid #e6e6e6;
  line-height: 1.2;
  font-size: 18px;

  display: block;
  width: 100%;
  background: transparent;
  height: 60px;
  padding: 0 20px;
}
            .but{
               background: transparent;
                border:0px solid #e6e6e6;
            }
            
            
            .container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
                
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display:flow-root;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 40%;
  height: 50px;
  background-color: ghostwhite;
  border-radius: 10px;

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  top: 0;
  left: 30%;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 5;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  top: 0;
  left: 0;
  background: #a64bf4;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
  opacity: 0;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover:before {
  opacity: 1;
}
.d
{
width:30% ;
    height:83% ;
    padding-bottom:45px ;
    padding-top: 5px;
    padding-left: 50px;
    padding-right: 50px;
position: absolute;
top: 50%;
left:78%;
    border-radius: 30px;
background-color:rgba(0.8,0.8,0.9,0.5);
transform: translate(-50%,-50%);

}
     .p-b-9 {padding-bottom: 9px;}
            .p-t-31 {padding-top: 31px;}
            
          .txt1 {
  font-family: Montserrat-SemiBold;
  font-size: 16px;
  color:white;
  line-height: 1.5;
}
            
            .p2{
               color:green;
font-size: 23px;

padding: 5px;
    font-weight: bold;
                 font-family: Montserrat-SemiBold;

  
  line-height: 1.5; 
            }
            .hh1{
                color:white ;
font-size: 23px;
border-bottom: 6px solid;
margin-bottom: 50px;
padding: 13px;
    font-weight: bold;
                 font-family: Montserrat-SemiBold;

  color:white;
  line-height: 1.5;
            }
            .wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #f7f7f7;
  border: 1px solid #e6e6e6;
  border-radius: 10px;

            }
             
            h2{
    color:white ;
font-size: 23px;
border-bottom: 6px solid;
margin-bottom: 50px;
padding: 13px;
    font-weight: bold;
}

             p{
    color:white ;
font-size: 20px;


padding: 0px;
    font-weight: bold;
}

.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #fc00ff;
  border-radius: 10px;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}
            
		</style>
    </head>
  
    <body background="imgs/bg4.jpeg">
	
<?php
	$error = '';
	if(isset($_POST['is_login'])){
$sql = "SELECT * FROM ".$SETTINGS["email"]." WHERE email = '".mysql_real_escape_string($_POST['email'])."' AND pw = '".mysql_real_escape_string($_POST['pw'])."'";
		$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysql_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['email'] = $user['email'];
		}
		else{
			$error = 'Wrong email or password.';
		}
	}
	
?>
<?php if(isset($_SESSION['register']))	{
$_SESSION['email'] = 'Root';		$_COOKIE['varname'] = 9;	header("Location:index.php");?>
	  
	<?php } else { ?>
	    <form id="login-form" class="d" name="form1" method="post" action="index.php?$SESSION['email']">
            
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
						<input id="pw" name="pw" class="input100" type="password" placeholder="Password">
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
