<?php
ini_set('display_errors','on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once("conn.php");
$tid=$_GET['tid'];

try{
    $sql = "delete from train where tid=" .$tid;
	//echo $sql."<br>\n";
	$msg='';

	$result =$connect->exec($sql);
	if($result === false){
		$msg="success delete. <br>\n";
	} 
	else{
		$msg="fail delete. <br>\n";
	}
	if($msg != '') echo $msg;
}catch(PDOException $e){
    echo $e->getMessage() . "<br>\n";
}

?>