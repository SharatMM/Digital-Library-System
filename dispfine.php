


<!DOCTYPE html>
<html>
<head>
    <title>STUDENT FINE!!</title>
</head>
<body>

<form action="" method="POST" >
<table bgcolor="#ffff66" width="20%" align="center">

<tr>
<td colspan=2><center><font size=4><b>collect fine</b></font></center></td>
</tr>



<tr>
<td>Student userid</td>
<td><input type="text" placeholder="Enter userid" size=25 name="userid" required></td>
</tr>



<tr>
<td align="center"><input type="submit" name="ab" value="collect and check"></td>
</tr>

</table>

</form>
<?php 
include("config.php");
//Print '<script>alert("fine collection successful'!!!!!")</script>';
//Print '<script>window.location.assign("issue.php")</script>';

if(isset($_POST['ab'])){
Print '<script>alert("fine collection successful");</script>';
	
Print '<script>window.location.assign("issue.php")</script>';}
?>
</body>
</html>


