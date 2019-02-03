<?php 
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("connection failed".mysqli_connect_error());
}
$sql="insert into student(name,phn,email)values('$_POST[Name]','$_POST[phn]','$_POST[Email]')";
if(mysqli_query($con,$sql))
{
	echo ("record inserted");
}
else
{
	echo("not inserted".mysqli_error());
}
mysqli_close($con);
?>