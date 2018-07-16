<!doctype html>
<html>
<head>
<title>elibrary</title>
<style>.button {
  border-radius: 4px;
  background-color:  #0099ff;
  border: none;
  color: #ffff33;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;

 }
 #message,#incorrect{
	 font-size:20px;
	 font-weight:bold;
 }

</style>

<script type="text/javascript" ></script>
<script  src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body><style type="text/css">
	body
	{
		background-image:url("backimage.jpg");
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
	.id1
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
.butt {
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
	color:#ffdb4d;
	font-family:georgia;
	font-size: 200%;
}

</style>
<div style="width:600px ; height:600px; float:left;">
<div style="padding:85px;">
<h1>Create Account Here</h1>
<form action="loginsignup" method="post">
<input id="abc"type="text" name="usn" placeholder="User USN" required="required" title="This field should be in USN format" Pattern="[1]{1}[RVrv]{2}[0-9]{2}[A-Za-z]{2}[0-9]{3}"><br><br>
<input id="abc"type="text" name="name" placeholder="User Name" required="required" title="This field should contain only alphabets" pattern="[a-zA-Z]{1}[a-zA-Z]+"><br><br>
<input id="abc"type="email" name="email" placeholder="Enter Email ID" title="example@example.com" required="required"><br><br>
<input id="password" class="id1" type="password" name="pass" placeholder="Enter password"  title="This field should contain atleast one number, one uppercase, one lowercase and minimum 8 characters long" Pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required">
<span id="message"></span><br><br>
<input id="confirm_password" class="id1" type="password" placeholder="Re-Type password"  title="Retype password in this field"  required="required"><br><br>
<input class="butt" id="submit" type="submit" title="Press to sign up" name="signup" value="SIGN UP"><br>
<span id="incorrect"></span>
</form>
</div>
</div>
<div style="width:500px ; float:right; height:600px;">
<div style="padding:85px;padding-right:200px;">

<h1>Log In Here</h1>
<form action="loginsignup" method="post">
<input id="abc"type="email" name="email" placeholder="Enter Email ID"required="required"><br><br>
<input id="abc"type="password" name="pass" placeholder="Enter password" required="required"><br><br>
<input id="butt"type="submit" title="Press to sign in" name="signin" value="SIGN IN">
</div>
</div>
<!--<div>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dummy.html"><button class="button"><span>Home </span></button></a></p>
</div>-->

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
</body>
</html>