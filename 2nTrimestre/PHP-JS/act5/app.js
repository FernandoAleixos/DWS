let respuesta = document.getElementById('respuesta');
let div1 = document.createElement('div');

window.addEventListener('load', () => {
  let formulario = document.getElementById('form');
  let cp = document.getElementById('cp');

  let data = () => {
    let datos = new FormData();
    datos.append('cp', cp.value);

    fetch('form.php', {
        method: 'POST',
        body: datos
      })
      .then(response => response.json())
      .then(data => {

        console.log(data);

        if (data != 'error') {
          div1.innerHTML = data;
          respuesta.appendChild(div1);

        } else {
          div1.classList = 'alert alert-success';
          div1.innerHTML = 'asdf';
          respuesta.appendChild(div1);
        }
      });
  }
  formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    data();
  });
});