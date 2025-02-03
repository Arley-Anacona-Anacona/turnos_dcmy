<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once("../models/turnos.php");

$turno = new Turno();
$atendidos = $turno->obtenerAtendidos();
$ultimo = $turno->obtenerUltimo();  //trae la ultima persona que se atendio

// Construir el turno siguiente
$turnosiguiente = $ultimo[0]["nombre_cliente"] . " " . $ultimo[0]["apellidos_cliente"] . " - Turno " . $ultimo[0]["numero_turno"];

// Crear la respuesta con turnos y turno siguiente
$response = [
    "atendidos" => $atendidos,
    "ultimo" => $turnosiguiente
];

// Establecer el encabezado para devolver JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
