
<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include_once("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$rcode = $_POST['rcode'];
$message = $_POST['message'];

try {
    $sql = "INSERT INTO feedback (name, email, rcode, message) VALUES ('$name', '$email', '$rcode', '$message')";
    
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



// 檢查是否已經提交過表單
/*
if (isset($_COOKIE['form_submitted'])) {
    // 表單已經提交過，執行相應的處理（例如顯示錯誤訊息）
    echo "您已經提交過表單，請勿重複提交。";
    // 可以進行重導向或顯示相應的錯誤訊息等
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$rcode=$_POST['rcode'];
try {
    $sql = "INSERT INTO feedback (name, email, message, rcode) VALUES ('$name', '$email', '$message', '$rcode')";

    // 可以進行重導向或顯示成功訊息等
    header("Location: feedbackok.php"); // 將用戶重導向到成功頁面
    exit;
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>\n";
}*/
?>
