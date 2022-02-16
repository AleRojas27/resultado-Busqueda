<?php

// 1. IMPORTAR TODOS LOS MODELOS DE LA CARPETA "modelo"


// 2. IMPORTAR TODOS LOS CONTROLADORES DE LA CARPETA "controlador"
require_once "controlador/plantilla.controlador.php";

// 3. MANDAR A LLAMAR LA PLANTILLA

$plantilla = new ControladorPlantilla();
$plantilla -> obtenerPlantilla();
?>