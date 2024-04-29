const formPublicacionesAdmin = document.querySelector("#formPublicacionesAdmin");
const nombrePublicacionAdmin = document.querySelector("#nombrePublicacionAdmin")
const rolPublicacionAdmin = document.querySelector("#rolPublicacionAdmin")
const fechaPublicacionAdmin = document.querySelector("#fechaPublicacionAdmin")
const tituloPublicacionAdmin = document.querySelector("#tituloPublicacionAdmin")
const imgPublicacionAdmin = document.querySelector("#imgPublicacionAdmin")
const descripcionPublicacionAdmin = document.querySelector("#descripcionPublicacionAdmin")


formPublicacionesAdmin.addEventListener("submit", (e) => {
    e.preventDefault();
    obteniendoDatosPublicacionesAdmin(nombrePublicacionAdmin, rolPublicacionAdmin, fechaPublicacionAdmin,
        tituloPublicacionAdmin, imgPublicacionAdmin.files[0], descripcionPublicacionAdmin);
});

function obteniendoDatosPublicacionesAdmin(nombrePublicacionAdmin, rolPublicacionAdmin, fechaPublicacionAdmin,
    tituloPublicacionAdmin, imgPublicacionAdmin, descripcionPublicacionAdmin){
    
    const formDatos = new FormData();
    formDatos.append("nombrePublicacionAdmin", nombrePublicacionAdmin.value);
    formDatos.append("rolPublicacionAdmin", rolPublicacionAdmin.value);
    formDatos.append("fechaPublicacionAdmin", fechaPublicacionAdmin.value);
    formDatos.append("tituloPublicacionAdmin", tituloPublicacionAdmin.value);
    formDatos.append("imgPublicacionAdmin", imgPublicacionAdmin); 
    formDatos.append("descripcionPublicacionAdmin", descripcionPublicacionAdmin.value);

    fetch('./app/trigger/publicacionesAdmin.php?action=add', {
        method: 'POST',
        body: formDatos
    })
    .then(res => res.json())
    .then(console.log)
    .catch(err => console.log(err));
}
