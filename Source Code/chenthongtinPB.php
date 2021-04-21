<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chen thong tin phong ban</title>
	<script language="JavaScript">
        function kiemTra()
        {
        	if((document.them.txtIDPB.value=="")||(document.them.txtTenpb.value=="")||(document.them.txtMota.value==""))
        	{
        		alert("Bạn phải nhập đầy đủ thông tin! ");
        		document.them.action='chenthongtinPB.php';
        	}	
        }
        function reset()
        {
        	document.them.txtIDPB.value=="";
        	document.them.txtTenpb.value=="";
        	document.them.txtMota.value=="";
        }
     </script>
</head>
<body>
	<form action = "xulychenthongtinPB.php" method = "post" name = "them">
		<table border="0" style="width: 400px" align="center">
			<tr>
				<td>IDPB</td>
				<td><input type="text" size = "20" name="txtIDPB"></td>
			</tr>
			<tr>
				<td>Tenpb</td>
				<td><input type="text" size = "20" name="txtTenpb"></td>
			</tr>
			<tr>
				<td>Mota</td>
				<td><input type="text" size = "20" name="txtMota"></td>
			</tr>
			<tr align = "center">
				<td colspan = "3"> 
					<input type = "Submit" value = "Thêm"  onclick="kiemTra()">
					<input type = "Button" value = "Reset" onclick="reset()">
					<a href="admin.html" ><input type = "Button" value = "Cacel"></a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>