<?php

// Incluir la logica del modelo
require_once('modelo.php');

// Obtener la lista de unidades
$datos = Obtener_Unidades_Medida();

// Incluir la logica de la vista
require('vista.php');

?>