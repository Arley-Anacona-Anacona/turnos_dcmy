<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php
 require_once("../templates/header.php");
?>
    <link rel="stylesheet" href="../../public/css/registrarEmpleado.css">
    
</head>

<body>
    <div class="d-flex flex-row justify-content-center py-5 shadow-lg">
    <div class="container-form">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvendidos</h2>
                <p> Droguera Cabildo Mayor
                    siempre  disponible a nuestra comunidad</p>
            </div>
    
        </div>  
        <div class="form-infomation">
            <div class="form-information-childs">
                <h2>Inicio Sesion</h2>
                <p> ingresa tu datos.</p>
                <form action="../controllers/authController.php" method="POST" class="form">
                    <label>
                        <input name="correo" type="email" placeholder="Usuario">
                    </label>
                    <label>
                        <input name="clave" type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Ingresar">
                </form>
            </div>
        </div>
        
    </div>

    </div>
    <script src="js/main.js"></script>
</body>
    <?php 
        require_once("../templates/footer.php");
    ?>

</html>
 