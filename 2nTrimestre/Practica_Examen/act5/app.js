const formulario = document.getElementById('form');
const respuesta = document.getElementById('respuesta');

window.addEventListener('load', () => {
  let div = document.createElement('div');

  let nombre = document.getElementById('nombre');
  let dni = document.getElementById('dni');
  let pass = document.getElementById('pass');

  let data = () => {
    let datos = new FormData(formulario);

    datos.append('nombre', nombre.value);
    datos.append('dni', dni.value);
    datos.append('pass', pass.value);
    

    fetch('form.php', {
        method: 'POST',
        body: datos
      })
      .then(response => response.json())
      .then(data => {
        if (data === 'error') {
          div.classList = 'alert alert-danger';
          div.innerHTML = 'Usuario no encontrado!';
          respuesta.appendChild(div);
        } else {
          location.href = 'https://www.seas.es/blog/wp-content/uploads/2013/02/php368.png';
        }
      });
  }
  
  formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    data();
  });
});

