<?php

// Funkcja do obliczenia dnia tygodnia
function getDayOfWeek($date) {
    $weekDays = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
    $dayIndex = date('w', strtotime($date));
    return $weekDays[$dayIndex];
}

// Funkcja do obliczenia wieku
function getAge($birthDate) {
    $currentDate = new DateTime();
    $birthDateObj = new DateTime($birthDate);
    $age = $currentDate->diff($birthDateObj)->y; // Różnica w latach
    return $age;
}

// Funkcja do obliczenia dni do najbliższych urodzin
function daysUntilNextBirthday($birthDate) {
    $currentYear = date('Y');
    $currentDate = new DateTime();
    $nextBirthday = DateTime::createFromFormat('Y-m-d', $currentYear . '-' . date('m-d', strtotime($birthDate)));

    if ($currentDate > $nextBirthday) {
        // Urodziny w tym roku już minęły – użyj następnego roku
        $nextBirthday->modify('+1 year');
    }

    $daysUntilBirthday = $currentDate->diff($nextBirthday)->days;
    return $daysUntilBirthday;
}