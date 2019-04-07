
<?PHP


$username1=$_POST['username'];
				
				
				
$con=mysql_connect("localhost","root","");
mysql_select_db("exam",$con);
$p=mysql_query("select no_of_questions from faculty_data where username='user';")or die("error");
  while($db_field=mysql_fetch_array($p)) {
              		
         			$user=$db_field['no_of_questions'];
                	
					
					$k=rand(1,4);
					echo"$k";
					echo"<html><head><script language='javascript'>
function chk()
{
document.write('<h1>$k</h1><form action=''><input type='submit' value='Confirm' /><input type='submit' value='change of question' /></form>');
}</script></head><body bgcolor='lightgrey' color='blue'>";
$con=mysql_connect("localhost","root","");
mysql_select_db("exam",$con);

$result1=mysql_query("select * from questions;")or die("ERROR");
echo"<h1><marquee>Welcome </marquee><h1>";echo"<h1><table border='border' align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysql_fetch_array($result1)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td>$pass</td></tr>";
					}
					echo'</table><form align="center"><label>Choose:<input type="submit" name="choose" onclick="chk();" /></label></form></body></html>';
				
				
				?>

