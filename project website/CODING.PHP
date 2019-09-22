<html>
<head>
	<style type="text/css">
	h1
	{
		background:pink;
		border:white;
		color:green;


	}
	body
	{
		background:url('nature3.jpg')no-repeat;
		background-size: cover;
		
		border:8px solid white;
		body

background:url('nature.jpeg') no-repeat;
background-size:cover;

	}
	form
	{
		color:yellow;
		font-weight: 2px;

		font-family:oblique;
	}
</style>
	</head>
	<body>
		<br>
		
		<h1><center><marquee direction="right"> REGISTER HERE</marquee> </center></h1>
		<form method="post"> <center>

			First Name : <input type ="text" name="fname"><br><br>
			Last Name : <input type= "text" name="lname"> <br><br>
			Email : <input type="email" name="email"><br><br>
			Password : <input type ="password" name="password"><br><br>
			Contact : <input type= "number" name="contact"><br><br>
			Gender : <br> <br>
			Female:<input type= "radio" name="gender" value="male"><br><br>
			Male:<input type= "radio" name="gender" value="female"><br><br>
			DOB : <input type= "date" name="dob"><br><br>
			Address : <textarea name= "address"></textarea><br><br>
			<input type="submit" name="submit" value="submit"> </center></form> <br>
			<center><a href ="signup.php"> SIGN UP </a></center>
			
	</body>
	</html>

<?php
$connect =mysqli_connect("localhost","root","","website");
if (isset($_POST['submit']))
{
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $query="INSERT INTO one(fname,lname,email,password,contact,gender,dob,address) VALUES('$fname','$lname','$email','$password','$contact','$gender','$dob','$address')";
$data = mysqli_query($connect,$query);
}

?>