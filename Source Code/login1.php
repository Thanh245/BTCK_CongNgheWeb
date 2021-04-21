<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script language="JavaScript">
        function kiemTra()
        {
          if(document.login.username.value=="")alert("Ban phai nhap Username ");
          if(document.login.password.value=="")alert("Ban phai nhap Password");
        }
    </script>
</head>
<body>
	<form name = "login" action = "xulylogin1.php" method = "post">
		<table border="0" style="width: 400px" align="center">
			<caption><h2>Dang nhap chuong trinh</h2></caption>
			<tr>
				<td> Username: </td>
				<td><input type ="text" size = "20" name = "username"></td>
			<tr>
				<td> Password: </td>
				<td><input type = "Password" size = "20" name = "password"></td>
			</tr>
			<tr align="center">
				<td colspan = '3'>
					<input type = "Submit" name = "m_submit"value = "Submit" onclick="kiemTra()">
					<input type = "Reset"  name = "m_reset" value = "Reset">
					<input type = "button" name = "m_exit"  value = "Exit">
				</td>
			</tr>
		</table>
	</form>	
</body>