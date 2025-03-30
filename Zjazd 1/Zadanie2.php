<?php
function czyPierwsza($liczba)
{
    if ($liczba < 2) {
        return false; // Liczby mniejsze niż 2 nie są pierwsze
    }
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false; // Jeśli liczba jest podzielna przez $i, nie jest pierwsza
        }
    }
    return true; // Liczba jest pierwsza
}

// Pobranie zakresu od użytkownika
echo "Podaj początek zakresu: ";
$poczatek = intval(trim(fgets(STDIN))); // Pobiera pierwszą liczbę z wejścia użytkownika
echo "Podaj koniec zakresu: ";
$koniec = intval(trim(fgets(STDIN))); // Pobiera drugą liczbę z wejścia użytkownika

// Wyszukiwanie liczb pierwszych w zakresie
echo "Liczby pierwsze w zakresie od $poczatek do $koniec:\n";
for ($i = $poczatek; $i <= $koniec; $i++) {
    if (czyPierwsza($i)) {
        echo $i . "\n"; // Wypisz liczbę, jeśli jest pierwsza
    }
}