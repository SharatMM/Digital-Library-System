<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=.25">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
session_start();
include("config.php");

$user = $_SESSION['usn']; 
$id = $_GET['id'];


        $query="SELECT * FROM book where ser_no='$id' ";
        $results=mysqli_query($db,$query);
		while($row=mysqli_fetch_array($results))
		{
			$sq=$row['title'];
		}
		echo $sq;
		
		
        $sql = "INSERT INTO request(rmail_id,ser_no,title) VALUES ('$user','$id','$sq')";
        $ss=mysqli_query($db,$sql);    
		if($ss)
		{					
			
			header('location:php1.php?1');
		}
		else 
		{echo mysqli_error($ss);}
        
?>
</body>
</html>