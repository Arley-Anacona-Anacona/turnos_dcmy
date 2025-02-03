<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
</head>
<body>
     <!-- ENCABEZADO -->
    <header class="container-fluid bg-success d-flex justify-content-center align-items-center py-2">
      <p class="text-light mb-0 fs-12" > <i class="bi bi-telephone-fill"></i>  Nuestras lineas de atencion -(602)-725-1000</p>
    </header>
    <!-- NAVAR O MENU DE INICIO -->
  <!-- Just an image -->
 







  <nav class="navbar navbar-light nav-justified">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="../../public/img/Drogueria Cabildo Mayor Yanacona (2).png" width="300" alt="Droguería Cabildo Mayor Yanacona" class="d-inline-block align-top">
            </a>
            <a class="nav-link disabled" aria-disabled="true"></a>

            <a class="nav-link active" aria-current="page" href="#"></a>
            <form action="../controllers/reiniciar_dia.php">
                     
                     <button id="btnReiniciar" type="btnSubmit" style="
                                        background-color: rgb(8, 137, 44); /* Azul brillante */
                                        color: white;
                                        border: none;
                                        border-radius: 8px;
                                        padding: 10px 20px;
                                        font-size: 16px;
                                        cursor: pointer;
                                        transition: background-color rgb(8, 137, 44);, transform 0.2s;"> Finalizar día
                    </button>   
                                                      
            </form>
             <a class="nav-link" href="../controllers/salir.php" tyle="text-decoration: none; color: red; font-weight: bold;">Cerrar sessión</a>
            <a class="nav-link" href="#"></a>
        </div>
    </nav>
   
    
</body>
</html>