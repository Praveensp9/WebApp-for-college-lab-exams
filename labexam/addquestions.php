<?php
session_start();
$faculty=$_SESSION['p'];
$sl=$_POST['slno'];
$question=$_POST['quest'];
$j=0;
include('connection.php');

$r=mysqli_query($con,"select * from questions where faculty_name='$faculty';");

while($n=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
if($sl==$n['sl_no']&& $faculty==$n['faculty_name'])
 {
mysqli_query($con,"update questions set questn='$question' where sl_no='$sl' and faculty_name='$faculty';");

$j=1;
}
}

if($j==0){
mysqli_query($con,"insert into questions(sl_no,questn,faculty_name)values('$sl','$question','$faculty');");
}

echo"<html><head>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}
td{color:#99FFFF; font-size:18pt;}
th{font-size:20pt;color:darkgrey;}
label{font-size:'20pt' color:'#660000'}


</STYLE>
</head><body background='3.jpg'><br/><h1 align='center'>Question successfully added</h1></body></html>";


$r=mysqli_query($con,"select * from questions where faculty_name='$faculty' order by sl_no;");

echo"<table  border='border' align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td><pre>$pass</pre></td></tr>";
					}
					echo"</table><br/>";
				




echo'
<html>
<head>
<script type="text/javascript">
function chk()
{
window.location.href="index.html";
}
</script>
<STYLE TYPE="TEXT/CSS">

h1 {font-size:35pt;color:#99FFFF;}


</STYLE>
</head>
<body background="3.jpg"><br/><br/>
<form action=" " align="center">
<input type="submit" value="Add Question" formaction="addquestions1.html" name="Add" />
<input type="button" value="Home" name="Home" onclick="chk();" />
</form></body></html>';
?>