<?php
$IDNV   = $_POST['txtIDNV'];
$HoTen  = $_POST['txtHoten'];
$IDPB   = $_POST['txtIDPB'];
$DiaChi = $_POST['txtDiaChi'];
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
//=============================================================================================
$sql = "INSERT INTO nhanvien (`IDNV`, `Hoten`, `IDPB`, `Diachi`) 
VALUES ('$IDNV', '$HoTen', '$IDPB', '$DiaChi')";
$rs = mysqli_query($link,$sql);
//Chuyen ve trang hien thi thong tin nhan vien
header("Location:xemthongtinnv2.php");
mysqli_free_result($rs);
mysqli_close($link);
?>
