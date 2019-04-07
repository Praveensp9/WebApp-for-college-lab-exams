<?php
session_start();
$faculty=$_SESSION['p'];
$sl=$_POST['slno'];
$question=$_POST['quest'];
$j=0;
include('connection.php');

$r=mysqli_query($con,"select * from questions")or die("eroor3");

while($n=mysqli_fetch_array($r,MYSQLI_ASSOC))
{
if($sl==$n['sl_no']&& $faculty==$n['faculty_name'])
 {
mysqli_query($con,"update questions set questn='$question' where sl_no='$sl' and faculty_name='$faculty';")or die("ERROR");

$j=1;
}
}

if($j==0){
mysqli_query($con,"insert into questions(sl_no,questn,faculty_name)values('$sl','$question','$faculty');")or die("error2");
}


$result1=mysqli_query($con,"select * from questions where faculty_name='$f1';")or die("ERROR");

echo"<html><head>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}
td{color:#99FFFF; font-size:18pt;}
th{font-size:20pt;color:darkgrey;}
label{font-size:'20pt';color:'#660000'}


</STYLE>
</head>
<table border='border'  align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td>$pass</td></tr>";
}
					echo"</table><br/>";
				echo"</body></html>";

echo'<html>
<head>
<script>
function chk1()
{
window.location.href="http://ngraghavendra06.wix.com/labexam";
}
</script>
<STYLE TYPE="TEXT/CSS">
h1 {font-size:35pt;color:#99FFFF;}
</STYLE>
</head>


<body background="3.jpg"><br/><br/><br/><br/>
<h1 align="center" >Question successfully added</h1>
<form action="" align="center">
<input type="submit" value="Add Question" formaction="addquestions1.html" name="Add" />
<input type="submit" value="Home" name="Home" onclick="chk1();" />
</form></body></html>';
?>