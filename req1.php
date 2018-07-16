<html>
<head>
<style>
table
{
	border-style:solid;
	border-width:2px;
	width:60%;
	border-color:pink;
	margin-left:17%;
	text-align:center;
}
h2{
	text-align:center;
	color:orange;
}

</style>
</head>
<body bgcolor="#EEFDEF">
<div>
<h2>These are requested books</h2>
</div>
<?php
	include("config.php");
         
        $sql = "SELECT * FROM request where ('serve'=0)" or die(mysql_error());
             $raw_results=mysqli_query($db,$sql);
			 echo "<table border='1'>
			<tr>
			<th style='color:red;'>user_id</th>
			<th style='color:red;'>ser_no</th>
			<th style='color:red;'>Title</th>
			</tr>";
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
			{
				echo "<tr>";
				echo "<td>" . $results['rmail_id'] . "</td>";
				echo "<td>" . $results['ser_no'] . "</td>";
				echo "<td>" . $results['title'] . "</td>";
				echo "</tr>";
            }
         echo "</table>";    
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

?>
</body>
</html>


