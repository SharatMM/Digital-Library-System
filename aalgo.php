<!doctype>
<html>
<head>
<style>
h1
{
	color:#0080ff;
	font-family:georgia;
	font-size: 200%;
}</style>
</head>
<body>
<div align="center">
<h1>VARIOUS BOOKS ON ADVANCE ALGORITHMS.....</h1>
<div>
</body>

</html>

<?php
	include("config.php");
    // gets value sent over search form
     
          //$min_length = 3;
    // you can set minimum length of the query if you wa nt
     
    //if(strlen($query) >= $min_length){  
		
	$query='ADVANCE ALGORITHM';
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($db,$query);
        // makes sure nobody uses SQL injection
         
        $sql = "SELECT * FROM book
            WHERE (`title` LIKE '%".$query."%') OR (`descrip` LIKE '%".$query."%')" or die(mysqli_error($db));
             $raw_results=mysqli_query($db,$sql);
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             echo "<p> ".$results['ser_no'].",</p>";
                echo "<h3>".$results['title'].",</h3>";
		echo "<p>".$results['author']." </p>";
		echo "<p>".$results['no_books']."
			</p></br>";
		
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
    

?>
