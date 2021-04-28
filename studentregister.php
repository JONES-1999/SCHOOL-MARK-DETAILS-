<?php
$name=$_POST['name'];
$std=$_POST['std'];
$dept_no=$_POST['dept_no'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$a=mysqli_connect("localhost","root","","school");
if(!$a)
{
echo "error";
}
else
{
$sql="INSERT INTO student VALUES('".$name."','".$std."','".$dept_no."','".$contact."','".$gender."','".$blood_group."','".$address."')";

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
