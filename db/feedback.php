<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

// 檢查是否已經提交過表單
if (isset($_COOKIE['form_submitted'])) {
    // 表單已經提交過，執行相應的處理（例如顯示錯誤訊息）
    echo "您已經提交過表單，請勿重複提交。";
    // 可以進行重導向或顯示相應的錯誤訊息等
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

try {
    // 處理表單提交
    // ...

    // 表單處理完畢，將設置一個 cookie 來標記表單已提交
    setcookie('form_submitted', '1', time() + 3600); // 在此示例中，cookie 有效期設定為 1 小時

    // 可以進行重導向或顯示成功訊息等
    header("Location: feedbackok.php"); // 將用戶重導向到成功頁面
    exit;
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>\n";
}
?>
