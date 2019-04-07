<html>
<head>

<script type = "text/javascript" >
    history.pushState(null, null, 'code.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'code.php');
    });
</script>
</head>
</html>

<?php 
session_start();
$u="";
$pass1='';
$f=0;
$u=$_POST['u1'];
$f1=$_POST['u4'];
$_SESSION['faculty']=$f1;
$password=$_POST['pa'];
$_SESSION['variable']=$u;
include('connection.php');

$result1=mysqli_query($con,"select Stud_pass,username from faculty_data where username='$f1'");
	                while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
        
                	$pass1=$db_field['Stud_pass'];
					$user_name=$db_field['username'];
					
                 if($password==$pass1)
				 {
				 $f=1;
				 }
				 }


if($f==1){
mysqli_query($con,"insert into student_data(usn,username) values ('$u','$user_name');") or die("$u has already logged in.");
$result1=mysqli_query($con,"select * from questions where faculty_name='$f1' order by sl_no;")or die("ERROR");
echo"<html><head>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}
td{color:#99FFFF; font-size:18pt;}
th{font-size:20pt;color:darkgrey;}
label{font-size:'20pt' color:'#660000'}


</STYLE>
</head><body background='3.jpg'><marquee><h1> WELCOME $u !!!!!</h1> </marquee></body></html>";
echo"<table  border='border' align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td><pre>$pass</pre></td></tr>";
					}
					echo"</table><br/>";
				echo'<form align="center" action="code1.php" ><label>choose:<input type=submit name="choose" /></label></form></body></html>';
}


if($f==0)
{
echo"
<html>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:18pt;color:darkgrey;}
h2 {font-size:18pt;color:darkgrey;}
h3{font-size:100pt;color:black;}


</STYLE>
<body background='9.png'>
<h1 align='center'>Permission denied</h1>
<h2 align='center'>Make sure that you enter correct id and password</h2>
<form action='index.html' align='center'>
<input type='submit' value='Home' name='Home'  />
</form>
<h3 align='middle'  >ERROR</h3></body>
</html>";
}
?>