<?php
require_once 'directory_ops.php';

// Sprawdzenie, czy dane zostały przesłane
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $path = $_POST['path'];
    $directory = $_POST['directory'];
    $operation = $_POST['operation'];

    // Wywołanie funkcji operacji na katalogach
    $result = performDirectoryOperation($path, $directory, $operation);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik operacji</title>
</head>
<body>
<h1>Wynik operacji</h1>

<?php
// Wyświetlanie wyniku operacji
if (isset($result)) {
    if (is_array($result)) {
        echo "<p>Elementy w katalogu:</p><ul>";
        foreach ($result as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>$result</p>";
    }
} else {
    echo "<p>Nieprawidłowe żądanie!</p>";
}
?>

<p><a href="index.php">Wróć do formularza</a></p>
</body>
</html>