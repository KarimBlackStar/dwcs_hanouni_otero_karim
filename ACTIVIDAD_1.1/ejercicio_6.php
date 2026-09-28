<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/ACTIVIDAD_1.1/ejercicio_6.php" method="post">
        <label for="numero"> Introduce un número: </label>
        <input type="text" name="numero">
        <input type="submit" value="enviar">
    </form>
    <?php
    
    if(isset($_POST['numero']) && $_POST('numero') !== ''){
        $texto_numeros = $_POST['numero'];

        $lista_numeros = explode(',', $texto_numeros);

        echo "<h2>RESULTADOS</h2>";
        echo "<ul>";
        

    }
        if($numero >0){

        } elseif($numero <0){

        } else {

        }
    ?>
</body>
</html>
