<?php
$emp_code=$_POST['emp_code'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$password=$_POST['password'];
$a=mysqli_connect("localhost","root","","school");
if(!$a)
{
echo "error";
}
else
{
$sql="INSERT INTO teacher VALUES('".$emp_code."','".$name."','".$dob."','".$contact."','".$gender."','".$address."','".$password."')";

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
