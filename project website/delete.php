<?php
$connection=mysqli_connect("localhost","root","","website");
$mail=$_POST['email'];
$query="DELETE FROM one";
$data=mysqli_query ($connection,$query);
header ("location:CODING.php");
?>