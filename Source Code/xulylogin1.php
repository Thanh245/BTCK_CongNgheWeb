<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password = md5($password);
if($username==""|| $password=="")
{
	header("Location:login1.php");
}
else
{
	//Ket noi CSDL
	$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_rror());
	//Chon CSDL de lam viec
	$db_selected = mysqli_select_db($link,"dulieu");
	//Lay tat ca cac ban ghi trong bang admin
	$rs = mysqli_query($link,"select * from admin where username = '$username' and password = '$password'");
	//Kiem tra co ban ghi tra ve khong
	if(mysqli_num_rows($rs)==0)
	{
		header("Location:login 1.php");
	}
	else
	{
		header("Location:admin.html");
	}
	//Giai phong tat ca cac ban ghi trong $rs
	mysqli_free_result($rs);
	mysqli_close($link);
}
?>