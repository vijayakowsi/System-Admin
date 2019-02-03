<?php
$con=mysqli_connect("localhost","root","","tce");
if(!$con)
{
	echo("not connected".mysqli_connect_error());
}
$sql="select * from student";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "Name :  ".$row["name"]." Phone  :".$row["phn"]."Email :".$row["email"]."<br>";

	}
}
mysqli_close($con);
?>