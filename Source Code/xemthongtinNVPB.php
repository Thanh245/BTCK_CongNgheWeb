<?php
session_start();
//Lay ma phong ban tu trang xemthongtinpnb.php
$mapb = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_error());
$db_selected = mysqli_select_db($link,"dulieu");
if($mapb == "")
{
	$rs = mysqli_query($link,"select * from nhanvien");
}
else
	$rs = mysqli_query($link,"select * from nhanvien where IDPB = '$mapb'");
echo '<table border ="1" width = "100%">';
echo '<caption> Du lieu bang Nhan vien</caption>';
//Tieu de bang chua du lieu khi hien thi tren web
echo  '<tr>
        <th>IDNV</th>
        <th>Ho Ten</th>
        <th>IDPB</th>
        <th>Dia Chi</th>
      </tr>';
//hien thi tung hang
while($row = mysqli_fetch_array($rs))
{
	echo '<tr>
		<td>'.$row['IDNV'].'</td>
		<td>'.$row['Hoten'].'</td>
		<td>'.$row['IDPB'].'</td>
		<td>'.$row['DiaChi'].'</td>
	     </tr>';
}
echo '</table>';
echo '<br><a href="xemthongtinpb.php" ><Input type = "button" value = "Back"></a>';
//Giai phong cac tap ban ghi trong $rs
mysqli_free_result($rs);
mysqli_close($link);
?>