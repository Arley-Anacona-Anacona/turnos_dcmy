<?php
	require_once("../models/asignarTurno.php");

	$objturno= new asignarTurno();

	$objturno->resetearContador();

	if ($objturno) {
	    print_r('listoo');
      
      header('Location: ../views/inicioEmpleado.php');
      

  		exit;
	  } else {
	    echo "Error al registrar turno";
	  }
    


	
?>