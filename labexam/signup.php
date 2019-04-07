<?PHP
$user='';
$pass='';
$username=$_POST['username'];
$password=$_POST['pa'];

include('connection.php');

mysqli_query($con,"insert into faculty_data(username,password) values('$username','$password')")or die('Error');
echo "<html>
<head>
<script>
function chk()
{
window.location.href='index.html';
}
</script>
<body onload='chk();'></body></html>";

?>