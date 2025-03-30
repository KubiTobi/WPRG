<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz daty urodzenia</title>
</head>
<body>
<h1>Wybierz swoją datę urodzenia</h1>

<!-- Formularz -->
<form method="GET" action="results.php">
    <label for="birth_date">Data urodzenia:</label>
    <input type="date" id="birth_date" name="birth_date" required>
    <button type="submit">Wyślij</button>
</form>
</body>
</html>