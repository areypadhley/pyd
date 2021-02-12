
    <?php
include("db.php");

//session_start();
//


if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$location=$_POST['location'];
$mob=$_POST['mob'];

$email=$_POST['email'];
    $device=$_POST['device'];
$brand=$_POST['brand'];
$imei=$_POST['imei'];
$model=$_POST['model'];
$problem=$_POST['problem'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
    
 #retrieve file title
    //    $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    
  
    
    
 $query = "INSERT INTO register VALUES('$fname', '$lname', '$location', '$mob', '$email', '$device','$brand','$imei','$model','$problem','$pname', '$pw', '$cpw')";
$result= mysqli_query($conn,$query) or die("Error :".mysqli_error($conn));	
	echo "<script type='text/javascript'>alert('You have been successfully registered');</script>";
	
}
?>




       
<HTML>
<HEAD>

<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<SCRIPT type="text/javascript">
function validate()
{
	var fname=document.getElementById("fname");
	var lname=document.getElementById("lname");
	var mob=document.getElementById("mob");
	var location=document.getElementById("location");
	var EmailId=document.getElementById("email");
	var addr=document.getElementById("addr");
	var pw=document.getElementById("pw");
	var cpw=document.getElementById("cpw");
	var alphaExp = /^[a-zA-Z]+$/;
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
 	if(pw.value.length< 8 || cpw.value.length< 8)
	{
		alert("Please enter a password of atleast 8 characters");
		pw.focus();
		return false;
	}
	else if (pw.value.length != cpw.value.length) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	else if (pw.value != cpw.value) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        alert("Enter valid email-ID");
		EmailId.focus();
        return false;
   	}
	if(fname.value==null || fname.value=="")
	{
		fname.focus();
		alert("Enter valid first name");
		return false;
	}
	if(fname.value.match(alphaExp)){}
	else{
		alert("First name can have only letters");
		fname.focus();
		return false;
	}
	if(lname.value==null || lname.value=="")
	{
		lname.focus();
		alert("Enter valid last name");
		return false;
	}
	if(lname.value.match(alphaExp)){}
	else{
		alert("Last name can have only letters");
		lname.focus();
		return false;
	}
	if(mob.value==null || mob.value==" ")
	{
		alert("Please Enter Mobile Number");
		mob.focus();
		return false;
	}
	if (isNaN(mob.value))
	{
		alert(" Your Mobile Number must be Integers");
		mob.focus();
		return false;
	}
	if((mob.value.length!= 10))
	{
		alert("Enter the valid Mobile Number(Like : 9669666999)");
		mob.focus();
		return false;
	}
	if(location.selectedIndex==0)
	{
		alert("Please select location");
		location.focus();
		return false;		
	}
	if(addr.value==" " || addr.value=="")
	{
		alert("Please Enter Your Address");
		addr.focus();
		return false;
	}
	if (confirm("Do you want to submit your details?") == true) {} 
	else 
	{
       return false;
    }
    var survey=prompt("How did you hear about us? (Used only for survey)");
	return true;
}
</SCRIPT>
    <style>
        .rht{
            align-content: center;
            align-items: center;
        }
        
        .input100 {
             padding-bottom:5px ;
    padding-top: 5px; padding-left: 10px;
    padding-right: 5px;
   border-radius: 30px;
background-color:antiquewhite;
}
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
    }    .bb{
            

width: 100%;  
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
  background-size: cover;
  background-repeat: no-repeat;
        }
        
        .dhhikhkh
{
width:500% ;
    height:100% ;
    padding-bottom:75px ;
    padding-top: 5px;
    padding-left: 50px;
    padding-right: 50px;
position: absolute;
top: 50%;
left:50%;
    border-radius: 30px;
background-color:rgba(0.3,0.2,0.2,0.3);
transform: translate(-50%,-50%);

}        .d2
{
width:25% ;
    height:36% ;
    padding-bottom:75px ;
    padding-top: 45px;
    padding-left: 50px;
    padding-right: 50px;
position: absolute;
top: 50%;
left:78%;
    border-radius: 30px;
background-color:rgba(0.8,0.8,0.9,0.3);
transform: translate(-50%,-50%);

}.btn2 {
 
 
 
  width: 23%;
  height: 18%;
  background-color:black;
  border-radius: 15px;

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  top: 30%;
  left: 30%;
 
}
        
        
        .btn {
 
 
 
  width: 18%;
  height: 8%;
  background-color:black;
  border-radius: 15px;

  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  top: 30%;
  left: 30%;
 
}
    </style>
</HEAD>
<BODY  background="https://onlyvectorbackgrounds.com/wp-content/uploads/2018/09/Abstract-Ambient-Light-Background-Day-Blue.jpg" link="black" alink="black" vlink="black">

<FORM name="register" enctype="multipart/form-data" method="post" action="register.php" onsubmit="return validate()">
    
    <div class="d">
        <center>
        <h2> REGISTRATION DETAILS.</h2>
        </center><BR><center>
        <label>
        FIRST NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <INPUT class="input100" name="fname" type="TEXT" placeholder=" Enter your First name" size="30" maxlength="30" align="center" id="fname">
<br>
<br>

       <label> LAST NAME : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <INPUT type="TEXT"class="input100" name="lname" align="right" size="30" maxlength="30" placeholder=" Enter your Last name" id="lname">
<br>
<br>
     <label>   FULL ADDRESS : &nbsp&nbsp&nbsp</label>
        <INPUT name="location"class="input100" id="location" type="TEXT" placeholder=" Enter your location" size="30" maxlength="30" align="center" >
 <br>

<br>
      <label>  MOBILE NO. : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
       <INPUT type="TEXT"class="input100" name="mob" size="30" maxlength="10" placeholder=" Enter your mobile number" id="mob">
<br>
           
           
           
           
           
<br>
     <label>   EMAIL ID : &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
        <INPUT name="email" class="input100" type="TEXT" id="email" placeholder=" Enter your E-Mail ID" size="30" maxlength="30"><br>
            
           <BR>  <label>   DEVICE TYPE :     
             <select name="device" id="device" class="input100"type="TEXT" width="100%">
                                    <option>SMART PHONE</option>
           
                                    <option>TABLET/IPAD</option>
           
                            
                                    <option>LAPTOP</option>
        
                                </select>
<br><br>
               
               
      <label>  BRAND NAME: &nbsp&nbsp&nbsp&nbsp&nbsp </label>
       <INPUT type="TEXT" class="input100" name="brand"   placeholder=" Enter your brand name" id="brand">
<br>
      <br>
      <label>  IMEI NUMBER. : &nbsp&nbsp</label>
       <INPUT type="TEXT" class="input100" name="imei"   placeholder=" Enter your IMEI number" id="imei">
<br>
      <br>
      <label>  MODEL NUMBER :  </label>
       <INPUT type="TEXT" class="input100" name="model"   placeholder=" Enter your model number" id="model">
<br><BR>
           
              
           
     <label>   PROBLEM : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <INPUT name="problem"class="input100" id="problem" type="TEXT" placeholder=" Write your problem" size="50" maxlength="1300" align="center" >
 <br><br>
      <label>  UPLOAD DEVICE IMAGE : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>     <input type="file"  class="input100" name="file" id="file">
           
      <BR><BR>
      <label>  NEW PASSWORD : </label>
<INPUT type="PASSWORD" name="pw" class="input100"size="30"  id="pw"><br>
<br>
     <label> CONFIRM PASSWORD : </label><br>
    <INPUT type="PASSWORD" name="cpw"class="input100" size="30" id="cpw">
<br>
<br>
<INPUT type="checkbox" name="tc" class="input100" value="tc">
I have read and accepted the Terms and Conditions and policy.
    
    <BR>
        <BR></BR></BR></center>
       <CENTER>
            
           <INPUT TYPE="Submit"  value="Submit" name="submit" id="submit" class="btn" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</INPUT>
          <br>
           <br>
           <a href="index.php">GO BACK TO HOME</a>
</div>
    
        </FORM>
    
    
    
    
    
    
    
    
    
    


    
    


    
    
    

</BODY>
    
</HTML>
