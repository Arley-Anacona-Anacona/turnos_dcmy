<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vista Turnos</title>
<?php
require_once("../templates/boostrap.php");
?>
<link rel="stylesheet" type="text/css" href="../../public/css/vistaTv.css">
</head>

<?php
  require_once("../templates/header.php");
  require_once("../models/turnos.php");
?>
<body> 
  <div class="container-fluid">
    <div class="row justify-content">
      <div class="col-md-6">
        <h3>TURNO:</h3>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success fw-bolder " id= "hola"role="alert">
              <p id="ultimo" class="text-center"></p>
            </div>
            <h3>PROXIMOS TURNOS</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Turno</th>
                </tr>
              </thead>
              <tbody id="tablaturno">
              </tbody>
            </table>
        </div>
      </div>
  </div>

<div class="col-lg-6  carrusel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="object-fit: cover;" src="../../public/img/Droguería Cabildo Mayor Yanacona.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img style="object-fit: cover;" src="../../public/img/1.jpg" class="img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <img style="object-fit: cover;" src="../../public/img/2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/3.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/9.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/4.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/5.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/6.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/7.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/8.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="../../public/img/10.jpg" class="d-block w-100" alt="">
          </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../turno.js"></script>
<script>
  function speakTurn(nombre, apellido, turno) {
    let msg = new SpeechSynthesisUtterance();
    msg.text = `${nombre} ${apellido} - Turno ${turno}`;
    window.speechSynthesis.speak(msg);
  }

  $(document).ready(function() {
    let lastTurn = "";

    $('.carousel').carousel();
    $('.carousel').carousel({ interval: 3000 }); // Cambia 3000 por el intervalo de tiempo deseado en milisegundos

    function generateTableRows(data) {
      var tableBody = $("#tablaturno");
      tableBody.html("");

      $.each(data, function(index, turno) {
        var row = $("<tr></tr>");
        var resultado = turno["tipo_turno"] === "preferencial" ? "P" : "G";
        resultado += turno["numero_turno"];

        row.append("<td>" + turno["nombre_cliente"] + "</td>");
        row.append("<td>" + resultado + "</td>");
        tableBody.append(row);
      });
    }
   

    function hacerpeticion() {
      $.ajax({
        type: "GET",
        url: "http://localhost/turnos-php/app/controllers/obtener_turnos.php",
        dataType: "json",
        success: function(data) {
          $("#ultimo").text(data.ultimo);

          generateTableRows(data.atendidos);

          let turnoSiguiente = data.ultimo;
          console.log("Turno siguiente:", turnoSiguiente); // Log para verificar datos
          if (turnoSiguiente !== lastTurn) {
            lastTurn = turnoSiguiente;
            let parts = turnoSiguiente.split(" - Turno ");
            let nombreCompleto = parts[0].split(" ");
            let nombre = nombreCompleto.slice(0, -1).join(" ");
            let apellido = nombreCompleto.slice(-1).join(" ");
            let turno = parts[1];

            console.log("Datos para speakTurn:", nombre, apellido, turno); // Log para verificar datos
            $("#ultimo").text(turnoSiguiente);
            speakTurn(nombre, apellido, turno);
          }
        },
        error: function(xhr, status, error) {
          console.log(error);
        }
      });
    }

    hacerpeticion(); // Llama a la función para obtener y mostrar los turnos al cargar la página
    setInterval(hacerpeticion, 2000); // Configura una actualización periódica cada 2 segundos
  });
</script>
</body>
</html>

<?php  
  require_once("../templates/boostrapjs.php");
?>
