<?php
session_start();
$faculty=$_SESSION['p'];
include('connection.php');
mysqli_query($con,"delete from faculty_data where username='$faculty';")or die("error");
echo"<html>
<head>
<script type='text/javascript'>
function chk()
{
window.location.href='index.html';
}
</script>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:40pt;color:#99FFFF;}


</STYLE>
</head>
<body background='3.jpg' >
<br/><br/><br/><br/>

<h1 align='center'>Database Reset</h1>
<form  align='center'>     
<input type='button' value='logout' name='Home' onclick='chk();'>
</form>
</body>
</html>";
?>