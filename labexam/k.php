<?PHP
$user='';
$pass='';
$f=0;
$username=$_POST['username'];
$password=$_POST['pa'];
$con=mysql_connect("localhost","root","");
mysql_select_db("exam",$con);
 
$result1=mysql_query("select username,password from faculty_data");
	                
				while($db_field=mysql_fetch_array($result1)) {
              		
         			$user=$db_field['username'];
                	$pass=$db_field['password'];
                    
					
                 if($username==$user && $password==$pass)
				 {
				 $f=1;
				 }
				 }
				
if($f==1)
{


<html>
<head>
<title> login </title>
<script language="javascript">


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

h1 {font-size:30pt;color:red;}
h2 {font-size:30pt;color:green;}
label {font-size:20pt;color:blue;}
</STYLE>
</head>


<body bgcolor="lightgrey" >
<h1 align="center">Database updation</h1>

<FORM NAME="FORM1" METHOD="post" ACTION="facultydata.php" align="center" >
<FIELDSET>
<LABEL >Set Password:<input type="password"  NAME="username" VALUE="" id="u1" /></LABEL><BR />
<LABEL>Confirm Password:<input type="password"  NAME="pa" VALUE="" id="u2" /></LABEL><BR />
<LABEL >Max. attempts:<input type="text"  NAME="max" VALUE="" id="max" /></LABEL><BR />
<LABEL>Maximum marks:<input type="text"  NAME="marks" VALUE="" id="marks" /></LABEL><BR/> 
<LABEL>deduction marks:<input type="text"  NAME="marks" VALUE="" id="marks" /></LABEL><BR/>
<LABEL><BR /><input  type="SUBMIT" NAME="submit" VALUE="LOGIN" /><input type="submit" value="Home" name="Home" onclick="FORM1.action='login.php';return true;" /></LABEL> </form>



</FIELDSET>



</body>
</html>
}

if($f==0)
{

echo"<html>
<body>
<h1>Permission denied</h1>
<h2>Make sure that you enter correct id and password</h2>
<form action='login.php'>
<input type='submit' value='Home' name='Home' />
</form></body>
</html>";
}
?>

