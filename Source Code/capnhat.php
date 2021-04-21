<?php
session_start();
//Ket noi CSDL
$link = mysqli_connect("localhost","root","") or die ("Could not connect: ".mysqli_error());
//Chon CSDL de lam viec
$db_selected = mysqli_select_db($link,"dulieu");
$sql="select * from phongban";
$rs = mysqli_query($link,$sql);
//===================================================
echo '<Form action = "xulycapcapnhat.php">';
echo '<table border = "1" width = "100%">';
echo '<caption> Thông tin phòng ban </caption>';
echo '<tr>
        <th>Mã Phòng Ban</th>
        <th>Tên Phòng Ban</th>
        <th>Mô Tả</th>
        <th>Cập Nhật</th>
      </tr>';
while ($row = mysqli_fetch_array($rs))
{
	echo '<tr>
			<td>'.$row['IDPB'].'</td>
			<td>'.$row['Tenpb'].'</td>
			<td>'.$row['Mota'].'</td>
			<td align = "center"><a href = "form_capnhat_pb.php?IDPB='.$row['IDPB'].'">Cập nhật</a></td>
		  </tr>';
}
echo '</TABLE>';
echo '<br><a href="admin.html" ><Input type = "button" value = "Back"></a>';
mysqli_free_result($rs);
mysqli_close($link);
?>
