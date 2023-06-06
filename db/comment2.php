<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 檢查是否已設定表單提交的 session 變數
if (isset($_SESSION['comment2_submitted'])) {
    echo "⚠️ 錯誤：您已經提交過表單，請勿重複提交。";
    exit;
}

try {
    $sql = "INSERT INTO comment2 (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    $result = $stmt->execute();

    if ($result === false) {
        $msg = "更新失敗。<br>\n";
    } else {
        $msg = "更新成功。<br>\n";
    }

    echo $msg;
} catch (PDOException $e) {
    echo "⚠️ 錯誤：" . $e->getMessage();
}

echo "👤 顯示名稱：" . $name . "<br>";
echo "💬 留言內容：" . $message . "<br>";

// 設定一個 session 變數來標記表單已提交
$_SESSION['comment2_submitted'] = true;

?>
