const formulario = document.getElementById('formulario');
const respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', (event) => {
    event.preventDefault();

    let datos = new FormData(formulario);
    let div = document.createElement('div');

    fetch('form.php', {
        method: 'POST',
        body: datos
    })
     .then(response => response.json())
     .then(data => {
        if (data === 'error') {
            div.classList = 'alert alert-danger';
            div.innerHTML = 'Campos por rellenar!';
            respuesta.appendChild(div);
        } else {
            div.classList = 'alert alert-success';
            div.innerHTML = 'Ha accedido correctamente';
            respuesta.appendChild(div);
        }
     });
});