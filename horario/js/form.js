let formActual = 1; // Empezar en el primer formulario (lunes)

function mostrarSiguienteFormulario() {
  document.getElementById(`dia${formActual}`).style.display = "none"; // Ocultar el formulario actual
  formActual++; // Avanzar al siguiente formulario
  document.getElementById(`dia${formActual}`).style.display = "block"; // Mostrar el siguiente formulario
};

function actualizarValor() {

  var slider = document.getElementById("num-forms");
  var output = document.getElementById("num-forms-1");
  output.innerHTML = slider.value; // Mostrar el valor inicial

  slider.oninput = function() {
    output.innerHTML = this.value; // Actualizar el valor en tiempo real
  }
}