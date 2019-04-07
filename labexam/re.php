<?php
session_start();
$faculty=$_SESSION['p'];
include('connection.php');
$result1=mysqli_query($con,"delete from student_data where username='$faculty';")or die("ERROR");
echo "<html>
<head>
<script>
function chk()
{
window.location.href='index.html';
}
</script>
<body onload='chk();'></body></html>";
			
?>