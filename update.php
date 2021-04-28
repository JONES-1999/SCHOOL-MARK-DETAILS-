<html>
<?php
$conn=mysql_connect('localhost','root',"") or die ('error');
mysql_select_db('school')or die ('error');
$std=$_POST['myselect'];
$name=$_POST['name'];
$std=$_POST['std'];
$dept=$_POST['dept'];
$english=$_POST['english'];
$language=$_POST['language'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$total=$_POST['total'];

$query="update mark set name='$name' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set std='$std' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set dept='$dept' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set english='$english' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set language='$language' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set maths='$maths' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set science='$science' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set social='$social' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

$query="update mark set total='$total' where std='$std'";
$result=mysql_query($query) or die(mysql_error());

echo"updated Successfully";

?>
