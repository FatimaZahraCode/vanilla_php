<?php $primerNumero=2 ; $segundoNumero=3 ; $arrayNumeros= [1,2,3,4]; echo sizeof($arrayNumeros)?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>marcapersonalFP v0</title>
</head>
<body>
    <h1>Ejercicio</h1>
    <p>
    <?php if ($primerNumero + $segundoNumero == 5): ?>
        CIERTO
    <?php else: ?>
        FALSO
    <?php endif; ?>
    </p>

    <div>
    <?php for ($i=0; $i < sizeof($arrayNumeros); $i++) { 
        echo ($arrayNumeros[$i] * 2) . "\n";
    }
    ?>
    </div>
</body>
</html>