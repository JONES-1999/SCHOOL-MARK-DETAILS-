<html>
<center>
<style>
body{
background-image:url("school3.JPG");
background-repeat:no-repeat;
background-size:cover;
}

h1{
padding:10px;
font-style:inherit;
color:black;
background-color:white;
text-shadow:2px 2px 2px #F33;
opacity:0.7;
}
a{
background-color:grey;
color:black;
text-decoration:none;
}
div{
margin-top:100px;
padding:20px;
width:30%;
position:relative;
border-radius:5px;
display:inline-block;
background-color:#cedcff;
box-shadow:20px 20px 20px #194f90;
opacity:0.7;
}
input[type=text]{
padding:5px;
}
input[type=submit]{
padding:5px;
font-family:forte;
box-shadow:2px 5px;
}
label{
padding:5px;
font-size:20px;

}

div{
margin-top:150px;
padding:20px;
width:60%;
position:relative;
text-align:left;
border-radius:5px;
display:inline-block;
background-color:#cedcff;
box-shadow:20px 20px 20px #194f90;
opacity:0.7;
}
input[type=text]{
padding:5px;
}
input[type=submit]{
text-align:center;
padding:5px;
font-family:forte;
box-shadow:2px 5px;
}
label{
padding:5px;
font-size:20px;

}
</style>
</head>
<body>
<center>
<div>
<form method="post" action="update.php">

<?php
$conn=mysql_connect('localhost','root',"") or die ('error');
mysql_select_db('school')or die ('error');
$id=$_POST['myselect'];
$query="select * from mark where dept='$id'";
$result=mysql_query($query)or die (mysql_error());
if(mysql_num_rows($result)>0)
{
echo"<b>std:";
echo"<br>";
echo'<select std="myselect" name="myselect" class="f">';
while($row=mysql_fetch_array($result))
{ 
    echo'<option name="option[]" value="'.$row['dept'].'"dept="'.$row['dept'].'">'.$row['dept'].'</option>';
    echo'</select>';
	echo"<br>";
	echo"<br>";
	echo"NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =text name=name value='$row[0]'><br>";
	echo"STANDARD:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=std value='$row[1]'><br>";
	echo"DEPARTMENT NUMBER:<input type =text name=dept maxlength= 10 value='$row[2]'><br>";
	echo"ENGLISH:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=english maxlength= 3 value='$row[3]'><br>";
	echo"LANGUAGE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=language value='$row[4]'><br>";
	echo"MATHS:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=maths maxlength= 3 value='$row[5]'><br>";
	echo"SCIENCE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=science value='$row[6]'><br>";
	echo"SOCIAL SCIENCE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=social value='$row[7]'><br>";
	echo"TOTAL:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type =number name=total maxlength=8 value='$row[8]'><br>";


echo"<input type =submit  value=update></b>";
}
}

else
{
	echo"No data found";
}
?>
</div>
</center>
</form>
</body>
</html>
