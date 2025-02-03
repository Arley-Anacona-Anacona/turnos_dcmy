<?php 
session_start();
// Eliminar sesión
session_unset();
// Destruir sessión.
session_destroy();

echo "Saliendo..";
sleep(2);
header('Location: ../../index.php');
?>
<!-- session_start();
if(isset($_SESSION['nombres'])){
    print "usuario". $_SESSION['nombres'];


}else{
    print "no hay";
} -->