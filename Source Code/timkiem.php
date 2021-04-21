<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TimKiem</title>
	<script language="JavaScript">
        function kiemTra()
        {
          if(document.timkiem.txtmanv.value=="") alert("Bạn phải nhập mã nhân viên! ");
          if(document.timkiem.txthoten.value=="")alert("Bạn phải nhập tên nhân viên!");
        }
     </script>
</head>
<body>
	<form name = "timkiem" action = "xulytimkiem.php" method = "post">
		<table border="0" style="width: 400px" align="center">
			<tr> <h1 style="text-align: center">Tìm kiếm</h1> </tr>
			<tr>
				<td> Ma nha vien </td>
				<td><input type ="text" size = "20" name = "txtmanv"></td>
			</tr>
			<tr>
				<td> Ho ten </td>
				<td><input type="text" size = "20" name="txthoten"></td>
			</tr>
			<tr align="center">
				<td colspan="3">
					<input type="Submit" value = "OK"    onclick="kiemTra()">
					<input type="Reset"  value = "Reset" >
					<input type="Button" value = "Cancel">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>