<nav class="navbar navbar-expand-lg bg-dark fixed-top">
<div class="container-fluid">
    <a class="navbar-brand text-white" href="/horario">
      <img src="img/logo.png" alt="Logo" width="40" height="45" class="d-inline-block align-text-top">
      UniSchedule
    </a>

    <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link link-light bg-success active" aria-current="page" href="/generar_horario.php">Ingresar_datos</a>
        </li>
        <li class="nav-item">
           <a class="nav-link link-light" href="#">Modificar_datos</a>
        </li>
      </ul>
</div>
  </div>
 
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="NombreDeUsuario" aria-label="Username" aria-describedby="basic-addon1">
      <button onclick="alert('Quieres persistir los datos')" type="button" class="btn btn-success">Acceder</button>
    </div>
  </form>
</nav><br><br><br>