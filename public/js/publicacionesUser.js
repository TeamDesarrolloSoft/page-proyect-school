const publicData = document.querySelector(".publicData")

const consultaUser = async () => {
    const datos = await fetch("./app/trigger/publicacionesUser.php?action=GET");
    const result = await datos.json();

    result.forEach(element => {
        const nuevoElemento = document.createElement('div');
        nuevoElemento.classList.add('contenedorPublicaciones');
        nuevoElemento.innerHTML = `
        <div class="contenedorHijoPubli">
            <div class="contCabeceraPubli">
                <div class="imgPubliGa">
                    <div class="img50">
                        <img src="./public/img/person.png" alt="">
                    </div>
                </div>
                <div class="contCabeceraTitle">
                    <div class="contCabeceraDatos">
                        <h3>${element.nombrePublicacionAdmin}</h3> 
                        <span>${element.rolPublicacionAdmin}l</span>
                    </div>
                    <p>${element.fechaPublicacionAdmin}</p>
                </div>
                    
            </div>

            <div class="contPubliImg">
                <div class="contPubliImgSpace">
                    <img src="./app/uploads/${element.imgPublicacionAdmin}">
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
            
        </div>`;

        publicData.appendChild(nuevoElemento);
    });
}

consultaUser();
