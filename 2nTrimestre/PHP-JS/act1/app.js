let formulario = document.getElementById('form');
let respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(event) {
    event.preventDefault();

    let datos = new FormData(formulario);
    let div1 = document.createElement('div');

    console.log(datos.get('user'));
    console.log(datos.get('pass'));

    fetch('form.php', {
        method: 'POST',
        body: datos
    })
    .then(response  => response.json())
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
        }
    })

});