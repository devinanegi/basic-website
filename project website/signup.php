<html>
<head>
	<style type="text/css">
	h1
	{
		background:purple;
		color:yellow;
		font-family:arial;
	}
	body
	{
		background: url('nature2.jpg') no-repeat;
		border:solid 8px black;
		background-size: cover;
	}
</style>
</head>
<body>
	<form method="post">
	<center>
		<br>
			<h1> <marquee direction="right">FILL DETAILS HERE</marquee> </h1>
		
        EMAIL:<input type="email" name="email"><br> <br>
		PASSWORD:<input type="password" name="password"><br> <br>
		<input type="submit" name="submit" value="login"></center>
		
	</form>
</body>
</html>
<?php

$connect =mysqli_connect("localhost","root","","website");
if (isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="SELECT * FROM one";
	$data=mysqli_query($connect,$query);
	while($result=mysqli_fetch_assoc($data))
		{
			if($result['email']==$email && $result['password']==$password)
				{
					

				header("location:dashboard.php?email=$result[email]");
				}
}

			}




?>