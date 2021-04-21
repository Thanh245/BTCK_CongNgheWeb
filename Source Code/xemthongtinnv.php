<?php
session_start();
//Ket noi CSDL
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
//Chon CSDL de lam viec
mysqli_select_db($link,"dulieu");
$sql="select * from nhanvien";
$rs = mysqli_query($link,$sql);
echo '<table border = "1" width = "100%">';
echo '<caption> Du lieu bang Nhan vien </caption>';
//tieu de cua bang chua du lieu khi hien thi tren web
echo '<tr>
        <th>IDNV</th>
        <th>Ho Ten</th>
        <th>IDPB</th>
        <th>Dia chi</th>
     </tr>';
//Hien thi tung bang
while ($row = mysqli_fetch_array($rs)) 
{
	echo'<tr>
	   <td>'.$row['IDNV'].'</td>
	   <td>'.$row["Hoten"].'</td>
	   <td>'.$row['IDPB'].'</td>
	   <td>'.$row['DiaChi'].'</td>
	     </tr>';
}
echo '</TABLE>';
mysqli_free_result($rs);
mysqli_close($link);
?>