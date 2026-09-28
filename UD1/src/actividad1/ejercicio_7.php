<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobador de Anagramas</title>
</head>
<body>
    <h2>Comprobador de Anagramas</h2>
    <form action="" method="post">
        <div>
            <label for="palabra1">Primera palabra:</label>
            <input type="text" id="palabra1" name="palabra1" required>
        </div>
        <br>
        <div>
            <label for="palabra2">Segunda palabra:</label>
            <input type="text" id="palabra2" name="palabra2" required>
        </div>
        <br>
        <input type="submit" value="Comprobar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $p1 = $_POST["palabra1"] ?? "";
        $p2 = $_POST["palabra2"] ?? "";

        // 1. Limpieza: quitamos espacios y pasamos todo a minúsculas
        $limpia1 = strtolower(str_replace(' ', '', trim($p1)));
        $limpia2 = strtolower(str_replace(' ', '', trim($p2)));

        // 2. Comprobación rápida: si no tienen la misma longitud, no son anagramas
        if (strlen($limpia1) !== strlen($limpia2) || strlen($limpia1) === 0) {
            $esAnagrama = false;
        } else {
            // 3. Convertimos cada palabra en un array de caracteres
            $arr1 = str_split($limpia1);
            $arr2 = str_split($limpia2);

            // 4. Ordenamos alfabéticamente ambos arrays
            sort($arr1);
            sort($arr2);

            // 5. Si contienen exactamente las mismas letras, los arrays ordenados son idénticos
            $esAnagrama = ($arr1 === $arr2);
        }

        // Mostramos el resultado
        echo "<hr>";
        if ($esAnagrama) {
            echo "<p style='color: green;'><strong>\"" . htmlspecialchars($p1) . "\"</strong> y <strong>\"" . htmlspecialchars($p2) . "\"</strong> son anagramas.</p>";
        } else {
            echo "<p style='color: red;'><strong>\"" . htmlspecialchars($p1) . "\"</strong> y <strong>\"" . htmlspecialchars($p2) . "\"</strong> NO son anagramas.</p>";
        }
    }
    ?>
</body>
</html>