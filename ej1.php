<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
   
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $paquete = $_POST ["paquete"];
            $alto = $_POST ["alto"];
            $ancho = $_POST ["ancho"];
            $largo = $_POST ["largo"];
            $peso = $_POST ["peso"];
            $zona = $_POST ["zona"];
            $tamano = 0;
            $precio_final = 0;  
        }
        $alto * $largo * $ancho = $tamano;
    if ($tamano >= 0.5){
        $precio = $tamano * 75;
    }
    elseif ($tamano > 1){
        $precio = $tamano *100;
    
    }
    else {$precio = $tamano * 50;}
        
    
    if ($peso > 5) {
        $precio * 0.25;}
    elseif ($peso > 10){
        $precio * 0.50;        
    }
    elseif ($peso > 15) {
        echo "ERROR";
    }
    
    if ($zona = 1) {
        $zona = "Peninsula";
        
    }
    elseif ($zona = 2) {
            $zona = "baleares";
            if ($transporte = 2) {
                $precio * 0.10;
            }
        }
    elseif ($zona = 3) {
        $zona = "canarias";
        $precio * 0.10;
    }
    
    $paquete*$precio= $precio_final;

    echo "el precio es de $precio_final"   
    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquete" name="paquete" value="">
        <label for="tamano">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">
        <label for="tamano">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">
        <label for="tamano">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <label for="peso">ZONA:</label>
        <input type="number" id="zona" name="zona" value="">
        <label for="peso">TRANSPORTE:</label>
        <input type="number" id="transporte" name="transporte" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>