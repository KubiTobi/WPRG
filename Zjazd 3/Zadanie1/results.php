<?php
require_once 'functions.php';

// Sprawdzenie, czy podano datę urodzenia
if (!isset($_GET['birth_date'])) {
    echo "<p>Nie podano daty urodzenia. Wróć do <a href='index.php'>formularza</a>.</p>";
    exit;
}

// Pobranie daty z formularza
$birthDate = $_GET['birth_date'];

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyniki</title>
</head>
<body>
<h1>Wyniki obliczeń</h1>
<p>Podana data urodzenia: <strong><?php echo htmlspecialchars($birthDate); ?></strong></p>
<p>Urodziłeś/aś się w dzień tygodnia: <strong><?php echo getDayOfWeek($birthDate); ?></strong></p>
<p>Twój ukończony wiek: <strong><?php echo getAge($birthDate); ?></strong> lat(a)</p>
<p>Liczba dni do Twoich najbliższych urodzin: <strong><?php echo daysUntilNextBirthday($birthDate); ?></strong> dni</p>
<p><a href="index.php">Wróć</a></p>
</body>
</html>