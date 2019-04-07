<?php
$sl=$_POST['id'];
$q=$_POST['quest'];
$con=mysql_connect("localhost","root","");
mysql_select_db("exam",$con);
mysql_query("update questions set questn=$q where sl_no=$sl ;")or die("error");
echo'<html><body bgcolor="lightgrey"><h1 align="center">Question successfully added</h1>
<form action="" align="center">
<input type="submit" value="Add" formaction="addquestions1.html" name="Add" />
<input type="submit" value="Home" name="Home" formaction="login.php" />
</form>';
?>