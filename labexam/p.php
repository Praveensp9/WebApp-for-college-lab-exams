<?PHP
session_start();
$user='';
$pass='';
$f=0;
$username=$_POST['username'];
$_SESSION['p']=$username;
$password=$_POST['pa'];
include('connection.php');
 
$result1=mysqli_query($con,"select username,password from faculty_data");
	                
				while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['username'];
                	$pass=$db_field['password'];
                    
					
                 if($username==$user && $password==$pass)
				 {
				 $f=1;
				 }
				 }
if($f==1)
{
echo"
<html>
<head>
<title> login </title>";
echo'<script language="javascript">

function chk1()
{
window.location.href="http://msritlabexam.wc.lt/project/index.html";
}

function chk1()
{
window.location.href="http://msritlabexam.wc.lt/project/index.html";
}

function chk1()
{
window.location.href="http://msritlabexam.wc.lt/project/index.html";
}

function chk()
{
var k,p;
k=document.getElementById("u1").value;
p=document.getElementById("u2").value;
if(p !=k  )
alert("Passwords does not match");
}
</script>
<STYLE TYPE="TEXT/CSS">
fieldset {
  font-size:10px;    padding:3px;    width:700px;   line-height:1.3;     margin: 0 auto; font-family:Georgia, serif;    
 }

h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}
label {font-size:18pt;color:darkgrey;}
</STYLE>
</head>';


echo'<body background="3.jpg" >
<h1 align="center">Database updation</h1>
<FIELDSET>
<FORM NAME="FORM1" METHOD="post" ACTION="facultyd.php" align="center">

<input type="TEXT" size="15" NAME="username" VALUE="" id="u1" placeholder="Set Password" style="font-size:13pt;font-family:Cosmic MS" required/>
<input type="password" size="15"  NAME="pa" VALUE="" id="u2"  placeholder="Confirm Password" style="font-size:13pt;font-family:Cosmic MS" required/><BR /><br/>

 <input type="text"  NAME="max" VALUE="" id="max"  placeholder="Max. attempts" style="font-size:13pt;font-family:Cosmic MS " required/><BR /><br/>
<input type="text"  NAME="marks" VALUE="" id="marks" placeholder="Maximum marks" style="font-size:13pt;font-family:Cosmic MS" required/><BR/> <br/>
 <input type="text"  NAME="dmarks" VALUE="" id="marks" placeholder="deduction marks" style="font-size:13pt;font-family:Cosmic MS " required/><BR/><br/>
<input type="text"  NAME="no_of_quest" VALUE="" id="marks" placeholder="No. of Questn" style="font-size:13pt;font-family:Cosmic MS " required/><BR/>';
echo'<LABEL><BR /><input  type="submit" NAME="Save" VALUE="Save"  />                 <input type="button" value="Home" name="Home" onclick="chk1();" />                 <input type="submit" value="Questions" name="quest" formaction="addquestions1.html" />                 </LABEL><br/> <BR/><input  type="submit" NAME="Save" VALUE="View Data"  formaction="getdetails.php"/></form>';
echo"</FIELDSET>



</body>
</html>";
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
<form action='http://msritlabexam.wc.lt/project/index.html' align='center'>
<input type='submit' value='Home' name='Home' />
</form>
<h3 align='middle'  >ERROR</h3></body>
</html>";
}
?>