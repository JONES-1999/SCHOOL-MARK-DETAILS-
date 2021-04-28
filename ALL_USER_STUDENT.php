<html>
<head>
<title>STUDENT DETAILS</title>
<style type="text/css">
body{
     background-image: url(school3.jpg);
background-size:cover;
     background-attachment:fixed;
}
a:link,a:visited{
  display:block;
  front-weight:bold;
  color:#FFFFFF;
  background-color:#d96459;
  width:90px;
  text-aliogn:center;
  padding:2px;
  text-decoration:none;
  }
a:hover,a:active{
  background-color:#BDBDBD;
  }
h1{
   height:80px;
   font-size:46;
   color:#FFFF;
   text-align:center;
   line-height:80px;
   }
table{
      border-collapse: collapse;
      width: 100%;
      color: #d96459;
      font-family: monospace;
      text-align: center;
      line-height:40px;
      margin-top: 50px;
      }
th{
   background-color: #d96459;
   color: white;
   font-size: 17px;
   }
td{
   font-size: 17px;
   background-color: white;
  }
</style>
</head>
<body>
<h1 style=background-color:#d96459><b><center><font color="white">LIST OF STUDENTS</style></center></h1>
<?php
session_start();
$_POST[EMAIL]=$_SESSION['RECUITER'];
?>
<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
die("could not connect:" .mysql_error());
}
mysql_select_db("school",$con);
echo "<h1><center><center></h1>";
$result=mysql_query("SELECT * FROM `mark` ",$con);
echo "<table border=3>";

echo "<tr>
<td><b>DEPARTMENT NUMBER</b></td>
<td><b>NAME</b></td>
<td><b>STANDARD</b></td>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr> <td>".$row[dept]."</td>
<td>".$row[name]."</td> 
<td>".$row[std]."</td> 
</tr>";
}

echo "<table>";
?>

  