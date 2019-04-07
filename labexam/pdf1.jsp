<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Export to Excel - Demo</title>
<script src="scripts.js"></script>
<script language="javascript"> 
function exportToExcel()
{

    $("#datatoexport").val($("#customers").html()); 
    $('#myForm').submit();      
}
</script>
</head>
<body>
  <form id="myForm" action="Sample" method="post">
  <div id="customers">
    <table id="exportTableSelector" align="left" border="2">
        <thead>
            <tr bgcolor="lightgreen">
                <th>Sr. No.</th>
                <th>Text Data</th>
                <th>Number Data</th>
            </tr>
        </thead>
        <tbody>
            <%
                for (int i = 0; i < 10; i++) {
            %>
            <tr bgcolor="lightblue">
                <td align="center"><%=i + 1%></td>
                <td align="center">This is text data <%=i%></td>
                <td align="center"><%=i * i%></td>
            </tr>
            <%
                }
            %>
        </tbody>
    </table>
    </div>
    <br><br>
    <p>
    some text
    </p>

    <textarea name="datatoexport" id="datatoexport"></textarea>


    <a href="" onclick="exportToExcel();" target="_blank">Export to Excel</a>
   </form>
</body>
</html>