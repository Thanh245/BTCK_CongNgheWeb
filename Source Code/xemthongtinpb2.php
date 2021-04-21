<?php
session_start();
$link = mysqli_connect('localhost','root','') or die ('Could not connect: '.mysql_error());
mysqli_select_db($link,"dulieu");
$sql="select * from phongban";
$rs = mysqli_query($link,$sql);
echo '<table border = "1" width = "100%">';
echo '<caption> Du lieu bang Phong Ban</caption>';
//tieu de cua bang chua du lieu khi hien thi tren web
echo  '<tr>
   <th>IDPB</th>
   <th>Ten PB</th>
   <th>Mo Ta</th>
   <th>Tim Kiem</th>
      </tr>';
//Hien thi tung bang
while ($row = mysqli_fetch_array($rs)) 
{
	echo  '<tr>
	   <td>'.$row['IDPB'].'</td>
	   <td>'.$row["Tenpb"].'</td>
	   <td>'.$row['Mota'].'</td>
	   <td align = "center"><a href = "xemthongtinNVPB.php?IDPB='.$row['IDPB'].'">xxx</a></td>
	      </tr>';
}
echo '</TABLE>';
echo '<br><a href="chenthongtinpb.php" ><Input type = "button" value = "Back"></a>';
mysqli_free_result($rs);
mysqli_close($link);
?>