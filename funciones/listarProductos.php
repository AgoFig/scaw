<?php

/**
 * funcion traerProductos
 * Esta funcion solo se ocupa de traer los datos desde la base.
 * @param  [date]  $minDia [El dia en el que comienza la semana seleccionada]
 * @param  [date]  $maxDia [El dia en el que termina la semana seleccionada. Aunque podria eliminarse calculando 7 dias desde el inicio de la semana]
 * @return [array] $lista  [Una matriz con los resultados de la query para ser utilizada en la generacion HTML por la funcion mostrarProductos]
 */
function traerProductos($minDia,$maxDia) {

	// Formular la consulta
	$consulta = sprintf("call sp_productos_por_semana(%d,%d)",
	    $minDia,
	    $maxDia);

	// Ejecutar la consulta
	$res = mysql_query($consulta);	

	if ($res === FALSE) {
    	die('Error 003'.mysql_error());
	} else {
		while ($row = mysql_fetch_assoc($res)) {
		  for ($i=0; $i < count($res); $i++) { 
		  	$lista[][$row['nombre']] = $row['nombre'];
		  	$lista[][$row['minimo']] = $row['minimo'];
		  	$lista[][$row['maximo']] = $row['maximo'];
		  	$lista[][$row['promedio']] = $row['promedio'];
		  }
		}
		return $lista;
		mysql_free_result($res);
	}

}

/**
 * Esta funcion se encarga de generar el HTML con la lista de 
 * productos obtenida de la base.
 * @param  [date] $minDia [El dia en el que comienza la semana seleccionada]
 * @param  [date] $maxDia [El dia en el que termina la semana seleccionada. Aunque podria eliminarse calculando 7 dias desde el inicio de la semana]
 */
function mostrarProductos($minDia,$maxDia) {
	$listaProductos = listarProductos($minDia,$maxDia);

	for ($i=0; $i < count($listaProductos); $i++) { 
		$fila = "<tr>";
			$fila .= "<td>";
		$fila .= $listaProductos[i]['nombre'];
			$fila .= "</td>";
			$fila .= "<td>";
		$fila .= $listaProductos[i]['minimo'];
			$fila .= "</td>";
			$fila .= "<td>";
		$fila .= $listaProductos[i]['maximo'];
			$fila .= "</td>";
			$fila .= "<td>";
		$fila .= $listaProductos[i]['promedio'];
			$fila .= "</td>";
		$fila .= "</tr>";
	}

	echo $fila;
}

?>
