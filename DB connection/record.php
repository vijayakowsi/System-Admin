<?php
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	die("connection failed".mysqli_connect_error());
}
$sql="update student set phn='$_POST[phn]' where name='$_POST[Name]'";
if(mysqli_query($con,$sql))
{
	echo "updated";
}
else
{
	echo "not update".mysqli_error();
}
mysqli_close($con);
?>