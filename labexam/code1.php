<html>
    <head>
        <title>Test</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript">
        function codeAddress() {
            alert(window.location.href ='confirm.php');
        }

        </script>
    </head>
    <body onload="codeAddress();">

    </body>
</html>
<html>
<head>
<script type = "text/javascript" >
    history.pushState(null, null, 'code1.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'code1.php');
    });
</script>

</head>
</html>
<?php 
session_start();
$faculty=$_SESSION['faculty'];
include('connection.php');
$p=mysqli_query($con,"select no_of_questions from faculty_data where username='$faculty';")or die("error");
  while($db_field=mysqli_fetch_array($p,MYSQLI_ASSOC)) {
              		
         			$user=$db_field['no_of_questions'];
                	
					
					$k=rand(1,"$user");
	$_SESSION['choice']=$k;
	
	
					echo"<html><head> <style>

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            display: table;
        }

        .my-block {
		    font-size:150pt;
			color:#99FFFF;
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
	
		
        </style></head><body background='6.jpg'><div class='my-block'>$k</div>
					</body></html>";
				
                    }   
mysqli_close($con)or die("djhjfhg");

?>