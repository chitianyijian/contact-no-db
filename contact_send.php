<?php
$name = htmlspecialchars($_POST['name']);    
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$body = "名前: $name\nメール: $email\nメッセージ:\n$message";
file_put_contents("messages.txt", $body . "\n\n", FILE_APPEND); // 簡易保存

echo "お問い合わせありがとうございます。";
?>

