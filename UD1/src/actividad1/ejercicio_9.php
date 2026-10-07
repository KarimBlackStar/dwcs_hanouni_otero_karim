<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9: Estadísticas de un Array</title>
</head>
<body>
    <h2>Ejercicio 9: Mayor, menor y media</h2>

    <form action="" method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div>
                <label for="num<?= $i ?>">Número <?= $i ?>:</label>
                <input type="number" step="any" id="num<?= $i ?>" name="numeros[]" required>
            </div>
            <br>
        <?php endfor; ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularEstadisticas(array $datos): array {
        // Obtenemos el mayor y menor con funciones nativas (o mediante bucle)
        $mayor = max($datos);
        $menor = min($datos);

        // Sumamos los elementos y dividimos entre el número total
        $totalElementos = count($datos);
        $suma = array_sum($datos);
        $media = $totalElemento
        // Devolvemos los tres valores empaquetados en un array asociativo
        return [
            "mayor" => $mayor,
            "menor" => $menor,
            "media" => $media
        ];
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Obtenemos el array enviado desde el formulario
        $numerosRecibidos = $_POST["numeros"] ?? [];

        // Nos aseguramos de que todos los valores sean numéricos (float)
        $numeros = array_map('floatval', $numerosRecibidos);

        if (count($numeros) === 5) {
            // Llamamos a la función pasándole el array
            $estadisticas = calcularEstadisticas($numeros);

            // Mostramos los resultados
            echo "<hr>";
            echo "<h3>Resultados:</h3>";
            echo "<p><strong>Números introducidos:</strong> " . implode(", ", $numeros) . "</p>";
            echo "<ul>";
            echo "<li><strong>Mayor:</strong> " . $estadisticas["mayor"] . "</li>";
            echo "<li><strong>Menor:</strong> " . $estadisticas["menor"] . "</li>";
            echo "<li><strong>Media:</strong> " . number_format($estadisticas["media"], 2) . "</li>";
            echo "</ul>";
        } else {
            echo "<p style='color: red;'>Por favor, introduce los 5 números correctamente.</p>";
        }
    }
    ?>
</body>
</html>