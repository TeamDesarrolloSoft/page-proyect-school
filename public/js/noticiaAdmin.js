const formNoticiaAdmin = document.querySelector("#formNoticiaAdmin");
const imgNoticiaAdmin = document.querySelector("#imgNoticiaAdmin")
const descripcionNoticia = document.querySelector("#descripcionNoticia")
const fechaNoticiaAdmin = document.querySelector("#fechaNoticiaAdmin")

const public_noticias_data = document.querySelector(".public_noticias_data")

formNoticiaAdmin.addEventListener("submit", (e) => {
    e.preventDefault();
    obteniendoDatosNoticiasAdmin(imgNoticiaAdmin.files[0], descripcionNoticia, fechaNoticiaAdmin)

})
function obteniendoDatosNoticiasAdmin(imgEventoAdmin, descripcionEventosAdmin, fechaEventosAdmin) {
    const formDatosEventos = new FormData()
    formDatosEventos.append("imgNoticiaAdmin", imgEventoAdmin)
    formDatosEventos.append("descripcionNoticiaAdmin", descripcionEventosAdmin.value)
    formDatosEventos.append("FechaNoticiaAdmin", fechaEventosAdmin.value)

    fetch('../../app/trigger/noticiaAdmin.php?action=add', {
        method: 'POST',
        body: formDatosEventos
    })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
}



const consultaNoticiaAdmin = async () => {
    const datos = await fetch("../../app/trigger/noticiaAdmin.php?action=GET");
    const result = await datos.json();

    result.forEach(element => {
        const nuevoElemento = document.createElement('div');
        nuevoElemento.classList.add('contNoticiasDatos');
        nuevoElemento.innerHTML = `
        <div class="contNoticiasHijo">
            <div class="contImgNoticas">
                <img src="../../app/uploads/${element.imgNoticiaAdmin}">
            </div>

            <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
                <p>${element.FechaNoticiaAdmin}</p>
                <p>${element.descripcionNoticiaAdmin}</p>
            </div>
            <div class="contFooterPubli">
                <div class="contFooterPubliIconsData">
                    <div class="contFooterPubliIcons" data-id=${element.id}>
                        <button class="eliminarBtn" data-action="Eliminar" style="border: none;">Eliminar</button>
                        <button class="editarBtn" data-action="Editar" style="border: none;">Editar</button>
                    </div>
                </div>
            </div>
        </div>
        `;
        public_noticias_data.appendChild(nuevoElemento);

        const contenedorEventos = nuevoElemento.querySelector(".contFooterPubliIcons");
        contenedorEventos.addEventListener("click", (e) => {
            eliminarNoticiaAdmin(e.target);
        });
    });
}


function eliminarNoticiaAdmin(element) {
    if (element) {
        const button = element.closest('button');
        const id = button.parentNode.getAttribute('data-id');
        const action = button.getAttribute('data-action');

        if (action === "Eliminar") {
            const contenedor = button.closest('.contNoticiasDatos');
            contenedor.remove();
            console.log("La noticia admin se eliminó, su ID es: " + id);

            fetch(`../../app/trigger/noticiaAdmin.php?action=DELETE&id=${id}`)
                .then(res => res.json())
                .then(console.log)
                .catch(err => console.log(err))
        }
    }
}

consultaNoticiaAdmin();