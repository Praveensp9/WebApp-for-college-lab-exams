<script type="text/javascript">
function countDown(secs,elem)
{
   var ele=document.getElementById(elem);
   element.innerHTML="You Have "+secs+"seconds left";
   if(secs<1)
   {
     clearTimeout(timer);
	 element.innerHtml='<h2>Your Time Over:</h2>'
	 element.innerHTML+='<form action=update.php><input type='sumbit' value='click here'></form>'; 
    }
	secs--;
	var timer= setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>
<div id="status"></div>
<script type="text/javascript">countDown(10,"status");
</script>