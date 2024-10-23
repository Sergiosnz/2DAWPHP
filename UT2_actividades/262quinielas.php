<?php

// Función para generar un resultado de Quinigol (2 valores entre 0,1,2,M)
function quinigol(): array {
    $resultados = [];
    for ($i = 0; $i < 6; $i++) {
        $local = ['0', '1', '2', 'M'][rand(0, 3)];
        $visitante = ['0', '1', '2', 'M'][rand(0, 3)];
        $resultados[] = [$local, $visitante];
    }
    return $resultados;
}

// Función para generar una quiniela completa
function quiniela(): array {
    $resultados = [];
    
    // Generar 14 resultados (1X2)
    for ($i = 0; $i < 14; $i++) {
        $resultados[] = ['1', 'X', '2'][rand(0, 2)];
    }
    
    // Añadir el pleno al 15 (dos resultados tipo Quinigol)
    $local = ['0', '1', '2', 'M'][rand(0, 3)];
    $visitante = ['0', '1', '2', 'M'][rand(0, 3)];
    $resultados[] = [$local, $visitante];
    
    return $resultados;
}

// Función para generar la tabla HTML
function tabla(array $quiniela): string {
    $html = '<table border="1">';
    $html .= '<tr><th>Partido</th><th>Resultado</th></tr>';
    
    for ($i = 0; $i < count($quiniela); $i++) {
        $html .= '<tr>';
        $html .= '<td>Partido ' . ($i + 1) . '</td>';
        $html .= '<td>';
        
        // Si es el último resultado (pleno al 15)
        if ($i == 14) {
            $html .= $quiniela[$i][0] . ' - ' . $quiniela[$i][1];
        } else {
            $html .= $quiniela[$i];
        }
        
        $html .= '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</table>';
    return $html;
}

// Código para probar las funciones
echo "<h2>Quinigol:</h2>";
$resultadoQuinigol = quinigol();
echo "<pre>";
print_r($resultadoQuinigol);
echo "</pre>";

echo "<h2>Quiniela completa:</h2>";
$resultadoQuiniela = quiniela();
echo tabla($resultadoQuiniela);

?>