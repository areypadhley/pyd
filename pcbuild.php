<html>
<head>
    
<title>


</title>
   
    
</head>
    
    
<body> 
<?php
  include("db.php");

$budget=$_POST['budget'];
$CPU=$_POST['CPU'];
$Motherboard=$_POST['Motherboard'];
$RAM=$_POST['RAM'];
$GPU=$_POST['GPU'];
$Harddisk=$_POST['Harddisk'];
$SSD=$_POST['SSD'];
$Powersupply=$_POST['Powersupply'];

    $Cabinet=$_POST['Cabinet'];
    $prefer=$_POST['prefer'];
$type=$_POST['type'];
$elsee=$_POST['elsee'];  
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $phn=$_POST['phn']; 
    $adr=$_POST['adr']; 
    
    
    
//echo "connected successfully";


//echo "<br>connected successfully";


    
        
 $query ="INSERT INTO reg2 VALUES('$budget','$CPU', '$Motherboard', '$RAM', '$GPU', '$Harddisk','$SSD','$Powersupply','$Cabinet', '$prefer','$type','$elsee','$name','$email','$phn','$adr')";

$result=mysqli_query($conn,$query) or die("Error :".mysqli_error($conn)); 

    ?> 
  
    <?php
    
         echo"<script type='text/javascript'> alert('INSERTED SUCCESSFULLY!!!!!!');</script>";
          
    

    
    
    
    
    ?><CENTER><a href="index.php">BACK TO HOME</a></CENTER>
    <?PHP
   // header("Location:index.php");?>
    <!--
    <div>
    
    </body>
    
</html>
