const formEventosAdmin = document.querySelector("#formEventosAdmin");
const imgEventosAdmin = document.querySelector("#imgEventoAdmin")
const descripcionEventosAdmin = document.querySelector("#descripcionEventosAdmin")
const fechaEventosAdmin = document.querySelector("#fechaEventosAdmin")

const public_eventos_data = document.querySelector(".public_eventos_data")

formEventosAdmin.addEventListener("submit", (e) => {
    e.preventDefault();
    obteniendoDatosEventosAdmin(imgEventosAdmin.files[0], descripcionEventosAdmin, fechaEventosAdmin)

})
function obteniendoDatosEventosAdmin(imgEventoAdmin, descripcionEventosAdmin, fechaEventosAdmin) {
    const formDatosEventos = new FormData()
    formDatosEventos.append("imgEventoAdmin", imgEventoAdmin)
    formDatosEventos.append("descripcionEventosAdmin", descripcionEventosAdmin.value)
    formDatosEventos.append("fechaEventosAdmin", fechaEventosAdmin.value)

    fetch('../../app/trigger/eventosAdmin.php?action=add', {
        method: 'POST',
        body: formDatosEventos
    })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))


}
const consulta = async () => {
    const datos = await fetch("../../app/trigger/eventosAdmin.php?action=GET");
    const result = await datos.json();

    result.forEach(element => {
        const nuevoElemento = document.createElement('div');
        nuevoElemento.classList.add('contNoticiasDatos');
        nuevoElemento.innerHTML = `
        <div class="contNoticiasHijo">
            <div class="contImgNoticas">
                <img src="../../app/uploads/${element.imgEventoAdmin}">
            </div>

            <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
                <p>${element.fechaEventosAdmin}</p>
                <p>${element.descripcionEventosAdmin}</p>
            </div>
            <div class="contFooterPubli">
                <div class="contFooterPubliIconsData">
                    <div class="contFooterPubliIcons" data-id=${element.id}>
                        <button class="eliminarBtn" data-action="Eliminar" style="border: none;">Eliminar</button>
                        <button class="editarBtn" data-action="Editar" style="border: none;">Editar</button>
                    </div>
                </div>
            </div>
        </div> `;

        public_eventos_data.appendChild(nuevoElemento);

        const contenedorEventos = nuevoElemento.querySelector(".contFooterPubliIcons");
        contenedorEventos.addEventListener("click", (e) => {
            eliminarEvento(e.target);
        });
    });
}
function eliminarEvento(element) {
    if (element) {
        const button = element.closest('button');
        const id = button.parentNode.getAttribute('data-id');
        const action = button.getAttribute('data-action');

        if (action === "Eliminar") {
            const contenedor = button.closest('.contNoticiasDatos');
            contenedor.remove();
            console.log("El evento se eliminó, su ID es: " + id);

            fetch(`../../app/trigger/eventosAdmin.php?action=DELETE&id=${id}`)
                .then(res => res.json())
                .then(console.log)
                .catch(err => console.log(err))
        }
    }
}

consulta();