<html>
<head>

<title> login </title>
<script language="javascript">
function chk()
{
var k;
k=document.getElementById("u1").value;
var p=k.search(/^[1-4][A-Z]{2}\d{2}[A-Z]{2}\d{3}$/);
if(p !=0  )
alert(" enter valid USN in caps");
}
</script>
<STYLE TYPE="TEXT/CSS">
fieldset {
  font-size:14px;    padding:3px;    width:500px;   line-height:1.3;     margin: 0 auto; font-family:Georgia, serif;    
 }
h1 {font-size:30pt;color:orange;}
h2 {font-size:30pt;color:green;}

label {font-size:16pt;color:darkgrey; font-family:Palatino Linotype, Book Antiqua, Palatino, serif;}
</STYLE>
</head>


<body  background="1.jpg" align="center">

<FORM NAME="FORM1" METHOD="POST" ACTION="code.php" align='center' >

<FIELDSET style="width:600px" align="center">
<LEGEND > <h1 fg="blue">Student Login</h1></LEGEND>

<LABEL>USER NAME&nbsp&nbsp&nbsp:<input type="text"  NAME='u1' VALUE='' id="u1" onblur="chk();"/></LABEL><br/>
<LABEL>Faculty NAME:<input type="text"  NAME='u4' VALUE='' id="u4"/></LABEL><br/>
<LABEL>PASSWORD&nbsp&nbsp&nbsp&nbsp:<input type="password"  NAME="pa" VALUE='' /></LABEL><BR />
<LABEL><BR /><input  type="SUBMIT" NAME='submit' VALUE='LOGIN' /></LABEL>

</FIELDSET>
</FORM>


<FORM NAME="FORM1" METHOD="post" ACTION="faculty.php" align='center' >
<FIELDSET style="width:600px" align="center">
<LEGEND> <h1 fg="blue">Faculty Login</h1></LEGEND>
<LABEL >USER NAME:<input type="text"  NAME="username" VALUE='' id="u1" /></LABEL><BR />
<LABEL>PASSWORD&nbsp:<input type="password"  NAME="pa" VALUE='' /></LABEL><BR 
<LABEL><BR /><input  type="SUBMIT" NAME='submit' VALUE='LOGIN' /></LABEL>
<LABEL> <input  type="SUBMIT" NAME='submit' VALUE='SIGN UP'formaction="signup.html" /></LABEL>
</FIELDSET>
</FORM>

</body>
</html>