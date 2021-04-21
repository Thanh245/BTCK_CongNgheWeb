<?php
session_start();
//Ket noi CSDL
$link = mysqli_connect("localhost","root","") or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
$rs = mysqli_query($link,"select * from nhanvien");
//===================================================
echo '<Form action = "xulyxoatatca.php">';
//echo'<form action="./xulixoatatca.php" method="post">';
echo '<table border = "1" width = "100%">';
echo '<caption>Xoa Nhan Vien </caption>';
echo '<tr>
        <th> IDNV</th>
        <th> Họ Tên </th>
        <th> IDPB </th>
        <th> Địa Chỉ </th>
        <th> Xóa </th>
        <th> <input type="submit" value="Xoá tất cả"></th>
      </tr>';
while ($row = mysqli_fetch_array($rs))
{
	echo '<tr>
			<td>'.$row['IDNV'].'</td>
			<td>'.$row['Hoten'].'</td>
			<td>'.$row['IDPB'].'</td>
			<td>'.$row['DiaChi'].'</td>
			<td align = "center"><a href = "xulyxoathongtinNV.php?IDNV='.$row['IDNV'].'">xxx</a></td>
			<th><input type = "checkbox" name = "delete[]" value = '.$row['IDNV'].'></th>
		  </tr>';
}
echo '</TABLE>';
echo'<br><a href="admin.html" ><Input type = "button" value = "Back"></a>';
mysqli_free_result($rs);
mysqli_close($link);
?>

