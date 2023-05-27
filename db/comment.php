<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 檢查是否已設定表單提交的 cookie
if (isset($_COOKIE['form_submitted'])) {
    echo "⚠️ 錯誤：您已經提交過表單，請勿重複提交。";
    exit;
}

try {
    $sql = "INSERT INTO comment (name, email, message) VALUES (:name, :email, :message)";
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

echo "👤 顯示名子稱：" . $name . "<br>";
echo "💬 留言內容：" . $message . "<br>";

// 設定一個 cookie 來標記表單已提交
setcookie('form_submitted', '1', time() + 3600); // 在此示例中，cookie 有效期設定為 1 小時

?>
