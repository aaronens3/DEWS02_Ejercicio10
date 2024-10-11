<?php
// Inicializar las variables
$codigo = 1;
$nombre = "Tom";
$apellidos = "Smith";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "New York";

// Lógica para la Retención 1 (por puesto y sueldo)
if ($puesto == "Vendedor") {
    if ($sueldo > 70000) {
        $retencion1 = $sueldo * 0.10; // Retención del 10% si el sueldo es mayor a 70,000 €
    } else {
        $retencion1 = $sueldo * 0.20; // Retención del 20% si el sueldo es menor o igual a 70,000 €
    }
} else {
    $retencion1 = 0; // No aplica retención si no es Vendedor
}

// Lógica para la Retención 2 (por edad o número de hijos)
if ($edad > 50 || $num_hijos > 2) {
    $retencion2 = $sueldo * 0.05; // Retención del 5% si tiene más de 50 años o más de 2 hijos
} else {
    $retencion2 = $sueldo * 0.10; // Retención del 10% en caso contrario
}

// Lógica para la Retención 3 (por rango de sueldo)
if ($sueldo > 50000 && $sueldo < 80000) {
    $retencion3 = $sueldo * 0.05; // Retención del 5% si el sueldo es mayor de 50,000 y menor de 80,000
} else {
    $retencion3 = $sueldo * 0.12; // Retención del 12% en caso contrario
}

// Lógica para la Retención 4 (por número de hijos)
if ($num_hijos == 1 || $num_hijos == 2) {
    $retencion4 = $sueldo * 0.10; // Retención del 10% si tiene 1 o 2 hijos
} else {
    $retencion4 = $sueldo * 0.05; // Retención del 5% en caso contrario
}

// Lógica para la Retención 5 (por sueldo mayor de 80,000 o sin hijos)
if ($sueldo > 80000 || $num_hijos == 0) {
    $retencion5 = $sueldo * 0.15; // Retención del 15% si el sueldo es mayor de 80,000 o no tiene hijos
} else {
    $retencion5 = $sueldo * 0.05; // Retención del 5% en caso contrario
}

// Calcular la retención total y el sueldo final
$retencionTotal = $retencion1 + $retencion2 + $retencion3 + $retencion4 + $retencion5;
$sueldoFinal = $sueldo - $retencionTotal;

// Mostrar los resultados
echo "Empleado: $nombre $apellidos<br>";
echo "Puesto: $puesto<br>";
echo "Sueldo bruto: €" . number_format($sueldo, 2) . "<br>";
echo "Retención 1 (por puesto y sueldo): €" . number_format($retencion1, 2) . "<br>";
echo "Retención 2 (por edad o hijos): €" . number_format($retencion2, 2) . "<br>";
echo "Retención 3 (por rango de sueldo): €" . number_format($retencion3, 2) . "<br>";
echo "Retención 4 (por número de hijos): €" . number_format($retencion4, 2) . "<br>";
echo "Retención 5 (por sueldo mayor de 80,000 o sin hijos): €" . number_format($retencion5, 2) . "<br>";
echo "Retención total: €" . number_format($retencionTotal, 2) . "<br>";
echo "Sueldo neto: €" . number_format($sueldoFinal, 2) . "<br>";
?>
