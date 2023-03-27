function generarFormularios() {
  
    // Obtener el número de formularios a generar
    const numForms = parseInt(document.getElementById("num-forms").value);
  
    // Limpiar el contenedor de formularios
    const contenedor = document.getElementById("contenedor-formularios");
    contenedor.innerHTML = "";
  
    // Generar los formularios y agregarlos al contenedor
    for (let i = 1; i <= numForms; i++) {
      const formulario = document.createElement("form");
      formulario.innerHTML = `
      <form id="dia1" style="display: none;">
      <!-- Campos para el horario del lunes -->
      <div class="bg-success">
      <label for="campo-${i}">Materia: ${i} </label><br>
      </div>
      <label for="hora_inicio_lunes">Hora de inicio:</label>
          <input type="time" id="hora_inicio_lunes" name="hora_inicio_lunes" required><br>
          <label for="hora_fin_lunes">Hora de fin:</label>
          <input type="time" id="hora_fin_lunes" name="hora_fin_lunes" required><br>
          <label for="materia_lunes">Materia:</label>
          <input type="text" id="materia_lunes" name="materia_lunes" required><br>
          <label for="docente_lunes">Docente:</label>
          <input type="text" id="docente_lunes" name="docente_lunes" required><br>
          <label for="aula_lunes">Aula:</label>
          <input type="text" id="aula_lunes" name="aula_lunes" required><br>
          <label for="grupo_lunes">Grupo:</label>
          <input type="text" id="grupo_lunes" name="grupo_lunes" required><br><br>
      </form>

      `;
      contenedor.appendChild(formulario);
    }
  }
  