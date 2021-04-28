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
color:red;
background-color:white;

}
a{
background-color:grey;
color:black;
text-decoration:none;
}
div{
margin-top:50px;
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
margin-top:50px;
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
<form method="POST" action="resultdisp2.php">


<hr>
<center>
<h1> ABC MATRICULATION HIGHER SECONDARY SCHOOL (EXAM RESULT)</h1><br>
<?php
$conn=mysql_connect('localhost','root',"")or die('error');
mysql_select_db('school') or die('error');
$query="select * from mark";
$result=mysql_query($query)or die('error');
echo'<select std="myselect0" name="myselect0"required>';
while($row=mysql_fetch_array($result))
{
	echo'<option name="option[]" value="'.$row['std'].'"std="'.$row['std'].'">'.$row['std'].'</option>';
	$i++;
}
echo'</select>';
echo"<br>";
?>
<br>
<input type=text name=dept maxlength= 10 placeholder="ENTER THE DEPARTMENT NUMBER" required="required"/>
<br><br>
<input type=submit value=VIEW >
<a href="resultdisp1.php"></a>
</div>
</center>
</form>
</body>
</html>
