<?php

/**
 * [traerComentarios description]
 * @param  [type] $minDia [description]
 * @param  [type] $maxDia [description]
 * @return [type]         [description]
 */
function traerComentarios($minDia,$maxDia) {

	// Formular la consulta
	$consulta = sprintf("call sp_comentarios(%d,%d)",
	    $minDia,
	    $maxDia);

	// Ejecutar la consulta
	$res = mysql_query($consulta);	

	if ($res === FALSE) {
    	die('Error 003'.mysql_error());
	} else {
		while ($row = mysql_fetch_assoc($res)) {
		  for ($i=0; $i < count($res); $i++) { 
		  	$lista[][$row['autor']] = $row['autor'];
		  	$lista[][$row['comentario']] = $row['comentario'];
		  }
		}
		return $lista;
		mysql_free_result($res);
	}

}

// Esta funcion se ocupa de generar el HTML
function mostrarComentarios($minDia,$maxDia) {
	$listaComentarios = listarComentarios($minDia,$maxDia);

	for ($i=0; $i < count($listaComentarios); $i++) { 
		$fila = "<div class='row comentario'>";
			$fila .= "<strong class='col-lg-4'>";
		$fila .= $listaComentarios[i]['autor'];
			$fila .= "</strong>";
			$fila .= "<p class='col-lg-8'>";
		$fila .= $listaComentarios[i]['comentario'];
			$fila .= "</p>";
		$fila .= "</div>";
	}

	echo $fila;
}

?>
