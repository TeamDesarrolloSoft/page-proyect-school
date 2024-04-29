const formAdmin = document.querySelector("#formAdmin");
const userAdmin = document.querySelector("#userAdmin")
const passwordAdmin = document.querySelector("#passwordAdmin")

formAdmin.addEventListener("submit", (e) =>{
    e.preventDefault()
    obteniendoDatosYEnvioAdmin(userAdmin,passwordAdmin)

})

function obteniendoDatosYEnvioAdmin(user, pass){
    const formDatos = new FormData();
    formDatos.append("usuario", user.value)
    formDatos.append("password", pass.value)

    fetch("./app/trigger/login.php?action=verifyAdmin",{
        method: "POST",
        body: formDatos
    })
    .then(res => res.json())
    .then(response =>{
        if(response.status == true){
            alert("Valores correctos, redireccionando a la seccion de admins...");
            window.location.href = "publicacionesAdmin.php";
        }else{
            alert("Los valores no son correctos, por ende no es admin")
        }
    })
    .catch(err => {
        console.log(err);
        alert("Ocurrió un error en la solicitud. Inténtalo de nuevo más tarde");
    });
}

