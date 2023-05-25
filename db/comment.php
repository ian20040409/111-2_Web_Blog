<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

try {
    $sql = "INSERT INTO comment (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    $result = $stmt->execute();

    if ($result === false) {
        $msg = "更新失败。<br>\n";
    } else {
        $msg = "更新成功。<br>\n";
    }

    echo $msg;
} catch (PDOException $e) {
    
    echo "⚠️錯誤：" . $e->getMessage();
}

echo "👤 ID：" . $name . "<br>";
echo "💬 留言内容：" . $message . "<br>";

?>