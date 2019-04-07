<?PHP
session_start();
$x=$_SESSION['p'];
$attempt=$_POST['max'];
$mark=$_POST['marks'];
$deduct=$_POST['dmarks'];
$no=$_POST['no_of_quest'];

$sql="UPDATE faculty_data 
     SET max_attempts=$attempt,max_marks=$mark,deduction=$deduct,no_of_questions=$no
	 WHERE username='$x'";
	 
include('connection.php');
mysqli_query($con,$sql)or die("error");
mysqli_close($con)or die("djhjfhg");

$pass1=$_POST['username'];
$confirm=$_POST['pa'];

	

if($pass1==$confirm)
{
include('connection.php');
mysqli_query($con,"update faculty_data set Stud_pass='$pass1' where username='$x';")or die("Please enter the fields given");
mysqli_close($con)or die("djhjfhg");

echo"<html>
<head>
<script>
function chk1()
{
window.location.href='index.html';
}
</script>
</head>
<STYLE TYPE='TEXT/CSS'>
h4 {font-size:23pt;color:orange;}
</STYLE>
<body background='3.jpg'><br/><br/><br/><br/><h4 align='center'>REGISTRATION COMPLETED SUCCESSFULLY!! THANK YOU .</h4></body></html>";	
echo"<html>
<body>
<form align='center' action='login2.php'>
<input  type='button' value='Home' name='Home'  onclick='chk1();'/>

</form></body>
</html>";
}
else
{	
echo"<html>
<head>
<script>
function chk1()
{
alert('Please enter a valid username or password')
}
</script>
</head>
<body>
<form align='center' action='login.php'>
<input  type='button' value='Home' name='Home' onclick='chk1();' />
</form></body>
</html>";
}
?>