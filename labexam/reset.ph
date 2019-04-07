<?php
session_start();
$faculty=$_SESSION['p'];
include('connection.php');
mysqli_query($con,"delete from questions where faculty_name='$faculty';")or die("error");
echo"<html>
<head>
<script type='text/javascript'>
function chk()
{
window.location.href='http://msritlabexam.wc.lt/project/index.html';
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
<input type='submit' value='Add Questions' name='Home' formaction='addquestions1.html' >      
<input type='button' value='Home' name='Home' onclick='chk();'>
</form>
</body>
</html>";
?>