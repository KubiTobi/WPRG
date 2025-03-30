<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Operacje na katalogach</title>
</head>
<body>
<h1>Formularz do obsługi katalogów</h1>

<!-- Formularz -->
<form method="POST" action="logic.php">
    <label for="path">Ścieżka do katalogu:</label>
    <input type="text" id="path" name="path" placeholder="./php/images/network" required>
    <br><br>

    <label for="directory">Nazwa katalogu:</label>
    <input type="text" id="directory" name="directory" placeholder="nazwa_katalogu" required>
    <br><br>

    <label for="operation">Rodzaj operacji:</label>
    <select id="operation" name="operation">
        <option value="read">Odczyt katalogu</option>
        <option value="create">Stworzenie katalogu</option>
        <option value="delete">Usunięcie katalogu</option>
    </select>
    <br><br>

    <button type="submit">Wykonaj operację</button>
</form>
</body>
</html>