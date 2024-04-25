const form = document.querySelector("#form");
const file = document.querySelector("#imagen");

form.addEventListener("submit", (e) =>{
    e.preventDefault();

    const formData = new FormData();
    formData.append('nombre', document.querySelector("#nombre").value);
    formData.append('rolAdmin', document.querySelector("#rolAdmin").value);
    formData.append('fecha', document.querySelector("#fecha").value);
    formData.append('imagen', file.files[0]);
    formData.append('tituloPubli', document.querySelector("#tituloPubli").value);
    formData.append('descripcion', document.querySelector("#descripcion").value);

    enviarDatosAlServidor(formData);
});

function enviarDatosAlServidor(formData) {
    fetch('../../../app/trigger/addimage.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(console.log)
    .catch(error => {
        console.error('Error:', error);
    });
}
