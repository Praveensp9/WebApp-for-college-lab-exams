<?php 

include('connection.php');

mysqli_query($con,"select * from questions;")or die("ERROR");
echo"<html><body><table border='border' align='center' cellspacing='5' cellpadding='10'><tr valign='center'><th>Sl_no.</th><th>Questions</th></tr>";
                 while($db_field=mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['sl_no'];
                	$pass=$db_field['questn'];
					echo"<tr><td>$user</td><td>$pass</td></tr>";
					}
					echo"</table>";
				echo'<form align="center" ><label>Choose:<input type=submit name="choose" target="descriptor" /></body></html>';
				?>