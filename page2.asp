<%@ Language=VBScript %>
<html>
<head>
</head>
<body>
<%
Response.Write("First Name: " & Request.Form("txtFirstName") & "<br>")
Response.Write("Last Name: " & Request.Form("txtLastName") & "<br>")
%>
</body>
</html>
