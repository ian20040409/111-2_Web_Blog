<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");
/*
try{
    $sql = "selcect visit set visitor=visitor+1 where vid=2";
	//echo $sql."<br>\n";
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="fail update. <br>\n";
	} 
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}
*/
$sql2="select * FROM train";
$connect->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$rs2=$connect->query($sql2);
$rs2->setFetchMode(PDO::FETCH_BOTH);
//$row3=$row2->fetch();
while($row3=$rs2->fetch()){
    echo  $row3['tid']."&nbsp;&nbsp;<br>";
    echo  $row3['uid']."<br>";
    echo  $row3['ddate']."<br>";

}
	
?>