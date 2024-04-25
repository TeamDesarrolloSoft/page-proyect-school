const form = document.querySelector("#form");
const contenedorPublicaciones = document.querySelector(".contenedorPublicaciones");

// Cargar publicaciones almacenadas en localStorage al cargar la página
window.addEventListener('DOMContentLoaded', () => {
    mostrarPublicaciones();
    // Verificar si hay publicaciones almacenadas y mostrar u ocultar el botón "Publicar"
    verificarMostrarBotonPublicar();
});

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    enviarDatosAlServidor(formData);
});

function enviarDatosAlServidor(formData) {
    fetch('../../../app/trigger/prueba.php?action=add', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then((res = {}) => {
        // Verifica si la respuesta es un array o un objeto
        if (Array.isArray(res)) {
            // Si es un array, mapea y genera el HTML
            contenedorPublicaciones.innerHTML = res.map(element => {
                return generarHTML(element);
            }).join('');
        } else if (typeof res === 'object') {
            // Si es un objeto, genera el HTML directamente
            contenedorPublicaciones.innerHTML = generarHTML(res);
        } else {
            // Si la respuesta no es ni un array ni un objeto, muestra un mensaje de error
            console.error('La respuesta del servidor no es válida:', res);
        }
        // Guardar las publicaciones en localStorage
        guardarPublicacionesEnLocalStorage();
        // Agregar eventos para eliminar publicaciones después de agregarlas
        agregarEventosEliminar();
        // Verificar si hay publicaciones almacenadas y mostrar u ocultar el botón "Publicar"
        verificarMostrarBotonPublicar();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function generarHTML(data) {
    return `
        <div class="contenedorHijoPubli">
            <!-- Código HTML aquí -->
            <div class="contCabeceraPubli">
                <div class="imgPubliGa">
                    <img src="../../img/person.png" alt="">
                </div>
                <div class="contCabeceraDatos">
                    <h3>${data.nombre}</h3>
                    <span>${data.rolAdmin}</span>
                </div>
                <p>${data.fecha}</p>
            </div>
            <div class="contTextPubli">
                <div class="contextPubliSpace">
                    <h3>${data.tituloPubli}</h3>
                    <br>
                    <p>${data.descripcion}</p>
                </div>
            </div>
            <div class="contFooterPubli">
                <div class="contFooterPubliIconsData">
                    <div class="contFooterPubliIcons">
                        <!-- Agregar un evento de clic para eliminar la publicación -->
                        <ion-icon name="trash-outline" class="eliminar-icon" data-id="${data.id}"></ion-icon>
                        <!-- Agregar un evento de clic para editar la publicación -->
                        <ion-icon name="create-outline" class="editar-icon" data-id="${data.id}"></ion-icon>
                    </div>
                    <div class="contPublicarBotonxd">
                        <button>Publicar</button>
                    </div>
                </div>
            </div>
        </div>`;
}

// Definir la función eliminarPublicacion antes de agregarEventosEliminar
function eliminarPublicacion(idPublicacion) {
    // Lógica para eliminar la publicación con el ID proporcionado
    // Por ejemplo:
    // Eliminar la publicación del DOM
    document.querySelector(`[data-id="${idPublicacion}"]`).closest('.contenedorHijoPubli').remove();
    // Guardar las publicaciones actualizadas en localStorage
    guardarPublicacionesEnLocalStorage();
}

// Agregar eventos para eliminar publicaciones
function agregarEventosEliminar() {
    const botonesEliminar = document.querySelectorAll('.eliminar-icon');
    botonesEliminar.forEach(boton => {
        boton.addEventListener('click', () => {
            const idPublicacion = boton.getAttribute('data-id');
            eliminarPublicacion(idPublicacion); // Llamada a eliminarPublicacion dentro de agregarEventosEliminar
        });
    });
}

// Verificar si hay publicaciones almacenadas y mostrar u ocultar el botón "Publicar"
function verificarMostrarBotonPublicar() {
    const publicacionesGuardadas = localStorage.getItem('publicaciones');
    const botonPublicar = document.querySelector('.contPublicarBotonxd button');
    if (publicacionesGuardadas) {
        botonPublicar.style.display = 'none'; // Oculta el botón si hay publicaciones almacenadas
    } else {
        botonPublicar.style.display = 'block'; // Muestra el botón si no hay publicaciones almacenadas
    }
}

// Guardar las publicaciones en localStorage
function guardarPublicacionesEnLocalStorage() {
    const publicaciones = contenedorPublicaciones.innerHTML;
    localStorage.setItem('publicaciones', publicaciones);
}

// Mostrar las publicaciones almacenadas en localStorage
function mostrarPublicaciones() {
    const publicacionesGuardadas = localStorage.getItem('publicaciones');
    if (publicacionesGuardadas) {
        contenedorPublicaciones.innerHTML = publicacionesGuardadas;
        // Agregar eventos para eliminar las publicaciones recién cargadas
        agregarEventosEliminar();
    }
}
