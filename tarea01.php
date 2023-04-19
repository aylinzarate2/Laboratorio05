<?php
    $ventas = $_POST["ventas"];
    $hijos = $_POST["hijos"];

    $bonificacion = $hijos * 50;

    $comision = $ventas * 0.075;

    $sueldo_bruto = 600 + $comision + $bonificacion;

    $descuento = $sueldo_bruto * 0.11;
    
    $sueldo_neto = $sueldo_bruto - $descuento;

echo "<h2>Resultados:</h2>";
echo "<p>Bonificación por hijos en edad escolar: S/. $bonificacion</p>";
echo "<p>Comisión por ventas del mes: S/. $comision</p>";
echo "<p>Sueldo bruto: S/. $sueldo_bruto</p>";
echo "<p>Descuento del 11%: S/. $descuento</p>";
echo "<p>Sueldo neto: S/. $sueldo_neto</p>";

?>


