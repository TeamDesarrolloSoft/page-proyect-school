const formUser = document.querySelector("#formUser");
const userNameUser = document.querySelector("#userNameUser")
const passwordUser= document.querySelector("#passwordUser")

formUser.addEventListener("submit", (e) =>{
    e.preventDefault()
    obteniendoDatosYEnvioAdmin(userNameUser,passwordUser)

})

function obteniendoDatosYEnvioAdmin(user, pass){
    const formDatos = new FormData();
    formDatos.append("usuario", user.value)
    formDatos.append("password", pass.value)

    fetch("../../app/trigger/login.php?action=verifyUser",{
        method: "POST",
        body: formDatos
    })
    .then(res => res.json())
    .then(response =>{
        if(response.status == true){
            alert("Valores correctos, redireccionando a la seccion de usuarios...");
            window.location.href = "publicacionesUser.php";
        }else{
            alert("Los valores no son correctos, por ende no es usuario")
        }
    })
    .catch(err => {
        console.log(err);
        alert("Ocurrió un error en la solicitud. Inténtalo de nuevo más tarde");
    });
}

