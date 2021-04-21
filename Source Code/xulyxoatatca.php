<?php
$xoa = $_REQUEST['delete'];
$link = mysqli_connect('localhost','root','') or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
//=============================================================================================
if (isset($xoa))
{
	foreach($xoa as $item)
	{
		$sql = "DELETE FROM nhanvien where IDNV = '$item' ";
		if (mysqli_query($link,$sql)) echo "Xoa thanh cong nhan vien so ".$item."<br>";
		else echo "Error".$link->error."<br>";
	}
}
echo'<br><a href="xoathongtinnv.php" ><Input type = "button" value = "Back"></a>';
mysqli_close($link);
?>