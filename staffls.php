<?php

$db=mysqli_connect("localhost","root","","sharat");
if(isset($_GET['signup']))
{
	$query = $_GET['SKEY'];
 
			$query = htmlspecialchars($query);  
			$query = mysqli_real_escape_string($db,$query);
			$sql = "SELECT * FROM staff WHERE (skey='$query') " or die(mysqli_error($db));
			$raw_results=mysqli_query($db,$sql);
			if(mysqli_num_rows($raw_results)>0)
			{
				echo"Hello";
				header("location:staffcp.php");
				
			}
			else
			{echo"no results";}
		
}				
					  
?>