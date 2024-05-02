const public_eventos_data = document.querySelector(".public_eventos_data")//

const User2 = async () => {
    const datos = await fetch("./app/trigger/eventosUser.php?action=GET");
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


        
        //const nuevoElemento = document.createElement('div');
        //nuevoElemento.classList.add('contNoticiasDatos');
        //nuevoElemento.innerHTML = `
        //<div class="contNoticiasHijo" style="margin-top: 40px;">
        //       <div class="contImgNoticas">
        //            <img src="./app/uploads/${element.imgEventoAdmin}">
        //        </div>
//
        //       <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
        //          <p>${element.fechaEventosAdmin}</p>
        //            <p>${element.descripcionEventosAdmin}</p>
        //        </div>
        //</div>`;
//
        //public_eventos_data.appendChild(nuevoElemento);
        nuevoElemento.appendChild(tarjeta);
        public_eventos_data.appendChild(nuevoElemento);
    });
}

User2();
//fetch ("./app/trigger/eventosUser.php?action=GET").then(res=>res.json()).then(console.log).catch(err=>console.log(err));