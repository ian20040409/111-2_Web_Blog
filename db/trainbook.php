<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

$uid2 = $_POST['uid'];
$depart2 = $_POST['depart'];
$arrive2 = $_POST['arrive'];
$ddate2 = $_POST['ddate'];
$trainNo2 = $_POST['trainNo'];
$mydate2 = date('Y-m-d H:i:s');

try {
    $sql = "INSERT INTO train (uid, depart, arrive, ddate, trainNo, otime) VALUES ('$uid2', '$depart2', '$arrive2', '$ddate2', '$trainNo2', '$mydate2')";
    
    echo $sql . "<br>\n";

    $result = $connect->exec($sql);

    if ($result === false) {
        $msg = "fail update. <br>\n";
    } else {
        $msg = "success update. <br>\n";
    }

    echo $msg;
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>\n";
}
?>
