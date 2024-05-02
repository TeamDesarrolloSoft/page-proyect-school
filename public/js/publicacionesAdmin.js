const formPublicacionesAdmin = document.querySelector("#formPublicacionesAdmin");
const nombrePublicacionAdmin = document.querySelector("#nombrePublicacionAdmin")
const rolPublicacionAdmin = document.querySelector("#rolPublicacionAdmin")
const fechaPublicacionAdmin = document.querySelector("#fechaPublicacionAdmin")
const tituloPublicacionAdmin = document.querySelector("#tituloPublicacionAdmin")
const imgPublicacionAdmin = document.querySelector("#imgPublicacionAdmin")
const descripcionPublicacionAdmin = document.querySelector("#descripcionPublicacionAdmin")

const publicData = document.querySelector(".publicData")

formPublicacionesAdmin.addEventListener("submit", (e) => {
    e.preventDefault();
    obteniendoDatosPublicacionesAdmin(nombrePublicacionAdmin, rolPublicacionAdmin, fechaPublicacionAdmin,
        tituloPublicacionAdmin, imgPublicacionAdmin.files[0], descripcionPublicacionAdmin);
});

function obteniendoDatosPublicacionesAdmin(nombrePublicacionAdmin, rolPublicacionAdmin, fechaPublicacionAdmin,
    tituloPublicacionAdmin, imgPublicacionAdmin, descripcionPublicacionAdmin) {

    const formDatos = new FormData();
    formDatos.append("nombrePublicacionAdmin", nombrePublicacionAdmin.value);
    formDatos.append("rolPublicacionAdmin", rolPublicacionAdmin.value);
    formDatos.append("fechaPublicacionAdmin", fechaPublicacionAdmin.value);
    formDatos.append("tituloPublicacionAdmin", tituloPublicacionAdmin.value);
    formDatos.append("imgPublicacionAdmin", imgPublicacionAdmin);
    formDatos.append("descripcionPublicacionAdmin", descripcionPublicacionAdmin.value);

    fetch('../../app/trigger/publicacionesAdmin.php?action=add', {
        method: 'POST',
        body: formDatos
    })
        .then(res => res.json())
        .then(response => {
            if(response){
                alert("Datos publicados correctamente");
                window.location.reload();
            }
        })
        .catch(err => console.log(err));
}

const consulta = async () => {
    const datos = await fetch("../../app/trigger/publicacionesAdmin.php?action=GET");
    const result = await datos.json();

    result.forEach(element => {
        const nuevoElemento = document.createElement('div');
        nuevoElemento.classList.add('contenedorPublicaciones');

        nuevoElemento.innerHTML = `
        <div class="contenedorHijoPubli">
            <div class="contCabeceraPubli">
                <div class="imgPubliGa">
                    <img src="../img/person.png" alt="">
                </div>
                <div class="contCabeceraDatos">
                    <h3>${element.nombrePublicacionAdmin}</h3> 
                    <span>${element.rolPublicacionAdmin}l</span>
                </div>
                <p>${element.fechaPublicacionAdmin}</p>
            </div>

            <div class="contPubliImg">
                <div class="contPubliImgSpace">
                    <img src="../../app/uploads/${element.imgPublicacionAdmin}">
                </div>
            </div>

            <div class="contTextPubli">
                <div class="contextPubliSpace">
                    <h3>${element.tituloPublicacionAdmin}</h3> 
                    <br>
                    <p>
                        ${element.descripcionPublicacionAdmin}
                    </p>
                </div>
            </div>

            <div class="contFooterPubli">
                <div class="contFooterPubliIconsData">
                    <div class="contFooterPubliIcons" data-id=${element.id}>
                        <button class="eliminarBtn" data-action="Eliminar" style="border: none;">Eliminar</button>
                        <button class="editarBtn" data-action="Editar" style="border: none;">Editar</button>
                    </div>
                    <div class="contPublicarBotonxd">
                        <button>Subido</button>
                    </div>
                </div>
            </div>
        </div>`;

        publicData.appendChild(nuevoElemento);

        const contenedorPublicaciones = nuevoElemento.querySelector(".contFooterPubliIcons");
        contenedorPublicaciones.addEventListener("click", (e) => {
            const target = e.target;
            if (target.classList.contains('editarBtn')) {
                EditarPublicacion(element);
            } else if (target.classList.contains('eliminarBtn')) {
                eliminarPublicacion(e.target);

            }
        });        
    });
}

function EditarPublicacion(element) {
    if (element) {
        const nombre = element.nombrePublicacionAdmin;
        const rol = element.rolPublicacionAdmin;
        const fecha = element.fechaPublicacionAdmin;
        const titulo = element.tituloPublicacionAdmin;
        const descripcion = element.descripcionPublicacionAdmin;
        const imagen = element.imgPublicacionAdmin; 
        const id = element.id;

        document.getElementById('nombrePublicacionAdminEdit').value = nombre;
        document.getElementById('rolPublicacionAdminEdit').value = rol;
        document.getElementById('fechaPublicacionAdminEdit').value = fecha;
        document.getElementById('tituloPublicacionAdminEdit').value = titulo;
        document.getElementById('descripcionPublicacionAdminEdit').value = descripcion;
        document.getElementById('imgUrlPublicacionAdminEdit').value = imagen;
        
        $('#exampleModalEdit').modal('show');
    }
}

const formPublicacionesAdminEdit = document.querySelector("#formPublicacionesAdmin");

document.addEventListener("DOMContentLoaded", function() {
    const btnEditar = document.getElementById('btnEditar');
    const button = element.closest('btnEditar');
    btnEditar.addEventListener('click', function() {
        const nombrePublicacionAdminEdit = document.querySelector("#nombrePublicacionAdminEdit").value;
        const rolPublicacionAdminEdit = document.querySelector("#rolPublicacionAdminEdit").value;
        const fechaPublicacionAdminEdit = document.querySelector("#fechaPublicacionAdminEdit").value;
        const tituloPublicacionAdminEdit = document.querySelector("#tituloPublicacionAdminEdit").value;
        const imgPublicacionAdminEdit = document.querySelector("#imgUrlPublicacionAdminEdit").value;
        const descripcionPublicacionAdminEdit = document.querySelector("#descripcionPublicacionAdminEdit").value;
        const cod_id = id
        editarFuncion(nombrePublicacionAdminEdit, rolPublicacionAdminEdit, fechaPublicacionAdminEdit, tituloPublicacionAdminEdit,
            imgPublicacionAdminEdit, descripcionPublicacionAdminEdit, id);
    });
});

function editarFuncion(nombrePublicacionAdminEdit, rolPublicacionAdminEdit, fechaPublicacionAdminEdit, tituloPublicacionAdminEdit,
    imgPublicacionAdminEdit, descripcionPublicacionAdminEdit, id) {
    const formDatos = new FormData();
    formDatos.append("nombrePublicacionAdminEdit", nombrePublicacionAdminEdit);
    formDatos.append("rolPublicacionAdminEdit", rolPublicacionAdminEdit);
    formDatos.append("fechaPublicacionAdminEdit", fechaPublicacionAdminEdit);
    formDatos.append("tituloPublicacionAdminEdit", tituloPublicacionAdminEdit);
    formDatos.append("imgUrlPublicacionAdminEdit", imgPublicacionAdminEdit);
    formDatos.append("descripcionPublicacionAdminEdit", descripcionPublicacionAdminEdit);
    formDatos.append("id", id);

    fetch(`../../app/trigger/publicacionesAdmin.php?action=UPDATE&id=${id}`, {
        method: 'POST',
        body: formDatos
    })
    .then(res => res.json())
    .then(response => {
        console.log(response);
    })
    .catch(err => console.log(err));
}

    


function eliminarPublicacion(element) {
    if (element) {
        const button = element.closest('button');
        const id = button.parentNode.getAttribute('data-id');
        const action = button.getAttribute('data-action');

        if (action === "Eliminar") {
            const contenedor = button.closest('.contenedorPublicaciones');
            contenedor.remove();
            console.log("La publicación se eliminó, su ID es: " + id);

            fetch(`../../app/trigger/publicacionesAdmin.php?action=DELETE&id=${id}`)
                .then(res => res.json())
                .then(console.log)
                .catch(err => console.log(err))
        }
    }
}

consulta();

