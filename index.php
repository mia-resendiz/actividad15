<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<?php
$deporte_favorito = 'futbol'; // Cambia el valor aquí
switch ($deporte_favorito) {
    case 'voleiboll':
        echo "Mi deporte favorito es el voleiboll!";
        break;
    case 'futbol':
        echo "Mi deporte favorito es el futbol!";
        break;
    case 'basquetbol':
        echo "Mi deporte favorito es el basquetbol";
        break;
    case 'tenis':
        echo "Mi deporte favorito es el tenis";
        break;
    case 'americano':
        echo "Mi deporte favorito es el americano!";
        break;
    default:
        echo "no me gusta este deporte!";
}
?>
</body>
</html>
