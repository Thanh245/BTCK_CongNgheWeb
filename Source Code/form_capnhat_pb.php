<?php
$myID = $_REQUEST['IDPB'];
$bienketnoi = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($bienketnoi,"dulieu");
//Dung cau lenh Select de lay du lieu
$rs = mysqli_query($bienketnoi,"select * from phongban where IDPB='$myID'");
$row = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form cap nhat thong tin phong ban</title>
</head>
<body>
	<form action = "xulycapnhat.php?IDPB=<?php echo $row['IDPB'];?>" method = "post">
		<table width = "100%" border="0">
			<caption>FORM CAP NHAT</caption>
			<tr>
				<td>IDPB : </td>
				<td>
					<?php 
						echo "$myID" ; 
						session_start();
						$_REQUEST['IDPB']=$myID;
					?>
				</td>
			</tr>	
			<tr>
				<td>Ten phong ban</td>
				<td><input type="text" size = "20" name="txtTenpb" value="<?php echo $row['Tenpb'];?>"></td>
			</tr>
			<tr>
				<td>Mo ta: </td>
				<td><input type="text" size = "20" name="txtMota"  value="<?php echo $row['Mota'];?>">
				</td>
			</tr>
			<tr align = "center">
				<td colspan = "2"> 
					<input type = "Submit" value = "Cập nhật">
					<input type = "Reset"  value = "Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>