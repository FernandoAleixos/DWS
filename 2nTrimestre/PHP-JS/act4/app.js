let respuesta = document.getElementById('respuesta');
let div1 = document.createElement('div');

window.addEventListener('load', () => {
  let formulario = document.getElementById('form');
  let nombre = document.getElementById('nombre');
  let apellido = document.getElementById('apellido');
  let dni = document.getElementById('dni');

  let data = () => {
    let datos = new FormData();
    datos.append('nombre', nombre.value);
    datos.append('apellido', apellido.value);
    datos.append('dni', dni.value);

    fetch('form.php', {
        method: 'POST',
        body: datos
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);

        if (data === 'error') {
          div1.classList = 'alert alert-danger';
          div1.innerHTML = 'Usuario no encontrado';
          respuesta.appendChild(div1);
        } else {
          div1.classList = 'alert alert-success';
          div1.innerHTML = 'Login correcto';
          respuesta.appendChild(div1);

          location.href = 'hola.php';
        }
      });
  }
  formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    data();
  });
});