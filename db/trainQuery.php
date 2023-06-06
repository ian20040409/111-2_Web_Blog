<?php
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<table class="table-primary">
			<tr>
				<th>修改</th>
				<th>删除</th>
				<th>#</th>
				<th>姓名</th>
				<th>電子郵件</th>
				<th>表單編號</th>

</tr>
		
		</table>
		</body>
<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");
$sql2="select * FROM train order by tid desc";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row3=$row2->fetch();

while ($row3 = $rs2->fetch()) {
    echo "<tr>";
    echo "<td><a href='trainmod.php?tid=$row3[tid]'>修改</a></td>";
    echo "<td><a href='traindel.php?tid=$row3[tid]'>刪除</a></td>";
    echo "<td class='table-primary'>" . $row3['tid'] . "</td>";
    echo "<td class='table-primary'>" . $row3['name'] . "</td>";
    echo "<td class='table-primary'>" . $row3['email'] . "</td>";
    echo "<td class='table-primary'>" . $row3['rcode'] . "</td>";
    echo "<td class='table-primary'>" . $row3['message'] . "</td>";
    echo "</tr>";
}

	
?>
</table>