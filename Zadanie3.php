<?php
function obliczFib($n)
{
    $ciag = []; // Tablica do przechowywania ciągu Fibonacciego

    // Dodaj pierwsze dwie liczby ciągu
    $ciag[0] = 0;
    if ($n > 1) {
        $ciag[1] = 1;
    }

    // Wyliczanie ciągu Fibonacciego
    for ($i = 2; $i < $n; $i++) {
        $ciag[$i] = $ciag[$i - 1] + $ciag[$i - 2];
    }

    return $ciag;
}

// Pobranie od użytkownika wartości N
echo "Podaj wartość N: ";
$N = intval(trim(fgets(STDIN))); // Wczytywanie i konwert na liczbę

if ($N < 1) {
    echo "N musi być liczbą większą lub równą 1.\n";
    exit;
}

// Wyliczenie ciągu Fibonacciego
$ciagFibonacciego = obliczFib($N);

// Wypisanie nieparzystych elementów tablicy
echo "Nieparzyste liczby w ciągu Fibonacciego:\n";
$linia = 1; // Licznik numerowania wierszy
foreach ($ciagFibonacciego as $liczba) {
    if ($liczba % 2 !== 0) { // Sprawdzenie, czy liczba jest nieparzysta
        echo $linia . ". " . $liczba . "\n";
        $linia++;
    }
}
