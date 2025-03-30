<?php
// Tekst źródłowy
$tekst = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

// Utworzenie tablicy z tekstu za pomocą explode
$tablica = explode(" ", $tekst);

// Usunięcie znaków interpunkcyjnych przy użyciu pętli for i instrukcji if
for ($i = 0; $i < count($tablica); $i++) {
    $slowo = $tablica[$i];
    $noweSlowo = ""; // Tworzenie nowego słowa pozbawionego interpunkcji

    // Iteracja przez każdy znak w słowie, aby usunąć interpunkcję
    for ($j = 0; $j < strlen($slowo); $j++) {
        $znak = $slowo[$j];

        // Dodajemy znak, jeśli nie jest znakiem interpunkcyjnym
        if (!($znak === '.' || $znak === ',' || $znak === "'" || $znak === '"' || $znak === '?' || $znak === '!' || $znak === ':' || $znak === ';' || $znak === '-')) {
            $noweSlowo .= $znak;
        }
    }

    // Zamiana pierwotnego słowa na oczyszczone słowo
    $tablica[$i] = $noweSlowo;
}

// Usunięcie pustych elementów powstałych po usunięciu interpunkcji
$tablica = array_values(array_filter($tablica, function ($item) {
    return $item !== "";
}));

// Utworzenie tablicy asocjacyjnej zgodnie z instrukcją
$asocjacyjnaTablica = [];
foreach ($tablica as $indeks => $element) {
    if ($indeks % 2 === 0 && isset($tablica[$indeks + 1])) {
        // Klucz to element z indeksem nieparzystym (wychodząc od 0), wartość to kolejny element
        $asocjacyjnaTablica[$element] = $tablica[$indeks + 1];
    }
}

// Wypisanie tablicy asocjacyjnej
foreach ($asocjacyjnaTablica as $klucz => $wartosc) {
    echo "$klucz -> $wartosc\n";
}