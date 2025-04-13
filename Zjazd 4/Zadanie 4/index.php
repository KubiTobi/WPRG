<?php
$dozwoloneIP = file('dozwolone_ip.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$twojeIP = $_SERVER['REMOTE_ADDR'];

if (in_array($twojeIP, $dozwoloneIP)) {
    include 'specjalna_strona.php';
} else {
    include 'zwykla_strona.php';
}
?>
