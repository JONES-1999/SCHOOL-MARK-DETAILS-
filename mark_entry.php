<?php
$name=$_POST['name'];
$std=$_POST['std'];
$dept=$_POST['dept'];
$english=$_POST['english'];
$language=$_POST['language'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$total=$_POST['total'];
$a=mysqli_connect("localhost","root","","school");
if(!$a)
{
echo "error";
}
else
{
$sql="INSERT INTO mark VALUES('".$name."','".$std."','".$dept."','".$english."','".$language."','".$maths."','".$science."','".$social."','".$total."')";

if (!mysqli_query($a,$sql))
{
die ("error".mysqli_error($a));
}
else
{
header('location:home.html');
}
}
?>
