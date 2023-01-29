let respuesta = document.getElementById('respuesta');
let div1 = document.createElement('div');

window.addEventListener('load', () => {
  let formulario = document.getElementById('form');
  let usuario = document.getElementById('usuario');
  let pass = document.getElementById('pass');

  let data = () => {
    let datos = new FormData();
    datos.append('usuario', usuario.value);
    datos.append('pass', pass.value);

    fetch('form.php', {
        method: 'POST',
        body: datos
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);

        if (data === 'error') {
          div1.classList = 'alert alert-danger';
          div1.innerHTML = 'Falta rellenar';
          respuesta.appendChild(div1);
        } else {
          div1.classList = 'alert alert-success';
          div1.innerHTML = 'Correcto';
          respuesta.appendChild(div1);

          location.href = 'hola.html';
        }
      });
  }
  formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    data();
  });
});