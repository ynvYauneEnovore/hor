<!doctype html>
<html lang="es-BO">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script language="javascript" src="./js/form.js"></script>
    <script language="javascript" src="./js/generarForm.js"></script>
  </head>
 
<body class="text-white text-center" style="background-color: #000000">
    <?php
    include 'head.php';
    ?>
  <h2 class="text-center">Formulario para generar horario semanal</h2>
    <div class="container bg-dark">

    <form id="dia1" style="display: block;">
                <!-- Campos para el horario del lunes -->
                <h3>Lunes ingrese número de materias:</h3>
                <label for="customRange2" class="form-label">materias</label>
                <input type="range" class="form-range" min="1" max="20" id="num-forms" onchange="actualizarValor()">
                <p>Value: <span id="num-forms-1"></span></p>
                </form>
                <button class="btn btn-info" onclick="generarFormularios()">Enviar</button>
                <hr>

                <div id="contenedor-formularios"></div>
                

    <form id="dia2" style="display: none;";>
            <!-- Campos para el horario del martes -->
            <h3>Martes:</h3>
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
            
           

            <form id="dia3" style="display: none;">
            <!-- Campos para el horario del miércoles -->
            <h3>Miercoles:</h3>
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

            <form id="dia4" style="display: none;">
            <!-- Campos para el horario del miércoles -->
            <h3>Jueves:</h3>
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

            <form id="dia5" style="display: none;">
            <!-- Campos para el horario del miércoles -->
            <h3>Viernes:</h3>
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

            <form id="dia6" style="display: none;">
            <!-- Campos para el horario del miércoles -->
            <h3>Sabado:</h3>
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


            <div class="d-grid gap-2">
            <button class="btn btn-success" type="button">+ Agregar</button>
            </div>
<hr>
            <div class="btn-group">
                <a onclick="mostrarAnteriorFormulario()" class="btn btn-success disabled" aria-current="page">Anterior</a>
                <a onclick="mostrarSiguienteFormulario()" class="btn btn-success" aria-current="page">Siguiente</a>
            </div>
            <!--<input type="submit" value="Agregar"> -->

            <div class="container text-center bg-info text-dark">
                <BR>
            TIPOS DE HORARIOS    
            <hr>
                <div class="row">
                    <div class="col">
                    TIPO - HORA - A1
                            <table class="table">
                                <thead class="bg-success">
                                        <th scope="row">#</th>
                                        <td colspan="1" class="table-active">Horas</td>

                                </thead>
                                <tbody class="bg-light">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td colspan="2" class="table-active">07:00 - 08:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td colspan="2" class="table-active">08:00 - 09:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2" class="table-active">09:00 - 10:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td colspan="2" class="table-active">10:00 - 11:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td colspan="2" class="table-active">11:00 - 12:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td colspan="2" class="table-active">12:00 - 13:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td colspan="2" class="table-active">13:00 - 14:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td colspan="2" class="table-active"> 14:00 - 15:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td colspan="2" class="table-active"> 15:00 - 16:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td colspan="2" class="table-active"> 16:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td colspan="2" class="table-active"> 17:00 - 18:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td colspan="2" class="table-active"> 18:00 - 19:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td colspan="2" class="table-active"> 20:00 - 21:00</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="col">
                    TIPO - HORA - B1
                    <table class="table">
                                <thead class="bg-success">
                                        <th scope="row">#</th>
                                        <td colspan="1" class="table-active">Horas</td>

                                </thead>
                                <tbody class="bg-light">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td colspan="2" class="table-active">07:30 - 08:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td colspan="2" class="table-active">08:30 - 09:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2" class="table-active">09:30 - 10:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td colspan="2" class="table-active">10:30 - 11:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td colspan="2" class="table-active">11:30 - 12:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td colspan="2" class="table-active">12:30 - 13:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td colspan="2" class="table-active">13:30 - 14:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td colspan="2" class="table-active"> 14:30 - 15:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td colspan="2" class="table-active"> 15:30 - 16:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td colspan="2" class="table-active"> 16:30 - 17:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td colspan="2" class="table-active"> 17:30 - 18:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td colspan="2" class="table-active"> 18:30 - 19:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td colspan="2" class="table-active"> 20:30 - 21:30</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="col">
                    TIPO - HORA - C1
                    
                    </div>
                </div>
                </div>
           
</div>
</div>

                
            
                
                  <!--  

                    07:30 - 08:30
                    08:30 - 09:30
                    09:30 - 10:30
                    10:30 - 11:30
                    11:30 - 12:30
                    12:30 - 13:30
                    13:30 - 14:30
                    15:30 - 16:30
                    16:30 - 17:30
                    17:30 - 18:30
                    18:30 - 19:30
                    19:30 - 20:30
                    20:30 - 21:30 -->

<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 <?php
    include 'footer.php';
    ?> 
	
</body>  

</html>
    
   