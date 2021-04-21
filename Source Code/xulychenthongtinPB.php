<?php
$IDPB   = $_POST['txtIDPB'];
$Tenpb  = $_POST['txtTenpb'];
$Mota   = $_POST['txtMota'];
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
//=============================================================================================
$sql = "INSERT INTO phongban (`IDPB`, `Tenpb`, `Mota`) 
VALUES ('$IDPB', '$Tenpb', '$Mota')";
$rs = mysqli_query($link,$sql);
//Chuyen ve trang hien thi thong tin nhan vien
header("Location:xemthongtinpb2.php");
mysqli_free_result($rs);
mysqli_close($link);
?>
