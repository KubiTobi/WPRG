<?php

// Funkcja rekurencyjna dla ciągu Fibonacciego
function fibonacciRecursive($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
}

// Funkcja iteracyjna (nierekurencyjna) dla ciągu Fibonacciego
function fibonacciIterative($n) {
    if ($n <= 1) {
        return $n;
    }

    $prev = 0;
    $current = 1;

    for ($i = 2; $i <= $n; $i++) {
        $temp = $current;
        $current = $current + $prev;
        $prev = $temp;
    }

    return $current;
}

// Pomiar czasu działania funkcji
function measureExecutionTime($function, $argument) {
    $startTime = microtime(true);
    $result = $function($argument);
    $endTime = microtime(true);

    return [
        'time' => $endTime - $startTime,
        'result' => $result
    ];
}

// Pobranie wartości od użytkownika
echo "Podaj numer wyrazu ciągu Fibonacciego: ";
$n = trim(fgets(STDIN));

if (!is_numeric($n) || $n < 0) {
    echo "Błąd: Podaj liczbę całkowitą większą lub równą 0.\n";
    exit;
}

$n = (int)$n;

// Pomiar czasu dla funkcji rekurencyjnej
$recursiveResult = measureExecutionTime('fibonacciRecursive', $n);

// Pomiar czasu dla funkcji iteracyjnej
$iterativeResult = measureExecutionTime('fibonacciIterative', $n);

// Wyświetlenie wyników
echo "Wynik dla rekurencyjnej wersji: {$recursiveResult['result']}, czas: {$recursiveResult['time']} s\n";
echo "Wynik dla iteracyjnej wersji: {$iterativeResult['result']}, czas: {$iterativeResult['time']} s\n";

// Porównanie czasów
if ($recursiveResult['time'] > $iterativeResult['time']) {
    $difference = $recursiveResult['time'] - $iterativeResult['time'];
    echo "Wersja iteracyjna była szybsza o {$difference} sekund.\n";
} elseif ($recursiveResult['time'] < $iterativeResult['time']) {
    $difference = $iterativeResult['time'] - $recursiveResult['time'];
    echo "Wersja rekurencyjna była szybsza o {$difference} sekund.\n";
} else {
    echo "Obie wersje działały równie szybko.\n";
}