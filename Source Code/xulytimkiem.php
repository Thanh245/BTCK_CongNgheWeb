<?php
$manv = $_REQUEST['txtmanv'];
$hoten = $_REQUEST['txthoten'];
if($manv==""||$hoten=="")
{
	header("Location:timkiem.php");
} 
else
{
	//Ket noi CSDL
	$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysqli_rror());
	//Chon CSDL de lam viec
	$db_selected = mysqli_select_db($link,"dulieu");
	$rs = mysqli_query($link,"select * from nhanvien where IDNV = '$manv' and Hoten = '$hoten'");
	if (mysqli_num_rows($rs)==0) header("Location:timkiem.php");
	else 
	{
		//Tao bang in so lieu
		echo '<table border = "1" width = "100%">';
		echo '<caption> Dữ liệu bảng nhân viên</caption>';
		//tieu de cua bang chua du lieu khi hien thi tren web
		echo '<tr>
		   <th>Ma Nhan Vien </th>
		   <th>Ho Ten</th>
		   <th>Ma Phong Ban</th>
		   <th>Dia chi</th>
		      </tr>';
		//Hien thi tung hang bang ghi
		while ($row = mysqli_fetch_array($rs)) 
		{
			echo '<tr>
			   <td>'.$row['IDNV'].'</td>
			   <td>'.$row['Hoten'].'</td>
			   <td>'.$row['IDPB'].'</td>
			   <td>'.$row['DiaChi'].'</td>
			     </tr>';
		}
		echo '</table>';
		echo '<br><a href="timkiem.php" ><Input type = "button" value = "Back"></a>';
		//Giai phong cac tap ban ghi trong $rs
		mysqli_free_result($rs);
		mysqli_close($link);
	}
}
?>