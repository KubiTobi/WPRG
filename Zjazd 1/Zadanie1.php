<?php
// Tablica z nazwami owoców
$owoce = ["jablko", "banan", "pomarancza", "gruszka", "winogrono"];

// Iteracja po każdym elemencie w tablicy
foreach ($owoce as $owoc) {
    // Odwracanie ciągu znaków ręcznie
    $odwrocony = "";
    for ($i = strlen($owoc) - 1; $i >= 0; $i--) {
        $odwrocony .= $owoc[$i];
    }

    // Sprawdzanie, czy owoc zaczyna się na literę "p"
    $czyZaczynaSieNaP = ($owoc[0] === 'p') ? "TAK" : "NIE";

    // Wyświetlanie wyniku
    echo "Owoce od tyłu: " . $odwrocony . " | Czy zaczyna się na 'p': " . $czyZaczynaSieNaP . PHP_EOL;
}