<html>
<head>
<script type = "text/javascript" >
    history.pushState(null, null, 'update1.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'update1.php');
    });
</script>
</head>
</html>
<?php
session_start();
$faculty=$_SESSION['faculty'];

$o=$_SESSION['choice'];
$i=$_SESSION['variable'];
$m='';
$d='';
include('connection.php');

$result1=mysqli_query($con,"select * from faculty_data where username='$faculty';");
 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$m=$db_field['max_marks'];
                	  
					}
					
					
					
					
$pr=mysqli_query($con,"select deduction from faculty_data  where username='$faculty';");
	 while($db_field=mysqli_fetch_array($pr,MYSQLI_ASSOC)) {
              		
         			$d=$db_field['deduction'];
                	      
					}				
				 
  	
mysqli_query($con,"UPDATE student_data 
     SET quest='$o',eval_marks='$m'-'$d',no_of_attempt=2
	 WHERE usn='$i' and username='$faculty'")or die("error");
mysqli_close($con)or die("djhjfhg");



include('connection.php');
$po=mysqli_query($con,"select questn from questions where sl_no=$o and faculty_name='$faculty';") ;


 while($db_field=mysqli_fetch_array($po,MYSQLI_ASSOC))
                    {
              		
         			$m=$db_field['questn'];
                
					}

echo "
<html>
<head>
<script>
function chk()
{
window.location.href='index.html';
}
</script>

<STYLE TYPE='TEXT/CSS'>

h1 {font-size:20pt;color:#99FFFF;}
h2 {font-size:25pt;color:darkgrey;}
h3 {font-size:22pt;color:darkgrey;}


</STYLE>
</head>
<body background='3.jpg'>
<br/><h3 align='center'>YOU HAVE SELECTED QUESTION:</h3> 
<h1 align='center'><pre>$o. $m</pre><br></h1> <h2 align='center' ><br/><br/>GOOD LUCK..!!!</h2>
<form action='' align='center'><input type='button'  onclick='chk();' value='logout'></form>
</body>
</html>";
?>