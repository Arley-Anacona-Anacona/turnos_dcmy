function fetchTurnos() {
    $.ajax({
      url: '../api/obtener_turnos.php',
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        let tableBody = $('#tabla1');
        tableBody.empty(); // Vacía la tabla actual
        data.forEach(function(turno) {
          let turnoLabel = turno.tipo_turno === 'preferencial' ? 'P' + turno.numero_turno : 'G' + turno.numero_turno;
          let row = `<tr>
                       <td>${turno.nombre_cliente}</td>
                       <td>${turnoLabel}</td>
                      
                     </tr>`;
                 
          tableBody.append(row);
        });
      }
    });
  }
  
  $(document).ready(function(){
    fetchTurnos(); // Llama a la función al cargar la página
    setInterval(fetchTurnos, 3000); // Llama a la función cada 5 segundos
  });
  