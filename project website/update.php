<html>
<head>
	<style type="text/css">
	body
	{
		background:url('nature5.jpg')no-repeat;
		background-size: cover;
		color:black;
		font-weight: bold;
		border:8px solid darkgreen;
	}
	h1{
		color:purple;
		background:black;
	}

</style>
</head>
<body>
	<form method="POST">
		<center><br> 
			<h1> <marquee direction="right">EDIT DETAILS </marquee></h1>
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
			<input type="submit" name="submit" value="submit">
			</center>
			</form>
	</body>
</html>
<?php
$mail= $_GET ['email'];
$connect =mysqli_connect("localhost","root","","website");
if (isset($_POST['submit']))
{
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $dob=$_POST['date'];
    $address=$_POST['address'];
    $query="UPDATE one SET  fname='$fname',lname='$lname',email='$email',password='$password',contact='$contact',gender='$gender',dob='$dob',address='$address'WHERE email='$mail'";
$data = mysqli_query ($connect,$query);
if($data == true)
{
	header("location:dashboard.php?email=$email");
}
else
{
	echo "not";
}
}
?>