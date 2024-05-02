const public_eventos_data = document.querySelector(".public_noticias_data")//

const mostrandoNoticiasUser = async () => {
    const datos = await fetch("./app/trigger/noticiaAdmin.php?action=GET");
    const result = await datos.json();

    result.forEach(element => {
        console.log(element);

        const nuevoElemento = document.createElement('div');
        nuevoElemento.classList.add('contNoticiasDatos');
    
        const tarjeta = document.createElement('div');
        tarjeta.classList.add('contNoticiasHijo');
        tarjeta.innerHTML = `
          <div class="contImgNoticas">
            <img src="./app/uploads/${element.imgEventoAdmin}">
          </div>
          <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
            <p>${element.fechaEventosAdmin}</p>
            <p>${element.descripcionEventosAdmin}</p>
          </div>
        `;
        nuevoElemento.appendChild(tarjeta);
        public_eventos_data.appendChild(nuevoElemento);
    });
}

mostrandoNoticiasUser();