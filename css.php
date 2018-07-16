<!doctype>
<html>
<head>
<style>
h1
{
	color:#0080ff;
	font-family:georgia;
	font-size: 200%;
}
table
{

border-color:pink;
width:65%;

margin-left:17%;
}
</style>
</head>
<body bgcolor="#EEFDEF">
<div align="center">
<h1>VARIOUS BOOKS ON CSS.....</h1>
<div>

<div align="center">
<h3><a style="text-decoration:none;" href="profile.php?q="><button>HOME</button></a></h3>
</div>

<?php
	include("config.php");
    // gets value sent over search form
	if(isset($_GET['1']))
		{
			Print '<script>alert("Your request has been noted...");</script>';
		}
     
          //$min_length = 3;
    // you can set minimum length of the query if you wa nt
     
    //if(strlen($query) >= $min_length){  
		
	$query='css';
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($db,$query);
        // makes sure nobody uses SQL injection
         
        $sql = "SELECT * FROM book
            WHERE (`descrip` LIKE '".$query."')" or die(mysqli_error($db));
             $raw_results=mysqli_query($db,$sql);
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
			 ?><table border="0px solid blue" cellpadding="5" cellspacing="5"><?php
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
			{
				?> 
              <tr>
             
              <td>
              
              <img src="css/<?php echo $results['file']?>">
              </td>
              <td>
              <?php
              echo "<h2>" . $results['title'] . "</h2><hr/>";
             
              echo "<b>Book ID</b> : " . $results['ser_no'] . "<br>";
              
              
             
              echo "<b>Author(s) : </b>" . $results['author'] . "<br>";
              echo "<b>published year : </b>" . $results['manf_year'] . "<br>";
			  echo "<b>available copies : </b>" . $results['no_books'] . "<br>";
             
		?>
              
              <br><a style='text-decoration:none;' href="Req11.php?id=<?php echo $results['ser_no']?>"> 
			  <button id=\"sharan\">Request</button></a><br><br><br>
              </td>
              </tr>

            <?php 
			}
             echo "</table>";
        }
             
        
        else{ // if there is no matching rows do following
            echo "No results";
        }
    

?>
</body>

</html>