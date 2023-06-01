<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");
$sql2="select * FROM train order by tid desc";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row3=$row2->fetch();

$rcode = $_POST['rcode'];
// 执行查询操作
$stmt = $pdo->prepare("SELECT * FROM feedback WHERE rcode = :rcode");
$stmt->bindParam(':rcode', $rcode);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    // 根据需要显示或处理查询到的数据
    // $result 包含查询到的表单数据
} else {
    // 显示未找到表单的错误消息或执行相应的处理
}
?>