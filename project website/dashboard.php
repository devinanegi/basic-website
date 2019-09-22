<?php
if(isset($_POST['email']))

$email = $_POST ['email'];

$connect =mysqli_connect("localhost","root","","website");


$query= "SELECT * FROM one"; 
//to retrieve database 
	$data = mysqli_query($connect,$query);
	$result = mysqli_fetch_assoc($data);



?>
<html>



<head>
		<style>
		body{
			background:url("nature4.jpg") no-repeat;
		
		}
		
		
		
	    </style>
</head>
	<body>
		<a href="update.php?email=<?php echo $result['email']?>"><center>update</center></a><br><br>
		<a href="delete.php?email=<?php echo $result['email']?>"><center>delete</center></a>
	</body>
</html>