<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chen thong tin nhan vien</title>
	<script language="JavaScript">
        function kiemTra()
        {
        	if((document.them.txtIDNV.value=="")||(document.them.txtHoten.value=="")||(document.them.txtIDPB.value=="")||(document.them.txtDiaChi.value==""))
        		{
        			alert("Bạn phải nhập đầy đủ thông tin! ");
        			document.them.action='chenthongtinNV.php';
        		}
        }
        function reset()
        {
        	document.them.txtIDNV.value=="";
        	document.them.txtHoten.value=="";
        	document.them.txtIDPB.value=="";
        	document.them.txtDiaChi.value=="";
        }
     </script>
</head>
<body>
	<form action = "xulychenthongtinNV.php" method = "post" name = "them">
		<table border="0" style="width: 400px" align="center">
			<tr>
				<td>IDNV</td>
				<td><input type="text" size = "20" name="txtIDNV"></td>
			</tr>
			<tr>
				<td>Hoten</td>
				<td><input type="text" size = "20" name="txtHoten"></td>
			</tr>
			<tr>
				<td>IDPB</td>
				<td><input type="text" size = "20" name="txtIDPB"></td>
			</tr>
			<tr>
				<td>DiaChi</td>
				<td><input type="text" size = "20" name="txtDiaChi"></td>
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