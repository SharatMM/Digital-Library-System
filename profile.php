<?php  session_start();
if(empty($_SESSION['email']))
{
 header("location:index.php");
}

?>



<!DOCTYPE html>
<html>
<head>
<title>Search Box Example 1</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- CSS styles for standard search box -->
<style type="text/css">
   #tfheader{
      background-color:#c3dfef;
   }
   #tfnewsearch{
      float:right;
      padding:20px;
   }
   .tftextinput{
      margin: 0;
      padding: 5px 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-size:14px;
      border:1px solid #0076a3; border-right:0px;
      border-top-left-radius: 5px 5px;
      border-bottom-left-radius: 5px 5px;
   }
   .tfbutton {
      margin: 0;
      padding: 5px 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-size:14px;
      outline: none;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      color: #ffffff;
      border: solid 1px #0076a3; border-right:0px;
      background: #0095cd;
      background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
      background: -moz-linear-gradient(top,  #00adee,  #0078a5);
      border-top-right-radius: 5px 5px;
      border-bottom-right-radius: 5px 5px;
   }
   .tfbutton:hover {
      text-decoration: none;
      background: #007ead;
      background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
      background: -moz-linear-gradient(top,  #0095cc,  #00678e);
   }
   /* Fixes submit button height problem in Firefox */
   .tfbutton::-moz-focus-inner {
     border: 0;
   }
   .tfclear{
      clear:both;
   }



article {
    margin-left: 50px;
   <!-- border-left: 1px solid gray;-->
    padding: 1em;
    overflow: hidden;
	text-decoration:none;
}
h1
{
	color:#ff5050;
	font-family:georgia;
	font-size: 200%;
}
#butt {
    background-color: #e7e7e7; 
    border: none;
     color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 12px;
}
i
{
	color: #ff5050;
	font-family:calibri;
	font-size: 130%;
	
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	text-decoration:none;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 10px;
	text-decoration:none;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
</head>
<body>

   <!-- HTML for SEARCH BAR -->
   
<br></br>

<header>
	
   <h1>Library<h1>
   <div id="tfheader">	
   
      <form id="tfnewsearch" action="" method="GET" >
	  
              <input type="text" placeholder="search by author or title" class="tftextinput" name="q" size="21" maxlength="120">
              <input type="submit" value="search" class="tfbutton">
			  
      </form>
   <div class="tfclear"></div>
   </div>
   
</header>
 <br></br>
<div align="center">
	<!--<a href="request.html"><strong><button id="butt" type="button">request book </button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;-->
   <a href="req1.php"><strong><button id="butt" type="button">requested books </button></a></li>
	</div>
	
 <br></br>

<article >
<table width="50">
  
  <tr>
    <td><a href=".net.php">.NET</a></td>
    <td><a href="database.php">DATA BASES</a> </td>
    <td><a href="linux1.php"> LINUX</a></td>
	
  </tr>
  <tr>
    <td><a href="python.php">PYTHON</a> </td>
    <td><a href="networks.php">NETWORKING</a> </td>
    <td><a href="javascript.php">JAVA SCRIPT</a></td>
  </tr>
  <tr>
    <td><a href="ai.php">AJAX</a> </td>
    <td><a href="java.php">JAVA</a></td>
    <td><a href="php1.php">PHP</a></td>
  </tr>
  
    <td><a href="css.php">CSS</a> </td>
    <td><a href="webdesigns.php">WEB DESIGNING</a> </td>
	<td><a href="sql.php">SQL</a> </td>
    
  </tr>
 
  
</table>
  
</article>

<div align="center">Copyright &copy;1RV15CS142/43</div>

<?php echo $_SESSION['name']; ?>
</div>
<i>wants to end session</i>
</body>
</html>



<html>
<style>
table
{
border-color:pink;
width:65%;
margin-left:17%;
}
</style>

<body bgcolor="#EEFDEF">
<a href="logout.php"><strong><button id="butt" type="button">&nbsp;&nbsp;&nbsp;logout </button></a><br><br><br>
</body>
</html>
<?php
	include("config.php");
    // gets value sent over search form
	
	if(isset($_GET['1']))
		{
			Print '<script>alert("Your request has been noted...");</script>';
		}
	
     $query=isset($_GET['q']);
	 $query = $_GET['q'];
          //$min_length = 3;
    // you can set minimum length of the query if you wa nt
     
    //if(strlen($query) >= $min_length){  
		if(strlen($query)>3){
	
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($db,$query);
        // makes sure nobody uses SQL injection
         
        $sql = "SELECT * FROM book
            WHERE (`title` LIKE '%".$query."%') OR (`author` LIKE '%".$query."%')" or die(mysqli_error($db));
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
              
              <img src="newimg/<?php echo $results['file']?>">
              </td>
              <td>
              <?php
              echo "<h2>" . $results['title'] . "</h2><hr/>";
             
              echo "<b>Book ID</b> : " . $results['ser_no'] . "<br>";
              
              
             
              echo "<b>Author(s) : </b>" . $results['author'] . "<br>";
              echo "<b>published year : </b>" . $results['manf_year'] . "<br>";
			  echo "<b>available copies : </b>" . $results['no_books'] . "<br>";
             ?>
              
              <br><a style='text-decoration:none;' href="Req14.php?id=<?php echo $results['ser_no']?>"> <button id="sharan">Request</button></a><br><br><br>
              </td>
              </tr>

            <?php 
			}
             echo "</table>";
            }
             
        }
        else{ // if there is no matching rows do following
            echo "";
        }

    

?>

