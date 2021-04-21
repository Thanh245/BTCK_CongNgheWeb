<?php
$tenpb = $_REQUEST['txtTenpb'];
$mota  = $_REQUEST['txtMota'];
$myID  = $_REQUEST['IDPB'];
$bienketnoi = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($bienketnoi,"dulieu");
//=============================================================================================
$sql = "update phongban set Tenpb = '$tenpb', Mota = '$mota' where IDPB = '$myID' ";
$rs = mysqli_query($bienketnoi,$sql);
//Chuyen ve trang hien thi danh sach phong ban
header("Location:capnhat.php");
mysqli_free_result($rs);
mysqli_close($bienketnoi);
?>

