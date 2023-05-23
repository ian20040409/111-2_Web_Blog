<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


try {
    $sql = "INSERT INTO comment (name, email, message) VALUES ('$name', '$email', '$message')";
    
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
