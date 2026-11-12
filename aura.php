<?php

$mapaOriginal = [
    ['~', '~', '~', '~', '~', '0', '0', 'G', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', '0', '0', 'G', 'G', 'G', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'G', '0', 'G', 'G', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', 'G', 'G', '0', '0', 'G', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', 'G', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', 'G', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
];


$impactos = [
    [2, 9], [3, 10], [5, 4], [11, 15], [14, 4], [17, 4], [1, 5], [3, 8], [6, 12], [8, 14], 
    [10, 3], [0, 2], [1, 20], [8, 2], [21, 5], [22, 10], [0, 0], [0, 1], [0, 3], [0, 4], 
    [0, 14], [0, 15], [0, 16], [0, 17], [0, 18], [0, 19], [0, 20], [0, 21], [0, 22], [0, 23], 
    [1, 0], [1, 1], [1, 2], [1, 13], [1, 14], [1, 15], [1, 16], [1, 17], [1, 18], [1, 19], 
    [1, 21], [1, 22], [1, 23], [2, 0], [2, 1], [2, 2], [2, 16], [2, 17], [2, 18], [2, 19], 
    [2, 20], [2, 21]
];


function mostrarMapa($mapa) {
    echo "<pre>";

    foreach ($mapa as $fila) {
        echo implode(" ", $fila) . "<br>";
    }

    echo "</pre>";
}



function zonasAfectadas($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];

        if ($mapa[$fila][$columna] == "G") {
            $mapa[$fila][$columna] = "S";
        }
    }

    return $mapa;
}


function contarSigmasAfectados($mapa) {
    $contador = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "S") {
                $contador++;
            }
        }
    }

    return $contador * 3000;
}


function mapaDanos($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];

        if ($mapa[$fila][$columna] == "G") {
            $mapa[$fila][$columna] = "S";
        } elseif ($mapa[$fila][$columna] == "0") {
            $mapa[$fila][$columna] = "X";
        } elseif ($mapa[$fila][$columna] == "~") {
            $mapa[$fila][$columna] = "W";
        }
    }

    return $mapa;
}


function calcularCostes($mapa) {

    $pasillos = 0;
    $zonasHabitadas = 0;

    foreach ($mapa as $fila) {

        foreach ($fila as $celda) {

            if ($celda == "X") {
                $pasillos++;
            } elseif ($celda == "S") {
                $zonasHabitadas++;
            }
        }
    }

    $coste = ($pasillos * 75000) + ($zonasHabitadas * 250000);

    return $coste;
}



function contarChillTotal($mapa) {
    $contador = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "~") {
                $contador++;
            }
        }
    }

    return $contador;
}

function contarChillAfectado($mapa) {
    $contador = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "W") {
                $contador++;
            }
        }
    }

    return $contador;
}


function calcularRecaudacion($chillTotal, $chillAfectado) {
    $horas = (10000 * $chillAfectado) / $chillTotal;
    $minutos = $horas * 60;
    $recaudacion = $minutos * 20;

    return $recaudacion;
}




$mapaAfectado = zonasAfectadas($mapaOriginal, $impactos);


$personasAfectadas = contarSigmasAfectados($mapaAfectado);
$litros = ($personasAfectadas * 10) / 1000;


$mapaCompletoDanos = mapaDanos($mapaOriginal, $impactos);


$costes = calcularCostes($mapaCompletoDanos);


$chillTotal = contarChillTotal($mapaOriginal);
$chillAfectado = contarChillAfectado($mapaCompletoDanos);


$recaudacion = calcularRecaudacion($chillTotal, $chillAfectado);
$diferencia = $recaudacion - $costes;


echo "<h1> La Batalla de Aura</h1>";

echo "<h2> Mapa original</h2>";
mostrarMapa($mapaOriginal);

echo "<h2> Mapa con las zonas habitadas afectadas</h2>";
mostrarMapa($mapaAfectado);

echo "<h2> Poblacion afectada y bebida necesaria</h2>";
echo "Sigmas afectados: " . $personasAfectadas . "<br>";
echo "Litros de bebida necesarios: " . $litros . " litros<br>";

echo "<h2> Mapa de daños totales</h2>";
mostrarMapa($mapaCompletoDanos);

echo "<h2> Coste total de los daños</h2>";
echo "Coste: " . number_format($costes, 0, ",", ".") . " euros<br>";

echo "<h2> Recursos aprovechables</h2>";
echo "Metros cuadrados de Chill totales: " . $chillTotal . "<br>";
echo "Metros cuadrados de Chill afectados: " . $chillAfectado . "<br>";

echo "<h2> Recaudación solidaria</h2>";
echo "Recaudacion esperada: " . number_format($recaudacion, 2, ",", ".") . " euros<br>";
echo "Diferencia (recaudacion - costes): " . number_format($diferencia, 2, ",", ".") . " euros<br>";

?>