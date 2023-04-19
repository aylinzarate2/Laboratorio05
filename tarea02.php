<?php
	$precio = $_POST["precio"];
	$cantidad = $_POST["cantidad"];

	$descuento = ($precio * $cantidad * 0.07);

	$precio_con_descuento = ($precio * 0.95);

	$importe = ($precio_con_descuento * $cantidad);

	$obsequio = ($cantidad * 2);
    
	$importe_a_pagar = ($importe - $descuento);
			
	echo "<h2>Resultados:</h2>";
	echo "Precio actual de la gaseosa de 3 litros: $precio<br>";
	echo "Cantidad de gaseosas adquiridas: $cantidad<br>";
	echo "Descuento especial del 7%: $descuento<br>";
	echo "Nuevo precio de la gaseosa con descuento del 5%: $precio_con_descuento<br>";
	echo "Importe de la compra: $importe<br>";
	echo "Obsequio de caramelos: $obsequio<br>";
	echo "Importe a pagar: $importe_a_pagar<br>";
	?>