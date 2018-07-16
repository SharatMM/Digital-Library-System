<?php
session_start();
$con = mysqli_connect("localhost","root","","sharat");

 
 $email = $_GET['email'];
 $pass = $_GET['pass'];
 echo $email;
 echo $pass;
 $sql1 = "SELECT * FROM staff WHERE emailid='$email' and pass='$pass'";
 $res1 = mysqli_query($con,$sql1);
 $data = mysqli_fetch_array($res1,MYSQLI_ASSOC);
 
 if($data['emailid']!=$email and $data['pass']!=$pass)
 {
  echo "invalid email or pass";
 }
 elseif($data['emailid']==$email and $data['pass']==$pass)
 {
    $_SESSION['email']=$data['emailid'];
    $_SESSION['name']=$data['fname'];
	header("location:issue.php");
	
 }
 
 
?>

