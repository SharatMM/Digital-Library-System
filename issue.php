<?php 
	session_start();
      if(!isset($_SESSION['email']))
		header("location:staffindex.php"); 
	  else
	  {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issue of book</title>
</head>
<body bgcolor="#EEFDEF">

<form action="connectissue.php" method="POST" >
<table bgcolor="#EEFDEF" width="20%" align="center">

<tr>
<td colspan=2><center><font size=4><b>Issue book</b></font></center></td>
</tr>

<tr>
<td>Book_id
<td><input type="text" placeholder="Enter book serno" size=25 name="bookid" required></td>
</tr>

<tr>
<td>Student userid</td>
<td><input type="text" placeholder="Enter userid" size=25 name="user" required></td>
</tr>

<tr>
<td>Issue date</td>
<td><input type="date" placeholder="Enter date" size=15 name="ka" required></td>
</tr>

<tr>
<td>Due date</td>
<td><input type="date" placeholder="yyyy/mm/dd" name="kkk" required></td>
</tr>

<tr>
<td align="center"><input type="submit" name="signin" value="Issue"></td>
</tr>

</table>
</form>


<br><br/><br><br/>
<div align ="center">
    	
      
   
</div>
<form action="connectreturn.php" method="POST" >

<table bgcolor="#EEFDEF" margin="5px" padding="5px" width="30%" align="center">

<tr>
<td colspan=2><center><font size=4><b>Return Book</b></font></center></td>
</tr>

<tr>
<td>Book_id
<td><input type="text" placeholder="Enter book serno" size=25 name="bookid" required></td><br>
</tr>
<br><br>
<tr>
<td>Student userid</td>
<td><input type="text" placeholder="Enter userid" size=25 name="userid" required></td>
</tr>

<tr>
<td>Due date</td>
<td><input type="date" placeholder="yyyy/mm/dd" name="pa" required></td>
</tr>

<tr>
<td align="center"><input type="submit" value="Return & Collect fine"></td>
</tr>

</table>


</form>
<div align="center">
	<a href="log2.php"><h3>signout</h3></a>
	
</div>
<div align="center">
	<a href="req1.php"><h3>requested books</h3></a>
</div>

</body>
</html>
<?php }?>