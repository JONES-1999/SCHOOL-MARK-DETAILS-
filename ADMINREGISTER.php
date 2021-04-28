<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die('could not connect:' .mysql_error());
}
mysql_select_db("school",$con);
$result=mysql_query("SELECT * FROM admin WHERE  name='$_POST[name]' and password='$_POST[password]'",$con);
$count=mysql_num_rows($result);
if($count==1)
{
session_start();
$_SESSION['name']=$_POST[name];
session_register('name'); 
session_register('password');
header("location:ADMINVIEW.html");
}
{
echo "invalid password";
}
mysql_close($con);
?>