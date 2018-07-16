<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="sharat";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
$bookid = $_POST['bookid'];
$userid = $_POST['userid'];
$date2 = $_POST['pa'];
//start_session();

if(! $con)
{
die('Connection Failed'.mysqli_error());
}


$date1 = date('Y/m/d');

$diff = strtotime($date1) - strtotime($date2);
if($diff > 7)
{
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$final = ($days * 2) ;
}
else{
	$final=0;
}
$fine0 ="SELECT fine FROM ret WHERE userid='$userid'";
 
$fine=mysqli_query($con,$fine0);
while($row=mysqli_fetch_array($fine))
{
	$oldfine=$row['fine'];
}

if($oldfine!=0)
{
	$newfine=$oldfine+$final;
}	

$_SESSION['newfine']=$newfine;
if($final)
{//$sql = "INSERT INTO ret (userid,fine)  VALUES ('$userid','$newfine')";
$sql="UPDATE ret SET `fine`= $newfine WHERE `userid`=$userid";}
 $fine=mysqli_query($con,$sql);
if(!$final)
	{ Print '<script>alert("NO FINE");</script>';
	Print '<script>window.location.assign("issue.php")</script>';
	}
 
 else
 {  
	Print '<script>alert("student have to pay fine......'.$newfine.'!!!!!");</script>';
	
 Print '<script>window.location.assign("dispfine.php")</script>';}
//if(mysqli_query($con, $sql)){
	//header("location: ");
//} else{
  //  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
//}

// Close connection
mysqli_close($con);
?>