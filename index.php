<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Factoriales</title>
</head>
<body>
    <h2>Calculadora de Factoriales</h2>
    <form method="post" action="">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular_factorial">Calcular Factorial</button>
    </form>

    <?php
    if (isset($_POST['calcular_factorial'])) {
        $numero = intval($_POST['numero']);
        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }

        echo "<p>El factorial de $numero es $factorial.</p>";
    }
    ?>
</body>
</html>

