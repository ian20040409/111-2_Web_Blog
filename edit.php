<html lang="zh-TW">
	<head>
		<title>💬 意見回饋</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
<?php
include_once("db/conn.php");

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rcode = $_POST['rcode'];
    $message = $_POST['message'];

    // Update the record in the database
    $sql = "UPDATE feedback SET name = '$name', email = '$email', rcode = '$rcode', message = '$message' WHERE id = $id";
    $result = $connect->exec($sql);

    if ($result === false) {
        echo "Failed to update the record.";
    } else {
        echo "Record updated successfully.";
    }
} else {
    // Retrieve the existing record from the database
    $sql = "SELECT * FROM feedback WHERE id = $id";
    $result = $connect->query($sql);

    if ($result->rowCount() > 0) {
        $row = $result->fetch();
        $name = $row['name'];
        $email = $row['email'];
        $rcode = $row['rcode'];
        $message = $row['message'];
        ?>
        <!-- Display the edit form with pre-filled values -->
        <form method="post" action="">
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="email" name="email" value="<?php echo $email; ?>">
            <input type="text" name="rcode" value="<?php echo $rcode; ?>">
            <textarea name="message"><?php echo $message; ?></textarea>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php
    } else {
        echo "Record not found.";
    }
}
?>
