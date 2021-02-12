<html>
<head>
    
<title>

register result
</title>
   
    
</head>
    
    
<body> 
<?php
    
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
    $photo=$POST['photo'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];  
    $servername='localhost';
$username='root';
$databasename='patch';
$password='';
    $conn = mysql_connect($servername,$username,$password) or die("Error".mysql_error($conn));
    
//echo "connected successfully";
$db=mysql_select_db('patch', $conn)or die("Error".mysql_error($conn));

//echo "<br>connected successfully";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["photo"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

 
    $query1=mysql_query("Select * from register where email= '$email'");
    if (mysql_num_rows($query1)>0)
    {
         ?> <script> alert('Id already exists!!!!!!');</script>
    <?php
          header("Location:index.php");
        
    }
    else
    {
        
 $query = "INSERT INTO register VALUES('$fname', '$lname', '$location', '$mob', '$email', '$device','$brand','$imei','$model', '$problem',$imageFileType','$pw', '$cpw')";

$result=mysql_query($query,$conn) or die("Error".mysql_error($conn));  
    ?> <script> alert('INSERTED SUCCESSFULLY!!!!!!');</script>
  
    <?php
          header("Location:index.php");
    }
/*

if($result>=1)
{
    echo "<br>##inserted successfully";}
else
{
    echo "<br>##error in inserting";
}
   */ 
    
    
    
    
    ?>
    
    <!--
    <div>
    
    </body>
    
</html>
