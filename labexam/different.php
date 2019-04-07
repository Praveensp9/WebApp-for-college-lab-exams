<?PHP
$user='';
$pass='';
$f=0;
$user=$_POST['username'];
$pass=$_POST['pa'];
$con=mysql_connect("localhost","root","");
mysql_select_db("exam",$con);
 
$result1=mysql_query("select username,password from faculty_data");
	                
				while($db_field=mysql_fetch_array($result1)) {
              		
         			$user=$db_field['username'];
                	$pass=$db_field['password'];
                    
					
                 if($username==$user && $password==$pass)
				 {
				 echo "<html><body><a href='code.php'>$user</a><br/></body></html>";
				 }
				 }
?>