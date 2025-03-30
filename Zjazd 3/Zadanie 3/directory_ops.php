<?php

function performDirectoryOperation($path, $directory, $operation = 'read') {
    // Dodanie "/" na końcu ścieżki, jeśli brak
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    // Ścieżka pełna do katalogu
    $fullPath = $path . $directory;

    switch ($operation) {
        case 'read':
            // Sprawdzenie, czy katalog istnieje
            if (!is_dir($fullPath)) {
                return "Katalog $fullPath nie istnieje.";
            }

            // Pobranie elementów w katalogu
            $items = scandir($fullPath);

            // Pominięcie elementów "." i ".."
            $items = array_diff($items, ['.', '..']);
            return empty($items) ? "Katalog jest pusty." : $items;

        case 'create':
            // Sprawdzenie, czy katalog już istnieje
            if (is_dir($fullPath)) {
                return "Katalog $fullPath już istnieje.";
            }

            // Próba utworzenia katalogu
            if (mkdir($fullPath, 0755, true)) {
                return "Katalog $fullPath został utworzony.";
            } else {
                return "Nie udało się stworzyć katalogu $fullPath.";
            }

        case 'delete':
            // Sprawdzenie, czy katalog istnieje
            if (!is_dir($fullPath)) {
                return "Katalog $fullPath nie istnieje.";
            }

            // Sprawdzenie, czy katalog jest pusty
            $items = scandir($fullPath);
            if (count(array_diff($items, ['.', '..'])) > 0) {
                return "Katalog $fullPath nie jest pusty. Nie można go usunąć.";
            }

            // Próba usunięcia katalogu
            if (rmdir($fullPath)) {
                return "Katalog $fullPath został usunięty.";
            } else {
                return "Nie udało się usunąć katalogu $fullPath.";
            }

        default:
            return "Nieznana operacja: $operation.";
    }
}