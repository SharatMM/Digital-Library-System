<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="sharat";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);

$userid1 = $_POST['userid'];
//start_session()



if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else
{
	echo "Connection successful!!!";
}




	
$fine0 ="SELECT fine FROM ret WHERE userid='$userid1'";
 
$fine=mysqli_query($con,$fine0);
if(!$fine)
	echo "error";
while($row=mysqli_fetch_array($fine))
{
	
		$finale=$row['fine'];
}
//echo $ress;
$finale-=1;
echo $finale;

// Close connection
mysqli_close($con);
?>