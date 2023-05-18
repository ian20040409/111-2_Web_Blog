<?php
include_once("conn.php");
$tid=$_GET['tid'];
$ddate=$_GET['ddate'];

ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");
$sql2="select * FROM train order by tid desc";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row3=$row2->fetch();
?>
<head>

</head>


<form method="post" action="trainbook.php" onsubmit="return validateForm()">
<input type="hidden" name="tid" value="<?php echo $tid; ?>">
<table class="table-primary">
<tr>
				
				<th>出發站</th>
				<th>抵達站</th>
				<th>乘車日期</th>
				<th>車次</th>
				<th>日期</th>
</tr>
</table>
</form>



<?php
while($row3=$rs2->fetch()){
/*
	echo "<td class='table-primary'>"$row3['depart'];
	echo "<td class='table-primary'>"$row3['arrive'];
	echo "<td class='table-primary'>"$row3['ddate'];
	echo "<td class='table-primary'>"$row3['trainNo'];

	echo "</td>";
    echo  "</tr>";
*/
}
	
?>
</table>