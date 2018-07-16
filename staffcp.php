<!doctype html>
<html>
<head>
<script type="text/javascript" ></script>
<script  src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body><style type="text/css">
	body
	{
		background-image:url("http://www.wujinshike.com/data/wallpapers/53/WDF_991231.jpg");
		background-repeat: no-repeat;
		background-size: 1365px 1000px;
   
	}
	#abc
	{
		border-radius:15px;
		width:200px;
		height:15px;
		padding:20px;
		background:#ffffcc;
		
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
h1
{
	color:#ffff33;
	font-family:georgia;
	font-size: 200%;
}

	.id1
	{
		border-radius:15px;
		width:200px;
		height:15px;
		padding:20px;
		background:#ffffcc;
		
	}
</style>
<div style="width:500px ; height:600px; float:left;">
<div style="padding:85px;">
<h1>Create your password ....</h1>
<form action="staffdepth" method="post">

<input id="abc"type="password" name="skey" placeholder="skey" required="required"><br><br>
<input id="abc"type="text" name="fname" placeholder="Staff FName" title="This field should contain only alphabets" pattern="[a-zA-Z]{1}[a-zA-Z]+"><br><br>
<input id="abc"type="text" name="lname" placeholder="Staff SName"title="This field should contain only alphabets" pattern="[a-zA-Z]{1}[a-zA-Z]+"><br><br>
<input id="abc"type="email" name="email" placeholder="example@example.com"><br><br>
<input id="password" class="id1" type="password" name="pass" placeholder="Enter password"  title="This field should contain atleast one number, one uppercase, one lowercase and minimum 8 characters long" Pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required">
<span id="message"></span><br><br>
<input id="confirm_password" class="id1" type="password" placeholder="Re-Type password"  title="Retype password in this field"  required="required"><br><br>
<input id="abc"type="text" name="phno" placeholder="phonenumber" required="required"><br><br>
<input id="abc"type="date" name="date" placeholder="YYYY/MM/DD" required="required"><br><br>
<input id="butt"type="submit" name="continue" value="continue">
</form>
</div>
</div>
</body>
<script type="text/javascript">
$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', '#ffdb4d');
  } else 
    $('#message').html('Not Matching').css('color', '#ffdb4d');
});

$('#submit').on('click', function () {
	  if ($('#message').text()=='Not Matching') {
	    $('#submit').attr("disabled", "disabled");
	    $('#incorrect').text('Re-type password is not matching with password').css('color', '#ffdb4d');
	}
	 });

$('#confirm_password').on('change blur input', function () {
	  if ( $('#submit').attr("disabled")== 'disabled') {
		  $('#incorrect').text('');
		  $('#submit').removeAttr("disabled");
	}
	 
	  });

</script>
</html>