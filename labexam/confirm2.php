<html>
<head>
<script type = "text/javascript">
history.pushState(null, null, 'update1.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'update1.php');
    });
</script>
   <script type="text/javascript" src="jquery-1.4.4.min.js"></script>
   <script type="text/javascript" src="countdown.js"></script>

   
</head>
<body>
  <input type="text" id="timer" style="font-size:50" size="2" disabled size='3'>
  <script type="text/javascript">
  timer = new Countdown();
  timer.init();
  </script>

</body>
</html>



<?PHP

session_start();
$faculty=$_SESSION['faculty'];
include('connection.php');

$result1=mysqli_query($con,"select * from questions where faculty_name='$faculty' order by sl_no;")or die("ERROR");
echo"<html><head>
<STYLE TYPE='TEXT/CSS'>

h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}
td{color:#99FFFF; font-size:18pt;}
th{font-size:20pt;color:darkgrey;}
label{font-size:'20pt' color:'#660000'}


</STYLE>
</head><body background='3.jpg'><marquee><h1 color='Red'>ALL THE BEST </h1> </marquee></body></html>";
echo"<table border='border' align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td><pre>$pass</pre></td></tr>";
					}
					echo"</table>";
				echo'<br><form align="center" action="update1.php" ><label>Confirm :<input type=submit name="CONFIRM" /></form><br><br>
				</body></html>';

?>