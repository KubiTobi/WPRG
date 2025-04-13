<?php
if (isset($_FILES['textfile']) && $_FILES['textfile']['error'] == 0) {
    $fileContent = file($_FILES['textfile']['tmp_name']);
    $reversedContent = array_reverse($fileContent);

    echo "<h2>Odwrócona zawartość:</h2><pre>";
    echo htmlspecialchars(implode("", $reversedContent));
    echo "</pre>";
} else {
    echo "Nie przesłano pliku lub wystąpił błąd.";
}
?>
