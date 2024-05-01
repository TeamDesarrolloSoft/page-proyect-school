const formEventosAdmin = document.querySelector("#formEventosAdmin");
const imgEventosAdmin = document.querySelector("#imgEventoAdmin")
const descripcionEventosAdmin = document.querySelector("#descripcionEventosAdmin")
const fechaEventosAdmin = document.querySelector("#fechaEventosAdmin")


formEventosAdmin.addEventListener("submit", (e)=>{
    e.preventDefault();
    obteniendoDatosEventosAdmin(imgEventosAdmin.files[0],descripcionEventosAdmin,fechaEventosAdmin)
    





})
   function obteniendoDatosEventosAdmin(imgEventoAdmin,descripcionEventosAdmin,fechaEventosAdmin){
    const formDatosEventos= new FormData()
    formDatosEventos.append("imgEventoAdmin" ,imgEventoAdmin)
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