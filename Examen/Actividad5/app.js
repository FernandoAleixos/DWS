const formulario = document.getElementById('formulario');
const respuesta = document.getElementById('respuesta');

window.addEventListener('load', () => {
  let div = document.createElement('div');

  let pais = document.getElementById('pais');
  let ciudad = document.getElementById('ciudad');
  let cpostal = document.getElementById('cpostal');

  let data = () => {
    let datos = new FormData(formulario);

    datos.append('pais', pais.value);
    datos.append('ciudad', ciudad.value);
    datos.append('cpostal', cpostal.value);
    

    fetch('form.php', {
        method: 'POST',
        body: datos
      })
      .then(response => response.json())
      .then(data => {
        if (data === 'error') {
          div.classList = 'alert alert-danger';
          div.innerHTML = 'Ciudad no encontrada';
          respuesta.appendChild(div);
        } else {
          location.href = 'https://img2.rtve.es/i/?w=1600&i=1602241477802.jpg';
        }
      });
  }
  
  formulario.addEventListener('submit', (event) => {
    event.preventDefault();
    data();
  });
});

