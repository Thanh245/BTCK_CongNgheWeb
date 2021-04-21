<?php
$IDNV = $_REQUEST['IDNV'];
$link = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
//=============================================================================================
$sql = "DELETE FROM nhanvien where IDNV = '$IDNV' ";
if (mysqli_query($link,$sql)) echo "Xoa thanh cong";
else echo "Error".$link->error;
//Chuyen ve trang xoathongtinnv.php
echo'<br><a href="xoathongtinnv.php" ><Input type = "button" value = "Back"></a>';
mysqli_close($link);
?>