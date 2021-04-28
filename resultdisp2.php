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
h3{
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
<h3 style=background-color:#d96459><b><center><font color="white">ABC MATRICULATION HIGHER SECONDARY SCHOOL </style></center></h3>

<?php
$conn=mysql_connect('localhost','root',"")or die('error');
mysql_select_db('school') or die('error');
$std=$_POST['myselect0'];
$dept=$_POST['dept'];
$query="select * from mark where std='$std' and dept='$dept'";
$result=mysql_query($query) or die (mysql_error());
echo "<table border=3>";
echo "<tr>
<td><b>NAME</b></td>
<td><b>DEPARTMENT NUMBER</b></td>
<td><b>ENGLISH</b></td>
<td><b>LANGUAGE</b></td>
<td><b>MATHS</b></td>
<td><b>SCIENCE</b></td>
<td><b>SOCIAL SCIENCE</b></td>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr> <td>".$row[name]."</td>
<td>".$row[dept]."</td>
<td>".$row[english]."</td> 
<td>".$row[language]."</td>
<td>".$row[maths]."</td>
<td>".$row[science]."</td>
<td>".$row[social]."</td>
</tr>";
}

echo "<table>";
?>