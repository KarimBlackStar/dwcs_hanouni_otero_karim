<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Potencia</title>
</head>
<body>
    <h2>Ejercicio 8: Función Potencia</h2>

    <form action="" method="post">
        <div>
            <label for="base">Base (A):</label>
            <input type="number" step="any" id="base" name="base" required>
        </div>
        <br>
        <div>
            <label for="exponente">Exponente (B):</label>
            <input type="number" step="1" id="exponente" name="exponente" required>
        </div>
        <br>
        <input type="submit" value="Calcular potencia">
    </form>

    <?php
    /**
     * Calcula A elevado a B.
     * 
     * @param float|int $a Base
     * @param int $b Exponente (entero)
     * @return float|int Resultado de A^B
     */
    function calcularPotencia($a, $b) {
        // Caso especial: cualquier número elevado a 0 es 1
        if ($b === 0) {
            return 1;
        }

        $resultado = 1;
        $expPositivo = abs($b);

        // Multiplicamos la base tantas veces como indique el exponente
        for ($i = 0; $i < $expPositivo; $i++) {
            $resultado *= $a;
        }

        // Si el exponente es negativo, aplicamos la regla: a^(-b) = 1 / (a^b)
        if ($b < 0) {
            if ($a == 0) {
                return "Error: División por cero (0 elevado a exponente negativo)";
            }
            return 1 / $resultado;
        }

        return $resultado;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $base = isset($_POST["base"]) ? (float)$_POST["base"] : null;
        $exponente = isset($_POST["exponente"]) ? (int)$_POST["exponente"] : null;

        if ($base !== null && $exponente !== null) {
            $potencia = calcularPotencia($base, $exponente);

            echo "<hr>";
            echo "<p><strong>Resultado:</strong> {$base}<sup>{$exponente}</sup> = <strong>{$potencia}</strong></p>";
        }
    }
    ?>
</body>
</html>