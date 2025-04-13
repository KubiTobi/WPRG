<?php
$plik = "linki.txt";

if (file_exists($plik)) {
    $linie = file($plik, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "<ul>";
    foreach ($linie as $linia) {
        list($adres, $opis) = explode(";", $linia, 2);
        echo "<li><a href=\"$adres\" target=\"_blank\">$opis</a></li>";
    }
    echo "</ul>";
} else {
    echo "Plik z linkami nie istnieje.";
}
?>
